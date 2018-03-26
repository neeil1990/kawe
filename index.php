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
                    $sectionCount = count($arHomeSection);
                    $arHomeSection = array_chunk($arHomeSection, ceil($sectionCount/2));
                }
                ?>
                <div class="categories">
                    <? if(isset($arHomeSection[0])): ?>
                        <? foreach($arHomeSection[0] as $section): ?>
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
                    <? if(isset($arHomeSection[1])): ?>
                        <? foreach($arHomeSection[1] as $section): ?>
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
                    <ul class="goods__slider">

                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-20%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">new</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>

                <div class="title">Лучшие предложения
                    на 20 октября 2017</div>

                <div class="goods">
                    <ul class="goods__slider">

                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-20%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">new</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>
                        <li class="goods__item">
                            <div class="goods__item_wrapper">
                                <div class="goods__alert">-50%</div>
                                <div class="goods__rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                </div>
                                <div class="goods__img">
                                    <img src="img/goods_2.jpg" alt="goods">
                                </div>
                                <a href="#" class="goods__name">Люминесцентная лампочка Вуда ОЛДД-01 светодиодной подсветкой.</a>
                                <div class="goods__desc">
                                    <div class="goods__availability">В наличии</div>
                                    <div class="goods__article">Арт: 252023а</div>
                                </div>
                                <div class="goods__info">
                                    <div class="goods__prices">
                                        <div class="goods__price">17 124 Р</div>
                                        <div class="goods__counter">
                                            <div class="goods__counter_subtract">-</div>
                                            <input type="text" class="goods__counter_input" value="1" readonly>
                                            <div class="goods__counter_add">+</div>
                                        </div>
                                        <span>за штуку</span>
                                    </div>
                                    <a href="#" class="goods__basket icon-basket"></a>
                                </div>
                            </div>
                        </li>


                    </ul>
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