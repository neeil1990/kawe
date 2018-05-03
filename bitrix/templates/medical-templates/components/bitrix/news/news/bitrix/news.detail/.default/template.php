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

	<div class="title"><?=$arResult["NAME"]?></div>
	<div class="text news__text">
		<div class="news__info_img">
			<?if($arResult["DISPLAY_ACTIVE_FROM"]):?>
				<div class="news__info_date"><?=$arResult["DISPLAY_ACTIVE_FROM"];?></div>
			<?endif;?>
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
		</div>
		<?echo $arResult["DETAIL_TEXT"];?>
	</div>

