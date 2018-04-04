<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$pageId = "group_blog";
include("util_group_menu.php");
include("util_group_profile.php");
?>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
<td align="left" valign="top"><?
$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.blog.menu",
	"",
	Array(
		"PATH_TO_USER" => $arParams["PATH_TO_USER"],
		"PATH_TO_POST_EDIT" => $arResult["PATH_TO_GROUP_BLOG_POST_EDIT"],
		"PATH_TO_DRAFT" => $arResult["PATH_TO_GROUP_BLOG_DRAFT"],
		"USER_ID" => $arResult["VARIABLES"]["user_id"],
		"USER_VAR" => $arResult["ALIASES"]["user_id"],
		"PAGE_VAR" => $arResult["ALIASES"]["blog_page"],
		"POST_VAR" => $arResult["ALIASES"]["post_id"],
		"SOCNET_GROUP_ID" => $arResult["VARIABLES"]["group_id"],
		"PATH_TO_GROUP_BLOG" => $arResult["PATH_TO_GROUP_BLOG"],
		"PATH_TO_GROUP" => $arResult["PATH_TO_GROUP"],
		"SET_NAV_CHAIN" => $arResult["SET_NAV_CHAIN"],
		"GROUP_ID" => $arParams["BLOG_GROUP_ID"],
		"PATH_TO_MODERATION" => $arResult["PATH_TO_GROUP_BLOG_MODERATION"],
	),
	$component
);
?></td>
<td align="right" valign="top"><?$APPLICATION->IncludeComponent(
	"bitrix:blog.rss.link",
	"group",
	Array(
		"USER_VAR" => $arResult["ALIASES"]["user_id"],
		"PAGE_VAR" => $arResult["ALIASES"]["blog_page"],
		"POST_VAR" => $arResult["ALIASES"]["post_id"],
		"PATH_TO_RSS" => $arResult["PATH_TO_GROUP_BLOG_RSS"], 
		"USER_ID" => $arResult["VARIABLES"]["user_id"],
		"RSS1" => "N", 
		"RSS2" => "Y", 
		"ATOM" => "N", 
		"MODE" => "B",
		"SOCNET_GROUP_ID" => $arResult["VARIABLES"]["group_id"],
		"GROUP_ID" => $arParams["BLOG_GROUP_ID"],
		"USE_SOCNET" => "Y",
	),
	$component
);?></td>
</tr>
</table>
<?
$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.blog.blog",
	"",
	Array(
		"MESSAGE_COUNT" 		=> "25", 
		"DATE_TIME_FORMAT" 		=> $arParams["DATE_TIME_FORMAT"], 
		"SHOW_YEAR" 			=> $arParams["SHOW_YEAR"],		
		"PATH_TO_BLOG" 			=> $arResult["PATH_TO_USER_BLOG"], 
		"PATH_TO_GROUP_BLOG" 	=> $arResult["PATH_TO_GROUP_BLOG"], 
		"PATH_TO_BLOG_CATEGORY"	=> $APPLICATION->GetCurPageParam("category=#category_id#", Array("category")), 
		"PATH_TO_POST" 			=> $arResult["PATH_TO_GROUP_BLOG_POST"], 
		"PATH_TO_POST_EDIT" 	=> $arResult["PATH_TO_GROUP_BLOG_POST_EDIT"], 
		"PATH_TO_USER" 			=> $arParams["PATH_TO_USER"],
		"PATH_TO_SMILE" => $arParams["PATH_TO_BLOG_SMILE"], 
		"PATH_TO_MESSAGES_CHAT"	=> $arParams["PATH_TO_MESSAGES_CHAT"],
		"PATH_TO_VIDEO_CALL" 	=> $arParams["PATH_TO_VIDEO_CALL"],
		"USER_ID" 				=> $arResult["VARIABLES"]["user_id"], 
		"YEAR" 					=> $year, 
		"MONTH" 				=> $month, 
		"DAY" 					=> $day, 
		"CATEGORY_ID" 			=> $_REQUEST["category"], 
		"CACHE_TYPE" 			=> $arResult["CACHE_TYPE"], 
		"CACHE_TIME" 			=> $arResult["CACHE_TIME"], 
		"CACHE_TIME_LONG" 		=> "604800", 
		"SET_NAV_CHAIN" 		=> "N", 
		"SET_TITLE" 			=> $arResult["SET_TITLE"], 
		"FILTER_NAME" 			=> "", 
		"NAV_TEMPLATE" 			=> "", 
		"POST_PROPERTY_LIST" 	=> array(),
		"USER_VAR" 				=> $arResult["ALIASES"]["user_id"],
		"PAGE_VAR" 				=> $arResult["ALIASES"]["blog_page"],
		"POST_VAR" 				=> $arResult["ALIASES"]["post_id"],
		"SOCNET_GROUP_ID" 		=> $arResult["VARIABLES"]["group_id"],
		"GROUP_ID" 				=> $arParams["BLOG_GROUP_ID"],
		"NAME_TEMPLATE" 		=> $arParams["NAME_TEMPLATE"],
		"SHOW_LOGIN" 			=> $arParams["SHOW_LOGIN"],
		"PATH_TO_CONPANY_DEPARTMENT"	=> $arParams["PATH_TO_CONPANY_DEPARTMENT"],
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
	),                                               
	$component
);
?>