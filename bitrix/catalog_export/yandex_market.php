<? $disableReferers = false;
if (!isset($_GET["referer1"]) || $_GET["referer1"] == "") $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || $_GET["referer2"] == "") $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2023-03-09 12:05">
<shop>
<name>kawe.su - поставки медицинского оборудования по всей России</name>
<company>Kawe - медицинское оборудование</company>
<url>https://kawe.su</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="1" />
</currencies>
<categories>
<category id="2799">ЛОР оборудование, инструменты</category>
<category id="2800" parentId="2799">Отоскопы</category>
<category id="2801" parentId="2800">Отоскопы KaWe, Германия</category>
<category id="2802" parentId="2801">Отоскопы серии PICCOLIGHT KaWe, Германия</category>
<category id="2803" parentId="2801">Дополнительное принадлежности к отоскопам Kawe, Германия</category>
<category id="2804" parentId="2801">Отоскопы серии COMBILIGHT KaWe, Германия</category>
<category id="2805" parentId="2801">Отоскопы серии EUROLIGHT KaWe, Германия</category>
<category id="2806" parentId="2801">Воронки ушные к отоскопам, KaWe, Германия</category>
<category id="3372" parentId="2800">Отоскоп ветеринарный</category>
<category id="2807" parentId="2799">Диагностические ЛОР наборы</category>
<category id="2808" parentId="2807">Диагностические ЛОР наборы KaWe, Германия</category>
<category id="2809" parentId="2799">Камертоны медицинские</category>
<category id="2810" parentId="2809">Камертоны медицинские Kawe, Германия</category>
<category id="2811" parentId="2810">Камертоны KaWe алюминиевые медицинские, Германия</category>
<category id="2812" parentId="2810">Камертоны KaWe по Лукае</category>
<category id="2813" parentId="2810">Камертоны KaWe по Хартману</category>
<category id="2814" parentId="2810">Камертоны KaWe стальные медицинские, Германия</category>
<category id="2815" parentId="2799">Оториноскопы</category>
<category id="2934" parentId="2815">Оториноскоп диагностический</category>
<category id="2816" parentId="2799">Настенные диагностические системы</category>
<category id="2817" parentId="2816">Базовые настенные модули, KaWe</category>
<category id="2818" parentId="2817">Готовые комплекты, KaWe</category>
<category id="2819" parentId="2817">Комплектующие к диагостическим наборам, KaWe</category>
<category id="2820" parentId="2799">Риноскопы для ЛОР врачей</category>
<category id="2821" parentId="2799">Ручные осветители</category>
<category id="2822" parentId="2821">Осветители KaWe (Германия)</category>
<category id="3364" parentId="2799">Фиброоптические отоскопы</category>
<category id="3373" parentId="2799">Диагностические фонарики</category>
<category id="3340" parentId="2799">Воронки ушные</category>
<category id="3341" parentId="3340">Воронки ушные одноразовые</category>
<category id="3342" parentId="3340">Воронки ушные многоразовые</category>
<category id="3343" parentId="2799">ЛОР инструменты</category>
<category id="3344" parentId="3343">Воронки ушные одноразовые</category>
<category id="3374" parentId="2799">Налобные ЛОР осветители</category>
<category id="2824">Офтальмология</category>
<category id="2825" parentId="2824">Диагностические фонарики</category>
<category id="2826" parentId="2825">Диагностические фонарики KaWe, Германия</category>
<category id="2827" parentId="2824">Офтальмоскопы</category>
<category id="2828" parentId="2827">Офтальмоскопы KaWe</category>
<category id="2829" parentId="2824">Диагностические наборы</category>
<category id="2938" parentId="2829">Диагностические наборы Kawe</category>
<category id="3152" parentId="2824">Диафаноскоп (трансиллюминатор)</category>
<category id="2847">Стетоскопы и фонендоскопы</category>
<category id="2848" parentId="2847">Стетоскопы KaWe</category>
<category id="2849" parentId="2848">Стетофонендоскоп Престиж KaWe, Германия</category>
<category id="2850" parentId="2849">Стетофонендоскоп Стандарт-Престиж KaWe, Германия</category>
<category id="2851" parentId="2849">Стетофонендоскоп Киндер-Престиж KaWe детский, Германия</category>
<category id="2852" parentId="2849">Стетофонендоскоп Бэби-Престиж KaWe неонатальный, Германия</category>
<category id="2853" parentId="2847">Механические стетоскопы</category>
<category id="2854" parentId="2847">Стетоскопы Раппопорта</category>
<category id="2855" parentId="2847">Кардиологические стетоскопы</category>
<category id="2856">Ветеринария</category>
<category id="2857" parentId="2856">Отоскоп ветеринарный</category>
<category id="2858" parentId="2857">Ветеринарные отоскопы диагностические и операционные  KaWe, Германия</category>
<category id="2859" parentId="2856">Диагностические ветеринарные наборы</category>
<category id="2860" parentId="2859">Диагностические ветеринарные наборы KaWe, Германия</category>
<category id="2861" parentId="2856">Стетоскопы ветеринарные</category>
<category id="2862">Дерматология</category>
<category id="2863" parentId="2862">Дерматоскопы</category>
<category id="2864" parentId="2863">Дерматоскопы KaWe, Германия</category>
<category id="2871">Ларингоскоп</category>
<category id="3141" parentId="2871">Ларингоскоп интубационный</category>
<category id="3142" parentId="2871">Клинок ларингоскопа</category>
<category id="3143" parentId="2871">Ларингоскоп макинтош</category>
<category id="3144" parentId="2871">Ларингоскоп с волоконным световодом универсальный</category>
<category id="3145" parentId="2871">Ларингоскоп светодиодный</category>
<category id="3146" parentId="2871">Ларингоскоп ветеринарный</category>
<category id="3147" parentId="2871">Ларингоскоп детский</category>
<category id="3376" parentId="2871">Ларингоскопы Миллер</category>
<category id="3375" parentId="2871">Ларигоскопы Миллер</category>
<category id="2872" parentId="2871">Ларингоскопы KaWe, Германия</category>
<category id="2873" parentId="2872">Стандартные клинки KaWe ларингоскопические</category>
<category id="2874" parentId="2873">Клинки Macintosh C KaWe, Германия</category>
<category id="2875" parentId="2873">Клинки Miller C KaWe, Германия</category>
<category id="2876" parentId="2873">Клинки Foregger C KaWe, Германия</category>
<category id="2877" parentId="2873">Клинки Flaplight C KaWe, Германия</category>
<category id="2878" parentId="2873">Клинки Polio C KaWe, Германия</category>
<category id="2879" parentId="2873">Клинки Есоnomy со стандартным освещением KaWe, Германия</category>
<category id="2881" parentId="2879">Клинки серии Macintosh Есоnomy C KaWe, Германия</category>
<category id="2882" parentId="2879">Клинки серии Miller Есоnomy C KaWe, Германия</category>
<category id="2883" parentId="2873">Клинки одноразовые нестерильные C KaWe LED, Германия</category>
<category id="2884" parentId="2872">Источники питания KaWe, Германия</category>
<category id="2885" parentId="2884">Зарядные устройства KaWe, Германия</category>
<category id="2886" parentId="2872">Фиброоптические клинки KaWe ларингоскопические</category>
<category id="2887" parentId="2886">Клинки  TEPRO® Macintosh F. O. KaWe, Германия</category>
<category id="2888" parentId="2886">Клинки FLAPLIGHT F. O. KaWe, Германия</category>
<category id="2889" parentId="2886">Клинки Foregger F. O. KaWe, Германия</category>
<category id="2890" parentId="2886">Клинки Macintosh F. O. KaWe, Германия</category>
<category id="2891" parentId="2886">Клинки MEGALIGHT F. O. KaWe, Германия</category>
<category id="2892" parentId="2891">Клинки MEGALIGHT Macintosh F. O. KaWe, Германия</category>
<category id="2893" parentId="2891">Клинки MEGALIGHT Miller F. O. KaWe, Германия</category>
<category id="2894" parentId="2886">Клинки Miller F. O. KaWe, Германия</category>
<category id="2895" parentId="2886">Клинки POLIO F. O. KaWe, Германия</category>
<category id="2896" parentId="2886">Клинки одноразовые нестерильные F. O. KaWe, Германия</category>
<category id="2900" parentId="2886">Клинки серии Economy F. O. KaWe, Германия</category>
<category id="2901" parentId="2872">Рукоятки KaWe, Германия</category>
<category id="2902" parentId="2901">Рукояти с LED осветителем для F.O. ларингоскопов KaWe, Германия</category>
<category id="2903" parentId="2901">Рукояти с ксеноновым осветителем для F.O. ларингоскопов KaWe, Германия</category>
<category id="2904" parentId="2901">Рукоятки для лампочных ларингоскопов KaWe, Германия</category>
<category id="2905" parentId="2872">Кейсы для ларингоскопов KaWe</category>
<category id="2939" parentId="2871">Ларингоскоп с набором клинков</category>
<category id="2906">Прочее</category>
<category id="2907" parentId="2906">Источники питания KaWe, Германия</category>
<category id="2908" parentId="2907">Зарядные устройства KaWe, Германия</category>
<category id="2909" parentId="2907">Аккумуляторы KaWe, Германия</category>
<category id="2910" parentId="2906">Лампы для приборов</category>
<category id="2911" parentId="2910">Лампы KaWe, Германия</category>
<category id="2914">Функциональная диагностика</category>
<category id="2982" parentId="2914">Пульсоксиметры</category>
<category id="2984" parentId="2982">Пульсоксиметры Nellcor, США</category>
<category id="2986" parentId="2982">Пульсоксиметры Кардекс, Россия</category>
<category id="2990" parentId="2982">Пульсоксиметры CHOICEMMED, Китай</category>
<category id="3012" parentId="2914">Термометры</category>
<category id="3019" parentId="3012">Бесконтактные термометры</category>
<category id="2915" parentId="2914">Ростомеры</category>
<category id="2916" parentId="2914">Неврология</category>
<category id="3357" parentId="2916">Неврологические молоточки</category>
<category id="2917" parentId="3357">Неврологические молоточки KaWe</category>
<category id="2918" parentId="2917">Серия «Бук»</category>
<category id="2919" parentId="2917">Серия «Колорфлекс»</category>
<category id="2920" parentId="2917">Серия «Тромнер» и «Витрое»</category>
<category id="2922">Мебель медицинская</category>
<category id="2928" parentId="2922">Штативы медицинские</category>
<category id="3348" parentId="2928">Штатив разборный медицинский</category>
<category id="3349" parentId="2928">Медицинский штатив для капельниц</category>
<category id="3350" parentId="2928">Штатив медицинский для вливаний</category>
<category id="2866">Светильники медицинские</category>
<category id="2867" parentId="2866">Медицинские светильники</category>
<category id="2868" parentId="2867">Медицинские светильники KaWe, Германия</category>
<category id="2869" parentId="2866">Налобные медицинские осветители</category>
<category id="2870" parentId="2869">Налобные осветители KaWe, Германия</category>
</categories>
<offers>
<offer id="10236" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost--night-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7582</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/22b/22bd88158e81bc4372b7fc3aa9559d5e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость night (черный)</name>
<description>
	Мягкий футляр
	Рукоятка крепится к головке резьбовым соединением
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10237" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-kawe-diagnosticheskiy-belyy-s-knopochnym-vklyucheniem_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>543</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/4d7/4d734b6367bfb8967aff65114ec1265a.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический KaWe белый с кнопочным включением</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10238" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-kawe-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>539</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f17/f179d3d3b90fecdccfa84026abd43153.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль черный, KaWe</name>
<description>
	Арт 06.22300.022
	Режим воронки / диафрагмы
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10239" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-rapport-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/e41/e41e679fec88c5e98191b5a50f82201a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт черный KaWe</name>
<description>
	Трубка 55 см
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10240" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12199</price>
<currencyId>RUB</currencyId>
<categoryId>2858</categoryId>
<picture>https://kawe.su/upload/iblock/79e/79e6fc971121c50c7508fa65607c678f.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 2,5B Отоскоп лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10241" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b-otoskop-operacionniy-lampochniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12409</price>
<currencyId>RUB</currencyId>
<categoryId>3372</categoryId>
<picture>https://kawe.su/upload/iblock/4d1/4d11a9d23b9a448a4b374685fcd0052e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 OP 2,5B Отоскоп операционный лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10242" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-ye50-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9535</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/50c/50c0d9b8f22fe6a7b6eb91a7ddb5fc95.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 черный KaWe</name>
<description>
	Линза +20...-20 д
	Источник питания - аккумуляторы пальчиковые типа АА
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10244" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-chernyy-eu-versiya-zelenyy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/4bd/4bd3b883cd01b2d855e87a53c3a4398b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, черный, EU-версия, зеленый фильтр, KaWe</name>
<description>
	Рукоятка - батареечная
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10245" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/ftalmoskop-yevrolayt-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10046</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/e9a/e9aad0bbe61da216bcc58012386e003b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е10 KaWe</name>
<description>
	Для кабинета офтальмолога
	
	Современный прибор для диагностики глаз пациента
	Не зеркальный офтальмоскоп
	Электрический
	Прямой
	Арт: 01.21100.001
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10246" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye30-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12199</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/0dc/0dca900b5cb757ecf5843b40421474ff.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е30 KaWe</name>
<description>
	Линза +20...-20 д
	Рукоятка - батареечная / аккумуляторная
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10247" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolait-e36-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15274</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/0e3/0e3f8ff857f6115ff012b0e620d6766d.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 KaWe</name>
<description>
	Линза +20...-20 д
	Рукоятка - батареечная / аккумуляторная
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10248" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye36-35v-s-akkumulyatorom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23175</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/7ea/7ea05fd2249655be9d86b1984496fad2.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (с аккумулятором) KaWe</name>
<description>
	Рукоятка - аккумуляторная
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10249" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolajt-e36-3-5v-perezaryadka-ot-seti-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29936</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/603/603b069e351d09a640431d9593693f90.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (перезарядка от сети) KaWe</name>
<description>
	Линза +20...-20 д
	Источник света - галогеновая лампа
 
	Аккумуляторная рукоятка
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10250" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-serii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5457</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/00f/00f05e29db09dfbc2f4a03c049993c75.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный серый, KaWe</name>
<description>
	Освещение - вакуумная лампа 2,5 В
	Батареечная рукоятка
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10251" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-sinii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11415</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/780/780f557cc04847a66f01942cecae7b53.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость темно-синий</name>
<description>
	Аккумуляторная рукоятка
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10252" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/grusha-dlya-pnevmotesta-k-otoskopam-e-24840-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1023</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/180/180483b148db8fcd7a8899c43c25b755.jpg</picture>
<vendor>Kawe</vendor>
<name>Груша для пневмотеста к отоскопам (E-24840) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10253" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/adapter-dlya-grushi-pnevmotestirovaniya-26290k-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>621</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/da7/da746e14135c5990487470fe91e6334d.jpg</picture>
<vendor>Kawe</vendor>
<name>Адаптер для груши пневмотестирования 26290K KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10254" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6296</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/c03/c03c393b7160a5a5ab3af95f47da7786.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	Удобная рукоятка - аккумулятор
	Освещение - вакуумная лампа 2,5 В
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10255" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10255</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/b05/b05b3f7e22c2afde7b760f6c1b262f21.jpg</picture>
<vendor>Kawe</vendor>
<name>KAWE COMBILIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description>
	Освещение - лампа ксенон, 2.5 Вольт
	Удобный замок для крепления головки, рукоятка аккумуляторного типа
	Ушные воронки для смены
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10256" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11168</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/fe6/fe659655d51fe776dcfc5a3d6b362c58.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description>
	Линза с трехкратным увеличением
	Освещение - LED лампа 3,5В
 
	Металлическая аккумуляторная рукоятка
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10257" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25009</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/6c5/6c51d8c77b8a2ff9735600eee9f58b77.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description>
	Освещение - лампа ксенон, 3.5 Вольт
	Удобный замок для крепления головки, удобная батареечная рукоятка
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10258" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7263</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/96f/96ff6c9116978745692e0e2da45f86c5.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	
	Эргономичная аккумуляторная рукоятка
	Надежен в эксплуатации
 
	Стерилизация дезинфицирующими растворами
	Корпус из прочного пластика
	Освещение - вакуумная лампа 2,5 В
 
	Воронки для осмотра уха

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10259" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8714</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/92a/92a2a3f12edd6891953bd28e00a4570f.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 2,5 В Лампочный отоскоп</name>
<description>
	Источник питания -  батарейки типа C 1,5 В, батареечная рукоятка
	Освещение - вакуумная лампа 2,5 В
 
	Удобная рукоятка на винтовом соединении

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10260" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14863</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/39e/39e8a51dd4bf77531780b41306050a22.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description>
	Артикул: 01.11330.001 (24750)
 
	
	Фиброоптика
	Освещение: лампа ксенон, яркое
	Поворотная лупа для равномерной регулировки
	Рукоятка аккумуляторного типа
 
	Для рабочего места оториноларинголога

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10261" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe_eurolight_fo_30_led_2_5_v_otoskop_fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15894</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/815/8158ce98e440a1d09d816c8a85cf28fe.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description>
	Артикул: 01.11530.002
 
	Батареечная рукоятка
	Свет - 8 000 Люкс
	В комплект входит набор воронок, чехол
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10262" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28704</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e13/e13f2369b8803d079cdbcc7ae79c9b3d.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10263" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-25-v-yevrolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25830</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/10d/10d8458629651cb4245ab35bab380455.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 2,5 В - ЕВРОЛАЙТ 2,5 В</name>
<description>
	Дерматоскоп - прибор для осмотра кожи.
	Материал - металл (Металлическая рукоятка).
	Работает от батареек либо аккумулятора (Перезаряжаемая рукоять)
 
	Лампа с ксенон-галогенным освещением
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10264" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-piccolight-d-25-v-pikkolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18248</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/7a5/7a59a6bd85f9e98fbff9aa77e5bc6233.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE PICCOLIGHT D 2,5 В - ПИККОЛАЙТ 2,5 В</name>
<description>
	Дерматоскоп - аппарат для исследования кожи.
	Характеристики:
	
		Диапазон фокусировки от –6 до +3,5 D
		Рукоятка: батарея питания типа АА (не входят в комплектацию)
		Линза - кратность 10x
		Необходима иммерсионная жидкость
	
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10265" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-35-v---yevrolayt-35-v-s-led-lampoy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31980</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/5ef/5ef06e973de4725b061d7b9e01dd9dd8.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 3,5 В - ЕВРОЛАЙТ 3,5 В с LED лампой</name>
<description>
	Встроенный блок питания 3, 5в
	Источник света - Яркость 15 000 Люкс
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10266" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37417</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/c87/c873d3b04a71f586a8b4db3e360517a4.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe смотровой светильник передвижной напольный</name>
<description>
	Исполнение - напольный, передвижной
	
	Диаметр поля (рабочего диапазона) — 125 мм на расстоянии 0,5 м
	
	Питание от сети — 220 В
	
	Срок службы лампы —22000 ч.
	
	Мобильное основание
	
	Фиксация лампы
	
	Естественность цветопередачи


	Передвижной светодиодный источник освещения может использоваться как для осмотров пациента, так и при операциях, или как дополнительный источник света.
	
	Входит в стандарт оснащения многих кабинетов.

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10267" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-0-c-izognutyy-dlinavysota-7713-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/d46/d460915a041bf30aa19becd8f29407a7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 C изогнутый (длина/высота, 77/13 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10269" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18978</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/dbc/dbc2b0c8633a4c54b97296d5df8b5778.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник</name>
<description>
	от 21 428 руб
	Гибкая часть (поворот на 360 градусов)
	Площадь светового поля - 10 см
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10270" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-1-c-izognutyy-dlinavysota-9218-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/8dc/8dcf5d68157ac1657de4c90c34bb6b55.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 C изогнутый (длина/высота, 92/18 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10271" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-2-c-izognutyy-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/250/250424aed1d22ef91ea03cf89cf780f2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 C изогнутый (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10272" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-3-c-izognutyy-dlinavysota-13321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1fd/1fdadc9f155980de4bddd567f981e363.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 C изогнутый (длина/высота, 133/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10273" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-4-c-izognutyy-dlinavysota-15321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/860/860de12b5717b6eb515f87d51ce71790.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 C изогнутый (длина/высота, 155/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10274" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-5-c-izognutyy-dlinavysota-17623-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/625/625e0f1df46c2a5440be5979f3fbdbd9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 C изогнутый (длина/высота, 175/23 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10275" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28704</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/b41/b418b1387bd5e473b2a1146997803d93.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe cмотровой светильник</name>
<description>
	от 28 124 руб
	Система светодиодов холодного света с углом отражения 24°
	
	Ресурс лампочки — 22 000 часов
	Конструкция имеет гибкое крепление (вращение на 360 градусов)
	
	Установка в выбранном положении
	
	Фокусировка лучей
	Тип установки -  на стену / столы

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10276" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-00-c-pryamoy-dlinavysota-6512-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/74d/74df080c61a52028571f001aae876c5a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №00 прямой (длина/высота, 65/12 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10277" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-0-c-pryamoy-dlinavysota-7711-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/f2e/f2ef73fabf9f4bceba80b9119671894c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №0 прямой (длина/высота, 77/11 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10279" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-1-c-pryamoy-dlinavysota-10211-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/b3a/b3a02a9bab2d29c07d3fd18850f2c603.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №1 прямой (длина/высота, 102/11 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10280" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-2-c-pryamoy-dlinavysota-15313-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/47a/47a43a791aa61b0b132d93044c78d140.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №2 прямой (длина/высота, 153/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10281" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-3-c-pryamoy-dlinavysota-19513-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/684/6849013889cf57638e11d33675746efa.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №3 прямой (длина/высота, 195/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10282" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-4-c-pryamoy-dlinavysota-20516-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/45b/45bb89fd298d8c47c671350ddb922017.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller C №4 прямой (длина/высота, 205/16 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10283" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-0-c-pryamoy-dlinavysota-7712-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/817/8176a3130221345f213a1672df9afbb5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №0 C прямой (длина/высота, 77/12 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10284" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-1-c-pryamoy-dlinavysota-9214-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9d9/9d9c74649af0416a00c7d90080194b05.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №1 C прямой (длина/высота, 92/14 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10285" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/nabor-dlya-lor-vracha-nabor-diagnosticheskiy-beysik-s10-kawe---otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12610</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/6c7/6c7f97ab277cf42c0d82664278b802dc.jpg</picture>
<vendor>Kawe</vendor>
<name>Оториноскоп - набор для ЛОР врача, диагностический Бейсик С10 KaWe - отоскоп с принадлежностями</name>
<description>
	Источник света (освещение) - вакуумные лампы
	Угол зрения ±6°
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10286" available="true">
<url>https://kawe.su/catalog/stetoskopy-veterinarnye/stetoskop-suprabyell-s-voronkoy-d495mm-dlina-75sm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6570</price>
<currencyId>RUB</currencyId>
<categoryId>2861</categoryId>
<picture>https://kawe.su/upload/iblock/6d0/6d0627637d99427bfc58eba12165634e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп СУПРАБЕЛЛЬ ветеринарный с воронкой d=49,5мм,  длина 75см</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10287" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye10-kawe---oftalmoskop-1-apertura-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15319</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/385/3854cb06e66221c07cae94712230a058.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е10 KaWe - офтальмоскоп 1 апертура и отоскоп с принадлежностями</name>
<description>
	Набор для исследования гортани, носовой полости, слухового прохода, с возможностью проведение массажа барабанной перепонки
	лампа: вакумная
	
	Линз: 3-х увеличением
	
	Головка: пластиколвая
	
	Рукоять: цельнометаллическая
	
	Стерилизация, чистка: спиртовые растворы, автоклавируемый частично.
	
	Прибор для визуального осмотра лор органов (носовых пазух), после хирургических операций, рядового осмотра

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10288" available="true">
<url>https://kawe.su/catalog/zaryadnye-ustroystva-kawe-germaniya/universalnoe-zaryadnoe-ustroystvo-medcharge-4000-dlya-akkumulyatorov-nimh-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16606</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/673/67314c7527cbb4221e876d177fa32a52.jpg</picture>
<vendor>Kawe</vendor>
<name>Универсальное зарядное устройство MedCharge 4000 для аккумуляторов NiMH, Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10289" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye16-kawe---oftalmoskop-6-apertur-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18157</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/cd4/cd406c89f3a711852505ef15b5b1c69e.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е16 KaWe - офтальмоскоп 6 апертур и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10291" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermagel-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>621</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/3f4/3f4444a1902af7824d498753b0555d7e.jpg</picture>
<vendor>Kawe</vendor>
<name>Дермагель KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10292" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/kontaktnoe-steklo-so-shkaloy-dlya-kawe-dermatoskopov/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3276</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/ab4/ab4b222fa4c0b1bb93db514619225524.jpg</picture>
<vendor>Kawe</vendor>
<name>Контактное стекло со шкалой для KaWe дерматоскопов</name>
<description>
	Диаметр - 25 мм
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10299" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-fo30--e36-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>40903</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/994/994433b0db7f9060474336398f895e11.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight F.O.30 / E36 2,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10300" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-led-fo30--e36-35-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61404</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/db4/db4e822ea1a663378e40fe1adcd79662.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight LED F.O.30 / E36 3,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10301" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-semeynogo-vracha-basic-set-combilight-c10e15-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16341</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/f46/f4652d6361e3f8e4d0ab2659614e7535.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор семейного врача BASIC-Set Combilight C10/E15, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10302" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-piccolightkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1934</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/b39/b395ced05bffa8d157c02a10f1fbaa86.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для PICCOLIGHT®,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10303" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/4ac/4ac740f2a69532439a842e18dcfe23fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для BASIC-SET, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10305" available="true">
<url>https://kawe.su/catalog/kamertony-kawe/komplekt-meditsinskikh-kamertonov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18184</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/190/190581c6c8901036b15127f09d623264.jpg</picture>
<vendor>Kawe</vendor>
<name>Комплект медицинских камертонов KaWe</name>
<description>Характеристики:

	с-128 Гц — с фиксированными демпферами (грузами, гирьками)
	с-1 256 Гц — с фиксированными демпферами (прибл. 17 см)
	с-2 512 Гц — без демпферов (прибл. 17 см)
	с-3 1024 Гц — без демпферов (прибл. 14 см)
	с-4 2048 Гц — без демпферов (прибл. 13 см)

 Изделие поставляется в жестком пластиковом кейсе (5 шт. в упаковке). Для длительной эксплуатации. Служит для исследования специалистами в отоларингологических кабинетах. Изготовлен в Германии.</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10306" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-128-gts-128-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5219</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ef2/ef2c4f07c7bc69bbe8aa4be9507f7575.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 128 Гц) KaWe</name>
<description>
	Артикул 08.14012.101
	c128 hz
	С фиксированными грузиками
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10307" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5219</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/1f3/1f3d94f91980b25c5f81f9f659fbd544.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 256 Гц) KaWe</name>
<description>
	для проведения проверки слуха (воздушной, костной проводимости), для теста чувствительности и использования в других диагностических (терапевтических) целей
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10308" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-aluminieviy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4644</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/69a/69a22ab8a2227aae3d1f297af29477bf.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10309" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-alyuminievyy-bez-dempferov-0814051001-33523-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3577</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/8c9/8c9556dfb3f02ca3bef7bbc0787b88e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10310" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-1024-gts-1024-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3486</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/82e/82e98f7d01646d9a8cfe6171c2cc0946.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10311" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-2048-gts-2048-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3486</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/109/109282b8b0b8b0ec1768004937fcb080.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10312" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-po-lukae-128-gts-128-hz-graduirovannyy-s-reguliruemymi-ot-c-do-h-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8714</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/82a/82afa9734d2245fcc1338878443ae152.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае градуированный с регулируемыми от C до H демпферами  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10313" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-128-gts-128-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6050</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/087/0877664be04f6f25d86af2195e7fb14d.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10314" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-256-gts-256-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5639</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/8aa/8aacfa1bbb35d31f2507bfdb2da1fb8a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10315" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-512-gts-512-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5438</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/382/382c143d2c5e2240c04d467c4c2a13d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10316" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-1024-gts-1024-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5329</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/008/0084a12a16815d609f63a413e6a3a1fb.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10317" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-2048-gts-2048-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5438</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/3cf/3cfdb367ce98d0313e7199f163ebe9d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10318" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-4096-gts-4096-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5639</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/a50/a5005a753f994e9c70ac1782d026b1b8.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 4096 Гц) KaWe</name>
<description>
	с-5
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10319" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-4096-gts-4096-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3586</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/4a5/4a5a00a4c8b43da62e15a797799b5bc6.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10320" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-2048-gts-2048-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3386</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/721/72143afd8648acd6c1a4cf5b40172168.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10321" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-1024-gts-1024-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3696</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/7fe/7fe545b50ebf10c25af518109baef27b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10322" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-512-gts-512-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3897</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/02e/02e14be60c2b4cf8ba133adc0e0d48d6.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 512 Гц) KaWe</name>
<description>
	выполнен из стали
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10323" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-256-gts-25-hz-po-hartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3997</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/72e/72e1ce47c18aa9215c11d0f496485f59.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 256 Гц) KaWe</name>
<description>
	с1
 
	корпус: стальной, никелированная поверхность
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10324" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5018</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/f69/f6920d8a8032e79041d4b7d34866f2f4.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов (частота 128 Гц) KaWe</name>
<description>
	Исполнение: по Хартману
 
	Высокое качество звучания;
	
	Стальной, с подставкой;
	дезинфекция: в стерилизаторе
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10325" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-s-fiksirovannymi-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6050</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/9dd/9dd5498b35175e6ca039e56737302fd8.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману с фиксированными демпферами  ( частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10326" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-ot-128-do-64gts-128-64-hz-po-ryudel-seyferu-graduirovanniy-s-gruzami-i-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10046</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/87d/87dd9829f5b20694bb78862848256950.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон KaWe по Рюдель-Сейфферу градуированный (частота без демпферов 128Гц) KaWe</name>
<description>
	 стерилизация: автоклав, спиртовые средства для дезинфекции
	по типу: rydel-seiffer
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10327" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-a1-440-gts-a1-440-hz-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/5b7/5b7d734c7a17c27073f060853c06e6a2.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон A1 440 Гц (A1 440 Hz) без грузов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10328" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyy-nastennyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24505</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/9bf/9bf741b18183108f521cdf36ddf73b51.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый настенный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10329" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyydopolnitelnyy-modul-s-2-rukoyatyami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34850</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/483/4830d823ac2caf9fdc8c6ad784090bd6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый+дополнительный модуль с 2 рукоятями, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10330" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-dopolnitelnyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14896</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/ee0/ee059641562be748b398e2d30b5ae5a6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 дополнительный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10331" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-modul-dlya-ushnykh-voronok-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3912</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/068/068bfa32f2b0098f67b21db924a9bf58.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 модуль для ушных воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10332" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-ce55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49265</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/4a1/4a1b27568035a996ac3d858987903d76.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 набор C/E55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10333" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57952</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/ca6/ca6c968bc7fad4b44e1a142d0534fddd.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (США), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10334" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57952</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/6d0/6d06693a7884665d76dc94bc3790bddf.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (ЕС), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10335" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>84806</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/ac0/ac08a49936a543728091d1f48ea6e5be.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10336" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-c-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5293</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/a8f/a8f2b609772cebc1aa5b0fcffac64386.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight C, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10337" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11090</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c1a/c1a16604c126ce6ca11e7a28e3794b4e.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10338" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38868</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/02e/02e096df80d6ae3fe1e3adb42ff2f5cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10339" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9124</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/97c/97c91df2a60e4f12684eaff70031e024.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10340" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-eu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12014</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/605/6050f36030bafa75751b07efb4a6c468.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (EU), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10341" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-usa-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12014</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d30/d30651a2c42ac737099d4a41af43eb26.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (USA), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10342" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor_voronok_mnogorazovyh_2_5_3_5_4_5mm_3_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1068</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/1d3/1d314f38ac6032a207430f386e9b0b2f.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/3,5/4,5 мм (3 шт. в пластике) 01.72101.001 (24846), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10343" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-3-sht-0172102001-24847/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1068</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/6ab/6ab5f030e40db2fd903ebbeca4dffb7b.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (3 шт. в пластике) 01.72102.001 (24847),KaWe</name>
<description>
	Диаметр 2.5 мм
	3 шт. в уп
 
	арт 01.72102.001(24847)
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10344" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-rukoyatey-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>822</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/ff6/ff6c0878c0848e978c0fff99c303a576.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для рукоятей EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10345" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-35-mm-3-sht-0172103001-24848/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1068</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/0f3/0f3fbc7f61dcb59713237a72d3130ab0.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,5 мм (3 шт. в пластике) 01.72103.001 (24848) , KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10346" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-piccolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/987/987479c6abddbaf2f8955ed76ebce700.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для PICCOLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10347" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-45-mm-3-sht-0172104001-24849/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1068</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/b25/b25e10da94ab56cbe00b9587752bfe64.jpeg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4,5 мм (3шт. в пластике) 01.72104.001 (24849), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10348" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumka-kozhzam-na-molnii-dlya-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>967</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/158/158957067d678e223269b76ddd867c83.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумка кож/зам на молнии для EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10349" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19370</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/9d3/9d31e03007223d545055476fe329c49e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description>
	Срок службы лампы - около 100 000 часов
	Удобный замок для крепления головки, удобная рукоятка аккумуляторного типа
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10350" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-10-sht-0172212001-26200/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/bbb/bbbba3659b2203c0ae930dcec6e6637a.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (10 шт. в пластике) 01.72212.001 (26200), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10351" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumochka-tkanevaya-na-lipuchke-dlya-piccolight-chernaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>922</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/a4b/a4bd92ad4804466482ed845ebf7e3fe2.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка тканевая на липучке для PICCOLIGHT, черная, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10352" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-3-5-v-otoskop-fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16295</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/097/097ed8f908d8dd65e295d4dfd5ed3c8e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Прибор для исследования слухового прохода и барабанных перепонок в отоларингологии, для диагностических процедур при терапии / реабилитации
	Линза с 3-х кратным увеличением исследуемой области
	Освещение ксеноновой лампой
	Удобный замок для крепления головки к рукоятке, аккумуляторная рукоятка
	
	Артикул: 01.12430.101

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10353" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23987</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/af0/af05fa3c1fc2f9f571fa6f12a5c25f3f.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10354" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-4-mm-10-sht-0172213001-26205/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/71a/71a7b6a511101398cab5357a03f05808.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4 мм (10 шт. в пластике) 01.72213.001 (26205), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10355" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/kronshteyn-osvetitelya-dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1551</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/df6/df67cd941a7464b881e78a8942f486d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Кронштейн осветителя для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10356" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-op-led-25-v-lampochnyy-otoskop-operatsionnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14553</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/67c/67c1803e08c61f2cb33f0e489843b832.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 OP LED 2,5 В Лампочный отоскоп операционный</name>
<description>
	Артикул: 01.11534.001
 
	Освещение LED лампа 2,5В стандартной мощности
	Удобный замок для крепления головки к рукоятке 
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10357" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-2540mm-10-sht-0172211001-26210/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1551</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/f83/f835d3b024f3739960d45173392e52a7.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/4,0мм (10 шт) 01.72211.001 (26210), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10358" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nabor-laringealnykh-zerkal-3-i4dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>640</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/289/2892888c0d34ba9ab84905fdac3825a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор ларингеальных зеркал №3 и№4,для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10359" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20301</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/4da/4da2256d74b41bb21a4080862e8ff3ba.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Арт: 01.11430.101
	Освещение: лампа ксенон
	3-кратное оптические увеличение
 
	Работа от батареи
	Поставляется в комплекте с воронками для ушного канала
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10360" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171112001-28912/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6643</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/8ed/8ed9a887bb06500f4204a0c7b222df12.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100 шт., в пластике) 01.71112.001 (28912), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10361" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/derzhatel-shpateley-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>347</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/39a/39ad2ad7a137d336625088bf6bfa5ae5.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателей для  Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10362" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171122001-28913/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6643</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/061/061e3ffa4017262961d08bd1996ecb22.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4,0мм (100 шт. в пластике ) 01.71122.001 (28913), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10363" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/razdvizhnaya-nazalnaya-voronka-dlya-basic-set-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/d2c/d2cd63b8eafdc8fccc250cd0d13b5d6b.jpg</picture>
<vendor>Kawe</vendor>
<name>Раздвижная назальная воронка для Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10364" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-v-plastike-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5329</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5fd/5fdcf1d0d7c0117530867a3a1df328aa.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100шт. в пластике), KaWe</name>
<description>
	арт 01.71212.001(28910)
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10365" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-rossypyu-0171211002-28900/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/d99/d994eb3a98b4b0d25f2a6c738020f8b7.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые серые маленькие, ? 2.5 мм, (1000 шт. в карт.упаковке) KaWe</name>
<description>
	Диаметр - 2,5 мм
	Артикул - 01.71211.002(28900)
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10366" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-100-sht-v-plastike-0171222001-28911/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5329</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/501/5011b08e05a34e27e3cbf3eb268e889b.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10367" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-1000-sht-rossypyu-0171221002-28901/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/1c7/1c7f7098aa0ce79e11b94a3ed0718c4f.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (1000 шт. в карт.упаковке) 01.71221.002 (28901), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10368" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6204</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/a43/a4350940d5582fa8b5f9fd4a22b64699.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. черный, KaWe</name>
<description>
	Ушные воронки для смены
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10369" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-253545559mm-5-sht-0172106001/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2419</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/a4a/a4a57f7e9eef4042e6a01c9741fde543.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.5, 3.5, 4.5, 5.5, 9.0 мм (5 шт. в пластике)  01.72106.001, KaWe</name>
<description>
	Арт 01.72106.001
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10370" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-25-mm-1000-sht-0171111002-28902/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5366</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/d8a/d8a27efaddbbf60a7dc9417ed6a042d2.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5 мм (1000 шт., в карт.упаковке) 01.71111.002 (28902), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10371" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-40-mm-1000-sht-0171121002-28903/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5366</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/ace/ace654a8f2e89d1c7309fc4695699261.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые черные большие 4,0 мм (1000 шт., в карт.упаковке) 01.71121.002 (28903), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10372" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/mnogorazovye-ushnye-voronki-dlya-veterinarnogo-otoskopa---nabor--40--50--70-mm-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2683</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/337/3373be9375182c125508b1e0e7247525.jpg</picture>
<vendor>Kawe</vendor>
<name>Многоразовые ушные воронки  для ветеринарного отоскопа -  набор, ? 4.0, 5.0, 7.0 мм, 3 шт. в пластике, KaWe </name>
<description>
	Комплект,  3 шт.
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10374" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-2-5-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>524</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>https://kawe.su/upload/iblock/268/268d4489f9ee2052550541d2edfe9e96.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 2,5 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10375" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7637</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/fc5/fc52de57d40fc3b98b456e15b7d34479.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп стандартного освещения 2,5 V, KaWe</name>
<description>Характеристики:

	Назальные расширители
	Возможность работы с аккумулятором
 
	Диаметр рукояти - 28 мм
 
	Оснащения кабинета оториноларингологии, отоларингологии, семейного врача
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10376" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-fibroopt-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8221</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/dd8/dd8f7ef41014035fd7e03b49608bfd19.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 2,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10377" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13540</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/597/59729eebebbac36da12520545b25052b.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от зарядного устройства, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10378" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21861</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/df0/df066d152cd9491088a5bfaf17746dde.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10379" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8705</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/be4/be436c9100f0fe28ecc65b098722be01.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 2,5V, KaWe, в комплектации</name>
<description>
	Рукоятка работает от батареек типа С,
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10380" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13631</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/512/512dcfd4ca4a177a393f8d0f25c43457.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe,в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10381" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21952</price>
<currencyId>RUB</currencyId>
<categoryId>2821</categoryId>
<picture>https://kawe.su/upload/iblock/837/837ed31bb1b35d629f16ddffab2d8149.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10382" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-2-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8403</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/fff/fff92225e7fb3622691f256396252fdd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №2 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10383" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-2-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/d3b/d3b365f5808a7fe6a21222a16c6007d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №2 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10384" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_flaplight_3_fo_s_podvizhnym_nakonechnikom_so_smennym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/b77/b770788b217d2bd5cfcb5f8babe567a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №3 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10385" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-4-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/647/647b71ba40e5a0f8c06f20ba47e1ff6b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №4 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10386" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--2-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/0b9/0b929ab806c2cbf632ecc7fda7d4a154.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №2 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10387" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_megalight_flaplight_3_f_o_s_podvizhnym_nakonechnikom_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/820/82049cec9ab94c578613ef8b51b66547.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №3 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10388" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--4-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25319</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/8ce/8ce2018e1ab9094bc18f9fed824bdc31.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №4 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10389" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/457/45743af6533f2bbe8a6069580941842c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №0 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10390" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-1-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/812/812a6aa59e49e439f5144e996d772db3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №1 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10391" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6187</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c51/c5193a88b8160abb0cae6cd2bac1182b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №2 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10392" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-3-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/769/769749e9195a3a256d8a26baed89c45a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №3 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10393" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-4-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/ec1/ec1ad51682564fb985951a5296c83603.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №4 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10394" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/aad/aad8aaac6a2b9dd302565e49a57869e3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10395" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b05/b05fc4f70d8a301b48c28ce70d19d861.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10396" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/312/312a8647e05bbe752dbafc1d87ae1aad.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10397" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/529/52974121c5fc2ba3a14609e67cff924b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10398" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/linok-macintosh--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/100/100c710cb9b2b3b178698b8e0be33bb1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10399" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--5-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/265/265ac97e821887bef48685522f49e01e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10400" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/770/7701cd42a67d2be71a82d121c1c61a73.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10401" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/447/4477f4cee5a2d453873ec8d4675b7dc9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10402" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh-3-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/129/12903c443e3559ac3ee21b5849fa998c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10403" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--2-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/984/984b885e5368b7a96328eb832a625889.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10404" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok_megalight_macintosh_4_f_o_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8d7/8d7ea4d2ae54401cf9ba88552e7a2d6c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10405" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--5-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/095/095b1cf69c1239e9bf84f46bf4a3cf21.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №5 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10406" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--00-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/af2/af25bc6fb3bba85d7111d4a9ae899e29.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №00 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10407" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/f54/f54e4b2f3b4cfe7bda018097fd51c728.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10408" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/416/41654764001d679769aa7a53420d76e4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10409" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller-2-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9b0/9b0a425c3c3e91ce67f6f4662f06080e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10410" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--3-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/99e/99e5e62d929134b9a290da37cee3fe62.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10411" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--4-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8915</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/01b/01b96a4fdf5456ae73176906b3a68b91.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10412" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--00-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cd7/cd7e4d6748e9fddf95cdac5c9c4664b5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10413" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/cb0/cb0c21824750b0f558f5b627b39f2799.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10414" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/806/8067c28f7dbd4bcc009aa57b6302a788.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10415" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/ef5/ef52e8a18b129e196bfba58f204b8037.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10416" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/d9e/d9e2212311b9299dc94314500ac88407.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10417" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/fb5/fb5f642d353d2edd7012141a21997914.JPG</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10418" available="true">
<url>https://kawe.su/catalog/klinki-polio-f-o-kawe-germaniya/klinok-polio-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8513</price>
<currencyId>RUB</currencyId>
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/b03/b03c61981e71972726aa6e41a6270ddd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO №3 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10419" available="true">
<url>https://kawe.su/catalog/klinki-odnorazovye-nesterilnye-f-o-kawe-germaniya/klinok-miller-pryamoy--00-metallicheskiy-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>484</price>
<currencyId>RUB</currencyId>
<categoryId>2896</categoryId>
<picture>https://kawe.su/upload/iblock/788/7884ce2f334abb2c89c462e72f3078da.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой)  металлический </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10420" available="true">
<url>https://kawe.su/catalog/klinki-odnorazovye-nesterilnye-f-o-kawe-germaniya/klinok-macintosh-izognutyy--0-metalliicheskiy-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>572</price>
<currencyId>RUB</currencyId>
<categoryId>2896</categoryId>
<picture>https://kawe.su/upload/iblock/733/73301f9c0c5d205c594cbaeea02f7383.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh  (изогнутый)   металлический </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10428" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/972/972cac470f5babc840612e4b4e477fe7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10429" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--00-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/14d/14d052f81c48041ddd64175d237aca28.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10430" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--4-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18887</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d93/d93010478227ca3a000de80076e104d6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10431" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-2-c-s-podvizhnym-nakonechnikom-dlinavysota-10021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15174</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/fbc/fbcfc3eb2e73838e524ca0e5e6583e30.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Flaplight №2 C с подвижным наконечником (длина/высота, 100/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10432" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-3-c-s-podvizhnym-nakonechnikom-dlinavysota-13021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15174</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/472/472c3eace6d2054dc3147847f755f683.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №3 C с подвижным наконечником (длина/высота, 130/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10433" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-4-c-s-podvizhnym-nakonechnikom-dlinavysota-15025-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15174</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/d1a/d1a2745d83ee461973c9ba791f8136f8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №4 C с подвижным наконечником (длина/высота, 150/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10434" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/linok-foregger-2-c-pryamoy-dlinavysota-11215-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/53a/53ac1b7b5f84aecf82fddad05d856b84.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №2 C прямой (длина/высота, 112/15 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10435" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-3-c-pryamoy-dlinavysota-13216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4cf/4cff16a9038b4b5818f2461a6538dbdb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №3 C прямой (длина/высота, 132/16 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10436" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-4-c-pryamoy-dlinavysota-15718-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e4e/e4ed1370b4ebe26a58fb1a365845e03e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №4 C прямой (длина/высота, 157/18 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10437" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinki-tyepro-makintosh-s-4-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3650</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/e65/e65c79c8edfc35bb92b553090f1fecde.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки ТЕПРО Макинтош С №4 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10438" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-3-s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4617</price>
<currencyId>RUB</currencyId>
<categoryId>2878</categoryId>
<picture>https://kawe.su/upload/iblock/d61/d619d9e0e0bab65994e7128629c17ba8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №3 С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10439" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-4s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4617</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/3b4/3b43111dedbe5ae64650a72dd2a18745.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №4С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10442" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--0-c-dlinavysota-8015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/217/2176434888a98e69f6e40973b845662d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 C (длина/высота, 80/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10443" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--1-c-dlinavysota-9520-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/675/675a67ad2f732b207b2103e6cfc05d9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 C (длина/высота, 95/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10444" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--2-c-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/3ca/3ca9d792c531e716f4fd1ca5e418b3df.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 C (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10445" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--3-c-dlinavysota-13324-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/caf/caf33a614e6cd574f91a520627604991.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 C (длина/высота, 133/24 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10446" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--4-c-dlinavysota-15325-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/80b/80be7dd1975ef41ed42fb96b42fefe0d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 C (длина/высота, 153/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10447" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--5-c-dlinavysota-17925-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1734</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1ae/1ae9506e0bd239809559fe1935a6accf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 C (длина/высота, 179/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10448" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--1-c-dlinavysota-10312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/072/07209e812f4deb7542f5e490d3130f5c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 C (длина/высота, 103/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10449" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--2-c-dlinavysota-16015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c57/c57b0074dcc9e1ef1e0332a260b597fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 C (длина/высота, 160/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10450" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--3-c-dlinavysota-20014-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/029/02947b84ec220b02efe8f6049ae3192c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 C (длина/высота, 200/14 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10451" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--4-c-dlinavysota-21017-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/253/25344b928432f44dacde11bcfba8810d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 C (длина/высота, 210/17 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10452" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--00-c-dlinavysota-6812-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ceb/ceba65910b9764eacaaf968415f23ae1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 C (длина/высота, 68/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10453" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--0-c-dlinavysota-8112-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/aa9/aa9452d724f5f0e628440fd2bc5fcc86.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 C (длина/высота, 81/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10454" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/938/93830a92dbb5bf9be6f65fe5b850d018.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №00  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10455" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy--0-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/ce0/ce07fc2deffed0c327a057f212ffe719.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №0 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10456" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7482</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/7bb/7bbfcf7f18d71cc42dc845636423bee2.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10457" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11588</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b7e/b7ea10ee47820aaf0509f40efc3f6050.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10458" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7582</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d26/d267a46f5683899b2d5e7312b6c92b37.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10459" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/a3c/a3c3840136a11496beb219bb5fba6f6c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10460" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-led-d28mm--akkumulyator-35v-li-lon-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19991</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/98e/98e4857213bd9940b9fbb65c81be73df.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя LED (d=28мм) + аккумулятор 3,5V Li-lon осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10461" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-odnorazovaya-led-srednyaya-iz-plastika-d30mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1013</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/95f/95fc0b691275e9ec50943904b2fc34bb.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5В Одноразовая LED средняя из пластика (d=30мм)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10462" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-led-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/484/484b2e6d0f556dd5e77a59963a4afcf7.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с LED осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10464" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6481</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/8c2/8c2cef075e13a6488e84c859107856cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая  В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10465" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6460</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/ef6/ef6ffa332a896092de5777f2089c5001.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10466" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm--akkumulyator-35v-li-lon-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12920</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/231/23194c75ab368d9db88fda2c6929c577.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) + аккумулятор 3,5V Li-lon, NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10467" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19881</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/a8c/a8ce7aaea2da9ca3d43b612b23c02025.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10468" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6871</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/791/7917cc89c6b8b2a6a98a1db165b7ec0e.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10469" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6871</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/45c/45c03193bd1ce959b58b8a16a0e719bc.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10470" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-ekonom-fo-d-30mm-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5237</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/aba/aba5006b8a33f5a8290fc597deb725ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка 2,5В (d= 30мм)  Эконом F.O.</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10471" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14462</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f63/f63b129a2acf06fe115b9f53799f2481.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10472" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-malaya-25-v-d19mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3431</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/117/1176e5201462465818603759beb53bd3.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая 2,5 В (d=19мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10473" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-25-v-d28-mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3586</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/635/6350e4bf69529ac23c2ebd92eedaf960.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя 2,5 В (d=28 мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10474" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-25-v-d32-mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3796</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c1c/c1c53266474aafd3771c887fe468ba75.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая 2,5 В (d=32 мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10475" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-economy-25-v-d30mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2828</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/86b/86b8968947c38e9c8675e9f9c771506b.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка Economy 2,5 В (d=30мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10476" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/odnorazovaya-batareechnaya-rukoyatka-c-bolshaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>767</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/07a/07a732a50fa38c24659771a25baa0e3e.jpg</picture>
<vendor>Kawe</vendor>
<name>Одноразовая батареечная рукоятка C, большая, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10477" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--3-klinka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2363</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8cd/8cdf0fef05ebb3fd6af2768ac9b0a7ef.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 3 клинка Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10478" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--5-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3075</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/801/8018cbf51b5b56849a7971cfd3ec335a.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 5 клинков Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10479" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--7-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3997</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/5bd/5bda7c30484c81ef0f98e5cd63f94471.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 7 клинков Макинтош и Миллер ) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10480" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--2-klinka-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3997</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1da/1da96f699f65f356a97e35204a0ac975.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 2 клинка FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10481" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/sumochka-dlya-laringoskopa-rukoyat--4-klinka-sinyaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>867</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f77/f775d875b02aabcf54e7cff6b93f05e3.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка для ларингоскопа (рукоять + 4 клинка) синяя KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10482" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--1-klinok-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3376</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/481/4817e6ab1356b34df200e2f921502573.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 1 клинок FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10483" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/kartonnyy-boks-na-4-klinka-i-1-rukoyatkwe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>806</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d9c/d9c75652491ff2ea37dbe6bb2b58793f.jpg</picture>
<vendor>Kawe</vendor>
<name>Картонный бокс на  4 клинка и 1 рукоять,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10484" available="true">
<url>https://kawe.su/catalog/rostomery/nastennyy-rostomer-ruletka-person-check-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2915</categoryId>
<picture>https://kawe.su/upload/iblock/e14/e14378e2bc05ecfe4ded0f7202e6f351.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенный ростомер (рулетка) Person-Check KaWe</name>
<description>
	Длина - 2000 мм
	Цена - от 1 783 руб
	Подходит для детей и взрослых
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10487" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-iz-nerzhaveyushchey-stali-0911005002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7710</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>https://kawe.su/upload/iblock/7f0/7f016ec379bc55a83b701e9befd8dc9d.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка из нержавеющей стали KaWe</name>
<description>Стойка стальная для длительных внутривенных вливаний. Подходит для кабинетов врачей или ухода за больным в домашних условиях. 
 
 Характеристики:

	Производитель — Каве
	
	Бесступенчатая регулировка высоты; Высота - 210 см
	
	Вес — до 2.9 кг
	
	Диаметр основания (ширина) - 60 см
	
	Диаметр колес - 5 см (+ антистатические колеса)
	Тип опоры — двойные бесшумные колеса
	
	Телескопический штатив с пятилучевым основанием и пластиковой крестовиной
	
	Крючка для инфузионных пакетов — 4
	
	Разборная (+ ключ для монтажа)
	
	Без держателя для флаконов (емкостей)
	
	Так же подойдет для: операционные блоки, реанимационное отделение, палата пациента.

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10488" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-khromirovannaya-0911800002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4516</price>
<currencyId>RUB</currencyId>
<categoryId>3350</categoryId>
<picture>https://kawe.su/upload/iblock/ab5/ab51583158506ed5b616bca7d40f62b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка хромированная KaWe</name>
<description>Штатив для вливаний медицинский от 5 099 руб
 

	Артикул 09.11800.002 
	С бесступенчатой регулировкой по высоте
	На хромированных опорах, двойных колёсах
	Диаметр колёс — 50 мм
	Разборная телескопическая конструкция
	Нагрузка до 8 кг
	Без держателей для флакона
	Обработка дезинфицирующими растворами
	

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10489" available="true">
<url>https://kawe.su/catalog/shtativy/stoyka-infuzionnaya-peredvizhnaya-iz-nerzhaveyushchey-stali-tyazhyolaya-dlya-infuzomatov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14407</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/e8e/e8e61dd17f1dfce81fe2fd06d459a391.jpg</picture>
<vendor>Kawe</vendor>
<name>Стойка инфузионная передвижная из нержавеющей стали тяжёлая (для инфузоматов), KaWe</name>
<description>
	Длина - от 120 до 210 см
	Арт 09.11010.002
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10490" available="true">
<url>https://kawe.su/catalog/shtativy/derzhateli-dlya-butylok-kronshteyn-dlya-stoyki-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>317</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/4f6/4f66d7237cd2ae78033db46d7bc8a784.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатели для бутылок (кронштейн для стойки), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10491" available="true">
<url>https://kawe.su/catalog/shtativy/stakan-dlya-slivaniya-ostatkov-rastvorov-dlya-vsekh-vidov-stoek-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>436</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/f8d/f8d4d905a20ff4375de2f06fd28496f2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стакан для сливания остатков растворов для всех видов штативов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10492" available="true">
<url>https://kawe.su/catalog/shtativy/derzhatel-stakana-dlya-stoek-iz-nerzhaveyushchey-stali-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>436</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/dc8/dc8a68cbc6bec27338f2e14c7dab2a06.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель стакана для стоек из нержавеющей стали, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10493" available="true">
<url>https://kawe.su/catalog/shtativy/standartnye-kryuchki-dlya-stoek-iz-nerzhaveyushchey-stali-novoy-versii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1305</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/9e6/9e611571d7a758a8e477cc97feeb6e1d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стандартные крючки для стоек из нержавеющей стали, новой версии, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10495" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/nabor-fonarikov-diagnosticheskikh-cliplight-6-sht-raznogo-tsveta/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4608</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/44c/44c9adc70e58629cb30951f590410d07.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор Фонариков диагностических CLIPLIGHT (6 шт разного цвета), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10496" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3796</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/0bd/0bdbb9ed61157bae7e1cfc12fa464177.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10497" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-cherniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/71c/71cea60346a2ca95fdb4878cf45980c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический черный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10498" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/derzhatel-shpatelya-dlya-cliplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c69/c695f93cbddf0083862c19326876b863.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателя для CLIPLIGHT, Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10499" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-night-chernyy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12610</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/123/1236829f2734ba47fd53ed08a94ec097.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) night (черный), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10500" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v-led-lampakawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16095</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/170/17061ed3a772432f300c95e9ed2b3f31.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E36  (2,5В ЛЭД лампа),KaWe</name>
<description>
	Линза +20...-20 д
	Металлическая рукоятка
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10501" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e35-led-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>44991</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/891/8917dafac1f0fdf82461767be848c484.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E35 LED, 2.5 V, KaWe</name>
<description>
	офтальмоскопы серии: светодиодных
	
	тип: не хирургический, для диагностических процедур, при назначении терапии/реабилитации

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10502" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e15-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11084</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/a10/a10aab6ca46ee736fd0ffd244eba5281.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E15, 2.5 V, KaWe</name>
<description>
	Металлическая рукоятка
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10503" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-nimh-25-v-srednyi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5329</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/ea8/ea8a421294d0842a83980ae14c8d7198.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 2,5 В средний, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10504" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-35v-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5639</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/bd4/bd4ef5a85d75a736788c9fb2ba8b5c0d.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор 3,5V Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10505" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-smennyy-dlya-rukoyati-35v-28970-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6050</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/4b4/4b4ddf6276d04c1144d0c28e51c761fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор сменный для рукояти 3,5В (+28970) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10506" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-35v-dlya-rukoyatki-podzaryazhaemoy-ot-rozetki-28970-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4745</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/208/2084fe52d3c158e9a7ffec73a97801e3.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор 3,5В (для рукоятки, подзаряжаемой от розетки) 28970 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10507" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampochka-25v-vakuumnaya-dlya-eurolight-ye10-novoy-versii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>621</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/4aa/4aacbad7787355b63e6dd140d3b1516c.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампочка 2,5V вакуумная для EUROLIGHT Е10 (новой версии), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10508" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampochka-25v-vakuumnaya-dlya-eurolight-ye30-piccolight-ye50/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1852</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/7cf/7cf86a615fa85dda8363c63615cb01e8.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампочка 2,5V вакуумная для EUROLIGHT Е30 / PICCOLIGHT Е50 / Пикколайт D,  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10509" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-galogen-dlya-evrolight-e36/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3185</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/d30/d30f39d270e3603cc09e8dcaccc0c2ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5V (галоген) для Евролайт E36,KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10510" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-galogen-dlya-masterlight-klassik-12v35w-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2190</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/276/27674fa3cac0dcb875b03e8b5476513c.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа (галоген) для Masterlight Классик 12V/35W, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10511" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-led-masterlight-klassik-12v-7w/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7692</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/e05/e05eeed85b9c1d34bee35bde738744e4.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа (LED) Masterlight Классик 12V/ 7W, KAWE</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10512" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-vakuumnaya-25v-k-oftalmoskopu-eurolight-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/c64/c647740d413cc337fe59029e18268cee.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа вакуумная 2,5В к офтальмоскопу EUROLIGHT Е10 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10513" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-25-v-k-oftalmoskopu-galogenovaya-e-28946-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2765</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/231/2316a9ca48ffd10a520b4f9fd9b5062d.jpg</picture>
<vendor>Kawe</vendor>
<name> Лампа 2,5 V к офтальмоскопу галогеновая (E-28946) KaWe / дерматоскопу Евролайт D 30</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10514" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-vakuumnaya-25-v-dlya-otoskopov-e-28943-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>666</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/84d/84db11bff08ead5a6ee6602b34be6937.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа вакуумная 2,5 В для отоскопов (E-28943) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10515" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-ksenonovaya-25-v-dlya-otoskopov-e-28933-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1350</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/46a/46a2b9ad6f008be2da50e842a34cb2f0.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая 2,5 В для отоскопов (E-28933) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10516" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-25v-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2127</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/4f6/4f64575909b28137c8821eaf63bd1f33.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 2,5В LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10517" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-25v-povyshennoy-yarkosti-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5529</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/9e7/9e72d68a6febd070188ac47dfeb7d316.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 2,5В повышенной яркости LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10518" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-ksenonovaya-35-v-dlya-otoskopov-e-28925-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1852</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/a95/a950452b3b5b0de173829dd3e8f40d8d.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая 3,5 В для отоскопов (E-28925) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10519" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-malaya-25v-vakuumnaya-dlya-lampochnykh-laringoskopov-e-28958-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>648</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/a22/a22978d3d69d15e3f3b9e2a57ca2b0db.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная малая 2,5В вакуумная для лампочных ларингоскопов (E-28958) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10520" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-zapasnaya-25v-vakuumnaya-bolshaya-k-lampochnym-laringoskopam-e-28959-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>648</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/b45/b45ee9d9f90d4ae7f2904c6d246496e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа запасная 2,5В вакуумная большая к лампочным ларингоскопам (E-28959) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10521" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-ksenonovaya-25v-k-volokonno-opticheskomu-laringoskopu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1488</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/eb6/eb6adfcf576658d8466e899555131cf3.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная ксеноновая 2,5В к волоконно-оптическому ларингоскопу KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10522" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1999</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/88b/88b047354012d3e751239f4b77fbd048.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5В ксенон, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10523" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-25v-led-standartnoy-yarkosti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2363</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/fdf/fdf5af6e9aca7f66a47544044d7a5337.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 2,5В ЛЭД стандартной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10524" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-25v-led-povyshennoy-yarkosti-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5529</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/6ac/6ac9b3888377888306b06cffb7d83669.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 2,5В ЛЭД повышенной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10525" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-led-povyshennoy-yarkosti-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6050</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/501/5019ffd01dfa96a1259a13ec6dbb32c4.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5В ЛЭД повышенной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10527" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v--led-dlya-dermatoskopa-yevrolayt-d-30/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2674</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/c54/c541a6b4ca2712c07a05cee7cf7e88f1.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5V (LED) для дерматоскопа Евролайт D 30,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10528" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-35v-povyshennoy-yarkosti-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6050</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/d42/d42d6cf8d147c000d18b9e18bd3c1196.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 3,5В повышенной яркости LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10529" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-zapasnaya-k-svetilniku-meditsinskomu-masterlight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7254</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/d93/d93dbbc390ad8575411f8bf06a8b1a0c.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа запасная к светильнику медицинскому MASTERLIGHT KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10530" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/1275144013-lampa-ksenonovaya-k-otoskopam-piccolight-fo-eurolight-fo-combilight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1433</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/9fb/9fbcd7270e8e41a921d69de94b1d0df4.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая к отоскопам PICCOLIGHT F.O., EUROLIGHT F.O., COMBILIGHT F.O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10531" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-dlya-masterlight-20-20f-30-30f-228v24v-50w-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2601</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/7d0/7d02edbb40195349568dbab206d227a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа для MASTERLIGHT® 20, 20F, 30, 30F, 22,8V/24V 50W, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10532" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/ksenonovaya-lampa-25v-dlya-dialight-xl-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1233</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/64f/64f1bdcc3109c3c5daa65152fc3e667c.jpg</picture>
<vendor>Kawe</vendor>
<name>Ксеноновая лампа 2.5V, для DIALIGHT® XL, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10533" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/led-lampa-25v-dlya-piccolight-e56-led-i-eurolight-e36-lkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2921</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/40d/40d5922287a283a8f7ef2cac60320492.jpg</picture>
<vendor>Kawe</vendor>
<name>LED-лампа 2.5V, для PICCOLIGHT® E56 LED и EUROLIGHT® E36 LED, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10534" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/led-lampa-25v-dlya-eurolight-e35-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2966</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/267/26760f0481fb4e482f35a5daaf6467ce.jpg</picture>
<vendor>Kawe</vendor>
<name>LED-лампа 2.5V, для EUROLIGHT® E35 LED, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10535" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/ksenon-galogenovaya-lampa-35v-dlya-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3769</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/5e8/5e8f4c15f92d5d7a492409cfa1630bbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Ксенон-галогеновая лампа 3.5V для Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10536" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastolnoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3075</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/02f/02f339fa690dfb9d6e0fc0a80ca5fa78.jpg</picture>
<vendor>Kawe</vendor>
<name>Настольное крепление для Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10537" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastennoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2455</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/3c1/3c1cc8c40a22a5d4f954f120cef796d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенное  крепление  для  Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10549" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-ogolove-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21533</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/68a/68a3f21312a1f19281f4a611eb167b8e.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на оголовье для Н-600 LED KaWe</name>
<description>
	от 21 119 руб
	Крепление на шлем
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10550" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-poyas-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26651</price>
<currencyId>RUB</currencyId>
<categoryId>3374</categoryId>
<picture>https://kawe.su/upload/iblock/32f/32f83674a82f0cf514754ae8ead8de94.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на пояс для Н-600 LED  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10551" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23950</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/b98/b98632ec266fbae7d636617bbcfcc42f.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description>
	Линзы 2.5x
	Равномерный световой поток
	Для применения в в хирургии, стоматологии и др.
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10552" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23950</price>
<currencyId>RUB</currencyId>
<categoryId>3374</categoryId>
<picture>https://kawe.su/upload/iblock/bc2/bc249be6e72ea28436963205adbcc169.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description>
	Материалы — пластиковый корпус
 
	Артикул 12.89342.422
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10553" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23950</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/dfe/dfe96bf39f1ceacd240d49e85a61547a.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description>
	С лупой увеличением  3,5
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10554" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23950</price>
<currencyId>RUB</currencyId>
<categoryId>3374</categoryId>
<picture>https://kawe.su/upload/iblock/8e4/8e4c7bd719028f48fbfa50ac09089e6a.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10555" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-90g-metallicheskaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2090</price>
<currencyId>RUB</currencyId>
<categoryId>2918</categoryId>
<picture>https://kawe.su/upload/iblock/d7c/d7cec3c54f9846d890a317b679967e58.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 90г, металлическая рукоятка,  с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10556" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16295</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/f74/f74721dc10e8fae177d6bf005b80c62a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Планет Кардиолоджи, KaWe</name>
<description>
	Двойная плоская акустическая головка;
	
	Высота головки 23 мм;
	
	Тип головки: Мембрана - Колокол;
	
	Трубка длиной - 60 см;
	
	Двухтрубная система;
	
	Вращающиеся оливы;
	
	Варианты цветов: черный;
	
	Отличное качество звука!

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10557" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9124</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/736/7367c956c96aba054059b91d71418c24.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи черный, KaWe</name>
<description>
	Нержавеющая cталь.
	Трубка 42 см
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10558" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8093</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/f5e/f5e0090f6c0d84bb082c6f0d9620583a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи черный, KaWe</name>
<description>
	С двойной диафрагмой
	Трубка 42 см
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10559" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-petifon-kawe-pediatricheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5931</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/75b/75b140fea53429c911dc807f8d485851.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп Петифон KaWe педиатрический</name>
<description>
	для детей
 
	от 5 357 руб
 
	в наличии
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10560" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-multifon-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4927</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/044/0442613ae78c836cdb64368a40245c5c.jpg</picture>
<vendor>Kawe</vendor>
<name>Stethoscope Мультифон для взрослых, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10561" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/fonendoskop-kawe-singl-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>521</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/df8/df856ed2244d135862bc57b947d381fd.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонендоскоп KaWe Сингл черный</name>
<description>
	от 510 руб
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10563" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/komplekt-zapasnykh-chastey-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/6b9/6b956c2f84c3fadac95c7ad88d85e987.jpg</picture>
<vendor>Kawe</vendor>
<name>Комплект запасных частей, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10566" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/zapasnaya-voronka-dlya-suprabell-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>746</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/27d/27d6bd3d03adb1d4750018d7faf3b638.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная воронка для Suprabell, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10567" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-uchebnyy-plano-s-2-mya-parami-ushnykh-duzhek-tolko-membrana-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2445</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/111/111dcbd77414bb72ea24da40a63b64c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп учебный PLANO с 2-мя парами ушных дужек, только мембрана, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-krasnii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d27/d27ae47eec02f0d55eec657468b33b67.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж красный KaWe</name>
<description>
	Двухсторонний
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/8c8/8c8eb90f1d2afa76dff15165c3829109.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт красный, KaWe</name>
<description>
	Длина трубки 56 см;
	
	Интегрированные дужки;
	
	Материал головки — алюминий;
	
	Без латекса;
	
	Диаметр мембраны ~44 мм;
	
	С двусторонней головкой;
	
	Цвет: красный.

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-krasnii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/1f6/1f6eafd769b40e87e1c529b2349f19a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/cd5/cd569ee294ff7dcc41fe435353d8fd14.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/4b1/4b1576fa14a01db502972e7508cbb4a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный черный</name>
<description>
	Для новорожденных
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/dc1/dc1300b74ab775514da206ebdc6fc732.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10576" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-varioflyeks-v-forme-toporika-po-fassbenderu-155g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3997</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/ab8/ab8a488b92d848c6eec81b40391df56a.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВАРИОФЛЕКС в форме топорика по Фассбендеру 155г, с иглой и кисточкой, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10577" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-babinski-diskoobraznyy-95g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1743</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/861/861b4e3a24f0371e9ce8077d48b762c6.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БАБИНСКИ дискообразный 95г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10579" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-80g-plastikovaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1999</price>
<currencyId>RUB</currencyId>
<categoryId>2918</categoryId>
<picture>https://kawe.su/upload/iblock/1cc/1cc4abb56c3f57a13140fa0e55bf911a.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 80г, пластиковая рукоятка, с кисточкой и иглой KaWe</name>
<description>
	Длина модели - 20 см
	Материал - пластик
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10581" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2455</price>
<currencyId>RUB</currencyId>
<categoryId>2919</categoryId>
<picture>https://kawe.su/upload/iblock/de3/de3b0dbbbb75e828f411f1c2cadd493e.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек Colorflex большой 110г, черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10583" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2455</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/6c8/6c84b18bc2f8dfeedc3dd202f851deec.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек КОЛОРОФЛЕКС большой 110г, синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10584" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/molotochek-koloroflyeks-bolshoy-so-shtyrkom-bez-kistochki-i-igly-ves-110g-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2455</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/500/500d400e724c76c36ffc6003af1ca7c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек KaWe КОЛОРОФЛЕКС, для диагностики рефлексов, большой, серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10585" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-175g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3029</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/696/6961b8a62924db7b4c8b9f325c98c46b.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 175г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10586" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-220g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3066</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/13f/13f44f87de6c69d23d280083bb07bb84.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 200г, с иглой и кисточкой, KaWe</name>
<description>
	Артикул - 07.35232.001
	
	Вариант исполнения: Tromner с иголкой

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10587" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3276</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/432/432f35931e2c4ebab3ded6993a773972.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 210г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10588" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-190g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2966</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/c6e/c6ea437c45bf0b53e5c624300f487e4e.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 190г, с кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10589" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-150g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2610</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/aeb/aeb7ef01d5e9efcf1d92ab2539716fec.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 150г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10590" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-vitroye-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2828</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/59e/59e3eab117732a745569923e3ca905fd.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВИТРОЕ (Witroe) тяжелый 198 г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10592" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-nalobnyy-osvetitel-led-v-komplekte--2-akkumulyatora--kreplenie-na-ogolove--kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>107644</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/3eb/3eb64bfcc422ba356bbd82c732b3dfe5.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором (Налобный осветитель LED в комплекте + 2 аккумулятора ( крепление на оголовье + крепление на пояс))</name>
<description>
	Источник освещения, характеристики:
	
		
		Цветовая температура  - 5.500 K - 6.000 K
		
		Мощность - 3 Вт
		
		Срок службы - прибл. 50.000 часов
		
		Настройки: освещенность 1-5 уровень
		
		Расстояние светового пятна - 250 мм
		
		Осветительный диапазон яркости - &amp;gt; 50.000 люкс
	

 

	
	Вес — 390 г. 
	
	Напряжение - 100 B~ - 240 B~
	
	Аккум. питания -  литий полимерный, ресурс &amp;gt; 500 циклов зарядки
	Аналог Heine ML4 Unplugged

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10593" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/d68/d68eccf59a9887d101369acc3da528cf.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73705" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ef1/ef16923297b6e56aeb976b2f8a2d544e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73706" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f41/f412434840be3190eec5b45cfe125175.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73707" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a65/a653a3fc05f577ee3a6c01dfffc45946.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73708" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-5-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4df/4df113a6b92a930fb0e9db1e623c63fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73709" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--3-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11405</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b34/b3453096c13f0f357308646e3247cece.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73710" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cb7/cb7f016c808a8381e54401e5ccbce409.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73711" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/f2c/f2c4f101234f8efb415b848c6a1e16e6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73712" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b1c/b1c7bafe987b8a6011f7a060abcd59af.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73713" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/20f/20fc8f03364f8f08c81e4a9f63fb32d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73714" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/4b6/4b62b5616a4965d5d3b6b2207df5cfa7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73715" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8403</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b3c/b3c13f6a57aa145d3cd350e840073adc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №3 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73716" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-polio-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8513</price>
<currencyId>RUB</currencyId>
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/4bb/4bb1ade2cb6aeb0230cdc56fb7423d0a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO Macintosh №4 FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73717" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8403</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cd1/cd15150ee04a45dbf6bfd81c70cd96ca.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73718" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4353</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/1ff/1ff1911076adaf3f4d083e5249d4d2e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73719" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-tyepro-makintosh-s-2-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3650</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/348/348dc5dc3103403eed40d122edbd27e6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO Macintosh С №2 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73720" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-tyepro-makintosh-s-3-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3633</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/eeb/eeb5dfa2159bb52fa99c83ca1556728e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №3 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73721" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-0-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/174/17479b00523f78287cf0a357e3fcd91f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №0  Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73722" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-1-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0d5/0d5c50a949ace085a0f940d274f7b46a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №1  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73723" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led-2-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7e1/7e1c4efe8ba6d7e8543f392972af1ceb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №2 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73724" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/efc/efc38aeaf2f9683bc9de219f87514f31.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №3 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73725" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/c34/c34d44ec0c73c37be9f87fe6a29a4979.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №4 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73726" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-1-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1fd/1fd1377fa61b9500f110fc81a79c4237.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №1 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73727" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-2-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/ca5/ca5814d02565081ce3514485c1325ad7.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №2 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73728" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/661/6612545bbe0edde8c4ceff180aee54d5.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №3 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73729" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>512</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f69/f69ff1aaa64576793bfddebc063534a1.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №4 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73732" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29132</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/f22/f22ab9577300d412f1c90c2047769fa5.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73733" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-rabotaet-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9134</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c4e/c4efa384ea6fe0a82d239f6b265bf1bf.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32мм) 2,5 В (работает от батареек) с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73734" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19-mm-25-v-batareechnayaakkumulyatornaya-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7546</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/193/19302640306f6f20e57dcbf94bde2e1b.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19 мм) 2,5 В (батареечная/аккумуляторная) + аккумулятор с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73735" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlja-vzroslyh/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30208</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/9b3/9b371c070d2e527cac5fdbcc73612190.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73736" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>53205</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a02/a028b5a753888813109bd076c0ddbd95.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка ксенон)</name>
<description>Артикул: A-23103
 Состав набора:

	Батареечная рукоятка из нержавеющей стали. Совместимость со стандартом ISO 7376
	
	Клинки ларингоскопические Macintosh, фиброоптика (Возможна стерилизация в автоклаве, паром).
	
	Футляр для удобной транспортировки и эксплуатации.

 
 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73737" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>42997</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9e0/9e09177606c75fdc51ec0cca8a177489.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков / Универсальный набор (неонатология, педиатрия, взрослые, на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73738" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33738</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>https://kawe.su/upload/iblock/7ae/7aee7c5d01c01958689a6899ae67c6c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампа LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73739" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57811</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/8e1/8e12ea0034e9026f5da7213323179747.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73740" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>47603</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>https://kawe.su/upload/iblock/b45/b45f86f4cd76686812ac0c51d9c7d21a.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, Универсальный набор (неонатология, педиатрия, взрослые) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73741" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28047</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/5f6/5f646ecc10e0b2abd34b5d6839979613.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73742" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/23109/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>40783</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/d41/d41bed3f8c8471093a38abe6c464ca0a.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на аккумуляторах, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73743" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35094</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/97c/97c7021d8988683305167aa4cb4a3e7a.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73744" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64857</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/0b0/0b028889bedbc108a8d79b94a1887f1a.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с комплектом клинков для взрослых (для проведения затрудненной интубации) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73745" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54648</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/fa0/fa03635f71450e1a6317211e5ac17b17.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, универсальный набор (неонатология, педиатрия, взрослые) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73916" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/molotochek-babinski-diskoobraznyy-ves-70g-gibkaya-rukoyatka-iz-plastika-s-rezboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/2aa/2aa5d2bdbc3c4291fccb3673d402ceb9.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек БАБИНСКИ дискообразный вес 70г, гибкая рукоятка из пластика с резьбой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73926" available="true">
<url>https://kawe.su/catalog/pulsoksimetry-choicemmed-kitay/pulsoksimetr-md300c22-choicemmed-kitay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/42f/42fa1a7898de5f1851650db01b50292d.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр MD300C22 CHOICEMMED, Китай</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Китай</country_of_origin>
</offer>
<offer id="73927" available="true">
<url>https://kawe.su/catalog/pulsoksimetry-choicemmed-kitay/pulsoksimetr-md300c5-choicemmed-pediatricheskiy-kitay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/711/711ee9e1489b71e842bffd8087cbf905.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр MD300C5 CHOICEMMED педиатрический, Китай</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Китай</country_of_origin>
</offer>
<offer id="73928" available="true">
<url>https://kawe.su/catalog/pulsoksimetry/pulsoksimetr-napalechnyy-topmed-fp-30/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5841</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/693/693b35c1561ee8048faf089641fcc4db.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр напалечный TOPMED FP-30</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Китай</country_of_origin>
</offer>
<offer id="73929" available="true">
<url>https://kawe.su/catalog/pulsoksimetry/pulsoksimetr-napalechnyy-topmed-fp-10/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6504</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/020/02008c6e8e0ab1274b19aff759a9007d.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр напалечный TOPMED FP-10</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Китай</country_of_origin>
</offer>
<offer id="73941" available="true">
<url>https://kawe.su/catalog/pulsoksimetry-choicemmed-kitay/pulsoksimetr-md300c12-choicemmed-kitay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>2990</categoryId>
<picture>https://kawe.su/upload/iblock/908/9089754c80741cb9dcac40cf71850b7d.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр MD300C12 CHOICEMMED, Китай</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73943" available="true">
<url>https://kawe.su/catalog/pulsoksimetry-choicemmed-kitay/pulsoksimetr-md300c2-choicemmed-miniatyurnyy-kitay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>2990</categoryId>
<picture>https://kawe.su/upload/iblock/c44/c445be49f0cfbee3f977299c3cf236dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр MD300C2 CHOICEMMED миниатюрный, Китай</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73946" available="true">
<url>https://kawe.su/catalog/pulsoksimetry-choicemmed-kitay/pulsoksimetr-md300m-choicemmed-kitay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15840</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/e90/e903a80579c0a3c736529371dbb92901.jpg</picture>
<vendor>Kawe</vendor>
<name>Пульсоксиметр MD300M CHOICEMMED, Китай</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74027" available="true">
<url>https://kawe.su/catalog/beskontaktnye-termometry/termometr-infrakrasnyy-beskontaktnyy-topmed-nc-178/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6435</price>
<currencyId>RUB</currencyId>
<categoryId>3019</categoryId>
<picture>https://kawe.su/upload/iblock/0e3/0e30c046b7cd3f63c78cb93aaca4298f.jpg</picture>
<vendor>Kawe</vendor>
<name>Термометр инфракрасный бесконтактный TOPMED NC-178</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Китай</country_of_origin>
</offer>
<offer id="74417" available="true">
<url>https://kawe.su/catalog/beskontaktnye-termometry/beskontaktnyy-infrakrasnyy-termometr-berrcom-jxb-178/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2366</price>
<currencyId>RUB</currencyId>
<categoryId>3019</categoryId>
<picture>https://kawe.su/upload/iblock/c4b/c4bf9cb2aec25ac0e9dd2ba6c857fa69.jpg</picture>
<vendor>Kawe</vendor>
<name>Бесконтактный инфракрасный термометр Berrcom JXB-178</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74418" available="true">
<url>https://kawe.su/catalog/pulsoksimetry/palchikovyy-pulsoksimetr-md300c21c/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>2982</categoryId>
<picture>https://kawe.su/upload/iblock/6bf/6bf6daab0d79c14be14eee184885d470.jpg</picture>
<vendor>Kawe</vendor>
<name>Пальчиковый пульсоксиметр MD300C21C</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74432" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-35-eu-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52154</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e56/e56c7de09e14cdc71b45cb21e13f3a32.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74433" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79009</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/852/8526d4eedcb386558fdf5017d24b7684.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74434" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55063</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/4db/4db89c3ddba2ecf930756368a2de0a47.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74435" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>53177</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/916/9164e39694f9f9e08dc0fd7803ef08ee.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74436" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>82921</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/8ea/8ea94450005adeda2bd192df24bda365.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74437" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88719</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/a8a/a8ac5e4164406929a57243b403192f1d.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>56067</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/f66/f6675c287e92e309072feacf8392cab6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61864</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/67a/67aebe6822de8e4c41b0d2591867f3f0.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74440" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>58974</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/1d2/1d2f89bfa0a9770de399d7b37fe07ec8.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74441" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30305</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/532/532ed5e3d06e49b559ba125a8a0d6bed.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74442" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4207</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/614/614e526372b9f5445d98c91bd87c9a5b.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74443" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33710</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/9ab/9abcc85a14a2c0729107a2dd7d1c8e00.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V с модулем воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74444" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/fb4/fb45d608cd8baf03b1c3ea84f0d4d69b.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74445" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35594</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/bd4/bd461825bfc151255791153beaadbd98.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74446" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3486</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/382/3822ce560bedeb6069c4d06683c6ad50.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74447" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39507</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/c55/c55fea032bbfa6aaff2021c5ecceca89.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, с модулем воронок, KaWe</name>
<description>
	Ушные воронки для смены
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74448" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3969</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/57b/57b96ec9940faf55f4c59669b94d1851.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74449" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5018</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/8f7/8f7e6d89d839b668ba15e6d50ae56bb9.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74450" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-podzaryazhaemaya-ot-medcharge4000-v-komplekte-s-akkumulyatorom-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10147</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/88c/88c340e3f3a41470692d9936c00a1c46.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, подзаряжаемая от MedCharge4000 в комплекте с аккумулятором 3.5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74451" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-podzaryazhaemaya-ot-seti-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12920</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/b1c/b1c05fb2df8403138710d5c34f4cce65.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, подзаряжаемая от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74452" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/keys-na-6-klinkov-miller-i-1-rukoyat-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3769</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/950/9508df97864933ceff1f19c42797fc27.jpg</picture>
<vendor>Kawe</vendor>
<name>Кейс на 6 клинков Miller и 1 рукоять, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74453" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e25-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63373</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/688/688afe15cc71f858df3b6300da92d022.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E25, 3.5 V, цвет белый, KaWe</name>
<description>
	Ксенон галогенная лампа
	Пластиковая рукоятка
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74454" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/piccolight-e56-35-v-tsvet-belyy-eu-versiya-zelenyy-filtr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>40263</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e38/e382e93ca5d3663dbfe74f587ccd7f04.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E56, 3.5 V, цвет белый, EU-версия, зеленый фильтр, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74455" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/piccolight-e56-35-v-tsvet-belyy-usa-versiya-siniy-filtr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36519</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/d6d/d6d5dbaf68cefc5b12952257e5412e52.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E56, 3.5 V, цвет белый, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74456" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/piccolight-e55-35-v-tsvet-belyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38501</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/413/413d03fc8c19ef915c9f91f67b921a2c.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E55, 3.5 V, цвет белый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74457" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/piccolight-e56-25-v-tsvet-zelenyy-eu-versiya-zelenyy-filtr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12667</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/250/250d69ce90c30e1b7f37b4ba6f5dae1b.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E56, 2.5 V, цвет зеленый, EU-версия, зеленый фильтр, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74458" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/piccolight-e56-25-v--usa-versiya-siniy-filtr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12667</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/709/7096d4b1ff197a4c9fb92f6e8102b622.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E56, 2.5 V , USA-версия, синий фильтр, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74459" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-planophon-ploskaya-golovka-kawe-germaniya-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>493</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/220/220e081e7f4d409cb812965e92f2580b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Planophon, плоская головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74460" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-duoscope-dvoynaya-golovka-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>484</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/79f/79f71439c931a1f9684b1cf542f2d541.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Duoscope, двойная головка, KaWe</name>
<description>
	от 569 руб
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75432" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-50-mm-10-sht-0172216001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/cf5/cf5425d5d0335f3a4410bcb20a9aed6d.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 5,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75433" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-mm-10-sht-0172214001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/644/6449f1d4efb9bef5af00df54407e4fd9.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75434" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-25-30-40-50-mm-10-sht-0172210001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/0d9/0d9d6e6a0932e463597c98a80ac79bb2.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.0, 2.5, 3.0, 4.0, 5.0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75435" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-30-mm-10-sht-0172215001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/823/8236422292734bf9b66d0487dd908b46.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75436" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-malaya-d19mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6561</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/84c/84c3e3601ab4be947216195b28efa7fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5 В малая (d=19мм) Ф.О. ксенон, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75437" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/2c6/2c636e7ab8190c927d6c479a19d827a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/591/591e0d97f442e7de26b9b928f826bf0c.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-zhyoltyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/e94/e94ed6edb640d1eb844418dbc1eaad32.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED жёлтый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75440" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/807/807613cbb1c52bf3ff0847700a04b2d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75441" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-seryy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>904</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/756/7564eb3658088cc77dda3328dcc91e4c.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75442" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15274</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/a59/a59caaf0e89f4c0194a2fce5776ebfdf.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Eurolight E36 2,5V KaWe</name>
<description>
	Кол-во линз - 18
	Источник питания - 2 батарейки Baby 1,5 В (тип C)
 
	Диаметр рукоятки - 28 мм
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75443" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/ffe/ffefdc2979e6d0624e9a60674797137d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) красный KaWe</name>
<description>
	Трубка 55 см
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75444" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/cb0/cb003d920e7bbb4fc010a7b14f5a0f04.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) синий KaWe</name>
<description>
	Трубка 55 см, цв. - синий
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75445" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-zelenyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/ce0/ce079794dbfcc3a177efc5d4d48b5bc2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75446" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1642</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/baf/bafb3aa3beed7d2bad66b1470151dee4.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75447" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-chernyy-black-line-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1852</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/5df/5df602dcbea6f99ed126d8e58808c3ea.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) черный (Black line) KaWe</name>
<description>
	Трубка 55 см
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75504" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61864</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/2b5/2b5ed6fb6698ca50feb34a4eb7a4299f.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75505" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>56067</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/615/615fdf486df934449a46e8ef3016e653.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75506" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52154</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/2da/2da3b670214f3414597f13f6f704d51c.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75507" available="true">
<url>https://kawe.su/catalog/otoskopy-lor/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-4-0-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>524</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/91d/91d1364b9a94c53c9317a42d83c3f7f2.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 4,0 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75508" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5457</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/622/6227438d90eee843fa1c7c5a821dc734.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный темно-синий, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75509" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5457</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/21d/21d35e93fec323828ce473cce69c09ed.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75510" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5931</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e35/e351d5a9293f2f43c95eb635ef59365c.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75511" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-goluboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5931</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/db8/db8289e3d08e2064a7e407d083f28af7.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. голубой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75512" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6204</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/f79/f79e346e252beff5839215ec5842055d.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. темно-синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75513" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6204</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/390/3901813a415cf5072b78e1f80b174852.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75514" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11415</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/064/064c9991083ae4a1d55d94872c9c74a5.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75515" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11415</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/6d2/6d23ce8f64d8a032318bf083a81614da.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75516" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7582</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/29c/29ca14459c504e272405e30ea3729265.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75517" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7582</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/156/15681dbdc427ac5419d609e2054335ce.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75518" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-1-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11947</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/a44/a448341257260030a884945384f7c3f9.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка вакумная)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75519" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-2-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23441</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c79/c794c4ea8af1129520e22892123dcda0.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75520" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2774</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/dc7/dc7b6879326bce7515720c5c45fb46a4.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75521" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-krasniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>938</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/512/512a9a02577fdc3dd8e7dbea850953d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический красный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75522" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-siniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/332/33279d178d6739b5fc86c44f793f41e6.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический синий, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75523" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-seriy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/077/077a66444c70080b29cd218819b0b2b9.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический серый, клипса с включателем</name>
<description>
	Теплый свет
	
	Материал корпуса - металл

</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75524" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-jeltiy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/76e/76e91be4d8fd8bf67922ffd2b0620221.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический желтый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75525" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-tsvetnoy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>584</price>
<currencyId>RUB</currencyId>
<categoryId>3373</categoryId>
<picture>https://kawe.su/upload/iblock/089/0891d44217620b2e6d3a95678c72e90b.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический фиолетовый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75526" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9535</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/f71/f71c9ff403bc6cef7753a983cecc8aef.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75527" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9535</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/801/801e3531f986d62ecdafee3ce61d7bb8.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 темно-синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75528" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-night-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/a8d/a8db796bdd4f7901c4254e03499ddaa5.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75529" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-temno-siniy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/435/4355638a11db8ca3ccb31b5e8ac39f4a.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 темно-синий, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75530" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-seriy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/43e/43e83d96d5c78998e0330a89f2e710f3.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 серый, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75531" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-stone-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/c40/c409049eb72414bab5adb404c0fbb7af.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 stone, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75532" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-sky-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11789</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/ca4/ca4563b2385bb19a32dec229df3994d2.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 sky, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75533" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-stone-seryy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12610</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/cea/cea2692678abb8fe1f43441b020ca50d.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) stone (серый), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75534" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-sky-temno-siniy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12610</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/6af/6af17e130b01cef5ad90bffc8a16a283.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) sky (темно-синий), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75535" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-25-v-nimh-35-v-malyi-28965-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/ea9/ea97318fc229840a4e11c032b8557a60.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 3,5 В малый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75536" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-nimh-25-v-malyi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4015</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/0a2/0a2d05985b2ac00b78dcc82b7a79d912.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 2,5 В малый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75537" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>94313</price>
<currencyId>RUB</currencyId>
<categoryId>3374</categoryId>
<picture>https://kawe.su/upload/iblock/132/132cf2ba5e51e9f561b455d158c6eb7e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на пояс</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75538" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-ogolove/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>87959</price>
<currencyId>RUB</currencyId>
<categoryId>3374</categoryId>
<picture>https://kawe.su/upload/iblock/3e6/3e6db1d1da553d4d08ee3339ba9a0fe1.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на оголовье</name>
<description>


	Время работы батареи:




	
		крепление на обруч - 12  ч.
		
		крепление на пояс - 24 ч
	


	Возможность регулировки уровня освещенности

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75539" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-air-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10657</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/8fb/8fb47d5abd6528d0b3ae3060a1630dd0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп ПЛАНЕТ Air Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75540" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>539</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f0f/f0f245d7853496f93dc7872b53e7c562.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75541" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>539</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/cc7/cc794eaec791072a8eea022fe66bf5e0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75542" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9124</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/1bf/1bf6cc1185b56b40dc183de3c67b3a72.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи бордовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75543" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8093</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/825/825b8ba3e32b5fe18ec29dd35a707fe0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75544" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d5d/d5d641ca27515181ff237b78fe2df090.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75545" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/852/8525c4d4adbc58b380af0b51e42855be.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75546" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/15d/15d4093c60a09d03bdd134e8ea04f1cf.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75547" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/fb8/fb82fd0013adc5e7924197be1f70dd2b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75548" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/e8c/e8cf540da1a5e748d184aa8ab7cc88d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75549" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-fioletovii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/357/3575e6cef6503b9230816737740d40a7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75550" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/014/014a22e8f34d320077ae7d9992b6ae66.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75551" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/56a/56a3f29fc4a25c9d77d46d0c52c69e94.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75552" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/d8a/d8a62c04308c350b5c4a23eb53425ce4.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75553" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/73d/73d6e0d1af5c04967266b696937eba13.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75554" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/436/436feeda380065b46194b3c6cd4ad48b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75555" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/9a6/9a67df72698824b8f2029f516b86f5dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75556" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/845/845d94097a6a02c6cc1275ec98b151f1.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт зеленый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75557" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/e95/e95e8bff85152d783c473888e6961cb4.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75558" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2737</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/5fa/5fada1c0f3245bde9a6073cfd26e105b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75559" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/16e/16ecb9be3c2a8b49479b0137a2c35925.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75560" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/1d6/1d68d5122835aa4d047f568753c70f1f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75561" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/354/35498c42bbbf811df2d5532cb9d40484.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75562" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/534/534431e80b1a4e42ad202cca2f1f60bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75563" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/3e9/3e91d3a740c95fca8144383a31204848.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75564" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4507</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/a9a/a9a24b205dbf7952adbd6e76c5985abf.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75565" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/6b7/6b7741e24c677474ed34d75a656fb206.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75566" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/0b7/0b7a486e94169a60724b2da31331a44d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75567" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d2b/d2b2e335d8eeae96776b3884f4940599.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75568" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2369</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/dbf/dbf0d78bf74296e63e7a30e560f4ee56.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75569" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/6b7/6b794a65ad978217684560374c2d9f18.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4407</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/f71/f7164bab52aeb67b0090bfeb114d46f3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/5ae/5ae34891a978d17a59e005fbcf8b40a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f17/f17125181083602a65ea03194197dcc7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/ec3/ec3721529776d347375ea40bfe7d9bc7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d42/d429a19058e249cdf5c17a9461358087.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/721/721f9003518e1fd67db249606347f880.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75576" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4307</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/832/832d01a7af7605dc3e888a0d818acef4.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75680" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetoskop-meditsinskiy-baby-prestige-zelenyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2646</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/393/39347386a9359f4a6189fa2fffd059fb.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
</offers>
</shop>
</yml_catalog>
