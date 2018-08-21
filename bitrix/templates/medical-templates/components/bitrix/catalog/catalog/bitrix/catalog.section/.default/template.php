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
		<div class="goods__list">
			<? foreach($arResult['ITEMS'] as $item):?>
			<div class="goods__item">
				<div class="goods__item_wrapper">
					<?if($item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]):?>
					<div class="goods__alert">-<?=$item["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"]?>%</div>
					<?endif;?>
					<!--<div class="goods__rate">
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star-o"></i>
					</div>-->
					<div class="goods__img">
						<a href="<?=$item['DETAIL_PAGE_URL'];?>"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>"></a>
					</div>
					<a href="<?=$item['DETAIL_PAGE_URL'];?>" class="goods__name"><?=$item['NAME']?></a>
					<!--<div class="goods__desc">
						<div class="goods__availability">В наличии</div>
						<?/* if($item['PROPERTIES']['CML2_ARTICLE']['VALUE']): */?>
						<div class="goods__article">Арт: <?/*=TruncateText($item['PROPERTIES']['CML2_ARTICLE']['VALUE'], 12)*/?></div>
						<?/* endif; */?>
					</div>-->
					<div class="goods__info">
						<div class="goods__prices">

							<?if($item['PRICES']['BASE']['VALUE']):?>
								<div class="goods__price"><?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?></div>
							<?else:?>
								<div class="goods__price tooltip" style="font-size: 15px;">Цена по запросу</div>
							<?endif;?>

							<div class="goods__counter">
								<div class="goods__counter_subtract">-</div>
								<input type="text" class="goods__counter_input" id="goods__counter_input_<?=$arResult['ID']?>" value="1" readonly>
								<div class="goods__counter_add">+</div>
							</div>
							<span>за штуку</span>
						</div>
						<a href="javascript:void(0)" class="goods__basket icon-basket" onclick="addToBasket2(<?=$item['ID']?>, $('#goods__counter_input_<?=$item['ID']?>').val(),this);"></a>
					</div>
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





