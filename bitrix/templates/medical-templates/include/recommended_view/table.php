<div class="goods__list">
    <?
    $arResult = $arParams['DATA'];
    foreach($arResult['ITEMS'] as $item):?>
        <?
        $price = priceDiscount($item['ID']);
        ?>
        <div class="goods__item">
            <div class="goods__item_wrapper">
                <?if($item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]):?>
                    <div class="goods__alert">-<?=$item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]?>%</div>
                <?endif;?>

                <? if($item['PROPERTIES']['BADGE']['VALUE']): ?>
                    <div class="goods__badge">
                        <div class="badge" style="background-color: <?=$item['PROPERTIES']['BADGE']['DESCRIPTION']?>">
                            <span><?=$item['PROPERTIES']['BADGE']['VALUE'];?></span>
                        </div>
                    </div>
                <? endif; ?>

                <div class="goods__img">
                    <a href="<?=$item['DETAIL_PAGE_URL'];?>"><img src="<?=$item['PREVIEW_PICTURE']?>" alt="<?=$item['NAME']?>"></a>
                </div>

                <a href="<?=$item['DETAIL_PAGE_URL'];?>" class="goods__name">
                    <?=$item['NAME']?>
                    <? if($item['DESCRIPTION']): ?>
                        <br/>
                        <span class="goods__name__desc"><?=$item['DESCRIPTION']?></span>
                    <? endif; ?>
                </a>

                <div class="goods__info">
                    <div class="goods__prices">

                        <div class="goods__price"><?=$price['DISCOUNT_PRICE']?> ₽</div>

                        <div class="goods__counter">
                            <div class="goods__counter_subtract">-</div>
                            <input type="text" class="goods__counter_input" id="goods__counter_input_<?=$arResult['ID']?>" value="1" readonly>
                            <div class="goods__counter_add">+</div>
                        </div>
                        <span>за штуку</span>
                    </div>
                    <? if(count($item['PROPERTIES']['ARTICLS']['VALUE']) > 1): ?>
                        <a href="javascript:void(0)" class="goods__buy_thumbs" onclick="$('#more_option_<?=$item[ID]?>').bPopup({zIndex:1000});">Купить</a>
                    <?else:?>
                        <input type="hidden" name="article" value="<?=$item['PROPERTIES']['ARTICLS']['VALUE'][0]?>">
                        <a href="javascript:void(0)" class="goods__buy_thumbs" onclick="addToBasket2(<?=$item['ID']?>, $('#goods__counter_input_<?=$item['ID']?>').val(),this);">Купить</a>
                    <?endif;?>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
