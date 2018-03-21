<!DOCTYPE html>
<html lang="ru">

<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon-114x114.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vendor.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/alertify.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/default.css">

    <script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.js"></script>
</head>

<body>
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
                <a href="#" class="top__login">Войти</a>
                <a href="#" class="top__reg">Регистация</a>
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
                <div class="header__title"><?=tplvar('phone', true);?></div>
                <div class="header__desc">Бесплатные звонки по РФ</div>
                <a href="#" class="header__callback">Заказать звонок</a>
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

            <div class="header__contact_mobile icon-phone_2"></div>
            <a href="#" class="header__basket_mobile">
                <i class="icon-cart" data-count="1"></i>
            </a>

            <?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
                "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                "USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
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
