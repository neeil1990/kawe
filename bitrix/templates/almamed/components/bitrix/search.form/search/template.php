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
<form action="<?=$arResult["FORM_ACTION"]?>" class="search">
	<input type="text" class="search__input" name="q" value="<?=$_REQUEST['q']?>" placeholder="Введите слово для поиска, например “Воронка”">
	<button class="search__btn icon-search" name="s" type="submit"></button>
</form>