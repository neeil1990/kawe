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
    $arSlider = explode('@', $p, 2);
    $title = $arSlider[0];
    $jProduct = json_decode($arSlider[1], true);

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
    }
    ?>
<div class="title"><?=$title;?></div>
<div class="goods">
    <ul class="goods__slider">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $price = priceDiscount($arItem['ID']);
            ?>
            <li class="goods__item">
                <div class="goods__item_wrapper">

                    <div class="goods__img">
                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']?>" alt="goods"></a>
                    </div>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="goods__name">
                        <?=($jProduct[$arItem['ID']][0]) ?: $arItem['NAME']?>

                        <? if($jProduct[$arItem['ID']][1]): ?>
                            <br/>
                            <span class="goods__name__desc"><?=$jProduct[$arItem['ID']][1]?></span>
                        <? endif; ?>
                    </a>
                    <div class="goods__info">
                        <div class="goods__prices">

                            <div class="goods__price"><?=$price['DISCOUNT_PRICE']?> ₽</div>

                            <div class="goods__counter">
                                <div class="goods__counter_subtract">-</div>
                                <input type="text" class="goods__counter_input" id="goods__counter_input_<?=$arItem['ID']?>" value="1" readonly>
                                <div class="goods__counter_add">+</div>
                            </div>
                            <span>за штуку</span>
                        </div>
                        <? if(count($arItem['ARTICLS']['VALUE']) > 1): ?>
                            <a href="javascript:void(0)" class="goods__basket icon-basket" onclick="$('#more_option_<?=$arItem[ID]?>').bPopup({zIndex:1000});"></a>
                        <?else:?>
                            <input type="hidden" name="article" value="<?=$arItem['ARTICLS']['VALUE'][0]?>">
                            <a href="javascript:void(0)" class="goods__basket icon-basket" onclick="addToBasket2(<?=$arItem['ID']?>, $('#goods__counter_input_<?=$arItem['ID']?>').val(),this);"></a>
                        <?endif;?>
                    </div>
                </div>
            </li>
        <?endforeach;?>
    </ul>
</div>
<? endforeach;?>
