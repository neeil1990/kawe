<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if (!CModule::IncludeModule('bizproc')):
	return false;
endif;

if (!function_exists("BPWSInitParam"))
{
	function BPWSInitParam(&$arParams, $name)
	{
		$arParams[$name] = trim($arParams[$name]);
		if ($arParams[$name] <= 0)
			$arParams[$name] = trim($_REQUEST[$name]);
		if ($arParams[$name] <= 0)
			$arParams[$name] = trim($_REQUEST[strtolower($name)]);
	}
}

global $order, $by;
if (empty($_REQUEST["by"])): 
	$by = "modified";
	$order = "asc";
endif;

/********************************************************************
				Input params
********************************************************************/
/***************** BASE ********************************************/
	$arParams["MODULE_ID"] = trim(empty($arParams["MODULE_ID"]) ? $_REQUEST["module_id"] : $arParams["MODULE_ID"]);
	$arParams["ENTITY"] = trim(empty($arParams["ENTITY"]) ? $_REQUEST["entity"] : $arParams["ENTITY"]);
	$arParams["DOCUMENT_TYPE"] = trim(empty($arParams["DOCUMENT_TYPE"]) ? $_REQUEST["document_type"] : $arParams["DOCUMENT_TYPE"]);
	$arParams["DOCUMENT_ID"] = trim(empty($arParams["DOCUMENT_ID"]) ? $_REQUEST["document_id"] : $arParams["DOCUMENT_ID"]);
//***************** URL ********************************************/
	$URL_NAME_DEFAULT = array(
		"document" => "PAGE_NAME=bizproc_document&ID=#ID#");

	$arResult["back_url"] = urlencode(empty($_REQUEST["back_url"]) ? $APPLICATION->GetCurPageParam() : $_REQUEST["back_url"]);

	foreach ($URL_NAME_DEFAULT as $URL => $URL_VALUE)
	{
		$arParams[strToUpper($URL)."_URL"] = trim($arParams[strToUpper($URL)."_URL"]);
		if (empty($arParams[strToUpper($URL)."_URL"])):
			$arParams[strToUpper($URL)."_URL"] = $APPLICATION->GetCurPage();
		endif;
		$arParams["~".strToUpper($URL)."_URL"] = $arParams[strToUpper($URL)."_URL"];
		$arParams[strToUpper($URL)."_URL"] = htmlspecialchars($arParams["~".strToUpper($URL)."_URL"]);
	}
/***************** ADDITIONAL **************************************/
	$arParams["PAGE_ELEMENTS"] = intVal(intVal($arParams["PAGE_ELEMENTS"]) > 0 ? $arParams["PAGE_ELEMENTS"] : 50);
	$arParams["PAGE_NAVIGATION_TEMPLATE"] = trim($arParams["PAGE_NAVIGATION_TEMPLATE"]);
	$arParams["GRID_ID"] = "bizproc_history_".$arParams["DOCUMENT_ID"][2]; 
/***************** STANDART ****************************************/
	$arParams["SET_TITLE"] = ($arParams["SET_TITLE"] == "N" ? "N" : "Y");
/********************************************************************
				/Input params
********************************************************************/

/********************************************************************
				Main data
********************************************************************/
$arError = array();
if (strlen($arParams["MODULE_ID"]) <= 0)
	$arError[] = array(
		"id" => "empty_module_id",
		"text" => GetMessage("BPATT_NO_MODULE_ID"));
if (strlen($arParams["ENTITY"]) <= 0)
	$arError[] = array(
		"id" => "empty_entity",
		"text" => GetMessage("BPABS_EMPTY_ENTITY"));
if (strlen($arParams["DOCUMENT_TYPE"]) <= 0)
	$arError[] = array(
		"id" => "empty_document_type",
		"text" => GetMessage("BPABS_EMPTY_DOC_TYPE"));
if (strlen($arParams["DOCUMENT_ID"]) <= 0)
	$arError[] = array(
		"id" => "empty_document_id",
		"text" => GetMessage("BPABS_EMPTY_DOC_ID"));

$arParams["DOCUMENT_TYPE"] = array($arParams["MODULE_ID"], $arParams["ENTITY"], $arParams["DOCUMENT_TYPE"]);
$arParams["DOCUMENT_ID"] = array($arParams["MODULE_ID"], $arParams["ENTITY"], $arParams["DOCUMENT_ID"]);

if (empty($arError))
{
	if (!CBPDocument::CanUserOperateDocument(
		CBPCanUserOperateOperation::WriteDocument, 
		$GLOBALS["USER"]->GetID(),
		$arParams["DOCUMENT_ID"],
		array("UserGroups" => $GLOBALS["USER"]->GetUserGroupArray()))):
		$arError[] = array(
			"id" => "access_denied",
			"text" => GetMessage("BPADH_NO_PERMS"));
	endif;
}
if (!empty($arError))
{
	$e = new CAdminException($arError);
	ShowError($e->GetString());
	return false;
}
/********************************************************************
				/Main data
********************************************************************/

