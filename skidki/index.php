<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скидки на продукцию Kawe");
$APPLICATION->SetPageProperty("description", "Для получения дополнительной информации, при заказе товара, Вы можете запросить информацию у вашего менеджера.");
$APPLICATION->SetPageProperty("titlePage", "<h1 class='title'>Скидки</h1>");
$APPLICATION->SetTitle("Скидки");
?><div class="wrapper">
	<div class="sidebar">
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
	<div class="main text">
		<div class="title">
			<?=$APPLICATION->GetPageProperty("titlePage");?>
		</div>
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
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>