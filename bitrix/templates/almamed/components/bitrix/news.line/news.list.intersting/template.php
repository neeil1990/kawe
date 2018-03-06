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
<hr class="hr">
<div class="title">Возможно, Вам будет интересно</div>
<div class="news__list">
	<?foreach($arResult["ITEMS"] as $arItem): ?>
	<div class="news__item">
		<div class="news__item_date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></div>
		<div class="news__item_img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="news"></div>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item_name"><?=$arItem['NAME']?></a>
		<div class="news__item_desc"><?=$arItem['PREVIEW_TEXT']?></div>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item_more">Прочитать</a>
	</div>
	<?endforeach;?>
</div>