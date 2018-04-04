<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$pageId = "group_blog";
include("util_group_menu.php");
include("util_group_profile.php");
?>
<?
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

if(strlen($arResult["PATH_TO_GROUP_BLOG_CATEGORY"]) <= 0)
{
	$catUrl = $arResult["PATH_TO_GROUP_BLOG"];					
	if(strpos("?", $catUrl) === false)
		$catUrl .= "?";
	else
		$catUrl .= "&";
	$catUrl .= "category=#category_id#";
	$arResult["PATH_TO_GROUP_BLOG_CATEGORY"] = $catUrl;
}

$APPLICATION->IncludeComponent(
		"bitrix:blog.post", 
		"", 
		Array(
				"POST_VAR"				=> $arResult["ALIASES"]["post_id"],
				"USER_VAR"				=> $arResult["ALIASES"]["user_id"],
				"PAGE_VAR"				=> $arResult["ALIASES"]["blog_page"],
				"PATH_TO_BLOG" 			=> $arResult["PATH_TO_GROUP_BLOG"], 
				"PATH_TO_POST"			=> $arResult["PATH_TO_GROUP_BLOG_POST"],
				"PATH_TO_GROUP_BLOG" 	=> $arResult["PATH_TO_GROUP_BLOG"], 
				"PATH_TO_BLOG_CATEGORY"	=> $arResult["PATH_TO_GROUP_BLOG_CATEGORY"],
				"PATH_TO_POST_EDIT"		=> $arResult["PATH_TO_GROUP_BLOG_POST_EDIT"],
				"PATH_TO_USER" 			=> $arParams["PATH_TO_USER"],
				"PATH_TO_SMILE" 		=> $arParams["PATH_TO_BLOG_SMILE"], 
				"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
				"PATH_TO_VIDEO_CALL" 	=> $arParams["PATH_TO_VIDEO_CALL"],
				"ID"					=> $arResult["VARIABLES"]["post_id"],
				"CACHE_TYPE"			=> $arResult["CACHE_TYPE"],
				"CACHE_TIME"			=> $arResult["CACHE_TIME"],
				"SET_NAV_CHAIN" 		=> "N",
				"SET_TITLE"				=> $arResult["SET_TITLE"],
				"POST_PROPERTY"			=> $arParams["POST_PROPERTY"],
				"DATE_TIME_FORMAT"		=> $arResult["DATE_TIME_FORMAT"],
				"USER_ID" 				=> $arResult["VARIABLES"]["user_id"],
				"SOCNET_GROUP_ID" 		=> $arResult["VARIABLES"]["group_id"],
				"GROUP_ID" 				=> $arParams["BLOG_GROUP_ID"],
				"USE_SOCNET" 			=> "Y",
				"NAME_TEMPLATE" 		=> $arParams["NAME_TEMPLATE"],
				"SHOW_LOGIN" 			=> $arParams["SHOW_LOGIN"],
				"PATH_TO_CONPANY_DEPARTMENT"	=> $arParams["PATH_TO_CONPANY_DEPARTMENT"],
				"USE_SHARE" 					=> $arParams["USE_SHARE"],
				"SHARE_HIDE" 					=> $arParams["SHARE_HIDE"],
				"SHARE_TEMPLATE" 				=> $arParams["SHARE_TEMPLATE"],
				"SHARE_HANDLERS" 				=> $arParams["SHARE_HANDLERS"],
				"SHARE_SHORTEN_URL_LOGIN"		=> $arParams["SHARE_SHORTEN_URL_LOGIN"],
				"SHARE_SHORTEN_URL_KEY" 		=> $arParams["SHARE_SHORTEN_URL_KEY"],
				"SHOW_RATING" 					=> $arParams["SHOW_RATING"],
				"IMAGE_MAX_WIDTH" => $arParams["BLOG_IMAGE_MAX_WIDTH"],
				"IMAGE_MAX_HEIGHT" => $arParams["BLOG_IMAGE_MAX_HEIGHT"],
				"ALLOW_POST_CODE" => $arParams["BLOG_ALLOW_POST_CODE"],
			),
		$component 
	);
