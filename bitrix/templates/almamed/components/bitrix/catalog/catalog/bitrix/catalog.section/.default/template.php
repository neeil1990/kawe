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

		<form class="filter">
			<label class="filter__label filter__sort">
				Сортировать по:
				<select name="sort" class="iselect">
					<option value="1">Сначала дешевле</option>
					<option value="2">Сначала дешевле</option>
					<option value="2">Название: А - Я</option>
					<option value="2">По популярности</option>
				</select>
			</label>
			<label class="filter__label">
				<input type="checkbox" class="filter__checkbox"><i class="icon-checkbox"></i>
				В наличии
			</label>
			<label class="filter__label">
				<input type="checkbox" class="filter__checkbox"><i class="icon-checkbox"></i>
				Со скидкой
			</label>
			<div class="filter__output">
				<span>Выводить по:</span>
				<a href="#" class="filter__output_link active">20</a>
				<a href="#" class="filter__output_link">40</a>
				<a href="#" class="filter__output_link">100</a>
			</div>
			<div class="filter__view">
				<a href="#" class="filter__view_link active">
					<svg class="icon icon-grid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/sprite.svg#icon-grid"></use></svg>
				</a>
				<a href="#" class="filter__view_link">
					<svg class="icon icon-list"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/sprite.svg#icon-list"></use></svg>
				</a>
			</div>
		</form>

		<hr class="hr">

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

							<div class="goods__price">
								<?if($item['PRICES']['BASE']['DISCOUNT_VALUE']):?>
									<?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
								<?else:?>
									Цена по запросу
								<?endif;?>
							</div>

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