$arResult["VERSIONS"] = array();
$arResult["GRID_VERSIONS"] = array(); 
$arResult["ERROR_MESSAGE"] = "";

/********************************************************************
				Action
********************************************************************/
if (!empty($_REQUEST['action']) && !empty($_REQUEST["ID"]) && check_bitrix_sessid())
{
	$arError = array();
	$ID = $_REQUEST["ID"];
	switch ($_REQUEST['action'])
	{
		case "delete":
			CBPHistoryService::Delete($ID, $arParams["DOCUMENT_ID"]);
			break;
		case "recover":
			try
			{
				if (!CBPHistoryService::RecoverDocumentFromHistory($ID))
				{
					$arError[] = array(
						"id" => "not recover", 
						"text" => GetMessage("BPADH_RECOVERY_ERROR"));
				}
			}
			catch (Exception $e)
			{
				$arError[] = array(
					"id" => "not recover", 
					"text" => $e->getMessage());
			}
			break;
	}
	if (!empty($arError)):
		$e = new CAdminException($arError);
		$arResult["ERROR_MESSAGE"] = $e->GetString();
	else:
		LocalRedirect($APPLICATION->GetCurPageParam("", array("action", "ID", "sessid")));
	endif;
}
/********************************************************************
				/Action
********************************************************************/

/********************************************************************
				Data
********************************************************************/
$history = new CBPHistoryService();
$db_res = $history->GetHistoryList(
	array(strtoupper($by) => strtoupper($order)),
	array("DOCUMENT_ID" => $arParams["DOCUMENT_ID"]),
	false,
	false,
	array("ID", "DOCUMENT_ID", "NAME", "MODIFIED", "USER_ID", "USER_NAME", "USER_LAST_NAME", "USER_LOGIN")
);
if ($db_res)
{
	$db_res->NavStart($arParams["PAGE_ELEMENTS"], false);
	$arResult["NAV_RESULT"] = $db_res;
	$arResult["NAV_STRING"] = $db_res->GetPageNavStringEx($navComponentObject, GetMessage("BPADH_NAV_TITLE"), $arParams["PAGE_NAVIGATION_TEMPLATE"], true);
	while ($res = $db_res->GetNext()) 
	{
		$res["USER"] = trim($res["USER_NAME"]." ".$res["USER_LAST_NAME"]);
		$res["USER"] = (empty($res["USER"]) ? trim($res["USER_LOGIN"]) : $res["USER"]);
		$res["URL"] = array(
			"VIEW" => CComponentEngine::MakePathFromTemplate($arParams["~DOCUMENT_URL"], $res), 
			"RECOVER" => $APPLICATION->GetCurPageParam("ID=".$res["ID"]."&action=recover&".bitrix_sessid_get(), array("ID", "action", "sessid")),
			"DELETE" => $APPLICATION->GetCurPageParam("ID=".$res["ID"]."&action=delete&".bitrix_sessid_get(), array("ID", "action", "sessid")));
		foreach ($res["URL"] as $key => $val):
			$res["URL"]["~".$key] = $val;
			$res["URL"][$key] = htmlspecialchars($val);
		endforeach;
		$arResult["VERSIONS"][$res["ID"]] = $res;
		$arResult["GRID_VERSIONS"][$res["ID"]] = array(
				"id" => $res["ID"], 
				"data" => $res, 
				"actions" => array(
					array(
						"ICONCLASS" => "bizproc-history-action-recover",
						"TEXT" => GetMessage("BPADH_RECOVERY_DOC"),
						"ONCLICK" => "jsUtils.Redirect([], '".CUtil::JSEscape($res["URL"]["~RECOVER"])."');"), 
					array(
						"ICONCLASS" => "bizproc-history-action-delete",
						"TEXT" => GetMessage("BPADH_DELETE_DOC"),
						"ONCLICK" => 'if (confirm(\''.
							CUtil::JSEscape(GetMessage("BPADH_DELETE_DOC_CONFIRM")).'\')) {jsUtils.Redirect([], \''.CUtil::JSEscape($res["URL"]["~DELETE"]).'\');}')), 
				"columns" => array(
					"NAME" => '<a href="'.$res["URL"]["VIEW"].'" title="'.GetMessage("BPADH_VIEW_DOC").'">'.$res["NAME"].'</a>'), 
				"editable" => false); 
	}
}

/********************************************************************
				/Data
********************************************************************/

$this->IncludeComponentTemplate();

/********************************************************************
				Standart operations
********************************************************************/
if($arParams["SET_TITLE"] == "Y")
{
	$APPLICATION->SetTitle(GetMessage("BPADH_TITLE"));
}
/********************************************************************
				/Standart operations
********************************************************************/
?>