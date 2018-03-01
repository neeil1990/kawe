<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if (empty($arResult["ALL_ITEMS"]))
	return;
?>

<?
$menu = array_chunk($arResult["ALL_ITEMS"],4);
$count = count($menu);
for($i = 0;$i < $count;$i++):
?>
	<ul class="footer__nav">
		<? foreach($menu[$i] as $m): ?>
		<li class="footer__nav_item"><a href="<?=$m['LINK']?>" class="footer__nav_link"><?=$m['TEXT']?></a></li>
		<? endforeach; ?>
	</ul>
<? endfor; ?>



