<?php

global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "nbrains:menu.sections",
    "",
    array(
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "1",
        "IBLOCK_ID" => IBLOCK_CATALOG,
        "IBLOCK_TYPE" => "1c_catalog",
        "ID" => $_REQUEST["CODE"],
        "IS_SEF" => "Y",
        "SECTION_URL" => "",
        "SEF_BASE_URL" => "/catalog/",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/"
    ),
    false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>
