<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
use Bitrix\Main\Loader;
global $APPLICATION;

?>

<!--popup more options-->
<?
foreach($arResult['ITEMS'] as $item){
    $APPLICATION->IncludeComponent("nbrains:popup.product",
        "",
        Array(
            "IBLOCK_ID" => $item['IBLOCK_ID'],
            "ID" => $item['ID'],
        ),
        false
    );
}
?>
<!--popup more options end-->


