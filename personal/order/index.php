<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", "personal.order", Array(
	"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_FOLDER" => "/personal/order/",	// Каталог ЧПУ (относительно корня сайта)
		"ORDERS_PER_PAGE" => "10",	// Количество заказов на одной странице
		"PATH_TO_PAYMENT" => "/personal/order/payment/",	// Страница подключения платежной системы
		"PATH_TO_BASKET" => "/personal/cart/",	// Страница с корзиной
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SAVE_IN_SESSION" => "N",	// Сохранять установки фильтра в сессии пользователя
		"NAV_TEMPLATE" => "arrows",	// Имя шаблона для постраничной навигации
		"SEF_URL_TEMPLATES" => array(
			"list" => "index.php",
			"detail" => "detail/#ID#/",
			"cancel" => "cancel/#ID#/",
		),
		"SHOW_ACCOUNT_NUMBER" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>