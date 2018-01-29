<?php
namespace Bitrix\Catalog\Product;

use Bitrix\Main,
	Bitrix\Iblock,
	Bitrix\Sale;

/**
 * Class Basket
 * @package Bitrix\Catalog\Product
 */
class Basket
{
	private static $statisticIncluded = null;

	/**
	 * @param Sale\BasketBase $basket
	 * @param array $fields
	 * @param array $context
	 *
	 * @return Main\Result
	 * @throws Main\ArgumentNullException
	 * @throws Main\ObjectNotFoundException
	 */
	public static function addProductToBasket(Sale\BasketBase $basket, array $fields, array $context)
	{
		return static::addToBasket($basket, $fields, $context);
	}

	/**
	 * @param Sale\BasketBase $basket
	 * @param array $fields
	 * @param array $context
	 *
	 * @return Main\Result
	 * @throws Main\ArgumentNullException
	 */
	public static function addProductToBasketWithPermissions(Sale\BasketBase $basket, array $fields, array $context)
	{
		$options = array(
			'CHECK_PERMISSIONS' => 'Y'
		);
		return static::addToBasket($basket, $fields, $context, $options);
	}

	/**
	 * @param Sale\BasketBase $basket
	 * @param array $fields
	 * @param array $context
	 * @param array $options
	 *
	 * @return Main\Result
	 * @throws Main\ArgumentNullException
	 * @throws Main\ObjectNotFoundException
	 */
	private static function addToBasket(Sale\BasketBase $basket, array $fields, array $context, array $options = array())
	{
		$result = new Main\Result();

		if (empty($fields['PRODUCT_ID']) || intval($fields['PRODUCT_ID']) <= 0)
		{
			throw new Main\ArgumentNullException('PRODUCT_ID');
		}

		$quantity = empty($fields['QUANTITY'])? 1 : floatval($fields['QUANTITY']);

		$productId = intval($fields['PRODUCT_ID']);
		unset($fields['PRODUCT_ID']);

		if (isset($fields['SUBSCRIBE']) && $fields['SUBSCRIBE'] == 'Y')
		{
			$basketId = SubscribeProduct($productId, $fields, $fields);
			if ($basketId == 0)
			{
				global $APPLICATION;
				$oldException = $APPLICATION->GetException();
				if (!empty($oldException))
				{
					$result->addError( new Main\Error($oldException->GetString(), $oldException->GetID()) );
				}
			}
			return $result;
		}

		if ($productId <= 0)
		{
			$result->addError(new Sale\ResultError(Main\Localization\Loc::getMessage('CATALOG_ERR_EMPTY_PRODUCT_ID'), "EMPTY_PRODUCT_ID"));
			return $result;
		}

		if ($quantity <= 0)
		{
			$quantity = 1;
		}

		if (!Main\Loader::includeModule("sale"))
		{
			$result->addError(new Main\Error(Main\Localization\Loc::getMessage('CATALOG_ERR_NO_SALE_MODULE'), "NO_SALE_MODULE"));
			return $result;
		}

		$validBuyer = static::checkCurrentUser();
		if (!$validBuyer->isSuccess())
		{
			$result->addErrors($validBuyer->getErrors());
			return $result;
		}
		unset($validBuyer);

		$module = 'catalog';
		$productData = array();

		$presets = array(
			'PRODUCT_ID' => $productId
		);

		if (array_key_exists('MODULE', $fields))
		{
			$module = $fields['MODULE'];
			unset($fields['MODULE']);
		}

		if (isset($fields['PRODUCT_PROVIDER_CLASS']))
		{
			$presets['PRODUCT_PROVIDER_CLASS'] = $fields['PRODUCT_PROVIDER_CLASS'];
		}
		unset($fields['PRODUCT_PROVIDER_CLASS']);

		if (isset($fields['CALLBACK_FUNC']))
		{
			$presets['CALLBACK_FUNC'] = $fields['CALLBACK_FUNC'];
		}
		unset($fields['CALLBACK_FUNC']);

		if (isset($fields['PAY_CALLBACK_FUNC']))
		{
			$presets['PAY_CALLBACK_FUNC'] = $fields['PAY_CALLBACK_FUNC'];
		}
		unset($fields['PAY_CALLBACK_FUNC']);

		$propertyList = array();
		if (!empty($fields['PROPS']) && is_array($fields['PROPS']))
		{
			$propertyList = $fields['PROPS'];
			unset($fields['PROPS']);
		}

		if ($module == 'catalog')
		{
			$elementFilter = array(
				"ID" => $productId,
				"ACTIVE" => "Y",
				"ACTIVE_DATE" => "Y",
				"CHECK_PERMISSIONS" => "N",
			);

			if (!empty($options['CHECK_PERMISSIONS']) && $options['CHECK_PERMISSIONS'] == "Y")
			{
				if (isset($context['USER_ID']) && intval($context['USER_ID']) > 0 && $context['USER_ID'] != \CSaleUser::GetAnonymousUserID())
				{
					$elementFilter['CHECK_PERMISSIONS'] = 'Y';
					$elementFilter['PERMISSIONS_BY'] = $context['USER_ID'];
					$elementFilter['MIN_PERMISSION'] = 'R';
				}
			}

			$resItems = \CIBlockElement::GetList(
				array(),
				$elementFilter,
				false,
				false,
				array(
					"ID",
					"IBLOCK_ID",
					"XML_ID",
					"NAME",
					"DETAIL_PAGE_URL",
				)
			);
			if (!($productData = $resItems->GetNext()))
			{
				$result->addError(new Main\Error(Main\Localization\Loc::getMessage('CATALOG_ERR_NO_IBLOCK_ELEMENT'), "NO_IBLOCK_ELEMENT"));
				return $result;
			}
		}

		if (!isset($fields['CATALOG_XML_ID']) || !static::isPropertyExists('CATALOG.XML_ID', $propertyList))
		{
			$iBlockXmlID = (string)\CIBlock::GetArrayByID($productData['IBLOCK_ID'], 'XML_ID');
			if ($iBlockXmlID !== '')
			{
				$propertyList[] = array(
					'NAME' => 'Catalog XML_ID',
					'CODE' => 'CATALOG.XML_ID',
					'VALUE' => $iBlockXmlID
				);
			}
			$fields['CATALOG_XML_ID'] = $iBlockXmlID;
		}

		if (!isset($fields['PRODUCT_XML_ID']) || !static::isPropertyExists('PRODUCT.XML_ID', $propertyList))
		{
			// add sku props
			$parentSku = \CCatalogSku::GetProductInfo($productId, $productData['IBLOCK_ID']);
			if (!empty($parentSku))
			{
				if (strpos($productData["~XML_ID"], '#') === false)
				{
					$parentIterator = Iblock\ElementTable::getList(array(
						'select' => array('ID', 'XML_ID'),
						'filter' => array('ID' => $parentSku['ID'])
					));
					$parent = $parentIterator->fetch();
					if (!empty($parent))
					{
						$productData["~XML_ID"] = $parent['XML_ID'].'#'.$productData["~XML_ID"];
					}
				}
			}

			$propertyList[] = array(
				"NAME" => "Product XML_ID",
				"CODE" => "PRODUCT.XML_ID",
				"VALUE" => $productData["~XML_ID"]
			);

			$fields['PRODUCT_XML_ID'] = $productData["~XML_ID"];
		}

		if (static::isCompatibilityEventAvailable())
		{
			$eventFields = array_merge($presets, $fields);
			$eventFields['MODULE'] = $module;
			$eventFields['PROPS'] = $propertyList;

			$eventResult = static::runCompatibilityEvent($eventFields);
			if ($eventResult === false)
			{
				return $result;
			}

			foreach ($fields as $key => $value)
			{
				if ($eventResult[$key] !== $value)
				{
					$fields[$key] = $eventResult[$key];
				}
			}

			foreach ($presets as $key => $value)
			{
				if ($eventResult[$key] !== $value)
				{
					$presets[$key] = $eventResult[$key];
				}
			}

			$propertyList = $eventResult['PROPS'];
		}

		$basketItem = $basket->getExistsItem($module, $productId, $propertyList);
		if ($basketItem)
		{
			$fields['QUANTITY'] = $basketItem->getQuantity() + $quantity;
		}
		else
		{
			$fields['QUANTITY'] = $quantity;
			$basketItem = $basket->createItem($module, $productId);
		}

		if (!$basketItem)
		{
			throw new Main\ObjectNotFoundException('BasketItem');
		}

		/** @var Sale\BasketPropertiesCollection $propertyCollection */
		$propertyCollection = $basketItem->getPropertyCollection();
		if ($propertyCollection)
		{
			$propertyCollection->setProperty($propertyList);
		}

		$r = $basketItem->setFields($presets);
		if (!$r->isSuccess())
		{
			$result->addErrors($r->getErrors());
			return $result;
		}

		$result->setData(
			array_merge(
				$result->getData(),
				array(
					"BASKET_ITEM" => $basketItem
				)
			)
		);

		$r = $basketItem->setField('QUANTITY', $fields['QUANTITY']);
		if (!$r->isSuccess())
		{
			$result->addErrors($r->getErrors());
			return $result;
		}
		unset($fields['QUANTITY']);

		$settableFields = array_fill_keys($basketItem::getSettableFields(), true);
		$basketFields = array_intersect_key($fields, $settableFields);

		if (!empty($basketFields))
		{
			$r = $basketItem->setFields($basketFields);
			if (!$r->isSuccess())
			{
				$result->addErrors($r->getErrors());
				return $result;
			}
		}

		$result->setData(
			array(
				'BASKET_ITEM' => $basketItem
			)
		);

		return $result;
	}

