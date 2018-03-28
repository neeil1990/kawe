<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("АльмаМед - поставки медицинского оборудования по всей России");
?>



    <?$APPLICATION->IncludeComponent("bitrix:news.line", "slider.home", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "300",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
        "FIELD_CODE" => array(	// Поля
            0 => "PREVIEW_TEXT",
            1 => "PREVIEW_PICTURE",
            2 => "",
        ),
        "IBLOCKS" => array(	// Код информационного блока
            0 => "5",
        ),
        "IBLOCK_TYPE" => "sliders",	// Тип информационного блока
        "NEWS_COUNT" => "20",	// Количество новостей на странице
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    ),
        false
    );?>

    <div class="container">
        <div class="wrapper">
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
            <div class="main overflow-hidden">
                <div class="title">Категории</div>

                <?
                $arHomeSection = array();
                $arFilter = array('IBLOCK_ID' => IBLOCK_CATALOG, 'ACTIVE' => 'Y', 'UF_SHOW_HOME' => true);
                $arSelect = array('ID','IBLOCK_ID','IBLOCK_TYPE_ID','IBLOCK_SECTION_ID','CODE', 'NAME','PICTURE','SECTION_PAGE_URL');
                $rsSection = CIBlockSection::GetTreeList($arFilter, $arSelect);
                while($arSection = $rsSection->GetNext()) {
                    $arHomeSection[$arSection[ID]][NAME] = $arSection['NAME'];
                    $arHomeSection[$arSection[ID]][PICTURE] = CFile::GetPath($arSection['PICTURE']);
                    $arHomeSection[$arSection[ID]][SECTION_PAGE_URL] = $arSection['SECTION_PAGE_URL'];
                }
                if($arHomeSection){
                    $arHomeSectionFour = array_slice($arHomeSection,0,4,true);
                }
                ?>
                <div class="categories">
                    <? if(isset($arHomeSectionFour)): ?>
                        <?
                        foreach($arHomeSectionFour as $del => $section):
                        unset($arHomeSection[$del]);
                            ?>
                            <a href="<?=$section['SECTION_PAGE_URL']?>" class="categories__item">
                            <span class="categories__item_wrapper">
                                <span class="categories__img"><img src="<?=$section['PICTURE']?>" alt="categories"></span>
                                <span class="categories__title"><?=$section['NAME']?></span>
                            </span>
                            </a>
                        <?endforeach;?>
                    <? endif; ?>
                </div>

                <div class="full-slider">
                    <ul class="full-slider__wrapper">
                        <li class="full-slider__item">
                            <div class="full-slider__item_wrapper">
                                <div class="full-slider__alert">new</div>
                                <div class="full-slider__img">
                                    <img src="img/goods_1.jpg" alt="goods">
                                </div>
                                <div class="full-slider__content">
                                    <div class="full-slider__offer">СПЕЦПРЕДЛОЖЕНИЕ</div>
                                    <div class="full-slider__rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                    </div>
                                    <div class="full-slider__prices">
                                        <div class="full-slider__price">16 999 Р</div>
                                        <div class="full-slider__price-old">17 124 Р</div>
                                        <span>за штуку</span>
                                    </div>
                                    <div class="full-slider__categories">Дерматоскоп</div>
                                    <a href="#" class="full-slider__title">KAWE PICCOLIGHT D 2,5 В - ПИККОЛАЙТ 2,5 В</a>
                                    <div class="full-slider__article">Арт: 252023а</div>
                                    <div class="full-slider__info">
                                        <div class="full-slider__availability">В наличии</div>
                                        <a href="#" class="full-slider__basket icon-basket"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="full-slider__item">
                            <div class="full-slider__item_wrapper">
                                <div class="full-slider__alert">new</div>
                                <div class="full-slider__img">
                                    <img src="img/goods_1.jpg" alt="goods">
                                </div>
                                <div class="full-slider__content">
                                    <div class="full-slider__offer">СПЕЦПРЕДЛОЖЕНИЕ</div>
                                    <div class="full-slider__rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                    </div>
                                    <div class="full-slider__prices">
                                        <div class="full-slider__price">16 999 Р</div>
                                        <div class="full-slider__price-old">17 124 Р</div>
                                        <span>за штуку</span>
                                    </div>
                                    <div class="full-slider__categories">Дерматоскоп</div>
                                    <a href="#" class="full-slider__title">KAWE PICCOLIGHT D 2,5 В - ПИККОЛАЙТ 2,5 В</a>
                                    <div class="full-slider__article">Арт: 252023а</div>
                                    <div class="full-slider__info">
                                        <div class="full-slider__availability">В наличии</div>
                                        <a href="#" class="full-slider__basket icon-basket"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="categories">
                    <? if(isset($arHomeSection)): ?>
                        <? foreach($arHomeSection as $section): ?>
                            <a href="<?=$section['SECTION_PAGE_URL']?>" class="categories__item">
                            <span class="categories__item_wrapper">
                                <span class="categories__img"><img src="<?=$section['PICTURE']?>" alt="categories"></span>
                                <span class="categories__title"><?=$section['NAME']?></span>
                            </span>
                            </a>
                        <?endforeach;?>
                    <? endif; ?>
                </div>
                <hr class="hr">

                <div class="title">Новинки</div>

                <div class="goods">

                    <?$APPLICATION->IncludeComponent(
                    "bitrix:news.line",
                    "new.product",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "300",
                        "CACHE_TYPE" => "A",
                        "DETAIL_URL" => "",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "CODE",
                            2 => "NAME",
                            3 => "PREVIEW_PICTURE",
                            4 => "",
                        ),
                        "IBLOCKS" => array(
                        ),
                        "IBLOCK_TYPE" => "1c_catalog",
                        "NEWS_COUNT" => "12",
                        "SORT_BY1" => "TIMESTAMP_X",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "DESC",
                        "COMPONENT_TEMPLATE" => "new.product"
                    ),
                    false
                );?>

                </div>

                <div class="title">Лучшие предложения на <?=EditData(date("d.m.Y"))?></div>

                <div class="goods">

                    <?
                    $GLOBALS['arrFilter'] = array("PROPERTY_BEST_OFFER_VALUE" => "Y");
                    $APPLICATION->IncludeComponent("bitrix:news.list", "best.offer", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "arrFilter",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => IBLOCK_CATALOG,	// Код информационного блока
                        "IBLOCK_TYPE" => "1c_catalog",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "10",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                    ),
                        false
                    );?>

                </div>



            </div>
        </div>
    </div>


    <?$APPLICATION->IncludeComponent("bitrix:news.line", "advantage", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "300",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
        "FIELD_CODE" => array(	// Поля
            0 => "CODE",
            1 => "NAME",
            2 => "",
        ),
        "IBLOCKS" => array(	// Код информационного блока
            0 => "7",
        ),
        "IBLOCK_TYPE" => "sliders",	// Тип информационного блока
        "NEWS_COUNT" => "5",	// Количество новостей на странице
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    ),
        false
    );?>




    <div class="info text">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include/home-text.php"
                )
            );?>
        </div>
    </div>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>