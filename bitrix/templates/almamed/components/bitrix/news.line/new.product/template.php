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

<ul class="goods__slider">

	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$price = priceDiscount($arItem['ID']);
	?>
	<li class="goods__item">
		<div class="goods__item_wrapper">
			<? if($price['DISCOUNT']): ?>
			<div class="goods__alert"><?=$price['DISCOUNT']?>%</div>
			<? endif; ?>
			<!--<div class="goods__rate">
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star-o"></i>
			</div>-->
			<div class="goods__img">
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="goods"></a>
			</div>
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="goods__name"><?=$arItem['NAME']?></a>
			<div class="goods__info">
				<div class="goods__prices">

					<div class="goods__price">
						<?if($price['DISCOUNT_PRICE']):?>
							<?=$price['DISCOUNT_PRICE']?>
						<?else:?>
							Цена по запросу
						<?endif;?>
					</div>

					<div class="goods__counter">
						<div class="goods__counter_subtract">-</div>
						<input type="text" class="goods__counter_input" id="goods__counter_input_<?=$arItem['ID']?>" value="1" readonly>
						<div class="goods__counter_add">+</div>
					</div>
					<span>за штуку</span>
				</div>
				<a href="javascript:void(0)" class="goods__basket icon-basket" onclick="addToBasket2(<?=$arItem['ID']?>, $('#goods__counter_input_<?=$arItem['ID']?>').val(),this);"></a>
			</div>
		</div>
	</li>
	<?endforeach;?>

</ul>