?>
<div align="right">
	<?
	$APPLICATION->IncludeComponent(
			"bitrix:blog.rss.link",
			"group",
			Array(
					"RSS1"				=> "N",
					"RSS2"				=> "Y",
					"ATOM"				=> "N",
					"BLOG_VAR"			=> $arResult["ALIASES"]["blog"],
					"POST_VAR"			=> $arResult["ALIASES"]["post_id"],
					"GROUP_VAR"			=> $arResult["ALIASES"]["group_id"],
					"PATH_TO_POST_RSS"		=> $arResult["PATH_TO_GROUP_BLOG_POST_RSS"],
					"PATH_TO_RSS_ALL"	=> $arResult["PATH_TO_RSS_ALL"],
					"BLOG_URL"			=> $arResult["VARIABLES"]["blog"],
					"POST_ID"			=> $arResult["VARIABLES"]["post_id"],
					"MODE"				=> "C",
					"PARAM_GROUP_ID" 			=> $arParams["BLOG_GROUP_ID"],
					"SOCNET_GROUP_ID" => $arResult["VARIABLES"]["group_id"],
				),
			$component 
		);
	?>
</div>
<?

$APPLICATION->IncludeComponent(
		"bitrix:blog.post.comment", 
		"", 
		Array(
				"BLOG_VAR"						=> $arResult["ALIASES"]["blog"],
				"USER_VAR"						=> $arResult["ALIASES"]["user_id"],
				"PAGE_VAR"						=> $arResult["ALIASES"]["blog_page"],
				"POST_VAR"						=> $arResult["ALIASES"]["post_id"],
				"PATH_TO_BLOG" 					=> $arResult["PATH_TO_USER_BLOG"], 
				"PATH_TO_GROUP_BLOG" 			=> $arResult["PATH_TO_GROUP_BLOG"], 
				"PATH_TO_POST"					=> $arResult["PATH_TO_GROUP_BLOG_POST"],
				"PATH_TO_USER" 					=> $arParams["PATH_TO_USER"],
				"PATH_TO_SMILE" 				=> $arParams["PATH_TO_BLOG_SMILE"], 
				"PATH_TO_MESSAGES_CHAT" 		=> $arParams["PATH_TO_MESSAGES_CHAT"],
				"PATH_TO_VIDEO_CALL"			=> $arParams["PATH_TO_VIDEO_CALL"],
				"ID"							=> $arResult["VARIABLES"]["post_id"],
				"CACHE_TYPE"					=> $arResult["CACHE_TYPE"],
				"CACHE_TIME"					=> $arResult["CACHE_TIME"],
				"COMMENTS_COUNT" 				=> $arResult["COMMENTS_COUNT"],
				"DATE_TIME_FORMAT"				=> $arResult["DATE_TIME_FORMAT"],
				"USE_ASC_PAGING"				=> $arParams["USE_ASC_PAGING"],
				"USER_ID" 						=> $arResult["VARIABLES"]["user_id"],
				"SOCNET_GROUP_ID" 				=> $arResult["VARIABLES"]["group_id"],
				"GROUP_ID" 						=> $arParams["BLOG_GROUP_ID"],
				"NOT_USE_COMMENT_TITLE" 		=> "Y",
				"USE_SOCNET" 					=> "Y",
				"NAME_TEMPLATE" 				=> $arParams["NAME_TEMPLATE"],
				"SHOW_LOGIN" 					=> $arParams["SHOW_LOGIN"],
				"PATH_TO_CONPANY_DEPARTMENT" 	=> $arParams["PATH_TO_CONPANY_DEPARTMENT"],
				"SHOW_RATING" 					=> $arParams["SHOW_RATING"],
				"IMAGE_MAX_WIDTH" => $arParams["BLOG_IMAGE_MAX_WIDTH"],
				"IMAGE_MAX_HEIGHT" => $arParams["BLOG_IMAGE_MAX_HEIGHT"],
				"ALLOW_VIDEO" => $arParams["BLOG_COMMENT_ALLOW_VIDEO"],
				"SHOW_SPAM" => $arParams["BLOG_SHOW_SPAM"],
				"NO_URL_IN_COMMENTS" => $arParams["BLOG_NO_URL_IN_COMMENTS"],
				"NO_URL_IN_COMMENTS_AUTHORITY" => $arParams["BLOG_NO_URL_IN_COMMENTS_AUTHORITY"],
				"ALLOW_POST_CODE" => $arParams["BLOG_ALLOW_POST_CODE"],
			),
		$component 
	);

?>