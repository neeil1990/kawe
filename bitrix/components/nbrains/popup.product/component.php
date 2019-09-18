<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

if(empty($arParams['IBLOCK_ID']) || empty($arParams['ID']))
    return false;

$arResult = [];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE","PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "ID" => $arParams['ID']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
if($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();
    $arFields['PROPERTIES'] = $arProps;
    $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $arResult['ITEM'] = $arFields;
}

foreach($arResult['ITEM']['PROPERTIES']['ARTICLS']['DESCRIPTION'] as $val => &$art){

    $arDiscounts = CCatalogDiscount::GetDiscount($arParams['ID'], $arParams['IBLOCK_ID']);
    $discountPrice = CCatalogProduct::CountPriceWithDiscount(
        $arResult['ITEM']['PROPERTIES']['PRICES']['VALUE'][$val],
        "RUB",
        $arDiscounts
    );
    $arResult['ITEM']['PROPERTIES']['PRICES']['VALUE'][$val] = ($discountPrice) ? $discountPrice : $arResult['ITEM']['PROPERTIES']['PRICES']['VALUE'][$val];
}


$this->IncludeComponentTemplate();
