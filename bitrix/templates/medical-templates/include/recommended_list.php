<?php
if(!$arParams['SECTION']['UF_RECOMMENDED_LIST'])
    return false;
?>
<hr class="hr">

<style>
    .goods__name__desc{
        font-weight: 400;
        font-size: smaller;
    }
</style>

<? foreach ($arParams['SECTION']['UF_RECOMMENDED_LIST'] as $p):
    $arSlider = explode('@', $p, 3);
    $title = $arSlider[0];
    $jProduct = json_decode($arSlider[1], true);

    if($jProduct && $arSlider[2]){
        $arResult = [];
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL","PROPERTY_*");
        $arFilter = Array("IBLOCK_ID" => $arParams['SECTION']['IBLOCK_ID'], "ID" => array_keys($jProduct));
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();

            $arResult['ITEMS'][$arFields['ID']] = $arFields;
            $arResult['ITEMS'][$arFields['ID']]['PREVIEW_PICTURE'] = CFile::GetPath($arFields['PREVIEW_PICTURE']);
            $arResult['ITEMS'][$arFields['ID']]['ARTICLS'] = $arProps['ARTICLS'];
            $arResult['ITEMS'][$arFields['ID']]['NAME'] = ($jProduct[$arFields['ID']][0]) ?: $arFields['NAME'];
            $arResult['ITEMS'][$arFields['ID']]['DESCRIPTION'] = $jProduct[$arFields['ID']][1];
        }
    }
    ?>
<div class="title"><?=$title;?></div>

    <?
    /* RECOMMENDED VIEW */
    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/recommended_view/". trim($arSlider[2]) .".php", Array("DATA" => $arResult), Array(
        "MODE"      => "php",
        "NAME"      => "",
        "TEMPLATE"  => "",
        "SHOW_BORDER" => false,
    ));
    ?>

<? endforeach;?>
