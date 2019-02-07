<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

	<div class="wrapper">

		<?
		require($_SERVER["DOCUMENT_ROOT"]."/catalog/sidebar.php");
		?>

		<div class="main">
			<div class="title">404 Страница не найдена</div>
			<p>Мы сожалеем, но категория или товар, который Вы запрашивали были удалены или распроданы.</p>
			<p>Воспользуйтесь нашим поиском товаров, чтобы найти аналогичный</p>

			<?$APPLICATION->IncludeComponent("bitrix:search.title", "search.live.404", Array(
				"CATEGORY_0" => array(	// Ограничение области поиска
						0 => "iblock_1c_catalog",
					),
					"CATEGORY_0_TITLE" => "",	// Название категории
					"CATEGORY_0_iblock_1c_catalog" => array(	// Искать в информационных блоках типа "iblock_1c_catalog"
						0 => "all",
					),
					"CHECK_DATES" => "N",	// Искать только в активных по дате документах
					"CONTAINER_ID" => "title-search-404",	// ID контейнера, по ширине которого будут выводиться результаты
					"CONVERT_CURRENCY" => "Y",	// Показывать цены в одной валюте
					"INPUT_ID" => "title-search-input-404",	// ID строки ввода поискового запроса
					"NUM_CATEGORIES" => "1",	// Количество категорий поиска
					"ORDER" => "rank",	// Сортировка результатов
					"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
					"PREVIEW_TRUNCATE_LEN" => "255",	// Максимальная длина анонса для вывода
					"PRICE_CODE" => array(	// Тип цены
						0 => "BASE",
					),
					"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
					"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
					"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
					"SHOW_PREVIEW" => "Y",	// Показать картинку
					"TOP_COUNT" => "10",	// Количество результатов в каждой категории
					"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
					"COMPONENT_TEMPLATE" => "search.live.404",
					"PREVIEW_WIDTH" => "75",	// Ширина картинки
					"PREVIEW_HEIGHT" => "75",	// Высота картинки
					"CURRENCY_ID" => "RUB",	// Валюта, в которую будут сконвертированы цены
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO"
				),
				false
			);?>

			<p>Если Вы не смогли найти товар, то Вы можете оставить контактные данные и наш менеджер с вами свяжется.</p>

			<?$APPLICATION->IncludeComponent("nbrains:main.feedback", "feedback", Array(
				"EMAIL_TO" => "info@kawe.su",	// E-mail, на который будет отправлено письмо
				"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
					0 => "52",
				),
				"IBLOCK_ID" => "36",	// Код информационного блока
				"IBLOCK_TYPE" => "feedback",	// Тип информационного блока (используется только для проверки)
				"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
				"PROPERTY_CODE" => array(	// Поля формы
					0 => "NAME",
					1 => "PHONE",
					2 => "QUERY",
				),
				"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
			),
				false
			);?>

		</div>

	</div>

<?if(!empty($_REQUEST['ELEMENT_SORT_FIELD'])):?>
	<script>
		$(function(){
			$all = $('.wrapper').get(0);
			$($all).find('.sidebar').get(0).remove();
			$($all).find('.main.overflow-hidden').removeClass('main');
			$($all).removeClass('wrapper');
			$('.bx-form-control').attr('onkeyup','title_search_result()');
		});
		function title_search_result(){
			$('.title-search-result').remove();
		}
	</script>


<? endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>