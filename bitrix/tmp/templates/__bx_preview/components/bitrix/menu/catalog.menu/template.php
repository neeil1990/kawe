<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="catalog">
	<div class="catalog__head">Каталог товаров</div>
<ul class="catalog__menu">
<?
$previousLevel = 0;
foreach($arResult as $key => $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li<?if($arItem["CHILD_SELECTED"] !== true):?> <?endif?> class="catalog__item">
				<a href="<?=$arItem["LINK"]?>" class="catalog__link"><?=$arItem["TEXT"]?></a>
				<i class="catalog__submenu_toggle icon-arrow_down"></i>
				<ul class="catalog__submenu">
	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li <?if($arItem["DEPTH_LEVEL"] == 1):?>class="catalog__item"<?endif;?>>
					<a href="<?=$arItem["LINK"]?>" class="<?if($arItem["DEPTH_LEVEL"] > 1):?>catalog__submenu_link<?else:?>catalog__link<?endif;?>"><?=$arItem["TEXT"]?></a>
				</li>
		<?endif?>

	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>