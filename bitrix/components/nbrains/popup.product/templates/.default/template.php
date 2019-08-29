<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$item = $arResult['ITEM'];
?>

<? if(count($item['PROPERTIES']['ARTICLS']['VALUE']) > 1): ?>
    <div class="more_options" id="more_option_<?=$item['ID']?>">
        <span class="button b-close"><span>&times;</span></span>
        <div class="more_potions-p-head">
            Дополнительные параметры товара
        </div>
        <div class="goods__list goods__list-2">
            <?foreach($item['PROPERTIES']['ARTICLS']['DESCRIPTION'] as $val => $art):?>
                <div class="goods__item goods__item_list">
                    <div class="goods__img">
                        <img src="<?=$item['PREVIEW_PICTURE']?>" alt="<?=$item['NAME']?>">
                    </div>
                    <div class="goods__content">
                        <a href="#" class="goods__name">
                            <?=$item['NAME']?>
                        </a>
                        <div class="goods__text">
                            <?if($art)?>
                            <p>Тип: <strong class="red"><?=$art?></strong></p>

                            <? if($item['PROPERTIES']['ARTICLS']['VALUE'][$val]) ?>
                            <p>Артикул: <strong><?=$item['PROPERTIES']['ARTICLS']['VALUE'][$val]?></strong></p>
                        </div>
                    </div>
                    <input type="hidden" name="article" value="<?=$item['PROPERTIES']['ARTICLS']['VALUE'][$val]?>">
                    <input type="hidden" name="color" value="<?=$art?>">

                    <div class="goods__main">

                        <div class="goods__price">
                            <?=CurrencyFormat($item['PROPERTIES']['PRICES']['VALUE'][$val],"RUB")?>
                        </div>
                        <span>за штуку</span>

                        <div class="goods__counter">
                            <div class="goods__counter_subtract">-</div>
                            <input type="text" class="goods__counter_input" value="1" readonly>
                            <div class="goods__counter_add">+</div>
                        </div>
                        <a href="javascript:void(0)" class="goods__buy" onclick="addToBasket2(<?=$item['ID']?>, $(this).closest('.goods__item').find('.goods__counter_input').val(),this);">Купить</a>
                    </div>
                </div>
            <?endforeach?>
        </div>
    </div>
<?endif;?>