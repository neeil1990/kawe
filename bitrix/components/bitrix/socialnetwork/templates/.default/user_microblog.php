<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$pageId = "user_microblog";
include("util_menu.php");
include("util_profile.php");

if(strpos($arResult["PATH_TO_USER_BLOG_POST_EDIT"], "?") === false)
	$arResult["PATH_TO_USER_MICROBLOG_POST_EDIT"] = $arResult["PATH_TO_USER_BLOG_POST_EDIT"]."?microblog=Y";
else
	$arResult["PATH_TO_USER_MICROBLOG_POST_EDIT"] = $arResult["PATH_TO_USER_BLOG_POST_EDIT"]."&microblog=Y";

$APPLICATION->IncludeComponent(
	"bitrix:blog.post.edit",
	"micro",
	Array(
		"ID"						=> "new",
		"PATH_TO_BLOG"				=> $arResult["PATH_TO_USER_MICROBLOG"],
		"PATH_TO_POST"				=> $arResult["PATH_TO_USER_MICROBLOG_POST"],
		"PATH_TO_POST_EDIT"			=> $arResult["PATH_TO_USER_MICROBLOG_POST_EDIT"],
		"PATH_TO_USER"				=> $arResult["PATH_TO_USER"],
		"PATH_TO_DRAFT"				=> $arResult["PATH_TO_USER_BLOG_DRAFT"], 
		"PATH_TO_SMILE" 			=> $arParams["PATH_TO_BLOG_SMILE"], 
		"SET_TITLE"					=> "Y",
		"GROUP_ID"					=> $arParams["BLOG_GROUP_ID"],
		"POST_PROPERTY" 			=> $arParams["POST_PROPERTY"],
		"DATE_TIME_FORMAT" 			=> $arResult["DATE_TIME_FORMAT"],
		"USER_ID"					=> $arResult["VARIABLES"]["user_id"],
		"USER_VAR" 					=> $arResult["ALIASES"]["user_id"],
		"PAGE_VAR" 					=> $arResult["ALIASES"]["blog_page"],
		"POST_VAR" 					=> $arResult["ALIASES"]["post_id"],
		"SET_NAV_CHAIN" 			=> $arResult["SET_NAV_CHAIN"], 
		"USE_SOCNET" 				=> "Y",
		"ALLOW_POST_MOVE" 			=> $arParams["ALLOW_POST_MOVE"],
		"PATH_TO_BLOG_POST" 		=> $arParams["PATH_TO_BLOG_POST"],
		"PATH_TO_BLOG_POST_EDIT" 	=> $arParams["PATH_TO_BLOG_POST_EDIT"],
		"PATH_TO_BLOG_DRAFT" 		=> $arParams["PATH_TO_BLOG_DRAFT"],
		"PATH_TO_BLOG_BLOG" 		=> $arParams["PATH_TO_BLOG_BLOG"],
		"PATH_TO_USER_POST" 		=> $arResult["PATH_TO_USER_BLOG_POST"],
		"PATH_TO_USER_POST_EDIT" 	=> $arResult["PATH_TO_USER_BLOG_POST_EDIT"],
		"PATH_TO_USER_DRAFT" 		=> $arResult["PATH_TO_USER_BLOG_DRAFT"],
		"PATH_TO_USER_BLOG" 		=> $arResult["PATH_TO_USER_BLOG"],
		"PATH_TO_GROUP_POST" 		=> $arParams["PATH_TO_GROUP_POST"],
		"PATH_TO_GROUP_POST_EDIT" 	=> $arParams["PATH_TO_GROUP_POST_EDIT"],
		"PATH_TO_GROUP_DRAFT"		=> $arParams["PATH_TO_GROUP_DRAFT"],
		"PATH_TO_GROUP_BLOG" 		=> $arParams["PATH_TO_GROUP_BLOG"],
		"NAME_TEMPLATE" 			=> $arParams["NAME_TEMPLATE"],
		"SHOW_LOGIN" 				=> $arParams["SHOW_LOGIN"],
		"IMAGE_MAX_WIDTH" => $arParams["BLOG_IMAGE_MAX_WIDTH"],
		"IMAGE_MAX_HEIGHT" => $arParams["BLOG_IMAGE_MAX_HEIGHT"],
		"ALLOW_POST_CODE" => $arParams["BLOG_ALLOW_POST_CODE"],
		"USE_GOOGLE_CODE" => $arParams["BLOG_USE_GOOGLE_CODE"],		
		"MICROBLOG" => "Y",
	),
	$component
);
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.blog.blog",
	"micro",
	Array(
		"MESSAGE_COUNT" 		=> "25", 
		"DATE_TIME_FORMAT" 		=> $arParams["DATE_TIME_FORMAT"], 
		"PATH_TO_BLOG" 			=> $arResult["PATH_TO_USER_MICROBLOG"], 
		"PATH_TO_BLOG_CATEGORY"	=> $APPLICATION->GetCurPageParam("category=#category_id#", Array("category")), 
		"PATH_TO_POST" 			=> $arResult["PATH_TO_USER_MICROBLOG_POST"], 
		"PATH_TO_POST_EDIT" 	=> $arResult["PATH_TO_USER_MICROBLOG_POST_EDIT"], 
		"PATH_TO_USER" 			=> $arResult["PATH_TO_USER"], 
		"PATH_TO_SMILE" => $arParams["PATH_TO_BLOG_SMILE"], 
		"PATH_TO_MESSAGES_CHAT"	=> $arResult["PATH_TO_MESSAGES_CHAT"],
		"USER_ID" 				=> $arResult["VARIABLES"]["user_id"], 
		"YEAR" 					=> $year, 
		"MONTH" 				=> $month, 
		"DAY" 					=> $day, 
		"CATEGORY_ID" 			=> $_REQUEST["category"], 
		"CACHE_TYPE" 			=> $arResult["CACHE_TYPE"], 
		"CACHE_TIME" 			=> $arResult["CACHE_TIME"], 
		"CACHE_TIME_LONG" 		=> "604800", 
		"SET_NAV_CHAIN" 		=> "N", 
		"SET_TITLE" 			=> "Y", 
		"FILTER_NAME" 			=> "", 
		"NAV_TEMPLATE" 			=> "", 
		"POST_PROPERTY_LIST" 	=> array(),
		"USER_VAR" 				=> $arResult["ALIASES"]["user_id"],
		"PAGE_VAR" 				=> $arResult["ALIASES"]["blog_page"],
		"POST_VAR" 				=> $arResult["ALIASES"]["post_id"],
		"GROUP_ID" 				=> $arParams["BLOG_GROUP_ID"],
		"NAME_TEMPLATE" 		=> $arParams["NAME_TEMPLATE"],
		"SHOW_LOGIN" 			=> $arParams["SHOW_LOGIN"],
		"DATE_TIME_FORMAT" 		=> $arResult["DATE_TIME_FORMAT"],		
		"SHOW_YEAR" 			=> $arParams["SHOW_YEAR"],		
		"PATH_TO_CONPANY_DEPARTMENT" 	=> $arParams["PATH_TO_CONPANY_DEPARTMENT"],
		"PATH_TO_VIDEO_CALL" 	=> $arResult["PATH_TO_VIDEO_CALL"],
		"USE_SHARE" 			=> $arParams["USE_SHARE"],
		"SHARE_HIDE" 			=> $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" 		=> $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" 		=> $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN"		=> $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" 		=> $arParams["SHARE_SHORTEN_URL_KEY"],		
		"SHOW_RATING" => $arParams["SHOW_RATING"],
		"IMAGE_MAX_WIDTH" => $arParams["BLOG_IMAGE_MAX_WIDTH"],
		"IMAGE_MAX_HEIGHT" => $arParams["BLOG_IMAGE_MAX_HEIGHT"],
		"ALLOW_POST_CODE" => $arParams["BLOG_ALLOW_POST_CODE"],
		"USE_GOOGLE_CODE" => $arParams["BLOG_USE_GOOGLE_CODE"],
		"MICROBLOG" => "Y",
	),
	$component
);
?>