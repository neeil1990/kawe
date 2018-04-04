<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$pageId = "group_photo";
include("util_group_menu.php");
include("util_group_profile.php");
?><?
if ($arParams["FATAL_ERROR"] == "Y"):
	if (!empty($arParams["ERROR_MESSAGE"])):
		ShowError($arParams["ERROR_MESSAGE"]);
	else:
		ShowNote($arParams["NOTE_MESSAGE"], "notetext-simple");
	endif;
	return false;
endif;

?>
<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list", 
	"slide_show", 
	Array(
		"IBLOCK_TYPE" => $arParams["PHOTO_GROUP_IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["PHOTO_GROUP_IBLOCK_ID"],
		"USER_ALIAS" => $arResult["VARIABLES"]["GALLERY"]["CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"PERMISSION" => $arResult["VARIABLES"]["PERMISSION"],
		"BEHAVIOUR" => "USER",
 		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
 		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
 		
		"ELEMENTS_LAST_COUNT" => "",
		"ELEMENT_LAST_TIME" => "",
		"ELEMENT_SORT_FIELD" => $arParams["PHOTO"]["ALL"]["ELEMENT_SORT_FIELD"],
		"ELEMENT_SORT_ORDER" => $arParams["PHOTO"]["ALL"]["ELEMENT_SORT_ORDER"],
		"ELEMENT_SORT_FIELD1" => "",
		"ELEMENT_SORT_ORDER1" => "",
		"ELEMENT_FILTER" => array(),
 		
		"GALLERY_URL" => $arResult["~PATH_TO_GROUP_PHOTO"],
		"DETAIL_SLIDE_SHOW_URL" => $arResult["~PATH_TO_GROUP_PHOTO_ELEMENT_SLIDE_SHOW"],
		"DETAIL_URL" => $arResult["~PATH_TO_GROUP_PHOTO_ELEMENT"],
		"SEARCH_URL" => $arResult["~PATH_TO_GROUP_PHOTO_SEARCH"],
		
		"USE_PERMISSIONS" => $arParams["PHOTO"]["ALL"]["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["PHOTO"]["ALL"]["GROUP_PERMISSIONS"],
		
		"USE_DESC_PAGE" => $arParams["PHOTO"]["ALL"]["ELEMENTS_USE_DESC_PAGE"],
		"PAGE_ELEMENTS" => 10,
		"PAGE_NAVIGATION_TEMPLATE" => $arParams["PHOTO"]["ALL"]["PAGE_NAVIGATION_TEMPLATE"],
 		
 		"DATE_TIME_FORMAT" => $arParams["PHOTO"]["ALL"]["DATE_TIME_FORMAT_DETAIL"],
		"COMMENTS_TYPE" => $arParams["PHOTO"]["ALL"]["COMMENTS_TYPE"],
		
		"PICTURES_SIGHT" => "REAL",
		"ADDITIONAL_SIGHTS" => $arParams["PHOTO"]["ALL"]["~ADDITIONAL_SIGHTS"],
		"GALLERY_SIZE" => $arParams["PHOTO"]["ALL"]["GALLERY_SIZE"],
		"SHOW_PHOTO_USER" => $arParams["PHOTO"]["TEMPLATE"]["SHOW_PHOTO_USER"],
		"GALLERY_AVATAR_SIZE" => $arParams["PHOTO"]["TEMPLATE"]["GALLERY_AVATAR_SIZE"],
	
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"SET_TITLE" => "N",
		
 		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"]
	),
	$component
);
?>