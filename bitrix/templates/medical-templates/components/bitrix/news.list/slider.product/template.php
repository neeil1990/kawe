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

<ul class="full-slider__wrapper">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li class="full-slider__item" onclick="window.location.href=<?=$arItem['CODE']?>" style="cursor: pointer">
		<div class="full-slider__item_wrapper">
			<? if($arItem["PROPERTIES"]["SALE"]["VALUE"]): ?>
			<div class="full-slider__alert"><?=$arItem["PROPERTIES"]["SALE"]["VALUE"]?></div>
			<? endif; ?>
			<div class="full-slider__img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
			</div>
			<div class="full-slider__content">
				<div class="full-slider__offer"><?=$arItem['NAME']?></div>
				<!--<div class="full-slider__rate">
					<i class="icon-star"></i>
					<i class="icon-star"></i>
					<i class="icon-star"></i>
					<i class="icon-star"></i>
					<i class="icon-star-o"></i>
				</div>-->
				<div class="full-slider__prices">
					<div class="full-slider__price"><?=$arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"]?></div>
					<div class="full-slider__price-old"><?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?></div>
					<span><?=$arItem["PROPERTIES"]["COUNT"]["VALUE"]?></span>
				</div>
				<div class="full-slider__categories"><?=$arItem["PROPERTIES"]["GROUP_PRODUCT"]["VALUE"]?></div>
				<a href="#" class="full-slider__title"><?=$arItem["PROPERTIES"]["NAME_PRODUCT"]["VALUE"]?></a>
				<div class="full-slider__article"><?=$arItem["PROPERTIES"]["ARTICL"]["VALUE"]?></div>
				<div class="full-slider__info">
					<div class=""></div>
					<a href="#" class="subscribe__btn" style="text-decoration: none">Подробнее</a>
				</div>
			</div>
		</div>
	</li>
	<? endforeach;?>
</ul>


