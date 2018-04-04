<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!CModule::IncludeModule("socialnetwork"))
{
	ShowError(GetMessage("SONET_MODULE_NOT_INSTALL"));
	return;
}

$arParams["GROUP_ID"] = IntVal($arParams["GROUP_ID"]);
$arParams["USER_ID"] = IntVal($arParams["USER_ID"]);
$arParams["PAGE_ID"] = Trim($arParams["PAGE_ID"]);
if (StrLen($arParams["PAGE_ID"]) <= 0)
	$arParams["PAGE_ID"] = "user_subscribe";

$arParams["SET_NAV_CHAIN"] = ($arParams["SET_NAV_CHAIN"] == "N" ? "N" : "Y");

if (strLen($arParams["USER_VAR"]) <= 0)
	$arParams["USER_VAR"] = "user_id";
if (strLen($arParams["PAGE_VAR"]) <= 0)
	$arParams["PAGE_VAR"] = "page";
if (strLen($arParams["GROUP_VAR"]) <= 0)
	$arParams["GROUP_VAR"] = "group_id";

$arParams["PATH_TO_USER"] = trim($arParams["PATH_TO_USER"]);
if (strlen($arParams["PATH_TO_USER"]) <= 0)
	$arParams["PATH_TO_USER"] = htmlspecialchars($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=user&".$arParams["USER_VAR"]."=#user_id#");

$arParams["PATH_TO_GROUP"] = trim($arParams["PATH_TO_GROUP"]);
if (strlen($arParams["PATH_TO_GROUP"]) <= 0)
	$arParams["PATH_TO_GROUP"] = htmlspecialchars($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=group&".$arParams["GROUP_VAR"]."=#group_id#");

$arParams["PATH_TO_SUBSCRIBE"] = trim($arParams["PATH_TO_SUBSCRIBE"]);
if (strlen($arParams["PATH_TO_SUBSCRIBE"]) <= 0)
	$arParams["PATH_TO_SUBSCRIBE"] = htmlspecialchars($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=subscribe");

if (strlen($arParams["NAME_TEMPLATE"]) <= 0)		
	$arParams["NAME_TEMPLATE"] = '#NOBR##NAME# #LAST_NAME##/NOBR#';
$bUseLogin = $arParams['SHOW_LOGIN'] != "N" ? true : false;
				
$arResult["FatalError"] = "";

if (!$GLOBALS["USER"]->IsAuthorized())
{
	$arResult["NEED_AUTH"] = "Y";
}
else
{
	if ($arParams["PAGE_ID"] == "user_subscribe" && $arParams["USER_ID"] <= 0)
		$arResult["FatalError"] = GetMessage("SONET_C3_NO_USER_ID").".";
	elseif ($arParams["PAGE_ID"] == "group_subscribe" && $arParams["GROUP_ID"] <= 0)
		$arResult["FatalError"] = GetMessage("SONET_C3_NO_GROUP_ID").".";

	if (StrLen($arResult["FatalError"]) <= 0)
	{
		if ($arParams["PAGE_ID"] == "group_subscribe")
		{
			$arGroup = CSocNetGroup::GetByID($arParams["GROUP_ID"]);

			if ($arGroup)
			{
				$arResult["CurrentUserPerms"] = CSocNetUserToGroup::InitUserPerms(
					$GLOBALS["USER"]->GetID(),
					$arGroup,
					CSocNetUser::IsCurrentUserModuleAdmin()
				);

				if ($arResult["CurrentUserPerms"]["UserIsMember"])
				{
					$arResult["Group"] = $arGroup;
					$arResult["Subscribe"] = array();

					$arSubscribesTmp = array();
					$dbResultTmp = CSocNetLogEvents::GetList(
						array(),
						array("USER_ID" => $GLOBALS["USER"]->GetID(), "ENTITY_TYPE" => SONET_ENTITY_GROUP, "ENTITY_ID" => $arResult["Group"]["ID"])
					);
					while ($arResultTmp = $dbResultTmp->GetNext())
						$arSubscribesTmp[$arResultTmp["EVENT_ID"]] = $arResultTmp;

					$arFeaturesTmp = array();
					$dbResultTmp = CSocNetFeatures::GetList(
						array(),
						array("ENTITY_ID" => $arResult["Group"]["ID"], "ENTITY_TYPE" => SONET_ENTITY_GROUP)
					);
					while ($arResultTmp = $dbResultTmp->GetNext())
						$arFeaturesTmp[$arResultTmp["FEATURE"]] = $arResultTmp;

					$arResult["Subscribe"]["system"] = array(
						"SubscribeName" => GetMessage("SONET_C3_SYSTEM"),
						"Active" => array_key_exists("system", $arSubscribesTmp),
						"SiteID" => (array_key_exists("system", $arSubscribesTmp) ? $arSubscribesTmp["system"]["SITE_ID"] : ""),
						"MailEvent" => ((array_key_exists("system", $arSubscribesTmp) && $arSubscribesTmp["system"]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
					);

					global $arSocNetFeaturesSettings;
					foreach ($arSocNetFeaturesSettings as $feature => $arFeature)
					{
						if (!in_array(SONET_ENTITY_GROUP, $arFeature["allowed"]))
							continue;

						if (!array_key_exists("subscribe", $arFeature) || !$arFeature["subscribe"])
							continue;
							
						$arResult["Subscribe"][$feature] = array(
							"SubscribeName" => ((array_key_exists($feature, $arFeaturesTmp) && StrLen($arFeaturesTmp[$feature]["FEATURE_NAME"]) > 0) ? $arFeaturesTmp[$feature]["FEATURE_NAME"] : GetMessage("SUBSCRIBE_NAME1_".$feature)),
							"Active" => array_key_exists($feature, $arSubscribesTmp),
							"SiteID" => (array_key_exists($feature, $arSubscribesTmp) ? $arSubscribesTmp[$feature]["SITE_ID"] : ""),
							"MailEvent" => ((array_key_exists($feature, $arSubscribesTmp) && $arSubscribesTmp[$feature]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
						);
					}
				}
				else
				{
					$arResult["FatalError"] = GetMessage("SONET_C3_PERMS").".";
				}
			}
			else
			{
				$arResult["FatalError"] = GetMessage("SONET_C3_NO_GROUP").".";
			}
		}
		else
		{
			$dbUser = CUser::GetByID($arParams["USER_ID"]);
			$arResult["User"] = $dbUser->GetNext();

			if (is_array($arResult["User"]))
			{
				$arResult["User"]["NAME_FORMATTED"] = CUser::FormatName($arParams['NAME_TEMPLATE'], $arResult["User"], $bUseLogin);
				if ($arParams["SET_TITLE"] == "Y" || $arParams["SET_NAV_CHAIN"] != "N")
				{
					$arParams["TITLE_NAME_TEMPLATE"] = str_replace(
						array("#NOBR#", "#/NOBR#"), 
						array("", ""), 
						$arParams["NAME_TEMPLATE"]
					);
					$strTitleFormatted = CUser::FormatName($arParams['TITLE_NAME_TEMPLATE'], $arResult["User"], $bUseLogin);	
				}
			
				$arResult["CurrentUserPerms"] = CSocNetUserPerms::InitUserPerms(
					$GLOBALS["USER"]->GetID(),
					$arResult["User"]["ID"],
					CSocNetUser::IsCurrentUserModuleAdmin()
				);

				$arResult["Subscribe"] = array();

				$arSubscribesTmp = array();
				$dbResultTmp = CSocNetLogEvents::GetList(
					array(),
					array("USER_ID" => $GLOBALS["USER"]->GetID(), "ENTITY_TYPE" => SONET_ENTITY_USER, "ENTITY_ID" => $arResult["User"]["ID"])
				);
				while ($arResultTmp = $dbResultTmp->GetNext())
					$arSubscribesTmp[$arResultTmp["EVENT_ID"]] = $arResultTmp;

				$arFeaturesTmp = array();
				$dbResultTmp = CSocNetFeatures::GetList(
					array(),
					array("ENTITY_ID" => $arResult["User"]["ID"], "ENTITY_TYPE" => SONET_ENTITY_USER)
				);
				while ($arResultTmp = $dbResultTmp->GetNext())
					$arFeaturesTmp[$arResultTmp["FEATURE"]] = $arResultTmp;

				if ($arResult["CurrentUserPerms"]["Operations"]["viewprofile"])
				{
					$arResult["Subscribe"]["system"] = array(
						"SubscribeName" => GetMessage("SONET_C3_SYSTEM"),
						"Active" => array_key_exists("system", $arSubscribesTmp),
						"SiteID" => (array_key_exists("system", $arSubscribesTmp) ? $arSubscribesTmp["system"]["SITE_ID"] : ""),
						"MailEvent" => ((array_key_exists("system", $arSubscribesTmp) && $arSubscribesTmp["system"]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
					);
				}

				if ($arResult["CurrentUserPerms"]["Operations"]["viewfriends"])
				{
					$arResult["Subscribe"]["system_friends"] = array(
						"SubscribeName" => GetMessage("SONET_C3_SYSTEM_FR"),
						"Active" => array_key_exists("system_friends", $arSubscribesTmp),
						"SiteID" => (array_key_exists("system_friends", $arSubscribesTmp) ? $arSubscribesTmp["system_friends"]["SITE_ID"] : ""),
						"MailEvent" => ((array_key_exists("system_friends", $arSubscribesTmp) && $arSubscribesTmp["system_friends"]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
					);
				}

				if ($arResult["CurrentUserPerms"]["Operations"]["viewgroups"])
				{
					$arResult["Subscribe"]["system_groups"] = array(
						"SubscribeName" => GetMessage("SONET_C3_SYSTEM_GR"),
						"Active" => array_key_exists("system_groups", $arSubscribesTmp),
						"SiteID" => (array_key_exists("system_groups", $arSubscribesTmp) ? $arSubscribesTmp["system_groups"]["SITE_ID"] : ""),
						"MailEvent" => ((array_key_exists("system_groups", $arSubscribesTmp) && $arSubscribesTmp["system_groups"]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
					);
				}

				global $arSocNetFeaturesSettings;
				foreach ($arSocNetFeaturesSettings as $feature => $arFeature)
				{
					if (!in_array(SONET_ENTITY_USER, $arFeature["allowed"]))
						continue;

					if (!CSocNetFeaturesPerms::CanPerformOperation($GLOBALS["USER"]->GetID(), SONET_ENTITY_USER, $arResult["User"]["ID"], $feature, $arFeature["minoperation"][0], CSocNetUser::IsCurrentUserModuleAdmin()))
						continue;

					$arResult["Subscribe"][$feature] = array(
						"SubscribeName" => ((array_key_exists($feature, $arFeaturesTmp) && StrLen($arFeaturesTmp[$feature]["FEATURE_NAME"]) > 0) ? $arFeaturesTmp[$feature]["FEATURE_NAME"] : GetMessage("SUBSCRIBE_NAME_".$feature)),
						"Active" => array_key_exists($feature, $arSubscribesTmp),
						"SiteID" => (array_key_exists($feature, $arSubscribesTmp) ? $arSubscribesTmp[$feature]["SITE_ID"] : ""),
						"MailEvent" => ((array_key_exists($feature, $arSubscribesTmp) && $arSubscribesTmp[$feature]["MAIL_EVENT"] == "Y") ? "Y" : "N"),
					);
				}
			}
			else
			{
				$arResult["FatalError"] = GetMessage("SONET_P_USER_NO_USER").".";
			}
		}
	}

	if (StrLen($arResult["FatalError"]) <= 0)
	{
		$arResult["Urls"]["User"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_USER"], array("user_id" => $arParams["USER_ID"]));
		$arResult["Urls"]["Group"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_GROUP"], array("group_id" => $arParams["GROUP_ID"]));
		$arResult["Urls"]["MySubscribe"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_SUBSCRIBE"], array());

		if ($arParams["SET_TITLE"] == "Y")
		{
			if ($arParams["PAGE_ID"] == "group_subscribe")
				$APPLICATION->SetTitle($arResult["Group"]["NAME"].": ".GetMessage("SONET_C3_GROUP_SETTINGS"));
			else
				$APPLICATION->SetTitle($strTitleFormatted.": ".GetMessage("SONET_C3_USER_SETTINGS"));
		}
		if ($arParams["SET_NAV_CHAIN"] != "N")
		{
			if ($arParams["PAGE_ID"] == "group_subscribe")
			{
				$APPLICATION->AddChainItem($arResult["Group"]["NAME"], $arResult["Urls"]["Group"]);
				$APPLICATION->AddChainItem(GetMessage("SONET_C3_GROUP_SETTINGS"));
			}
			else
			{
				$APPLICATION->AddChainItem($strTitleFormatted, $arResult["Urls"]["User"]);
				$APPLICATION->AddChainItem(GetMessage("SONET_C3_USER_SETTINGS"));
			}
		}

		$arResult["ShowForm"] = "Input";

		if ($_SERVER["REQUEST_METHOD"]=="POST" && strlen($_POST["save"]) > 0 && check_bitrix_sessid())
		{
			$errorMessage = "";

			if ($arParams["PAGE_ID"] == "group_subscribe")
				CSocNetLogEvents::DeleteByUserAndEntity($GLOBALS["USER"]->GetID(), SONET_ENTITY_GROUP, $arResult["Group"]["ID"]);
			else
				CSocNetLogEvents::DeleteByUserAndEntity($GLOBALS["USER"]->GetID(), SONET_ENTITY_USER, $arResult["User"]["ID"]);

			foreach ($arResult["Subscribe"] as $feature => $arFeature)
			{
				if (!array_key_exists($feature."_active", $_REQUEST) || ($_REQUEST[$feature."_active"] != "S" && $_REQUEST[$feature."_active"] != "M"))
					continue;

				$idTmp = CSocNetLogEvents::Add(
					array(
						"USER_ID" => $GLOBALS["USER"]->GetID(),
						"ENTITY_TYPE" => ($arParams["PAGE_ID"] == "group_subscribe") ? SONET_ENTITY_GROUP : SONET_ENTITY_USER,
						"ENTITY_ID" => ($arParams["PAGE_ID"] == "group_subscribe") ? $arResult["Group"]["ID"] : $arResult["User"]["ID"],
						"EVENT_ID" => $feature,
						"SITE_ID" => (($arParams["PAGE_ID"] == "group_subscribe" && Defined("SITE_ID") && StrLen(SITE_ID) > 0) ? SITE_ID : false),
						"MAIL_EVENT" => ($_REQUEST[$feature."_active"] == "M") ? "Y" : "N",
					)
				);
				if (!$idTmp)
				{
					if ($e = $APPLICATION->GetException())
						$errorMessage .= $e->GetString();
				}
			}

			if (strlen($errorMessage) > 0)
			{
				$arResult["ErrorMessage"] = $errorMessage;
			}
			else
			{
				$arResult["ShowForm"] = "Confirm";
			}
		}
	}
}

$arResult["FriendsAllowed"] = COption::GetOptionString("socialnetwork", "allow_frields", "Y");

$this->IncludeComponentTemplate();
?>