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
		<div class="news__item_img">
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="news">
			</a>
		</div>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item_name"><?=TruncateText($arItem['NAME'],60)?></a>
		<div class="news__item_desc"><?=TruncateText($arItem['PREVIEW_TEXT'],110)?></div>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news__item_more">Прочитать</a>
	</div>
	<?endforeach;?>
</div>