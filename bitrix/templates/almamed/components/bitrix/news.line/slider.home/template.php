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

if(!$arResult["ITEMS"])
return false;

?>
<div class="slider">
	<ul class="slider__wrapper">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<a href="<?=$arItem['CODE']?>">
				<li class="slider__item" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
					<div class="container">
						<div class="slider__title">
							<?=$arItem['PREVIEW_TEXT']?>
						</div>
					</div>
				</li>
			</a>
		<?endforeach;?>
	</ul>
</div>