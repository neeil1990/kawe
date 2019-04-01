<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>


		<div class="title"><?=GetMessage("SEARCH")?>:</div>

	<?if(count($arResult["SEARCH"])>0):?>

		<div class="goods__list goods__list-2">
			<?foreach($arResult["SEARCH"] as $arItem):?>
			<div class="goods__item goods__item_list">
				<input type="hidden" name="article" class="article" value="<?=$arItem['ARTICLE']?>">
				<? if($arItem['DISCOUNT']): ?>
				<div class="goods__alert"><?=$arItem['DISCOUNT'];?>%</div>
				<? endif; ?>
				<div class="goods__img">
					<img src="<?=$arItem['PREVIEW_PICTURE'];?>" alt="goods">
				</div>
				<div class="goods__content">
					<a href="<?echo $arItem["URL"]?>" class="goods__name"><?echo $arItem["TITLE_FORMATED"]?></a>
					<div class="goods__text">
						<?echo $arItem["BODY_FORMATED"]?>
					</div>
					<div class="goods__availability">В наличии</div>
				</div>
				<div class="goods__main">
					<!--<div class="goods__rate">
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star-o"></i>
					</div>-->

					<div class="goods__price">
						<?if($arItem['PRICE']):?>
							<?=$arItem['PRICE']?>
						<?else:?>
							Цена по запросу
						<?endif;?>
					</div>
					<span>за штуку</span>
					<!--<div class="goods__article">Арт: <?/*=$arItem['ARTICLE'];*/?></div>-->
					<div class="goods__counter">
						<div class="goods__counter_subtract">-</div>
						<input type="text" class="goods__counter_input" id="goods__counter_input_<?=$arItem['ITEM_ID']?>" value="1" readonly>
						<div class="goods__counter_add">+</div>
					</div>
					<a href="javascript:void(0)" onclick="addToBasket2(<?=$arItem['ITEM_ID']?>, $('#goods__counter_input_<?=$arItem['ITEM_ID']?>').val(),this);" class="goods__buy">Купить</a>
				</div>
			</div>
			<?endforeach;?>

		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>

	<?else:?>
		<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
	<?endif;?>


