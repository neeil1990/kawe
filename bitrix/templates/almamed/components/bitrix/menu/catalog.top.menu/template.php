<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<div class="catalog header__catalog">
		<div class="catalog__head">
			Каталог товаров
			<i class="icon-arrow-o"></i>
		</div>
		<ul class="catalog__menu">
		<? foreach($arResult as $arItem): ?>
			<li class="catalog__item"><a href="<?=$arItem["LINK"]?>" class="catalog__link"><?=$arItem["TEXT"]?></a></li>
		<?endforeach?>
		</ul>
	</div>
	
<?endif?>