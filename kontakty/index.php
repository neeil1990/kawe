<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты интернет-магазина KaWe.su - все способы связи с нами");
$APPLICATION->SetPageProperty("description", "Мы осуществляем доставку по всей России, подробнее об этом в Доставка.");
$APPLICATION->SetPageProperty("titlePage", "<h1 class='title'>Контакты</h1>");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="wrapper">
        <div class="sidebar">

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

        <div class="main text">
            <h1 class="title">Контакты</h1>
            <div class="content">

                <?
                // включаемая область для раздела
                $APPLICATION->IncludeFile($APPLICATION->GetCurDir()."content.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>

            </div>

        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>