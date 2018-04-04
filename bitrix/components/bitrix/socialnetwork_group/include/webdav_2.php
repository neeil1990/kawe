<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$file = trim(preg_replace("'[\\\\/]+'", "/", (dirname(__FILE__)."/../lang/".LANGUAGE_ID."/include/webdav_2.php")));
__IncludeLang($file);
if (($componentPage == "user_files_element_upload" || 
	$componentPage == "group_files_element_upload") && $_REQUEST["save_upload"] == "Y" && 
	check_bitrix_sessid())
{
	$object = ($componentPage == "group_files_element_upload" ? "group" : "user");
	if ($object == "group")
		CSocNetGroup::SetLastActivity($arResult["VARIABLES"]["group_id"], false);
	if (!empty($arParams["ANSWER_UPLOAD_PAGE"]))
	{
		$sAuthorName = GetMessage("SONET_LOG_GUEST"); 
		$sAuthorUrl = "";
		if ($USER->IsAuthorized())
		{
			$sAuthorName = trim($USER->GetFullName());
			$sAuthorName = (empty($sAuthorName) ? $USER->GetLogin() : $sAuthorName);
			$sAuthorUrl = CComponentEngine::MakePathFromTemplate($arResult["~PATH_TO_USER"], 
				array("USER_ID" => $USER->GetID()));
		}
		
		$files = $arParams["ANSWER_UPLOAD_PAGE"]["current_files"];
		$error = false;
		foreach ($files as $file)
		{
			if ($file["status"] != "success")
			{
				$error = true;
				continue;
			}
			$url = ($object == "group" ? $arResult["~PATH_TO_GROUP_FILES_ELEMENT"] : $arResult["~PATH_TO_USER_FILES_ELEMENT"]);
			$arFields = array(
				"ENTITY_TYPE" => ($object == "group" ? SONET_ENTITY_GROUP : SONET_ENTITY_USER),
				"ENTITY_ID" => ($object == "group" ? $arResult["VARIABLES"]["group_id"] : $arResult["VARIABLES"]["user_id"]),
				"EVENT_ID" => "files",
				"=LOG_DATE" => $GLOBALS["DB"]->CurrentTimeFunction(),
				"TITLE_TEMPLATE" => str_replace("#AUTHOR_NAME#", $sAuthorName, GetMessage("SONET_FILES_LOG")),
				"TITLE" => $file["title"],
				"URL" => CComponentEngine::MakePathFromTemplate($url, 
					array("SECTION_ID" => $arParams["ANSWER_UPLOAD_PAGE"]["section_id"], "ELEMENT_ID" => $file["id"])),
				"MODULE_ID" => false,
				"CALLBACK_FUNC" => false);
				
			if ($USER->IsAuthorized())
				$arFields["USER_ID"] = $USER->GetID();
				
			$arFields["MESSAGE"] = str_replace(array("#AUTHOR_NAME#", "#AUTHOR_URL#"), array(htmlspecialcharsEx($sAuthorName), $sAuthorUrl), 
					($USER->IsAuthorized() ? GetMessage("SONET_LOG_TEMPLATE_AUTHOR") : GetMessage("SONET_LOG_TEMPLATE_GUEST")).""); 
			$arFields["TEXT_MESSAGE"] = str_replace(array("#URL#", "#TITLE#", "#AUTHOR_NAME#", "#AUTHOR_URL#"),
					array("http://".SITE_SERVER_NAME.$arFields["URL"],  $arFields["TITLE"], $sAuthorName, "http://".SITE_SERVER_NAME.$sAuthorUrl), 
					GetMessage("SONET_FILES_LOG_TEXT").($USER->IsAuthorized() ? GetMessage("SONET_LOG_TEMPLATE_AUTHOR_MAIL") : 
						GetMessage("SONET_LOG_TEMPLATE_GUEST"))); 

			CSocNetLog::Add($arFields);
		}
		$result = $arParams["ANSWER_UPLOAD_PAGE"];
		unset($result["current_files"]);
		$error = ($error ? $error : !empty($result["fatal_errors"]));
		if ($_REQUEST["AJAX_CALL"] == "Y")
		{
			if ($_REQUEST["CONVERT"] == "Y")
			{
				include_once($_SERVER['DOCUMENT_ROOT'].BX_ROOT."/componens/bitrix/photogallery.upload/functions.php"); 
				array_walk($result, '__Escape');
			}
			$APPLICATION->RestartBuffer();
			?><?=CUtil::PhpToJSObject($result);?><?
			die();
		}
		elseif (!$error)
		{
			LocalRedirect($arParams["ANSWER_UPLOAD_PAGE"]["url"]);
		}
	}
}
?>