	/**
	 * @return bool
	 */
	private static function isCompatibilityEventAvailable()
	{
		return Main\Config\Option::get('sale', 'expiration_processing_events', 'N') === 'Y';
	}

	/**
	 * @param array $fields
	 * @return array|false
	 */
	private static function runCompatibilityEvent(array $fields)
	{
		foreach (GetModuleEvents("sale", "OnBeforeBasketAdd", true) as $arEvent)
		{
			if (ExecuteModuleEventEx($arEvent, array(&$fields)) === false)
			{
				return false;
			}
		}

		return $fields;
	}

	/**
	 * @param $code
	 * @param array $propertyList
	 *
	 * @return bool
	 */
	private static function isPropertyExists($code, array $propertyList = array())
	{
		if (empty($propertyList))
		{
			return false;
		}

		foreach ($propertyList as $propertyData)
		{
			if (!empty($propertyData['CODE']) && $code == $propertyData['CODE'])
			{
				return true;
			}
		}

		return false;
	}

	/**
	 * @return string
	 */
	public static function getDefaultProviderName()
	{
		return "\Bitrix\Catalog\Product\CatalogProvider";
	}

	/**
	 * Returns the result of checking that the current user is not a search robot.
	 *
	 * @return bool
	 */
	public static function isNotCrawler()
	{
		$result = static::checkCurrentUser();
		return $result->isSuccess();

	}

	/**
	 * Checking that the current user is not a search robot.
	 *
	 * @return Main\Result
	 */
	private static function checkCurrentUser()
	{
		$result = new Main\Result();

		if (self::$statisticIncluded === null)
			self::$statisticIncluded = Main\Loader::includeModule('statistic');

		if (!self::$statisticIncluded)
			return $result;

		if (isset($_SESSION['SESS_SEARCHER_ID']) && (int)$_SESSION["SESS_SEARCHER_ID"] > 0)
		{
			$result->addError(new Main\Error(Main\Localization\Loc::getMessage('CATALOG_ERR_SESS_SEARCHER'), "SESS_SEARCHER"));
		}

		return $result;
	}
}