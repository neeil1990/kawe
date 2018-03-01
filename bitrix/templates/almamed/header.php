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
                <div class="header__title">8-800-100-37-97</div>
                <div class="header__desc">Бесплатные звонки по РФ</div>
                <a href="#" class="header__callback">Заказать звонок</a>
            </div>
            <a href="#" class="header__basket">
                <i class="icon-cart" data-count="0"></i>
                <div class="header__basket_content">
                    <div class="header__basket_price">256 000 Р</div>
                    <div class="header__desc">Мои покупки</div>
                </div>
            </a>
        </div>
        <div class="header__bottom">
            <div class="catalog header__catalog">
                <div class="catalog__head">
                    Каталог товаров
                    <i class="icon-arrow-o"></i>
                </div>
                <ul class="catalog__menu">
                    <li class="catalog__item"><a href="#" class="catalog__link">Распродажа</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория два</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                    <li class="catalog__item"><a href="#" class="catalog__link">Категория три</a></li>
                </ul>
            </div>
            <div class="header__contact_mobile icon-phone_2"></div>
            <a href="#" class="header__basket_mobile">
                <i class="icon-cart" data-count="1"></i>
            </a>
            <form action="#" method="post" class="search">
                <input type="text" class="search__input" placeholder="Введите слово для поиска, например “Воронка”">
                <button class="search__btn icon-search" type="submit"></button>
            </form>
            <a href="#" class="header__order">Оформить заказ</a>
        </div>
    </div>
</div>
