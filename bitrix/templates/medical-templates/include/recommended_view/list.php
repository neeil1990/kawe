<div class="goods__list goods__list-2">
    <?
    $arResult = $arParams['DATA'];
    foreach($arResult['ITEMS'] as $item):?>
        <?
        $price = priceDiscount($item['ID']);
        ?>
        <div class="goods__item goods__item_list">
            <?if($item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]):?>
                <div class="goods__alert">-<?=$item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]?>%</div>
            <?endif;?>
            <div class="goods__img">
                <a href="<?=$item['DETAIL_PAGE_URL'];?>"><img src="<?=$item['PREVIEW_PICTURE']?>" alt="<?=$item['NAME']?>"></a>
            </div>
            <div class="goods__content">
                <a href="<?=$item['DETAIL_PAGE_URL'];?>" class="goods__name"><?=$item['NAME']?></a>

                <? if($item['DESCRIPTION']): ?>
                <div class="goods__text">
                    <?=$item['DESCRIPTION']?>
                </div>
                <? endif; ?>
            </div>

            <div class="goods__main">
                <div class="goods__price"><?=$price['DISCOUNT_PRICE']?> ₽</div>
                <span>за штуку</span>
                <div class="goods__counter">
                    <div class="goods__counter_subtract">-</div>
                    <input type="text" class="goods__counter_input" id="goods__counter_input_<?=$item['ID']?>" value="1" readonly>
                    <div class="goods__counter_add">+</div>
                </div>
                <? if(count($item['PROPERTIES']['ARTICLS']['VALUE']) > 1): ?>
                    <a href="javascript:void(0)" class="goods__buy" onclick="$('#more_option_<?=$item[ID]?>').bPopup({zIndex:1000});">Купить</a>
                <?else:?>
                    <input type="hidden" name="article" value="<?=$item['PROPERTIES']['ARTICLS']['VALUE'][0]?>">
                    <a href="javascript:void(0)" class="goods__buy" onclick="addToBasket2(<?=$item['ID']?>, $('#goods__counter_input_<?=$item['ID']?>').val(),this);">Купить</a>
                <?endif;?>

            </div>
        </div>
    <? endforeach; ?>
</div>
