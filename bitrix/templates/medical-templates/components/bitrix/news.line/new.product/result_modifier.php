<?php
foreach($arResult["ITEMS"] as &$arItem){
    $db_props = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort" => "asc"), Array("CODE" => "CML2_ARTICLE"));
    if($ar_props = $db_props->Fetch())
        $arItem["ARTICLE"] = $ar_props['VALUE'];

}