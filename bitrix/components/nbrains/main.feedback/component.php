<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */



$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());
$arParams["USE_CAPTCHA"] = $arParams["USE_CAPTCHA"];

$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

//var_dump($arParams['PROPERTY_CODE']);
//var_dump($arParams['IBLOCK_ID']);

$arPropertyFild = array();
foreach($arParams['PROPERTY_CODE'] as $code){
	$rsProp = CIBlockProperty::GetList(array(), array("ACTIVE"=>"Y", "IBLOCK_ID" => $arParams['IBLOCK_ID'],"CODE" => $code));
	if($arr = $rsProp->Fetch())
	{ $arPropertyField[] = $arr; }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
	$arResult["ERROR_MESSAGE"] = array();
	if(check_bitrix_sessid())
	{

		foreach($arPropertyField as $field){
			if($field['IS_REQUIRED'] == "Y"){
				if(strlen($_POST[$field['CODE']]) < 1)
					$arResult["ERROR_MESSAGE"][] = GetMessage("FIELD_ERROR").': '.$field['NAME'];
			}
		}

		if($arParams["USE_CAPTCHA"] == "Y")
		{
		    if($recaptcha = $_REQUEST['g-recaptcha-response']){

                $google_url = "https://www.google.com/recaptcha/api/siteverify";
                $secret = '6LdmHK4UAAAAAP5EQUdSGT1wg5lm99aLMwKWI9q8';
                $ip = $_SERVER['REMOTE_ADDR'];
                $url = $google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
                $res = file_get_contents($url, true);
                $res = json_decode($res, true);

                if(!$res['success']){
                    $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
                }
            }else
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");

		}

		if(empty($arResult["ERROR_MESSAGE"])){
			$el = new CIBlockElement;
			$PROP = array();
			foreach($arPropertyField as $field) {
				if($field['PROPERTY_TYPE'] == "S"){
					if($field["USER_TYPE"]){
						$PROP[$field['CODE']] = array("VALUE" => array("TEXT" => trim(strip_tags($_POST[$field['CODE']])),"TYPE" => "text"));
					}else{
						$PROP[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
					}
				}elseif($field['PROPERTY_TYPE'] == "L"){
					$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "CODE"=> $field["CODE"]));
					if($enum_fields = $property_enums->GetNext())
					{
						$PROP[$field['CODE']] = Array("VALUE" => $enum_fields['ID']);
					}
				}elseif($field['PROPERTY_TYPE'] == "F"){

					$img = $_FILES['FILE'];
					$fid = CFile::SaveFile($img, "vote");
					$PROP[$field['CODE']] = Array("VALUE" => $fid);

				}
			}

			$arLoadProductArray = Array(
				"IBLOCK_SECTION_ID" => false,
				"IBLOCK_ID"      => $arParams['IBLOCK_ID'],
				"PROPERTY_VALUES"=> $PROP,
				"NAME"           => trim(strip_tags($_POST[$arPropertyField[0]['CODE']])),
				"ACTIVE"         => "Y"
			);
			$PRODUCT_ID = $el->Add($arLoadProductArray);
		}


		if(empty($arResult["ERROR_MESSAGE"]))
		{
			$arFields = Array();
			if(isset($arParams['ROI_VISIT']) && $arParams['ROI_VISIT'])
			    $arFields['ROI_VISIT'] = $arParams['ROI_VISIT'];

			foreach($arPropertyField as $field){
				if($field['CODE'] == "PRODUCT_CART"){
					$arFields[$field['CODE']] = $_POST[$field['CODE']];
					CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID(), false);
				}else{
					$arFields[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
				}
				$arFields["EMAIL_TO"] = $arParams["EMAIL_TO"];
			}
			if(!empty($arParams["EVENT_MESSAGE_ID"]))
			{
				foreach($arParams["EVENT_MESSAGE_ID"] as $v)
					if(IntVal($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
			}
			else
			CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
			LocalRedirect($APPLICATION->GetCurPageParam("success=".$arResult["PARAMS_HASH"], Array("success")));
		}

		foreach($arPropertyField as $field){
			$arResult[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
		}
	}
	else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}
$arResult['USER_FIELD'] = $arPropertyField;


if($arParams["USE_CAPTCHA"] == "Y")
	$arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
