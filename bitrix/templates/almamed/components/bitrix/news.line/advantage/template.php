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
<div class="features">
	<div class="container">
		<div class="features__title"><span><span>НАШИ</span> <span>ПРЕИМУЩЕСТВА</span></span></div>
		<div class="features__list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="features__item">
				<div class="features__icon icon-features_<?=$arItem['CODE']?>"></div>
				<span><?=$arItem['NAME']?></span>
			</div>
			<?endforeach;?>
		</div>
	</div>
</div>
