<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

if($_REQUEST['TEMPLATE_THEME'])
    $_SESSION['TEMPLATE_THEME'] = $_REQUEST['TEMPLATE_THEME'];
elseif(empty($_REQUEST['TEMPLATE_THEME']) && empty($_SESSION['TEMPLATE_THEME']))
    $_SESSION['TEMPLATE_THEME'] = ($arParams['SECTIONS_VIEW_MODE'] == 'LINE') ? 'list' : '.default';

$arResult["VARIABLES"]["SECTION_CODE"] = str_replace(' ', '-', $arResult["VARIABLES"]["SECTION_CODE"]);
?>

<?
	$rsSections = CIBlockSection::GetList(array(),array('IBLOCK_ID' => $arParams["IBLOCK_ID"], '=CODE' => $arResult['VARIABLES']['SECTION_CODE'],'ELEMENT_SUBSECTIONS' => 'N'),true,array('UF_*'));
	$arSection = $rsSections->Fetch();
	if ($arSection) {
	?>
	<h1 class="title"><?= $arSection['NAME']; ?></h1>
	<?
	}

	// Скрыть раздел с сайта
	if($arSection['UF_HIDE_SECTION']){
        \Bitrix\Iblock\Component\Tools::process404(
            $arParams['MESSAGE_404'],
            true,
            $arParams['SET_STATUS_404'],
            $arParams['SHOW_404'],
            $arParams['FILE_404']
        );
    }


$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	array(
        "SECTION_USER_FIELDS" => ["UF_*"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
		"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
		"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
		"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
	),
	$component,
	array("HIDE_ICONS" => "Y")
);?>

<?
/* TAGS LIST */
$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/tags_list.php", Array("SECTION" => $arSection), Array(
    "MODE"      => "php",
    "NAME"      => "",
    "TEMPLATE"  => "",
    "SHOW_BORDER" => false,
));
?>

<?
if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] == 'Y')
{
	$basketAction = (isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '');
}
else
{
	$basketAction = (isset($arParams['SECTION_ADD_TO_BASKET_ACTION']) ? $arParams['SECTION_ADD_TO_BASKET_ACTION'] : '');
}

$intSectionID = 0;
?>

	<? if($arSection['ELEMENT_CNT'] OR $arSection['UF_SUBSECTIONS']): ?>

	<form class="filter" method="get" action="">
		<label class="filter__label filter__sort">
			Сортировать по:
			<select name="ELEMENT_SORT_FIELD" class="iselect" onchange="this.form.submit()">
				<?
				$ArOption = array(
					'catalog_PRICE_1:asc' => 'Сначала дешевле',
					'catalog_PRICE_1:desc' => 'Сначала дороже',
					'name:asc' => 'Название: А - Я',
					'shows:asc' => 'По популярности'
				);
				?>
				<? foreach($ArOption as $value => $name):
					$current_sort = $arParams["ELEMENT_SORT_FIELD"].':'.$arParams["ELEMENT_SORT_ORDER"];
					?>
					<option value="<?=$value?>" <?=($current_sort == $value) ? 'selected' : ''?>><?=$name?></option>
				<? endforeach;?>
			</select>
		</label>
		<label class="filter__label">
			<input type="checkbox" class="filter__checkbox" checked><i class="icon-checkbox"></i>
			В наличии
		</label>
		<!--<label class="filter__label">
			<input type="checkbox" class="filter__checkbox"><i class="icon-checkbox"></i>
			Со скидкой
		</label>-->
		<div class="filter__output">
			<span>Выводить по:</span>
			<?
			$ArCount = array(20,40,100);
			?>
			<? foreach($ArCount as $c):?>
				<a href="?<?=http_build_query(array_merge($GLOBALS['_GET'],array("PAGE_ELEMENT_COUNT" => $c)))?>" class="filter__output_link <?=($arParams['PAGE_ELEMENT_COUNT'] == $c) ? 'active' : ''?>"><?=$c?></a>
			<? endforeach;?>
		</div>
		<div class="filter__view">
			<a href="?<?=http_build_query(array_merge($GLOBALS['_GET'],array("TEMPLATE_THEME" => ".default")))?>" class="filter__view_link <?=($_SESSION['TEMPLATE_THEME'] == ".default" OR !$_SESSION['TEMPLATE_THEME']) ? 'active' : ''?>">
				<svg class="icon icon-grid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/sprite.svg#icon-grid"></use></svg>
			</a>
			<a href="?<?=http_build_query(array_merge($GLOBALS['_GET'],array("TEMPLATE_THEME" => "list")))?>" class="filter__view_link <?=($_SESSION['TEMPLATE_THEME'] == "list") ? 'active' : ''?>">
				<svg class="icon icon-list"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/sprite.svg#icon-list"></use></svg>
			</a>
		</div>
	</form>
	<hr class="hr">

	<? endif; ?>

	<?
    $intSectionID = $APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	$_SESSION['TEMPLATE_THEME'],
	array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
		"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
		"ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
		"ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"INCLUDE_SUBSECTIONS" => ($arSection['UF_SUBSECTIONS']) ? "A" : "N",
		"BASKET_URL" => $arParams["BASKET_URL"],
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
		"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
		"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

		"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
		"USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
		"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
		"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
		"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],

		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],

		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
		"OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
		"OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
		"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
		"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
		"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
		"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
		"OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],

		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
		'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
		'CURRENCY_ID' => $arParams['CURRENCY_ID'],
		'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],

		'LABEL_PROP' => $arParams['LABEL_PROP'],
		'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
		'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],

		'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
		'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
		'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
		'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
		'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
		'MESS_BTN_BUY' => $arParams['MESS_BTN_BUY'],
		'MESS_BTN_ADD_TO_BASKET' => $arParams['MESS_BTN_ADD_TO_BASKET'],
		'MESS_BTN_SUBSCRIBE' => $arParams['MESS_BTN_SUBSCRIBE'],
		'MESS_BTN_DETAIL' => $arParams['MESS_BTN_DETAIL'],
		'MESS_NOT_AVAILABLE' => $arParams['MESS_NOT_AVAILABLE'],

		'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
		"ADD_SECTIONS_CHAIN" => "N",
		'ADD_TO_BASKET_ACTION' => $basketAction,
		'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
		'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare']
	),
	$component
);?>
<?
$GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $intSectionID;
unset($basketAction);
?>

    <?
    /* RECOMMENDED LIST */
    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/recommended_list.php", Array("SECTION" => $arSection), Array(
        "MODE"      => "php",
        "NAME"      => "",
        "TEMPLATE"  => "",
        "SHOW_BORDER" => false,
    ));
    ?>


	<div class="catalog-text">
	<?
	if($arSection['DESCRIPTION'] && $arSection['UF_DESC_SECTION']){
		print $arSection['DESCRIPTION'];
	}
	?>
	</div>


