<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?><?$APPLICATION->IncludeComponent("bitrix:sale.personal.section", "sale.personal.section", Array(
	"ACCOUNT_PAYMENT_ELIMINATED_PAY_SYSTEMS" => array(
			0 => "0",
		),
		"ACCOUNT_PAYMENT_PERSON_TYPE" => "1",
		"ACCOUNT_PAYMENT_SELL_SHOW_FIXED_VALUES" => "Y",
		"ACCOUNT_PAYMENT_SELL_TOTAL" => array(
			0 => "100",
			1 => "200",
			2 => "500",
			3 => "1000",
			4 => "5000",
			5 => "",
		),
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",	// Разрешить пользователю вводить сумму
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_RIGHTS_PRIVATE" => "N",	// Проверять права доступа
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
		"CUSTOM_PAGES" => "",	// Настройки дополнительных страниц раздела
		"CUSTOM_SELECT_PROPS" => "",	// Дополнительные свойства инфоблока
		"NAV_TEMPLATE" => "",	// Имя шаблона для постраничной навигации
		"ORDER_HISTORIC_STATUSES" => array(	// Перенести в историю заказы в статусах
			0 => "F",
		),
		"PATH_TO_BASKET" => "/personal/cart",	// Путь к корзине
		"PATH_TO_CATALOG" => "/catalog/",	// Путь к каталогу
		"PATH_TO_CONTACT" => "/kontakty/",	// Путь к странице контактных данных
		"PATH_TO_PAYMENT" => "/personal/order/payment",	// Путь к странице оплат
		"PER_PAGE" => "20",
		"PROP_1" => "",	// Не показывать свойства для типа плательщика "Физическое лицо" (s1)
		"PROP_2" => "",	// Не показывать свойства для типа плательщика "Юридическое лицо" (s1)
		"SAVE_IN_SESSION" => "Y",	// Сохранять установки фильтра в сессии пользователя
		"SEF_FOLDER" => "/personal/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEND_INFO_PRIVATE" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_ACCOUNT_COMPONENT" => "Y",
		"SHOW_ACCOUNT_PAGE" => "Y",	// Показать страницу персонального счета пользователя
		"SHOW_ACCOUNT_PAY_COMPONENT" => "Y",
		"SHOW_BASKET_PAGE" => "Y",	// Вывести ссылку на корзину
		"SHOW_CONTACT_PAGE" => "Y",	// Вывести ссылку на страницу контактов
		"SHOW_ORDER_PAGE" => "Y",	// Показать страницу заказов пользователя
		"SHOW_PRIVATE_PAGE" => "Y",	// Показать страницу персональных данных пользователя
		"SHOW_PROFILE_PAGE" => "N",	// Показать страницу профилей пользователя
		"SHOW_SUBSCRIBE_PAGE" => "N",	// Показать страницу подписок
		"USER_PROPERTY_PRIVATE" => "",
		"USE_AJAX_LOCATIONS_PROFILE" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"ORDER_HIDE_USER_INFO" => array(	// Не показывать в информации о пользователе
			0 => "0",
		),
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(	// Запретить смену платежной системы у заказов в статусах
			0 => "0",
		),
		"ORDER_DEFAULT_SORT" => "STATUS",	// Сортировка заказов
		"ORDER_REFRESH_PRICES" => "N",	// Пересчитывать заказ после смены платежной системы
		"ORDERS_PER_PAGE" => "20",	// Количество заказов на одной странице
		"PROFILES_PER_PAGE" => "20",
		"MAIN_CHAIN_NAME" => "Мой кабинет",	// Название раздела в цепочке навигации
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"orders" => "orders/",
			"account" => "account/",
			"subscribe" => "subscribe/",
			"profile" => "profiles/",
			"profile_detail" => "profiles/#ID#",
			"private" => "private/",
			"order_detail" => "orders/#ID#",
			"order_cancel" => "cancel/#ID#",
		)
	),
	false
);?><br>
	<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>