<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="sidebar">

    <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog.menu", Array(
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


    <?$APPLICATION->IncludeComponent(
        "bitrix:news.line",
        "banners",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "300",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
                0 => "CODE",
                1 => "PREVIEW_PICTURE",
                2 => "",
            ),
            "IBLOCKS" => array(
                0 => "6",
            ),
            "IBLOCK_TYPE" => "sliders",
            "NEWS_COUNT" => "3",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "banners"
        ),
        false
    );?>

</div>