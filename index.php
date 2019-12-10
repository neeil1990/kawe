<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Инструменты и приборы KAWE (КаВе) от производителя - интернет магазин 8-800-551-90-39 Звоните! Медицинское оборудование с доставкой по РФ");
$APPLICATION->SetPageProperty("title", "Инструменты и приборы KAWE (КаВе) от производителя - интернет магазин с доставкой по РФ");
$APPLICATION->SetTitle("KAWE - поставки медицинской техники от производителя по всей России");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"slider.home",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"PREVIEW_PICTURE",2=>"",),
		"IBLOCKS" => array(0=>"5",),
		"IBLOCK_TYPE" => "sliders",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>

    <div class="container">
        <div class="wrapper">
            <div class="sidebar">

                <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"catalog.menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "tree",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "catalog",
		"USE_EXT" => "N"
	)
);?>

                <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"banners",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "banners",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"CODE",1=>"PREVIEW_PICTURE",2=>"",),
		"IBLOCKS" => array(0=>"6",),
		"IBLOCK_TYPE" => "sliders",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
            </div>
            <div class="main overflow-hidden">
                <div class="title">Популярные категории:</div>

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
                                <span class="categories__img"><img alt="categories" src="<?=$section['PICTURE']?>"></span>
                                <span class="categories__title"><?=$section['NAME']?></span>
                            </span>
                            </a>
                        <?endforeach;?>
                    <? endif; ?>
                </div>

                <div class="full-slider">

                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider.product",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider.product",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "35",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"ARTICL",1=>"GROUP_PRODUCT",2=>"COUNT",3=>"NAME_PRODUCT",4=>"SALE",5=>"NEW_PRICE",6=>"OLD_PRICE",7=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

                </div>

                <div class="categories">
                    <? if(isset($arHomeSection)): ?>
                        <? foreach($arHomeSection as $section): ?>
                            <a href="<?=$section['SECTION_PAGE_URL']?>" class="categories__item">
                            <span class="categories__item_wrapper">
                                <span class="categories__img"><img alt="categories" src="<?=$section['PICTURE']?>"></span>
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
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "new.product",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"ID",1=>"CODE",2=>"NAME",3=>"PREVIEW_PICTURE",4=>"",),
		"IBLOCKS" => array(0=>"33",),
		"IBLOCK_TYPE" => "1c_catalog",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC"
	)
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
                            0 => "CML2_ARTICLE",
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


    <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"advantage",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"CODE",1=>"NAME",2=>"",),
		"IBLOCKS" => array(0=>"7",),
		"IBLOCK_TYPE" => "sliders",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
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
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>