<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Sale\PriceMaths,
	Bitrix\Main\Loader,
	Bitrix\Sale;

CBitrixComponent::includeComponentClass("bitrix:sale.basket.basket");

class CBitrixBasketBasketSmallMailComponent extends CBitrixBasketComponent
{
	protected $showDelay = "N";
	protected $userId;
	protected $fUserId;

	public function executeComponent()
	{
		$this->showDelay = $this->arParams["SHOW_DELAY"];
		$this->userId = $this->arParams["USER_ID"];
		$this->fUserId = $this->arParams["FUSER_ID"];

		return parent::executeComponent();
	}

	protected function getSaleFormatCurrency($price, $currency)
	{
		return CCurrencyLang::CurrencyFormat($price, $currency,true);
	}

	public function getBasketItems()
	{
		if (self::$catalogIncluded === null)
			self::$catalogIncluded = Loader::includeModule('catalog');
		self::$iblockIncluded = self::$catalogIncluded;

		$bShowReady = false;
		$bShowDelay = false;
		$bShowSubscribe = false;
		$bShowNotAvail = false;
		$allSum = 0;
		$allWeight = 0;
		$allCurrency = Sale\Internals\SiteCurrencyTable::getSiteCurrency($this->getSiteId());
		$allVATSum = 0;
		$arParents = array();

		$arResult["ITEMS"]["AnDelCanBuy"] = array();
		$arResult["ITEMS"]["DelDelCanBuy"] = array();
		$arResult["ITEMS"]["nAnCanBuy"] = array();
		$arResult["ITEMS"]["ProdSubscribe"] = array();
		$DISCOUNT_PRICE_ALL = 0;

		// BASKET PRODUCTS (including measures, ratio, iblock properties data)

		$arImgFields = array("PREVIEW_PICTURE", "DETAIL_PICTURE");
		$arBasketItems = array();
		$basketKey = 0;
		$basketIds = array();
		$arSku2Parent = array();
		$arSetParentWeight = array();
		$arElementId = array();
		$basketItemsFilter = array(
			"USER_ID" => $this->userId,
			"ORDER_ID" => "NULL",
			"LID" => $this->getSiteId()
		);
		if($this->showDelay != 'Y')
		{
			$basketItemsFilter['DELAY'] = 'N';
		}
		$dbItems = CSaleBasket::GetList(
			array("ID" => "ASC"),
			$basketItemsFilter,
			false,
			false,
			array(
				"ID", "NAME", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "PRODUCT_PRICE_ID", "QUANTITY", "DELAY", "CAN_BUY",
				"PRICE", "WEIGHT", "DETAIL_PAGE_URL", "NOTES", "CURRENCY", "VAT_RATE", "CATALOG_XML_ID",
				"PRODUCT_XML_ID", "SUBSCRIBE", "DISCOUNT_PRICE", "PRODUCT_PROVIDER_CLASS", "TYPE", "SET_PARENT_ID", 'PRODUCT_PRICE_ID',
				'CUSTOM_PRICE', 'BASE_PRICE', 'PRICE_TYPE_ID'
			)
		);
		while ($arItem = $dbItems->GetNext())
		{
			$arItem['PROPS'] = array();
			$arBasketItems[$basketKey] = $arItem;
			$basketIds[$arItem['ID']] = &$arBasketItems[$basketKey];
			$basketKey++;

			if (CSaleBasketHelper::isSetItem($arItem))
				continue;

			$arElementId[] = $arItem["PRODUCT_ID"];
		}

		if (!empty($arElementId) && self::$catalogIncluded)
		{
			$productList = CCatalogSku::getProductList($arElementId);
			if (!empty($productList))
			{
				foreach ($productList as $offerId => $offerInfo)
				{
					$offerInfo['PRODUCT_ID'] = $offerInfo['ID'];
					$arElementId[] = $offerInfo['ID'];
					$arSku2Parent[$offerId] = $offerInfo['ID'];
					$arParents[$offerId] = $offerInfo;
				}
				unset($offerInfo, $offerId);
			}
			unset($productList);

			// get measures, ratio, sku props data and available quantity
			$arBasketItems = getMeasures($arBasketItems);
			$arBasketItems = getRatio($arBasketItems);
			$arBasketItems = $this->getAvailableQuantity($arBasketItems);

			$propsIterator = CSaleBasket::GetPropsList(
				array('BASKET_ID' => 'ASC', 'SORT' => 'ASC', 'ID' => 'ASC'),
				array('BASKET_ID' => array_keys($basketIds))
			);
			while ($property = $propsIterator->GetNext())
			{
				$property['CODE'] = (string)$property['CODE'];
				if ($property['CODE'] == 'CATALOG.XML_ID' || $property['CODE'] == 'PRODUCT.XML_ID' || $property['CODE'] == 'SUM_OF_CHARGE')
					continue;
				if (!isset($basketIds[$property['BASKET_ID']]))
					continue;
				$basketIds[$property['BASKET_ID']]['PROPS'][] = $property;
			}
			unset($property, $propsIterator, $basketIds);
		}

		// get product properties data
		$arProductData = getProductProps($arElementId, array_merge(array("ID"), $arImgFields, $this->arCustomSelectFields));

		foreach ($arBasketItems as &$arItem)
		{
			$quantityIsFloat = false;
			if (number_format(doubleval($arItem['QUANTITY']), 2, '.', '') != intval($arItem['QUANTITY']))
			{
				$quantityIsFloat = true;
			}

			$arItem["QUANTITY"] = ($quantityIsFloat === false && $this->quantityFloat != "Y") ? intval($arItem['QUANTITY']) : (number_format(doubleval($arItem['QUANTITY']), 4, '.', '') * 1);
			$arItem["QUANTITY_FORMATED"] = Sale\BasketItem::formatQuantity($arItem["QUANTITY"]) . " " . htmlspecialcharsbx($arItem["MEASURE_TEXT"]);
			$arItem["PRICE_VAT_VALUE"] = (($arItem["PRICE"] * $arItem["QUANTITY"] / ($arItem["VAT_RATE"] +1)) * $arItem["VAT_RATE"]) / $arItem["QUANTITY"];
			//$arItem["PRICE_VAT_VALUE"] = (($arItem["PRICE"] / ($arItem["VAT_RATE"] +1)) * $arItem["VAT_RATE"]);
			$arItem["PRICE_FORMATED"] = CCurrencyLang::CurrencyFormat($arItem["PRICE"], $arItem["CURRENCY"], true);

			$arItem["WEIGHT"] = doubleval($arItem["WEIGHT"]);
			$arItem["WEIGHT_FORMATED"] = roundEx(doubleval($arItem["WEIGHT"] / $this->weightKoef), SALE_WEIGHT_PRECISION)." ".$this->weightUnit;

			if (CSaleBasketHelper::isSetItem($arItem))
				$arSetParentWeight[$arItem["SET_PARENT_ID"]] += $arItem["WEIGHT"] * $arItem["QUANTITY"];

			if (isset($arProductData[$arItem['PRODUCT_ID']]) && is_array($arProductData[$arItem['PRODUCT_ID']]))
			{
				foreach ($arProductData[$arItem["PRODUCT_ID"]] as $key => $value)
				{
					if ($value === null)
						continue;
					if (strpos($key, "PROPERTY_") !== false || in_array($key, $arImgFields))
						$arItem[$key] = $value;
				}
			}

			if (array_key_exists($arItem["PRODUCT_ID"], $arSku2Parent)) // if sku element doesn't have value of some property - we'll show parent element value instead
			{
				$replaceImageFields = true;
				$arFieldsToFill = array_merge($this->arCustomSelectFields, $arImgFields); // fields to be filled with parents' values if empty

				$parentId = $arSku2Parent[$arItem["PRODUCT_ID"]];

				foreach($arImgFields as $imageFieldName)
				{
					if (!empty($arProductData[$arItem["PRODUCT_ID"]][$imageFieldName]))
					{
						$replaceImageFields = false;
						$arItem[$imageFieldName] = $arProductData[$arItem["PRODUCT_ID"]][$imageFieldName];
					}
				}

				foreach ($arFieldsToFill as $field)
				{
					if (in_array($field, $arImgFields))
					{
						$fieldVal = $field;
					}
					else
					{
						$fieldVal = (substr($field, -6) === '_VALUE' ? $field : $field.'_VALUE');
					}

					if ((!isset($arItem[$fieldVal]) || (isset($arItem[$fieldVal]) && strlen($arItem[$fieldVal]) == 0))
						&& (isset($arProductData[$parentId][$fieldVal]) && !empty($arProductData[$parentId][$fieldVal]))) // can be array or string
					{
						if (in_array($field, $arImgFields) && !$replaceImageFields)
							continue;

						$arItem[$fieldVal] = $arProductData[$parentId][$fieldVal];
					}
				}
			}

			foreach ($arItem as $key => $value) // format properties' values
			{
				if ((strpos($key, "PROPERTY_", 0) === 0) && (strrpos($key, "_VALUE") == strlen($key) - 6))
				{
					$code = ToUpper(str_replace(array("PROPERTY_", "_VALUE"), "", $key));
					$propData = $this->arIblockProps[$code];
					$arItem[$key] = CSaleHelper::getIblockPropInfo($value, $propData);
				}
			}

			$arItem["PREVIEW_PICTURE_SRC"] = "";
			if (isset($arItem["PREVIEW_PICTURE"]) && intval($arItem["PREVIEW_PICTURE"]) > 0)
			{
				$arImage = CFile::GetFileArray($arItem["PREVIEW_PICTURE"]);
				if ($arImage)
				{
					$arFileTmp = CFile::ResizeImageGet(
						$arImage,
						array("width" => "110", "height" =>"110"),
						BX_RESIZE_IMAGE_PROPORTIONAL,
						true
					);

					$arItem["PREVIEW_PICTURE_SRC"] = $arFileTmp["src"];
				}
			}

			$arItem["DETAIL_PICTURE_SRC"] = "";
			if (isset($arItem["DETAIL_PICTURE"]) && intval($arItem["DETAIL_PICTURE"]) > 0)
			{
				$arImage = CFile::GetFileArray($arItem["DETAIL_PICTURE"]);
				if ($arImage)
				{
					$arFileTmp = CFile::ResizeImageGet(
						$arImage,
						array("width" => "110", "height" =>"110"),
						BX_RESIZE_IMAGE_PROPORTIONAL,
						true
					);

					$arItem["DETAIL_PICTURE_SRC"] = $arFileTmp["src"];
				}
			}
		}
		unset($arItem);

		// get sku props data
		if (!empty($arBasketItems) && self::$catalogIncluded && isset($this->offersProps) && !empty($this->offersProps))
		{
			$arBasketItems = $this->getSkuPropsData($arBasketItems, $arParents, $this->offersProps);
		}

		// count weight for set parent products
		foreach ($arBasketItems as &$arItem)
		{
			if (CSaleBasketHelper::isSetParent($arItem))
			{
				$arItem["WEIGHT"] = $arSetParentWeight[$arItem["ID"]] / $arItem["QUANTITY"];
				$arItem["WEIGHT_FORMATED"] = roundEx(doubleval($arItem["WEIGHT"] / $this->weightKoef), SALE_WEIGHT_PRECISION)." ".$this->weightUnit;
			}
		}

		if (isset($arItem))
			unset($arItem);

		// fill item arrays for old templates
		foreach ($arBasketItems as &$arItem)
		{
			if (CSaleBasketHelper::isSetItem($arItem))
				continue;

			$arItem['DISCOUNT_PRICE'] = (float)$arItem['DISCOUNT_PRICE'];
			$arItem['PRICE'] = (float)$arItem['PRICE'];
			$arItem['DISCOUNT_PRICE_PERCENT'] = 0;
			$arItem['DISCOUNT_PRICE_PERCENT_FORMATED'] = '';
			$arItem['FULL_PRICE'] = $arItem['PRICE'];
			if ($arItem['DISCOUNT_PRICE'] > 0)
			{
				if (($arItem['DISCOUNT_PRICE'] + $arItem['PRICE']) > 0)
				{
					$arItem['DISCOUNT_PRICE_PERCENT'] = ($arItem['DISCOUNT_PRICE']*100)/($arItem['DISCOUNT_PRICE'] + $arItem['PRICE']);
					$arItem['FULL_PRICE'] = $arItem["PRICE"] + $arItem["DISCOUNT_PRICE"];
				}
			}
			$arItem['FULL_PRICE_FORMATED'] = CCurrencyLang::CurrencyFormat($arItem['FULL_PRICE'], $arItem['CURRENCY'], true);

			if ($arItem["CAN_BUY"] == "Y" && $arItem["DELAY"] == "N")
			{
				$allSum += ($arItem["PRICE"] * $arItem["QUANTITY"]);
				$allWeight += ($arItem["WEIGHT"] * $arItem["QUANTITY"]);
				$allVATSum += roundEx($arItem["PRICE_VAT_VALUE"] * $arItem["QUANTITY"], SALE_VALUE_PRECISION);

				$bShowReady = true;
				if ($arItem["DISCOUNT_PRICE"] > 0)
				{
					$DISCOUNT_PRICE_ALL += $arItem["DISCOUNT_PRICE"] * $arItem["QUANTITY"];
					$arItem["DISCOUNT_FORMATED"] = CCurrencyLang::CurrencyFormat($arItem["DISCOUNT_PRICE"], $arItem["CURRENCY"], true);
				}

				$arResult["ITEMS"]["AnDelCanBuy"][] = $arItem;
			}
			elseif ($arItem["CAN_BUY"] == "Y" && $arItem["DELAY"] == "Y")
			{
				$bShowDelay = true;
				$arItem["SUM"] = CCurrencyLang::CurrencyFormat($arItem["PRICE"] * $arItem["QUANTITY"], $arItem["CURRENCY"], true);
				$arItem['DISCOUNT_PRICE_PERCENT_FORMATED'] = CSaleBasketHelper::formatQuantity($arItem['DISCOUNT_PRICE_PERCENT']).'%';
				$arItem["DISCOUNT_FORMATED"] = CCurrencyLang::CurrencyFormat($arItem["DISCOUNT_PRICE"], $arItem["CURRENCY"], true);
				$arResult["ITEMS"]["DelDelCanBuy"][] = $arItem;
			}
			elseif ($arItem["CAN_BUY"] == "N" && $arItem["SUBSCRIBE"] == "Y")
			{
				$bShowSubscribe = true;

				$arResult["ITEMS"]["ProdSubscribe"][] = $arItem;
			}
			else
			{
				$bShowNotAvail = true;
				$arItem["NOT_AVAILABLE"] = true;

				$arResult["ITEMS"]["nAnCanBuy"][] = $arItem;
			}
		}
		unset($arItem);

		$arResult["ShowReady"] = ($bShowReady ? "Y" : "N" );
		$arResult["ShowDelay"] = ($this->arParams['SHOW_DELAY'] === 'Y' && $bShowDelay ? "Y" : "N" );
		$arResult["ShowNotAvail"] = ($this->arParams['SHOW_NOTAVAIL'] === 'Y' && $bShowNotAvail ? "Y" : "N" );
		$arResult["ShowSubscribe"] = ($this->arParams['SHOW_SUBSCRIBE'] === 'Y' && $bShowSubscribe ? "Y" : "N" );

		$arOrder = array(
			'SITE_ID' => $this->getSiteId(),
			'USER_ID' => $this->userId,
			'ORDER_PRICE' => $allSum,
			'ORDER_WEIGHT' => $allWeight,
			'BASKET_ITEMS' => $arResult["ITEMS"]["AnDelCanBuy"]
		);

		$arOptions = array();
		$arErrors = array();

		CSaleDiscount::DoProcessOrder($arOrder, $arOptions, $arErrors);

		if (isset($arOrder['ORDER_PRICE']))
		{
			$roundOrderFields = CSaleOrder::getRoundFields();
			foreach ($arOrder as $fieldName => $fieldValue)
			{
				if (in_array($fieldName, $roundOrderFields))
				{
					$arOrder[$fieldName] = PriceMaths::roundPrecision($arOrder[ $fieldName ]);
				}
			}
		}

		if (!empty($arOrder['BASKET_ITEMS']) && is_array($arOrder['BASKET_ITEMS']))
		{
			$arOrder['ORDER_PRICE'] = 0;
			$roundBasketFields = CSaleBasket::getRoundFields();
			foreach ($arOrder['BASKET_ITEMS'] as &$basketItem)
			{
				foreach($basketItem as $fieldName => $fieldValue)
				{
					if (in_array($fieldName, $roundBasketFields))
					{
						if (isset($basketItem[$fieldName]))
						{
							$basketItem[$fieldName] = PriceMaths::roundPrecision($basketItem[ $fieldName ]);
						}
					}
				}

				$arOrder['ORDER_PRICE'] += $basketItem['PRICE'] * $basketItem['QUANTITY'];
			}

			$arOrder['ORDER_PRICE'] = PriceMaths::roundPrecision($arOrder['ORDER_PRICE']);
		}

		$allSum = 0;
		$allWeight = 0;
		$allVATSum = 0;

		$DISCOUNT_PRICE_ALL = 0;

		foreach ($arOrder["BASKET_ITEMS"] as &$arOneItem)
		{
			$customPrice = isset($arOneItem['CUSTOM_PRICE']) && $arOneItem['CUSTOM_PRICE'] == 'Y';
			$allWeight += ($arOneItem["WEIGHT"] * $arOneItem["QUANTITY"]);
			$allSum += ($arOneItem["PRICE"] * $arOneItem["QUANTITY"]);

			if (array_key_exists('VAT_VALUE', $arOneItem))
				$arOneItem["PRICE_VAT_VALUE"] = $arOneItem["VAT_VALUE"];
			$allVATSum += roundEx($arOneItem["PRICE_VAT_VALUE"] * $arOneItem["QUANTITY"], SALE_VALUE_PRECISION);
			$arOneItem["PRICE_FORMATED"] = CCurrencyLang::CurrencyFormat($arOneItem["PRICE"], $arOneItem["CURRENCY"], true);

			$arOneItem["SUM"] = CCurrencyLang::CurrencyFormat($arOneItem["PRICE"] * $arOneItem["QUANTITY"], $arOneItem["CURRENCY"], true);

			if ($arOneItem['DISCOUNTS_APPLY'] || $customPrice)
			{
				$arOneItem["FULL_PRICE"] = PriceMaths::roundByFormatCurrency($arOneItem["BASE_PRICE"], $arOneItem["CURRENCY"]);
				$arOneItem["FULL_PRICE_FORMATED"] = CCurrencyLang::CurrencyFormat($arOneItem["FULL_PRICE"], $arOneItem["CURRENCY"], true);
				$DISCOUNT_PRICE_ALL += $arOneItem["DISCOUNT_PRICE"] * $arOneItem["QUANTITY"];
			}
			else
			{
				$arOneItem["FULL_PRICE"] = PriceMaths::roundByFormatCurrency($arOneItem["PRICE"], $arOneItem["CURRENCY"]);
				$arOneItem["FULL_PRICE_FORMATED"] = CCurrencyLang::CurrencyFormat($arOneItem["FULL_PRICE"], $arOneItem["CURRENCY"], true);
			}

			if (isset($arOneItem['SIMPLE_DISCOUNT_PRICE_PERCENT']))
			{
				$arOneItem["DISCOUNT_PRICE_PERCENT"] = $arOneItem['SIMPLE_DISCOUNT_PRICE_PERCENT'];
			}
			else
			{
				if (($customPrice || $arOneItem['DISCOUNTS_APPLY']) && $arOneItem["BASE_PRICE"] > 0 && $arOneItem["DISCOUNT_PRICE"] > 0)
				{
					$arOneItem["DISCOUNT_PRICE_PERCENT"] = PriceMaths::roundByFormatCurrency(
						($arOneItem["DISCOUNT_PRICE"] * 100) / $arOneItem["BASE_PRICE"],
						$arOneItem["CURRENCY"]
					);
				}
				else
				{
					$arOneItem["DISCOUNT_PRICE_PERCENT"] = 0;
				}
			}
			$arOneItem["DISCOUNT_PRICE_PERCENT_FORMATED"] = CSaleBasketHelper::formatQuantity($arOneItem["DISCOUNT_PRICE_PERCENT"])."%";
		}
		unset($arOneItem);

		$arResult["ITEMS"]["AnDelCanBuy"] = $arOrder["BASKET_ITEMS"];

		// fill grid data (for new templates with custom columns)
		foreach ($arResult["ITEMS"] as $type => $arItems)
		{
			foreach ($arItems as $k => $arItem)
			{
				$arResult["GRID"]["ROWS"][$arItem["ID"]] = $arItem;
			}
		}

		$arResult["allSum"] = PriceMaths::roundByFormatCurrency($allSum, $allCurrency);
		$arResult["allWeight"] = $allWeight;
		$arResult["allWeight_FORMATED"] = roundEx(doubleval($allWeight/$this->weightKoef), SALE_WEIGHT_PRECISION)." ".$this->weightUnit;
		$arResult["allSum_FORMATED"] = CCurrencyLang::CurrencyFormat($allSum, $allCurrency, true);
		$arResult["DISCOUNT_PRICE_FORMATED"] = CCurrencyLang::CurrencyFormat($arResult["DISCOUNT_PRICE"], $allCurrency, true);
		$arResult["PRICE_WITHOUT_DISCOUNT"] = CCurrencyLang::CurrencyFormat($allSum + $DISCOUNT_PRICE_ALL, $allCurrency, true);

		if ($this->priceVatShowValue == 'Y')
		{
			$arResult["allVATSum"] = PriceMaths::roundByFormatCurrency($allVATSum, $allCurrency);
			$arResult["allVATSum_FORMATED"] = CCurrencyLang::CurrencyFormat($allVATSum, $allCurrency, true);
			$arResult["allSum_wVAT_FORMATED"] = CCurrencyLang::CurrencyFormat(doubleval($arResult["allSum"]-$allVATSum), $allCurrency, true);
		}

		if (!empty($arCoupons))
			$arResult["COUPON"] = htmlspecialcharsbx($arCoupons[0]);
		if(count($arBasketItems)<=0)
			$arResult["ERROR_MESSAGE"] = GetMessage("SALE_EMPTY_BASKET");

		$arResult["DISCOUNT_PRICE_ALL"] = $DISCOUNT_PRICE_ALL;
		$arResult["APPLIED_DISCOUNT_LIST"] = $arOrder['DISCOUNT_LIST'];
		$arResult["FULL_DISCOUNT_LIST"] = $arOrder['FULL_DISCOUNT_LIST'];
		$arResult["DISCOUNT_PRICE_ALL_FORMATED"] = CCurrencyLang::CurrencyFormat($DISCOUNT_PRICE_ALL, $allCurrency, true);

		return $arResult;
	}
}

?>