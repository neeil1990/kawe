<?
define("STOP_STATISTICS", true);
define('NO_AGENT_CHECK', true);

use Bitrix\Main\Loader;

if (isset($_REQUEST['site_id']) && is_string($_REQUEST['site_id']))
{
	$siteID = trim($_REQUEST['site_id']);
	if ($siteID !== '' && preg_match('/^[a-z0-9_]{2}$/i', $siteID) === 1)
	{
		define('SITE_ID', $siteID);
	}
}

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!check_bitrix_sessid() || $_SERVER["REQUEST_METHOD"] != "POST")
	return;

if (!Loader::includeModule('sale') || !Loader::includeModule('catalog'))
	return;

global $USER, $APPLICATION;

CUtil::JSPostUnescape();

$arRes = array();
$newProductId = false;
$newBasketId = false;
$action_var = (isset($_POST["action_var"]) && strlen(trim($_POST["action_var"])) > 0) ? trim($_POST["action_var"]) : "action";
$arErrors = array();

if (isset($_POST[$action_var]) && strlen($_POST[$action_var]) > 0)
{
	if (array_key_exists('COUPON', $_POST) && !array_key_exists('coupon', $_POST))
	{
		$_POST["coupon"] = $_POST["COUPON"];
	}

	$arPropsValues = isset($_POST["props"]) ? $_POST["props"] : array();
	$strColumns = isset($_POST["select_props"]) ? $_POST["select_props"] : "";
	$arColumns = explode(",", $strColumns);
	$strOffersProps = isset($_POST["offers_props"]) ? $_POST["offers_props"] : "";
	$strOffersProps = explode(",", $strOffersProps);

	if ($_POST[$action_var] == "select_item")
	{
		CBitrixComponent::includeComponentClass("bitrix:sale.basket.basket");

		$basket = new CBitrixBasketComponent();

		$basket->weightKoef = htmlspecialcharsbx(COption::GetOptionString('sale', 'weight_koef', 1, SITE_ID));
		$basket->weightUnit = htmlspecialcharsbx(COption::GetOptionString('sale', 'weight_unit', "", SITE_ID));
		$basket->columns = $arColumns;
		$basket->offersProps = $strOffersProps;

		$basket->quantityFloat = (isset($_POST["quantity_float"]) && $_POST["quantity_float"] == "Y") ? "Y" : "N";
		$basket->priceVatShowValue = (isset($_POST["price_vat_show_value"]) && $_POST["price_vat_show_value"] == "Y") ? "Y" : "N";
		$basket->hideCoupon = (isset($_POST["hide_coupon"]) && $_POST["hide_coupon"] == "Y") ? "Y" : "N";
		$basket->usePrepayment = (isset($_POST["use_prepayment"]) && $_POST["use_prepayment"] == "Y") ? "Y" : "N";

		$currentId = 0;
		if (isset($_POST['basketItemId']))
			$currentId = (int)$_POST['basketItemId'];

		$basket->changeProductOffer(
			$currentId,
			CBitrixBasketComponent::SEARCH_OFFER_BY_PROPERTIES,
			$arPropsValues
		);

		$arRes["DELETE_ORIGINAL"] = "Y";
		$arRes["BASKET_DATA"]["GRID"]["HEADERS"] = $basket->getCustomColumns();
		$arRes["BASKET_DATA"] = $basket->getBasketItems();
		$arRes["COLUMNS"] = $strColumns;

		$arRes["BASKET_ID"] = $currentId;

		$arRes["CODE"] = "SUCCESS";
	}
	elseif ($_POST[$action_var] == "recalculate")
	{
		// todo: extract duplicated code to function

		CBitrixComponent::includeComponentClass("bitrix:sale.basket.basket");

		$basket = new CBitrixBasketComponent();
		$basket->onIncludeComponentLang();

		$basket->weightKoef = htmlspecialcharsbx(COption::GetOptionString('sale', 'weight_koef', 1, SITE_ID));
		$basket->weightUnit = htmlspecialcharsbx(COption::GetOptionString('sale', 'weight_unit', "", SITE_ID));
		$basket->columns = $arColumns;
		$basket->offersProps = $strOffersProps;

		$basket->quantityFloat = (isset($_POST["quantity_float"]) && $_POST["quantity_float"] == "Y") ? "Y" : "N";
		$basket->priceVatShowValue = (isset($_POST["price_vat_show_value"]) && $_POST["price_vat_show_value"] == "Y") ? "Y" : "N";
		$basket->hideCoupon = (isset($_POST["hide_coupon"]) && $_POST["hide_coupon"] == "Y") ? "Y" : "N";
		$basket->usePrepayment = (isset($_POST["use_prepayment"]) && $_POST["use_prepayment"] == "Y") ? "Y" : "N";

		$res = $basket->recalculateBasket($_POST);
		foreach ($res as $key => $value)
		{
			$arRes[$key] = $value;
		}

		$arRes["BASKET_DATA"]["GRID"]["HEADERS"] = $basket->getCustomColumns();
		$arRes["BASKET_DATA"] = $basket->getBasketItems();
		$arRes["COLUMNS"] = $strColumns;

		$arRes["CODE"] = "SUCCESS";


		if(!empty($_POST["coupon"]) && $arRes['VALID_COUPON'] === true)
		{
			if(!empty($arRes['BASKET_DATA']['FULL_DISCOUNT_LIST']))
			{
				global $USER;
				$userId = $USER instanceof CUser? $USER->GetID() : null;
				$giftManager = \Bitrix\Sale\Discount\Gift\Manager::getInstance()->setUserId($userId);

				\Bitrix\Sale\Compatible\DiscountCompatibility::stopUsageCompatible();
				$collections = $giftManager->getCollectionsByBasket(
					\Bitrix\Sale\Basket::loadItemsForFUser(\Bitrix\Sale\Fuser::getId(), SITE_ID),
					$arRes['BASKET_DATA']['FULL_DISCOUNT_LIST'],
					$arRes['BASKET_DATA']['APPLIED_DISCOUNT_LIST']
				);
				\Bitrix\Sale\Compatible\DiscountCompatibility::revertUsageCompatible();
				if(count($collections))
				{
					$arRes['BASKET_DATA']['NEED_TO_RELOAD_FOR_GETTING_GIFTS'] = true;
				}
			}
		}
	}
}

unset($arRes['BASKET_DATA']['APPLIED_DISCOUNT_LIST'], $arRes['BASKET_DATA']['FULL_DISCOUNT_LIST']);

$arRes["PARAMS"]["QUANTITY_FLOAT"] = (isset($_POST["quantity_float"]) && $_POST["quantity_float"] == "Y") ? "Y" : "N";

$APPLICATION->RestartBuffer();
header('Content-Type: application/json; charset='.LANG_CHARSET);
echo \Bitrix\Main\Web\Json::encode($arRes);
die();