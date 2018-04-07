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


	<div class="main">
		<div class="title"><?=$arResult['NAME']?></div>
		<div class="news__list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="news__item">
				<?if($arItem["DISPLAY_ACTIVE_FROM"]):?>
				<div class="news__item_date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
				<?endif?>
				<div class="news__item_img">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="news">
					</a>
				</div>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news__item_name"><?echo TruncateText($arItem["NAME"], 60);?></a>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="news__item_desc"><?echo TruncateText($arItem["PREVIEW_TEXT"],110);?></div>
				<?endif;?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news__item_more">Прочитать</a>
			</div>
			<?endforeach;?>

		</div>


		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif;?>

	</div>





