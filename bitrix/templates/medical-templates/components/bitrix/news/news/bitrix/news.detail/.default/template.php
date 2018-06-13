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

		<?if($arResult['PROPERTIES']['ADD_PROD']['VALUE']):?>

		<div class="title">Товары</div>

		<ul class="goods__slider">

			<?
			$arSelect = Array("ID", "NAME","PREVIEW_PICTURE","DETAIL_PAGE_URL");
			foreach($arResult['PROPERTIES']['ADD_PROD']['VALUE'] as $id){
				$arFilter = Array("IBLOCK_ID"=> IBLOCK_CATALOG,"ID" => $id);
				$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				if($ob = $res->GetNextElement())
				{$arFields = $ob->GetFields();
					?>

					<li class="goods__item">
						<div class="goods__item_wrapper">
							<? if($arFields['DISCOUNT']): ?>
							<div class="goods__alert"><?=$arFields['DISCOUNT']?>%</div>
							<? endif; ?>

							<div class="goods__img">
								<a href="<?echo $arFields["DETAIL_PAGE_URL"]?>"><img src="<?=CFile::GetPath($arFields["PREVIEW_PICTURE"]);?>" alt="goods"></a>
							</div>
							<a href="<?echo $arFields["DETAIL_PAGE_URL"]?>" class="goods__name"><?=$arFields['NAME']?></a>
						</div>
					</li>

					<?
				}
			}
			?>
		</ul>

	<? endif; ?>

	

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

