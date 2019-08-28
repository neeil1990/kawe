<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
	return false;


?>
		<div class="goods__list goods__list-2">
			<? foreach($arResult['ITEMS'] as $item):?>
			<div class="goods__item goods__item_list">
				<?if($item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]):?>
					<div class="goods__alert">-<?=$item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]?>%</div>
				<?endif;?>
				<div class="goods__img">
					<a href="<?=$item['DETAIL_PAGE_URL'];?>"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>"></a>
				</div>
				<div class="goods__content">
					<a href="<?=$item['DETAIL_PAGE_URL'];?>" class="goods__name"><?=$item['NAME']?></a>
					<div class="goods__text">
						<?=$item['PREVIEW_TEXT']?>
					</div>
					<!--<div class="goods__availability false">Нет в наличии</div>-->
				</div>
				<div class="goods__main">
					<!--<div class="goods__rate">
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star-o"></i>
					</div>-->
					<?if($item['PRICES']['BASE']['VALUE']):?>
						<div class="goods__price"><?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?></div>
					<?else:?>
						<div class="goods__price tooltip" style="font-size: 15px;">Цена по запросу</div>
					<?endif;?>
					<span>за штуку</span>
					<div class="goods__article">Арт: <?=TruncateText($item['PROPERTIES']['CML2_ARTICLE']['VALUE'], 12);?></div>
                    <div class="goods__article_list">
                        <select name="color" class="article">
                            <?foreach($item['PROPERTIES']['ARTICLS']['DESCRIPTION'] as $val => $art):?>
                                <option
                                        value="<?=$item['PROPERTIES']['ARTICLS']['VALUE'][$val]?>"
                                        data-price="<?=CurrencyFormat($item['PROPERTIES']['PRICES']['VALUE'][$val],$item['PRICES']['BASE']['CURRENCY'])?>"
                                    <?if($val == 0):?> selected="selected" <?endif;?>
                                ><?=$art?></option>
                            <?endforeach?>
                        </select>
                    </div>
					<div class="goods__counter">
						<div class="goods__counter_subtract">-</div>
						<input type="text" class="goods__counter_input" id="goods__counter_input_<?=$item['ID']?>" value="1" readonly>
						<div class="goods__counter_add">+</div>
					</div>
					<a href="javascript:void(0)" class="goods__buy" onclick="addToBasket2(<?=$item['ID']?>, $('#goods__counter_input_<?=$item['ID']?>').val(),this);">Купить</a>
				</div>
			</div>
			<? endforeach; ?>
		</div>

		<?
		if ($arParams["DISPLAY_BOTTOM_PAGER"])
		{
			?><? echo $arResult["NAV_STRING"]; ?><?
		}
		?>





