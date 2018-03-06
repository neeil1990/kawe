<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?$APPLICATION->IncludeComponent("bitrix:menu", "test", Array(
    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
    "DELAY" => "N",	// Откладывать выполнение шаблона меню
    "MAX_LEVEL" => "4",	// Уровень вложенности меню
    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
    "ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
    "COMPONENT_TEMPLATE" => "tree",
    "MENU_THEME" => "site"
),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>