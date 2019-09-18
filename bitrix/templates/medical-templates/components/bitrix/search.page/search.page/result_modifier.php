<?php

if(count($arResult["SEARCH"])>0){

    foreach($arResult["SEARCH"] as &$arItem){

        $arSelect = Array("ID", "IBLOCK_ID", "NAME","PREVIEW_PICTURE","PROPERTY_*");
        $arFilter = Array("IBLOCK_ID" => $arItem['PARAM2'],"ID" => $arItem['ITEM_ID'], "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();

            $price = priceDiscount($arFields['ID']);
            $arItem['PREVIEW_PICTURE'] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
            $arItem['PRICE'] = CurrencyFormat($price['DISCOUNT_PRICE'], 'RUB');
            $arItem['DISCOUNT'] = ($price['RESULT_PRICE']['PERCENT']) ? round($price['RESULT_PRICE']['PERCENT']) : 0;
            $arItem['ARTICLS'] = $arProps['ARTICLS'];
        }
    }
}