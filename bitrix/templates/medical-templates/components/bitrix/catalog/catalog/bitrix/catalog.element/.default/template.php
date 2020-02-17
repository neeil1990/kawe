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
?>

	<div class="title"><?=htmlspecialchars_decode($arResult['NAME'])?></div>
	<div class="cart">

		<div class="cart__gallery">
			<!--<div class="cart__rate">
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star-o"></i>
			</div>-->

			<div class="cart__alert">new</div>

			<ul class="cart__slider">
				<? foreach($arResult['PHOTO'] as $photo):?>
					<?
					$arWaterMark = Array(
						array(
							"name" => "watermark",
							"position" => "center",
							"alpha_level" => "100",
							"type" => "image",
							"size" => "big",
							"file" => $_SERVER["DOCUMENT_ROOT"].'/watermark.png',
							"fill" => "exact",
						)
					);
					$arFileTmp = CFile::ResizeImageGet($photo, array("width" => 400, "height" => 400), BX_RESIZE_IMAGE_PROPORTIONAL, true, $arWaterMark);
					$arFileFull = CFile::ResizeImageGet($photo, false, BX_RESIZE_IMAGE_PROPORTIONAL, true, $arWaterMark);
					$arFileThumb = CFile::ResizeImageGet($photo, array("width" => 100, "height" => 100), BX_RESIZE_IMAGE_EXACT, true, false);
					?>
				<li class="cart__slider_item" data-thumb="<?=$arFileThumb['src']?>" data-src="<?=$arFileFull['src']?>">
					<img src="<?=$arFileTmp['src']?>" alt="">
				</li>
				<?endforeach;?>
			</ul>
		</div>

		<div class="cart__content">
			<? if($arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']): ?>
			<p class="article">Арт: <?=$arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']?></p>
			<br>
				<?if($arResult['PROPERTIES']['ARTICLS']['DESCRIPTION'][0]):?>
				<p>Варианты:</p>
				<div class="cart__wrapper">
					<?foreach($arResult['PROPERTIES']['ARTICLS']['DESCRIPTION'] as $val => $art):?>
					<label class="cart__label">
						<input type="radio" name="color" data-old-price="<?=CurrencyFormat($arResult['PRICES']['BASE']['OLD'][$val],"RUB");?>" data-price="<?=CurrencyFormat($arResult['PROPERTIES']['PRICES']['VALUE'][$val],$arResult['PRICES']['BASE']['CURRENCY'])?>" class="cart__radio" <?=($val == 0) ? "checked" : "";?> value="<?=$arResult['PROPERTIES']['ARTICLS']['VALUE'][$val]?>"><i></i>
						<?=$art?>
					</label>
					<?endforeach?>
				</div>
				<?else:?>
					<span>
						<input type="radio" name="color" data-old-price="<?=CurrencyFormat($arResult['PRICES']['BASE']['OLD'][0],"RUB");?>" data-price="<?=CurrencyFormat($arResult['PROPERTIES']['PRICES']['VALUE'][0],$arResult['PRICES']['BASE']['CURRENCY'])?>" class="cart__radio" checked value="<?=$arResult['PROPERTIES']['ARTICLS']['VALUE'][0]?>">
					</span>
				<? endif; ?>
			<? endif; ?>

<!--			<div class="cart__availability">В наличии</div>-->
			<? if($arResult['PRICES']['BASE']['DISCOUNT_DIFF']): ?>
				<div class="cart_old_price">
					<?=CurrencyFormat($arResult['PRICES']['BASE']['OLD'][0],"RUB");?>
				</div>
			<? endif; ?>

			<div class="cart__price <?=(!$arResult['PRICES']['BASE']['DISCOUNT_VALUE']) ? "tooltip" : ""?>">
				<?if($arResult['PRICES']['BASE']['DISCOUNT_VALUE']):?>
					<?=$arResult['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
				<?else:?>
					Цена по запросу
				<?endif;?>
			</div>

			<div class="cart__desc">за штуку</div>
			<div class="cart__actions">

				<div class="cart__counter goods__counter">
					<div class="goods__counter_subtract">-</div>
					<input type="text" class="goods__counter_input" value="1" readonly>
					<div class="goods__counter_add">+</div>
				</div>

				<a href="javascript:void(0)" class="cart__basket" onclick="addToBasket2(<?=$arResult['ID']?>, $('.goods__counter_input').val(),this);">В корзину</a>
			</div>
		</div>
	</div>

	<div class="tabs">
		<?if($arResult['DETAIL_TEXT']):?>
		<a href="#" class="tabs__nav">Описание</a>
		<div class="tabs__content text">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
		<?endif?>

		<?if($arResult['PROPERTIES']['CML2_ATTRIBUTES']['DESCRIPTION'][0]):?>
		<a href="#" class="tabs__nav">Характеристики</a>
		<div class="tabs__content text">
			<table>
				<? foreach($arResult['PROPERTIES']['CML2_ATTRIBUTES']['DESCRIPTION'] as $key => $attr): ?>
				<tr>
					<td><?=$attr?></td>
					<td><?=$arResult['PROPERTIES']['CML2_ATTRIBUTES']['~VALUE'][$key]?></td>
				</tr>
				<?endforeach;?>
			</table>
		</div>
		<?endif?>

		<?if($arResult['PROPERTIES']['CML2_COMPLECT']['VALUE']['TEXT']):?>
		<a href="#" class="tabs__nav">Комплектация</a>
		<div class="tabs__content text">
			<?=$arResult['PROPERTIES']['CML2_COMPLECT']['~VALUE']['TEXT']?>
		</div>
		<?endif;?>

	</div>

    <? if($arResult['PROPERTIES']['RECOMMEND']['VALUE']): ?>
        <hr class="hr">

        <div class="title">
            <?=($arResult['PROPERTIES']['TITLE_SLIDER']['VALUE'] ? htmlspecialcharsbx($arResult['PROPERTIES']['TITLE_SLIDER']['VALUE']) : "Рекомендуемые товары")?>
        </div>
    <? endif; ?>








