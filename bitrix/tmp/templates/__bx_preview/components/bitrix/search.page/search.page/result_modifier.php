<?php

if(count($arResult["SEARCH"])>0){

    foreach($arResult["SEARCH"] as &$arItem){

        $arSelect = Array("ID", "NAME","PREVIEW_PICTURE","PROPERTY_CML2_ARTICLE");
        $arFilter = Array("IBLOCK_ID" => $arItem['PARAM2'],"ID" => $arItem['ITEM_ID'], "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->Fetch())
        {
            $price = priceDiscount($ob['ID']);
            $arItem['PREVIEW_PICTURE'] = CFile::GetPath($ob["PREVIEW_PICTURE"]);
            $arItem['PRICE'] = CurrencyFormat($price['DISCOUNT_PRICE'], 'RUB');
            $arItem['DISCOUNT'] = $price['DISCOUNT'];
            $arItem['ARTICLE'] = $ob['PROPERTY_CML2_ARTICLE_VALUE'];
        }
    }
}