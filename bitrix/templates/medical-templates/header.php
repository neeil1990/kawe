<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <?$APPLICATION->ShowMeta("robots")?>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>
    <?$APPLICATION->ShowCSS()?>
    <?$APPLICATION->ShowHeadStrings()?>
    <?$APPLICATION->ShowHeadScripts()?>
    
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vendor.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/alertify.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/default.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/lightgallery.css">


    <script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.js"></script>

<script type="text/javascript" src="https://incut.prime-ltd.su/incut/incut.js" async></script>
    <link rel="stylesheet" href="https://incut.prime-ltd.su/incut/incut.css">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62115054-57"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-62115054-57');
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="<?=COption::GetOptionString("main", "color_theme", "schemes_1");?>">
<!-- Сквозная от Prime -->
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', 'f9ea7cf125b5fc005166d4e260fec644');
</script>


<?
if(substr($APPLICATION->GetCurPage(),-3) == "-r/"){
    LocalRedirect(str_replace("-r","",$APPLICATION->GetCurPage()));
}
?>
<?$APPLICATION->ShowPanel();?>
<div class="top">
    <div class="container">
        <div class="top__wrapper">

            <?$APPLICATION->IncludeComponent("bitrix:menu", "top.menu", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "catalog_horizontal",
                "MENU_THEME" => "site",	// Тема меню
            ),
                false
            );?>

            <div class="top__account">
                <svg class="icon icon-user"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-user"></use></svg>
                <?if ($USER->IsAuthorized()):
                    $name = trim($USER->GetFullName());
                    if (! $name)
                        $name = trim($USER->GetLogin());
                    if (strlen($name) > 15)
                        $name = substr($name, 0, 12).'...';
                    ?>
                    <a href="<?=SITE_DIR."personal/"?>" class="top__login"><?=htmlspecialcharsbx($name)?></a>
                    <a href="?logout=yes" class="top__reg">Выйти</a>
                <?else:?>
                    <a href="<?=SITE_DIR."login/"?>?login=yes" class="top__login">Войти</a>
                    <a href="<?=SITE_DIR."login/"?>?register=yes" class="top__reg">Регистрация</a>
                <?endif?>
            </div>
        </div>
    </div>
</div>





<div class="header">
    <div class="container">
        <div class="header__top">
            <div class="header__head">
                <a href="/" class="header__logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo">
                </a>
                <div class="header__info">
                    <div class="header__title">Медицинская техника</div>
                    <div class="header__desc">Прямые поставки от производителей</div>
                </div>
            </div>
            <div class="header__contact">
                <div class="header__title">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/header_phone.jpg">
                    <span></span>
                </div>
                <div class="header__desc">Бесплатные звонки по РФ</div>
                <a href="javascript:void(0);" class="header__callback callback-btn">Заказать звонок</a>
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket.small", Array(
                "HIDE_ON_BASKET_PAGES" => "Y",	// Не показывать на страницах корзины и оформления заказа
                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
                "PATH_TO_ORDER" => SITE_DIR."personal/order/",	// Страница оформления заказа
                "PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
                "PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
                "PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
                "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
                "SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
                "SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
                "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
                "SHOW_PERSONAL_LINK" => "Y",	// Отображать персональный раздел
                "SHOW_PRODUCTS" => "N",	// Показывать список товаров
                "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
            ),
                false
            );?>

        </div>
        <div class="header__bottom">

            <div class="catalog header__catalog">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog.top.menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "MENU_THEME" => "site",
                    "ROOT_MENU_TYPE" => "catalog_top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "tree"
                ),
                    false
                );?>
            </div>

            <div class="header__contact_mobile icon-phone_2"></div>

            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket.small.mobile", Array(
                "HIDE_ON_BASKET_PAGES" => "Y",	// Не показывать на страницах корзины и оформления заказа
                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
                "PATH_TO_ORDER" => SITE_DIR."personal/order/",	// Страница оформления заказа
                "PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
                "PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
                "PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
                "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
                "SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
                "SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
                "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
                "SHOW_PERSONAL_LINK" => "Y",	// Отображать персональный раздел
                "SHOW_PRODUCTS" => "N",	// Показывать список товаров
                "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
            ),
                false
            );?>

            <?$APPLICATION->IncludeComponent(
                "bitrix:search.title",
                "search.live",
                array(
                    "CATEGORY_0" => array(
                        0 => "iblock_1c_catalog",
                    ),
                    "CATEGORY_0_TITLE" => "",
                    "CATEGORY_0_iblock_1c_catalog" => array(
                        0 => "all",
                    ),
                    "CHECK_DATES" => "N",
                    "CONTAINER_ID" => "title-search",
                    "CONVERT_CURRENCY" => "Y",
                    "INPUT_ID" => "title-search-input",
                    "NUM_CATEGORIES" => "1",
                    "ORDER" => "rank",
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "PREVIEW_TRUNCATE_LEN" => "255",
                    "PRICE_CODE" => array(
                        0 => "BASE",
                    ),
                    "PRICE_VAT_INCLUDE" => "Y",
                    "SHOW_INPUT" => "Y",
                    "SHOW_OTHERS" => "N",
                    "SHOW_PREVIEW" => "Y",
                    "TOP_COUNT" => "10",
                    "USE_LANGUAGE_GUESS" => "Y",
                    "COMPONENT_TEMPLATE" => "search.live",
                    "PREVIEW_WIDTH" => "75",
                    "PREVIEW_HEIGHT" => "75",
                    "CURRENCY_ID" => "RUB",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO"
                ),
                false
            );?>

            <a href="/personal/cart/" class="header__order">Оформить заказ</a>
        </div>
    </div>
</div>

<? if(!CSite::InDir('/index.php')): ?>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
),
    false
);?>

<div class="container">
<? endif; ?>
