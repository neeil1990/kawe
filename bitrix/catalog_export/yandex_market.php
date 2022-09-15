<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2022-09-15 08:06">
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
<category id="3340" parentId="2799">Воронки ушные</category>
<category id="3341" parentId="3340">Воронки ушные одноразовые</category>
<category id="3342" parentId="3340">Воронки ушные многоразовые</category>
<category id="3343" parentId="2799">ЛОР инструменты</category>
<category id="3344" parentId="3343">Воронки ушные одноразовые</category>
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
<category id="2869" parentId="2866">Налобные осветители</category>
<category id="2870" parentId="2869">Налобные осветители KaWe, Германия</category>
</categories>
<offers>
<offer id="10236" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost--night-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6782</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/c4f/c4f36dadeb4ee725132fe588ce83e689.jpg</picture>
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
<price>515</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/4d4/4d40c52f938480b313a46a0f69ec02c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический KaWe белый с кнопочным включением</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10238" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-kawe-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/6eb/6ebcc1a4021b24ff853ee5c81b9daa02.jpg</picture>
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
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/117/117e04b0fda8383e9869fe6be3e10612.jpg</picture>
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
<price>10907</price>
<currencyId>RUB</currencyId>
<categoryId>2857</categoryId>
<picture>https://kawe.su/upload/iblock/126/126f6fb339aa8b319bc7e06c51a1035e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 2,5B Отоскоп лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10241" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b-otoskop-operacionniy-lampochniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11097</price>
<currencyId>RUB</currencyId>
<categoryId>2857</categoryId>
<picture>https://kawe.su/upload/iblock/6c1/6c12a605b31a389357e3c3f29a427c34.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 OP 2,5B Отоскоп операционный лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10242" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-ye50-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8528</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/fd6/fd66dc48cb3844b81574ba80c1fc1908.jpg</picture>
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
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/ae8/ae8acdf60a173601ce087271bd2478d6.jpg</picture>
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
<price>8986</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/47f/47fa8f0b3d50fb051e58aeede8962fd8.jpg</picture>
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
<price>10907</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/be8/be8be9f7e61f261cb0c2cef7d8807422.jpg</picture>
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
<price>13657</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/b14/b14b8873b2b5cb6ba8b240fbf193a551.jpg</picture>
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
<price>20723</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/d97/d97d697c406c78ef9f47e73d6990b98f.jpg</picture>
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
<price>26768</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/9f5/9f5f3bf71217a6e8af73ebbefa49db86.jpg</picture>
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
<price>4861</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/d5f/d5ffb69e4e5bb5a14a746535122ffae0.jpg</picture>
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
<price>10820</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/4cf/4cf09be4fe38409a76532d282dc0229b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10252" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/grusha-dlya-pnevmotesta-k-otoskopam-e-24840-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>918</price>
<currencyId>RUB</currencyId>
<categoryId>2803</categoryId>
<picture>https://kawe.su/upload/iblock/096/09670cedd5a4813a497205a63ce8d785.jpg</picture>
<vendor>Kawe</vendor>
<name>Груша для пневмотеста к отоскопам (E-24840) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10253" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/adapter-dlya-grushi-pnevmotestirovaniya-26290k-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2803</categoryId>
<picture>https://kawe.su/upload/iblock/ca9/ca932d33617288bf96d74b9fd4f496f9.jpg</picture>
<vendor>Kawe</vendor>
<name>Адаптер для груши пневмотестирования 26290K KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10254" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5501</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/aac/aace53704ac0c3cabf84e36b94e6884c.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	Рукоятка - аккумулятор
	Освещение - вакуумная лампа 2,5 В
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10255" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9168</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/be9/be990bb03e5761d37d4c3be491c6f076.jpg</picture>
<vendor>Kawe</vendor>
<name>KAWE COMBILIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description>
	Освещение - лампа ксенон, 2.5 Вольт
	Удобный замок для крепления головки к рукоятке 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10256" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9990</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/481/48166994f377c44b51ca6e1d53d984b3.jpg</picture>
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
<price>22366</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/e5e/e5e50f9b57d6d050ca2b57d4d79f8ee6.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description>
	Освещение - лампа ксенон, 3.5 Вольт
	Удобный замок для крепления головки к рукоятке 
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10258" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6375</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/c7b/c7b3d2f25edede2be05680c9e86ff205.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	
	Аккумуляторная рукоятка
	Освещение - вакуумная лампа 2,5 В
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10259" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7793</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/fa6/fa6b642493bc00e7bec2de6cf4134f6b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 2,5 В Лампочный отоскоп</name>
<description>
	Источник питания -  батарейки типа C 1,5 В
	Освещение - вакуумная лампа 2,5 В
 
	Рукоятка на винтовом соединении

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10260" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13294</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/d46/d46c4cfd4c0210783b77d4143ac0c281.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description>
	
	Фиброоптика
	Освещение: лампа ксенон, яркое
	Поворотная лупа для равномерной регулировки
	Для рабочего места оториноларинголога
	Удобный замок для крепления головки к рукоятке 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10261" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe_eurolight_fo_30_led_2_5_v_otoskop_fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14210</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/103/103990c4966fb40225973080ca5299e8.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description>
	Батареечная рукоятка
	Свет - 8 000 Люкс
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10262" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25670</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/241/24117f84f1894e2862ff5d54b526a5a4.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10263" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-25-v-yevrolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23101</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/518/5186df88467e1f6261fedb584a4b0932.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 2,5 В - ЕВРОЛАЙТ 2,5 В</name>
<description>
	Дерматоскоп - прибор для осмотра кожи.
	Материал - металл (Металлическая рукоятка).
	Работает от батареек либо аккумулятора (Перезаряжаемая рукоять)
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10264" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-piccolight-d-25-v-pikkolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16320</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/b0b/b0b2008f9f3b7abc00fee6cee918e4e0.jpg</picture>
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
<price>28601</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/d96/d9624a850e088dcfd715a723674e827c.jpg</picture>
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
<price>33462</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/07d/07dad962f0e64ef26148de62d06c1b3e.jpg</picture>
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
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/128/1280d0fcd56be30817d8541a282ddba9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 C изогнутый (длина/высота, 77/13 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10269" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17989</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/fd4/fd4c81fab6a9d98ee4cf3f9c0b17e618.jpg</picture>
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
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ebd/ebd3ab06c9e796a900f1136747082770.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 C изогнутый (длина/высота, 92/18 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10271" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-2-c-izognutyy-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/b2d/b2d13486b97eee49585e714da7751184.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 C изогнутый (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10272" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-3-c-izognutyy-dlinavysota-13321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/a8c/a8cc0a843d61dc30b0fe380660007ab6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 C изогнутый (длина/высота, 133/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10273" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-4-c-izognutyy-dlinavysota-15321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/0e3/0e39d3c6bf561806c98b36bcb9c5c3ec.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 C изогнутый (длина/высота, 155/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10274" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-5-c-izognutyy-dlinavysota-17623-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/040/04082b6278e983087c34f95ee81d4e87.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 C изогнутый (длина/высота, 175/23 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10275" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25670</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/205/205acca1af1301c47ce4d83452286d44.jpg</picture>
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
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-00-c-pryamoy-dlinavysota-6510-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/b26/b26fdadd56645d82d234757016ccc5d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 C прямой (длина/высота, 65/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10277" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-0-c-pryamoy-dlinavysota-7910-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/935/935c8a656be170245c488fbf03342fab.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 C прямой (длина/высота, 79/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10279" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-1-c-pryamoy-dlinavysota-10310-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/527/5274f71728f1dab8164e8807be0834a6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 C прямой (длина/высота, 103/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10280" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-2-c-pryamoy-dlinavysota-15312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/e99/e99ee1f623afcc82bc5226174f74b812.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 C прямой (длина/высота, 153/12 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10281" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-3-c-pryamoy-dlinavysota-19212-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f91/f91f2b0d8167daf2199c1691d1e4bfd4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 C прямой (длина/высота, 195/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10282" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-4-c-pryamoy-dlinavysota-20216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/353/3539c4303bfdba6daea7b0d3252be626.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 C прямой (длина/высота, 205/16 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10283" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-0-c-pryamoy-dlinavysota-7712-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/718/718d3887f6277ede653dbf2b882ee1fd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №0 C прямой (длина/высота, 77/12 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10284" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-1-c-pryamoy-dlinavysota-9214-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/107/10784bac9f89561f72ec1d39b83dc384.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №1 C прямой (длина/высота, 92/14 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10285" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/nabor-dlya-lor-vracha-nabor-diagnosticheskiy-beysik-s10-kawe---otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11278</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/184/184451a63f81c400c416b433d4dfd852.jpg</picture>
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
<price>5778</price>
<currencyId>RUB</currencyId>
<categoryId>2861</categoryId>
<picture>https://kawe.su/upload/iblock/b54/b54bb3bb1e033ac7b4a33aaf1ff654ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп СУПРАБЕЛЛЬ ветеринарный с воронкой d=49,5мм,  длина 75см</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10287" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye10-kawe---oftalmoskop-1-apertura-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13657</price>
<currencyId>RUB</currencyId>
<categoryId>2938</categoryId>
<picture>https://kawe.su/upload/iblock/a85/a85cd06f731b5df02308a1878bdea548.jpg</picture>
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
<price>14850</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/a63/a6375fbf764833a798c479532e5e6c3b.jpg</picture>
<vendor>Kawe</vendor>
<name>Универсальное зарядное устройство MedCharge 4000 для аккумуляторов NiMH, Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10289" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye16-kawe---oftalmoskop-6-apertur-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16225</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/0be/0be0037ae3d0aaf147e872f8cba7a4b2.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е16 KaWe - офтальмоскоп 6 апертур и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10291" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermagel-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>433</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/949/949e7aa19704f7dab7d23234eac609c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Дермагель KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10292" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/kontaktnoe-steklo-so-shkaloy-dlya-kawe-dermatoskopov/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2932</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/9d5/9d5b98c6514f850cf6ce2fdde32dcfa7.jpg</picture>
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
<price>36576</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/44a/44a7b61210d896d9b1b3d5dedb0dddf5.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight F.O.30 / E36 2,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10300" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-led-fo30--e36-35-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54910</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/34e/34e4f809f1b4ea32ec1693ad1b265c3f.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight LED F.O.30 / E36 3,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10301" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-semeynogo-vracha-basic-set-combilight-c10e15-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15491</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/9c1/9c18635b26ddc902f1e527b75197b0c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор семейного врача BASIC-Set Combilight C10/E15, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10302" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-piccolightkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1834</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/6c8/6c81eeffb267d36aba289ee5befd87cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для PICCOLIGHT®,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10303" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1738</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d12/d129a92b7a848e218e387e8d8a7eebe6.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для BASIC-SET, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10305" available="true">
<url>https://kawe.su/catalog/kamertony-kawe/komplekt-meditsinskikh-kamertonov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17237</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/bc1/bc113c288d22e2c2eaa78085b00665db.jpg</picture>
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
<price>4947</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/e47/e47a31bc422f18c71498e5b6903581d9.jpg</picture>
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
<price>4947</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/6c9/6c97572ce4436cbbc50f736d77d4eb41.jpg</picture>
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
<price>4403</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5dc/5dc78dd9daa147e0e4656198b3d8e64b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10309" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-alyuminievyy-bez-dempferov-0814051001-33523-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3391</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/226/226dcc2ce24da5dc776f9b5f7fe75575.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10310" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-1024-gts-1024-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3305</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/35d/35d2ed583fd00f404c4501e7f12b5451.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10311" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-2048-gts-2048-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3305</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/3b3/3b3bf603ef84c6b6fb44b67ce51e896e.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10312" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-po-lukae-128-gts-128-hz-graduirovannyy-s-reguliruemymi-ot-c-do-h-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7793</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/68f/68fa59899465a16b3cc11412887cc194.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае градуированный с регулируемыми от C до H демпферами  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10313" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-128-gts-128-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5405</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/93c/93cb7f89bad01d7ea0122f3cde639f0e.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10314" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-256-gts-256-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5043</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/2f6/2f646c36b4892ea4a13f37fe4812114b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10315" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-512-gts-512-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4861</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/f87/f87ec51473adaad0a9f36a902b7a0445.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10316" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-1024-gts-1024-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4766</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/e74/e74fa9309e54186e23a76cef7969e95a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10317" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-2048-gts-2048-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4861</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/84c/84c6fc8ea790795d6fc1994a1d590235.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10318" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-4096-gts-4096-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5043</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e0e/e0ef9c2255e5e474689524c043d54e03.jpg</picture>
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
<price>3210</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/8e2/8e26dc66ca65a53cd9f2addcb343ef37.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10320" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-2048-gts-2048-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3027</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/4a5/4a5a3ebbd789f2c2a4dc659b38dc85b6.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10321" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-1024-gts-1024-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3305</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/8ca/8ca07684febe34eef05350a20603f970.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10322" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-512-gts-512-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3486</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/140/1406d206f3cbd8a7c862e70861ebd735.jpg</picture>
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
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/336/3361e674c972c283c7d18f7377d5624b.jpg</picture>
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
<price>4489</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/aa8/aa8c093bc9ab68e925927a4c3149c610.jpg</picture>
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
<price>5405</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/fd7/fd72dea62fdabf4c605b95da43f34dae.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману с фиксированными демпферами  ( частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10326" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-ot-128-do-64gts-128-64-hz-po-ryudel-seyferu-graduirovanniy-s-gruzami-i-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8986</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/752/75276fe167a51b4ab65c305073a47de2.jpg</picture>
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
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/cc8/cc8f6ac43a87fc7ec5d7d0cab377a169.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон A1 440 Гц (A1 440 Hz) без грузов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10328" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyy-nastennyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23229</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/be3/be31e2964bc1736e7475cc5caa17de1e.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый настенный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10329" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyydopolnitelnyy-modul-s-2-rukoyatyami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33034</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e01/e0110bb33b1231cc7666215127d8f673.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый+дополнительный модуль с 2 рукоятями, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10330" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-dopolnitelnyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14119</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/511/5115bb1d833883a267275e89a93748e0.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 дополнительный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10331" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-modul-dlya-ushnykh-voronok-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3709</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ce6/ce6f887686502bcb2cbf5346985379b2.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 модуль для ушных воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10332" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-ce55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>46699</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/857/857fc049408a63478ca6f0fdac7be803.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 набор C/E55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10333" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54934</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/458/458cacb089f99c8801303d2505060b11.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (США), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10334" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54934</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/d7c/d7ca1810d355f5730a70424804a2e39d.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (ЕС), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10335" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>80390</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/55c/55c0b45f521fba3988349ddb1d887135.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10336" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-c-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5016</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5e7/5e7d2419cb0b9241a7548e9e584de79f.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight C, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10337" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10512</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/916/916681487e43a0fbecc6a040f3b9acf2.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10338" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36844</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/a7f/a7f4a4f48024a1045000146481b05d79.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10339" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8649</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c03/c038cd81563b34245018c035a5fad676.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10340" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-eu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11388</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/86d/86d3ae29d06d7aea88da764c14a6fae0.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (EU), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10341" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-usa-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11388</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/9cc/9cca12edb7fb0d87fece8c050936d9d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (USA), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10342" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor_voronok_mnogorazovyh_2_5_3_5_4_5mm_3_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/864/86414d9e698b1fecd895740f42615fae.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/3,5/4,5 мм (3 шт. в пластике) 01.72101.001 (24846), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10343" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-3-sht-0172102001-24847/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/4b6/4b601471dc00f13e64874e925c6dd0ec.jpg</picture>
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
<price>779</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/f55/f55f1bf37ced9e47d27676c08e9ce37f.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для рукоятей EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10345" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-35-mm-3-sht-0172103001-24848/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/d01/d011479f7279b5815a2ec52ab625ca96.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,5 мм (3 шт. в пластике) 01.72103.001 (24848) , KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10346" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-piccolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/112/112c58c2a7f23d891e873f43043c2d91.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для PICCOLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10347" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-45-mm-3-sht-0172104001-24849/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e6a/e6aa870ecfc2370e00c67311dbec59b2.jpeg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4,5 мм (3шт. в пластике) 01.72104.001 (24849), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10348" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumka-kozhzam-na-molnii-dlya-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>918</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d4b/d4bfbadacddbdab238753d7bd0901369.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумка кож/зам на молнии для EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10349" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17324</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ad4/ad498bdff7ce44bd5d072e91f29e6936.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description>
	Срок службы лампы - около 100 000 часов
	Удобный замок для крепления головки к рукоятке 
 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10350" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-10-sht-0172212001-26200/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/e80/e8019740674fdc11d57015609f20fa6d.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (10 шт. в пластике) 01.72212.001 (26200), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10351" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumochka-tkanevaya-na-lipuchke-dlya-piccolight-chernaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>822</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/819/81995b4893366ceb867a4c0a554aede8.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка тканевая на липучке для PICCOLIGHT, черная, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10352" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-3-5-v-otoskop-fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14574</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/c4e/c4e0884636e5d5028f971696cc11f3e3.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Прибор для исследования слухового прохода и барабанных перепонок в отоларингологии, для диагностических процедур при терапии / реабилитации
	Линза с 3-х кратным увеличением исследуемой области
	Освещение ксеноновой лампой
	Удобный замок для крепления головки к рукоятке 
	
	Артикул: 01.12430.101

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10353" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21449</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/54e/54ed494f7a0f31927754e82040204b67.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10354" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-4-mm-10-sht-0172213001-26205/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/b3a/b3a30e5b82460a9960ee0f8ed2929f72.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4 мм (10 шт. в пластике) 01.72213.001 (26205), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10355" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/kronshteyn-osvetitelya-dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5d3/5d37fc88ead6216e17da474526747303.jpg</picture>
<vendor>Kawe</vendor>
<name>Кронштейн осветителя для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10356" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-op-led-25-v-lampochnyy-otoskop-operatsionnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13017</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/d86/d863f18c11a00e779a66782c6c578572.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 OP LED 2,5 В Лампочный отоскоп операционный</name>
<description>
	Освещение LED лампа 2,5В стандартной мощности
	Удобный замок для крепления головки к рукоятке 
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10357" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-2540mm-10-sht-0172211001-26210/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/b61/b6194be13788253462b312e0bcfa9866.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/4,0мм (10 шт) 01.72211.001 (26210), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10358" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nabor-laringealnykh-zerkal-3-i4dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>606</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/f25/f257b1debcf036487f4e34e261afaea1.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор ларингеальных зеркал №3 и№4,для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10359" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18154</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/af9/af99d10525c4431bc863b77f8d7c8b07.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Арт: 01.11430.101
	Освещение: лампа ксенон
	Удобный замок для крепления головки к рукоятке 
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10360" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171112001-28912/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>594</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/040/0408941486a7931724aa7648fa681c93.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100 шт., в пластике) 01.71112.001 (28912), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10361" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/derzhatel-shpateley-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/777/7771699fbff5095f740110dba51a7cab.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателей для  Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10362" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171122001-28913/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>594</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/dcc/dcc857a1e8953605bbb3d5eb6d6de199.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4,0мм (100 шт. в пластике ) 01.71122.001 (28913), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10363" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/razdvizhnaya-nazalnaya-voronka-dlya-basic-set-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1738</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/3ff/3ff591f541264ece3f1ba7523310594d.jpg</picture>
<vendor>Kawe</vendor>
<name>Раздвижная назальная воронка для Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10364" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-v-plastike-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>477</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/a50/a50710ce1b793d0fd9999be0ad3f4fce.jpg</picture>
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
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/749/749cd6460f42a1837b86f9d5393a9ff4.jpg</picture>
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
<price>477</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/013/0139e3d8673848adbb172cf670e0e3c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10367" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-1000-sht-rossypyu-0171221002-28901/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/2d1/2d171893a6c3061c51f8ec3fafc07994.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (1000 шт. в карт.упаковке) 01.71221.002 (28901), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10368" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5882</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/9b3/9b3a8837caa315331ba2502d6f9464c4.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10369" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-253545559mm-5-sht-0172106001/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2162</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/d8b/d8b8ca5f59d87ae6bd99ccc8ec276ff7.jpg</picture>
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
<price>4801</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/a09/a099d7856879f4b8958201967a99dd10.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5 мм (1000 шт., в карт.упаковке) 01.71111.002 (28902), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10371" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-40-mm-1000-sht-0171121002-28903/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4801</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/425/425c1a99a76e46aa77e26ccd671dffd2.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые черные большие 4,0 мм (1000 шт., в карт.упаковке) 01.71121.002 (28903), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10372" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/mnogorazovye-ushnye-voronki-dlya-veterinarnogo-otoskopa---nabor--40--50--70-mm-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2388</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/f0a/f0abe14ac5a325b073d5e695ef66dd46.jpg</picture>
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
<price>468</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/e21/e21a441f758294c8576b9faeaecfe1dc.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 2,5 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10375" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7240</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/48e/48e999cf8636093ce5d186e3bee0e183.jpg</picture>
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
<price>7793</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/73a/73a19d71c150ef9c1f97f45c2da3cff3.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 2,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10377" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12835</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d47/d4710a4bd07ffca52d8a90064df329e0.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от зарядного устройства, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10378" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20723</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/660/660ebf7205399cae90ef621085a10f9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10379" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8252</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/d1a/d1ad7f71c7e8f44047a593f791abf5b2.jpg</picture>
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
<price>12921</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/dea/dea6bc6087bf3176b37f7ada921b92a3.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe,в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10381" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20809</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/974/974c100e5c9715819a375fc08fc47e10.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10382" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-2-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7516</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8c7/8c796c81a03bd984205113a6a6182af2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №2 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10383" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-2-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22642</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e42/e42dddf312c7f1135c274b99d349cd02.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №2 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10384" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_flaplight_3_fo_s_podvizhnym_nakonechnikom_so_smennym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22642</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/1bf/1bf214589f1b857f1e9a78411e6a5326.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №3 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10385" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-4-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22642</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a22/a22252b971872a67ec6bbfc787ea5de6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №4 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10386" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--2-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a14/a1419c17559ff1b7bc501e206ae5519c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №2 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10387" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_megalight_flaplight_3_f_o_s_podvizhnym_nakonechnikom_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ac2/ac2d9bb731e3cfebd6c0e625eaaf1ccf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №3 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10388" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--4-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23559</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/f03/f03e495ea1b2bd437d3706ccc3be7077.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №4 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10389" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/2e3/2e37676f5e045666648f3d1817d36ed3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №0 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10390" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-1-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/371/371f7a29696e02f3665b2cd47b2de359.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №1 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10391" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/25a/25aa44b23543b20b4b12d1be7fb63b64.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №2 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10392" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-3-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/dfc/dfcf8d4b999fa7bc7ccc8bfa7a0d6033.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №3 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10393" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-4-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/77a/77aea977a17ee0a3a768117018ed1559.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №4 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10394" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7a0/7a02a4fb52c1ba3a48f8de0c50b008d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10395" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/f72/f7258ef5d4018512f9506aa8ff7e740b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10396" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/8a6/8a6d7f4f0a0bb97fa24789e89df7ba59.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10397" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e77/e77cb79bcfe795538fd41f108b06d661.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10398" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/linok-macintosh--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/25d/25d0db3b53008ada94e91e1a03c22cae.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10399" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--5-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/b12/b121db59abd602ff8779ea86138f25e0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10400" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/3aa/3aa6d6e913d11b0389a837a78270f2a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10401" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/089/089f3425dbab7d1c3b10de2e06fdc514.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10402" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh-3-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/665/665936f7879bb80853458b6e6bab99c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10403" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--2-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/44d/44d1ff1c6728850c61d4413dcd05849c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10404" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok_megalight_macintosh_4_f_o_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/d3b/d3b00fe7f4b499ab8332b9ca64f7c2e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10405" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--5-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bdc/bdc4543719d60b4093671a5de8e9ece7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №5 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10406" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--00-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/b35/b35200dc4add766ce20c6b7b64e1d4d5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №00 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10407" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/930/9307e2d4c291a2319620f53d66afe9bf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10408" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/27d/27d39d54a556db5466f27f9479306db5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10409" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller-2-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/6c9/6c9cba8ad2d79bdbfb39962813835cc9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10410" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--3-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bd4/bd4eec1330a1966ca92c58a0f9761743.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10411" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--4-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7974</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d94/d940f90d380f230b66f2d8ed89547c19.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10412" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--00-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/742/742709f90eb91a333d006a05bdef6027.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10413" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/da7/da72f431e801f859fdb03c45a8b37af2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10414" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/9f8/9f8c5c24754a783c47c65d0a863679ea.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10415" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/a8c/a8c86e8bbcbfbbcaa7ae0003c6ecdeca.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10416" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/650/6504c73ce83f55e63edd3f22ebc03ecf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10417" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e52/e52e17370565fae4892bc04770b3daed.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10418" available="true">
<url>https://kawe.su/catalog/klinki-polio-f-o-kawe-germaniya/klinok-polio-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7611</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/75e/75e74678331a6ac498967fa3ecb2cb0d.jpg</picture>
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
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/6e0/6e09a4048d1d2758b505a47cad077241.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10429" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--00-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/186/186752cb3ca6793ab2b5b39733b875be.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10430" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--4-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17903</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/139/139d60c8fd3b5e5e18ddbc4ef156db5b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10431" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-2-c-s-podvizhnym-nakonechnikom-dlinavysota-10021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13570</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/8ad/8adb6eb624fc25bc2e131eb3f7c57dc2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Flaplight №2 C с подвижным наконечником (длина/высота, 100/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10432" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-3-c-s-podvizhnym-nakonechnikom-dlinavysota-13021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13570</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/e66/e669eed89e9ec20a7a63a5149ee1cc2d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №3 C с подвижным наконечником (длина/высота, 130/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10433" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-4-c-s-podvizhnym-nakonechnikom-dlinavysota-15025-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13570</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/59e/59e8d8655dd5caaf5126ff9af2180a16.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №4 C с подвижным наконечником (длина/высота, 150/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10434" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/linok-foregger-2-c-pryamoy-dlinavysota-11215-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/2e8/2e8b6f6934d85a62028b77673d624247.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №2 C прямой (длина/высота, 112/15 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10435" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-3-c-pryamoy-dlinavysota-13216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f80/f80d9e88d84c2847b718cb1d8f5cdaba.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №3 C прямой (длина/высота, 132/16 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10436" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-4-c-pryamoy-dlinavysota-15718-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/479/479a38357e66438f90e1d023dc28496f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №4 C прямой (длина/высота, 157/18 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10437" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinki-tyepro-makintosh-s-4-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3027</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/231/2319c464b69a7175d46b00eb03b26d87.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки ТЕПРО Макинтош С №4 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10438" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-3-s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2878</categoryId>
<picture>https://kawe.su/upload/iblock/2c3/2c344dbcb6988007f3875b24116a1984.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №3 С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10439" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-4s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2878</categoryId>
<picture>https://kawe.su/upload/iblock/a70/a70978b4db386c2874749d0a4fbba609.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №4С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10442" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--0-c-dlinavysota-8015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/809/809047def51e6c721e1b2f07bdc74992.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 C (длина/высота, 80/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10443" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--1-c-dlinavysota-9520-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d87/d87a39e94ac3e3a3bcb61a262e9b1879.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 C (длина/высота, 95/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10444" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--2-c-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/852/8522cbcb0a0456deca49e087a9a65c3f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 C (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10445" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--3-c-dlinavysota-13324-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bc1/bc1d12bc16899bab68a738bc9ad6d0c6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 C (длина/высота, 133/24 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10446" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--4-c-dlinavysota-15325-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/8cb/8cb1986a396bbe87bd8abeb777d86658.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 C (длина/высота, 153/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10447" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--5-c-dlinavysota-17925-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/1ad/1ad3db8ac2c37c89479ab9cac4a20be1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 C (длина/высота, 179/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10448" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--1-c-dlinavysota-10312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/2d9/2d96b29e6cf6f4d20784cf031bd0d442.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 C (длина/высота, 103/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10449" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--2-c-dlinavysota-16015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/2f4/2f48d5d11a13ccc34881698bb6eb0e6c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 C (длина/высота, 160/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10450" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--3-c-dlinavysota-20014-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/58b/58b7b31e6b26994563b754e745f58934.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 C (длина/высота, 200/14 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10451" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--4-c-dlinavysota-21017-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/a99/a996c35c8d510f855d5d16ac859147cd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 C (длина/высота, 210/17 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10452" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--00-c-dlinavysota-6812-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/759/759f1fc52fa1cd06aae3c4cbaf509aef.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 C (длина/высота, 68/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10453" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--0-c-dlinavysota-8112-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/ea7/ea7be58bb0f9754bf25a4d1bb50f5dd2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 C (длина/высота, 81/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10454" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/42a/42a0c2cdc32e6a657f34ab250575be85.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №00  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10455" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy--0-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/4d8/4d86ea9e72481a2b351259214158ecc6.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №0 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10456" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6694</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a86/a865d2e277bad07d8cf45610c66e9202.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10457" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10361</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/4d2/4d268d724c1cb6d21cf769375c6cfc09.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10458" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6782</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ba9/ba964d797d3ea2305bf76a64a96d78d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10459" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/176/1760c7eb79fac440a96bbab476593a39.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10460" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-led-d28mm--akkumulyator-35v-li-lon-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17877</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a49/a491599133c4c048959fb6aabe93be9a.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя LED (d=28мм) + аккумулятор 3,5V Li-lon осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10461" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-odnorazovaya-led-srednyaya-iz-plastika-d30mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>960</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/37e/37efdb1904d56a147d662940ff510518.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5В Одноразовая LED средняя из пластика (d=30мм)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10462" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-led-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16597</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/d2f/d2f42e866c0482ef2798d4969f50a0cc.jpg</picture>
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
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/8c2/8c2cef075e13a6488e84c859107856cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая  В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10465" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5778</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/6c9/6c994fa2cd3880e5c95d7301e518aeb6.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10466" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm--akkumulyator-35v-li-lon-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11555</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/bb6/bb69a2d13c7e6601c91001630f287977.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) + аккумулятор 3,5V Li-lon, NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10467" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17782</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/054/05452342a7026539e6989230f12bb7bf.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10468" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6141</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/847/847fb5e734254591cb67a7d675c2a07c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10469" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6141</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7c2/7c26d7d9981c4e337a5867f1446bce23.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10470" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-ekonom-fo-d-30mm-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4680</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/3c7/3c74c1429296b29b7a9d2a983264fefa.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка 2,5В (d= 30мм)  Эконом F.O.</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10471" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12930</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/517/517b08318f5c1313fe010f1005b96e0f.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10472" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-malaya-25-v-d19mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3071</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/233/233de186acfaf8c97f14aca1f605778b.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая 2,5 В (d=19мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10473" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-25-v-d28-mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3210</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/252/25282a7d83f8a55ccc5b4295f9e14527.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя 2,5 В (d=28 мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10474" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-25-v-d32-mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3391</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/90f/90f67dd893ce8e04edb89c1da72b3790.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая 2,5 В (d=32 мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10475" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-economy-25-v-d30mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2525</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/66a/66ae67438120409d9dbe7203204c0c07.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка Economy 2,5 В (d=30мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10476" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/odnorazovaya-batareechnaya-rukoyatka-c-bolshaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>727</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/411/41131ce04783d794dbc5d13010a5160c.jpg</picture>
<vendor>Kawe</vendor>
<name>Одноразовая батареечная рукоятка C, большая, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10477" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--3-klinka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2111</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/eb5/eb5274c23cec6dd99cc11328bdee6212.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 3 клинка Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10478" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--5-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/57e/57eda22e4b2a722c02f68fb935337844.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 5 клинков Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10479" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--7-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/742/7426b40512d99f3145138f9572cd80d5.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 7 клинков Макинтош и Миллер ) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10480" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--2-klinka-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/020/020cfca936f384e2569388b672c1066a.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 2 клинка FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10481" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/sumochka-dlya-laringoskopa-rukoyat--4-klinka-sinyaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>779</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/b30/b3092bd79eb867ceaa8fe8042fae9c7e.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка для ларингоскопа (рукоять + 4 клинка) синяя KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10482" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--1-klinok-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3201</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cfd/cfd4bf30dfa314c0998a5fbf8b5b1785.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 1 клинок FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10483" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/kartonnyy-boks-na-4-klinka-i-1-rukoyatkwe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>764</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/abb/abb30d40c9da832990394474fce1d2ef.jpg</picture>
<vendor>Kawe</vendor>
<name>Картонный бокс на  4 клинка и 1 рукоять,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10484" available="true">
<url>https://kawe.su/catalog/rostomery/nastennyy-rostomer-ruletka-person-check-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1643</price>
<currencyId>RUB</currencyId>
<categoryId>2915</categoryId>
<picture>https://kawe.su/upload/iblock/3c0/3c062a41d821e298714762184ea750a6.jpg</picture>
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
<price>6868</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/44b/44b1549344fe3ab081516d60be86daff.jpg</picture>
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
<price>4282</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>https://kawe.su/upload/iblock/e1e/e1e73d5e0b2cc47520c81cd4070f27c8.jpg</picture>
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
<price>12887</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/484/484cb3aff247b7f6ba92867f95ca8a7d.jpg</picture>
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
<price>260</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/06c/06c944ed7b31ff14bd12717a6c46d198.jpg</picture>
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
<price>4368</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/9d1/9d13138243e16d1fad031404bb610b1e.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор Фонариков диагностических CLIPLIGHT (6 шт разного цвета), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10496" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3456</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/ee6/ee6d4d49cd08ee647c02bb1118c92456.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10497" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-cherniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/429/429ef06c6d7d025dbd512ab16620af57.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический черный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10498" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/derzhatel-shpatelya-dlya-cliplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>113</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/a34/a34d0a52f16ef6f7ed2cb945caee2f63.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателя для CLIPLIGHT, Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10499" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-night-chernyy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11278</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/f73/f737620e14c231dbd8737c8fc4a550bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) night (черный), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10500" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v-led-lampakawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14392</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/ce2/ce2cf0ef879fead2c9072f0cbd1c64b9.jpg</picture>
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
<price>4766</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/844/844068915db110f4b6fc1ffd5d441b83.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 2,5 В средний, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10504" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-35v-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5043</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/b52/b524be29c36a966be05592647dcfc766.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор 3,5V Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10505" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-smennyy-dlya-rukoyati-35v-28970-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5405</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/6fe/6fe8e8a31d3c842b01792f7795feb1e2.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор сменный для рукояти 3,5В (+28970) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10506" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-35v-dlya-rukoyatki-podzaryazhaemoy-ot-rozetki-28970-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4498</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/b2a/b2aabc2f836c98a1f1ed56d99fd00824.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор 3,5В (для рукоятки, подзаряжаемой от розетки) 28970 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10507" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampochka-25v-vakuumnaya-dlya-eurolight-ye10-novoy-versii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/51b/51bb32c4c89b49e36c5a7c46e7c2c47b.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампочка 2,5V вакуумная для EUROLIGHT Е10 (новой версии), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10508" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampochka-25v-vakuumnaya-dlya-eurolight-ye30-piccolight-ye50/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1652</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/856/85664741c473336082cfaee02f43a6e2.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампочка 2,5V вакуумная для EUROLIGHT Е30 / PICCOLIGHT Е50 / Пикколайт D,  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10509" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-galogen-dlya-evrolight-e36/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2846</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/bd4/bd4e3d42ce90b7f35ad8ae894dbc134b.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5V (галоген) для Евролайт E36,KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10510" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-galogen-dlya-masterlight-klassik-12v35w-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2076</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/15e/15e24c3f3819e92ecfeaf659542c05c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа (галоген) для Masterlight Классик 12V/35W, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10511" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-led-masterlight-klassik-12v-7w/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6877</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/d47/d47678522171041504997de3e93d4501.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа (LED) Masterlight Классик 12V/ 7W, KAWE</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10512" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-vakuumnaya-25v-k-oftalmoskopu-eurolight-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1738</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/ff4/ff4be77d42e7e28149a6d787548b0b6c.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа вакуумная 2,5В к офтальмоскопу EUROLIGHT Е10 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10513" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-25-v-k-oftalmoskopu-galogenovaya-e-28946-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2474</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/c24/c24f250533e78b75ce5a10cac45ff47d.jpg</picture>
<vendor>Kawe</vendor>
<name> Лампа 2,5 V к офтальмоскопу галогеновая (E-28946) KaWe / дерматоскопу Евролайт D 30</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10514" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-vakuumnaya-25-v-dlya-otoskopov-e-28943-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>597</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/99b/99b93bb98671303ce5337118a8ad978e.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа вакуумная 2,5 В для отоскопов (E-28943) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10515" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-ksenonovaya-25-v-dlya-otoskopov-e-28933-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/e71/e714217320006f4f0d2f4b045f243f1d.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая 2,5 В для отоскопов (E-28933) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10516" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-25v-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2016</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/64f/64fe84d9814465d97062d746d8c6b47d.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 2,5В LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10517" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-25v-povyshennoy-yarkosti-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4947</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/582/582efbdc48cb20fde10c201c14c1e365.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 2,5В повышенной яркости LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10518" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-ksenonovaya-35-v-dlya-otoskopov-e-28925-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1652</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/e50/e50854f1a0ed23f1c4d44de06896a535.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая 3,5 В для отоскопов (E-28925) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10519" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-malaya-25v-vakuumnaya-dlya-lampochnykh-laringoskopov-e-28958-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/1ff/1ff1f428bae5e18d3967613421699b64.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная малая 2,5В вакуумная для лампочных ларингоскопов (E-28958) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10520" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-zapasnaya-25v-vakuumnaya-bolshaya-k-lampochnym-laringoskopam-e-28959-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/30d/30d4863040bc7600523fc9a1934697dc.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа запасная 2,5В вакуумная большая к лампочным ларингоскопам (E-28959) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10521" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-ksenonovaya-25v-k-volokonno-opticheskomu-laringoskopu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1333</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/f08/f08eae40379c2ef68adc34794c20397a.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная ксеноновая 2,5В к волоконно-оптическому ларингоскопу KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10522" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1791</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/9a5/9a5099c5cd900a28758e365cffe7e2b0.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5В ксенон, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10523" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-25v-led-standartnoy-yarkosti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2111</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/c4e/c4ecbaef8df633ba92a9b48c3c74fae2.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 2,5В ЛЭД стандартной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10524" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-25v-led-povyshennoy-yarkosti-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4947</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/eb8/eb836e95349327d6ba374d51b28b28ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 2,5В ЛЭД повышенной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10525" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v-led-povyshennoy-yarkosti-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5405</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/d7f/d7f68a195d7c63a93a61cc589885ebc2.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5В ЛЭД повышенной яркости, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10527" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampochka-35v--led-dlya-dermatoskopa-yevrolayt-d-30/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2388</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/628/6283f615faee91e108f4d80b09fe4e68.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампочка 3,5V (LED) для дерматоскопа Евролайт D 30,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10528" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-smennaya-35v-povyshennoy-yarkosti-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5405</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/0f5/0f55b479e23e1ef4eea0b1cb26e03815.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа сменная 3,5В повышенной яркости LED Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10529" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/lampa-zapasnaya-k-svetilniku-meditsinskomu-masterlight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6877</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/c82/c82d7c8a9d30af500cca5ddfb7081051.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа запасная к светильнику медицинскому MASTERLIGHT KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10530" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/1275144013-lampa-ksenonovaya-k-otoskopam-piccolight-fo-eurolight-fo-combilight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/7fd/7fdc7a73cf17bab6b5a6e67d898761c9.jpg</picture>
<vendor>Kawe</vendor>
<name>Лампа ксеноновая к отоскопам PICCOLIGHT F.O., EUROLIGHT F.O., COMBILIGHT F.O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10531" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/zapasnaya-lampa-dlya-masterlight-20-20f-30-30f-228v24v-50w-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2465</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/b9f/b9f4bd982d0d30efe3a7406ef050f698.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная лампа для MASTERLIGHT® 20, 20F, 30, 30F, 22,8V/24V 50W, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10532" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/ksenonovaya-lampa-25v-dlya-dialight-xl-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1168</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/a87/a87a6b7b9c1292d7c8f90a0de92c5aaf.jpg</picture>
<vendor>Kawe</vendor>
<name>Ксеноновая лампа 2.5V, для DIALIGHT® XL, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10533" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/led-lampa-25v-dlya-piccolight-e56-led-i-eurolight-e36-lkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2569</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/9dc/9dc00a972a91012e27d4c45805b3f719.jpg</picture>
<vendor>Kawe</vendor>
<name>LED-лампа 2.5V, для PICCOLIGHT® E56 LED и EUROLIGHT® E36 LED, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10534" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/led-lampa-25v-dlya-eurolight-e35-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2655</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/622/622dfc07c5b8d2b9c87df6a48ddd01e8.jpg</picture>
<vendor>Kawe</vendor>
<name>LED-лампа 2.5V, для EUROLIGHT® E35 LED, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10535" available="true">
<url>https://kawe.su/catalog/lampy-kawe-germaniya/ksenon-galogenovaya-lampa-35v-dlya-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>2911</categoryId>
<picture>https://kawe.su/upload/iblock/2df/2dfcc4291571751089b275cfc7fd6119.jpg</picture>
<vendor>Kawe</vendor>
<name>Ксенон-галогеновая лампа 3.5V для Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10536" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastolnoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2751</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/cf3/cf34971daae155108191c5b7f5774743.jpg</picture>
<vendor>Kawe</vendor>
<name>Настольное крепление для Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10537" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastennoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2197</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/ade/adeb3f0d4fbedc5aa773b1a419a72c29.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенное  крепление  для  Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10549" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-ogolove-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17730</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/831/831acca8d3027dd2684b8ac06c30a3f5.jpg</picture>
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
<price>22054</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/38c/38cb28ac3f8ea93ab12a92511fbe4669.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на пояс для Н-600 LED  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10551" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22703</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/e93/e938d4c0f4f6ab474eb4ae3000727b71.jpg</picture>
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
<price>22703</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/fd8/fd80ce929efc215b51fd174f05f1c0c7.jpg</picture>
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
<price>22703</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/737/737dc2ee57dd96c679e17501b75dc6b9.jpg</picture>
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
<price>22703</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/a07/a07f3dd02cc2a392fe5b95b5145097a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10555" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-90g-metallicheskaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1868</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/f48/f4831f0bc5c12163654bee46cfa7f97b.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 90г, металлическая рукоятка,  с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10556" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14574</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/fa0/fa0e325836b4ecdb85cafb409274ddf3.jpg</picture>
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
<price>8157</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/e94/e94696adb68482750ece516fa112383a.jpg</picture>
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
<price>7240</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/8a5/8a5ddd6b72bddfac428acb9a1762aaec.jpg</picture>
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
<price>5224</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/7ef/7ef7c96e5e9564024c014ad266f7f639.jpg</picture>
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
<price>4264</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/641/64184596812b3da807f823c376c84193.jpg</picture>
<vendor>Kawe</vendor>
<name>Stethoscope Мультифон для взрослых, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10561" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/fonendoskop-kawe-singl-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>467</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/869/86993de3c4872883afc3486c2ba5c21e.jpg</picture>
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
<categoryId>2848</categoryId>
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
<categoryId>2847</categoryId>
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
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/b45/b4551978769f531321a95a3abf3f0e03.jpg</picture>
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
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/0e1/0e10704cbc1d2cc61af70551554f6bb3.jpg</picture>
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
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/142/142920503ebb614f014ca3b246f4b16a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/25e/25e3bd38a876e1c910ba843d6050b703.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/c52/c52fecb91722d554bd3842b268ce37e8.jpg</picture>
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
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/601/601601b7001de1419b83e7c8e0f23444.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10576" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-varioflyeks-v-forme-toporika-po-fassbenderu-155g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/b72/b72f7458f5d05ca9865de8605359972d.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВАРИОФЛЕКС в форме топорика по Фассбендеру 155г, с иглой и кисточкой, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10577" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-babinski-diskoobraznyy-95g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1557</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/7d9/7d9f38cb47f4aa5785ec87bf27d7bcae.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БАБИНСКИ дискообразный 95г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10579" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-80g-plastikovaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1791</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/363/363b3f4067c23012a37359645fee17b2.jpg</picture>
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
<price>2197</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/912/912ea6b739355cba6b43426709a1bed6.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек Colorflex большой 110г, черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10583" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2197</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/c4c/c4ca5b0572359251cf7865423cd69863.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек КОЛОРОФЛЕКС большой 110г, синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10584" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/molotochek-koloroflyeks-bolshoy-so-shtyrkom-bez-kistochki-i-igly-ves-110g-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2197</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/246/246022e1183e360606c72f6f4e37493f.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек KaWe КОЛОРОФЛЕКС, для диагностики рефлексов, большой, серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10585" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-175g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2708</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/a8c/a8c138993e934ddb671c6c47c7df9a3e.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 175г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10586" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-220g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2742</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/8d9/8d96e5cb10ad2a73c7e7b6e544e317d6.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 200г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10587" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2932</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/aae/aae410f64626da4990e41388417052f9.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 210г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10588" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-190g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2655</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/533/53362d39296c1631161f8c368d3b8c37.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 190г, с кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10589" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-150g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/b7e/b7e4cb2bf956982b2d1037dd05b83a61.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 150г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10590" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-vitroye-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2525</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/2e5/2e5144efe43a99be8fdfeed6ea84d801.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВИТРОЕ (Witroe) тяжелый 198 г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10592" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-nalobnyy-osvetitel-led-v-komplekte--2-akkumulyatora--kreplenie-na-ogolove--kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88657</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/176/176d28a0601419e60df10c82dbb8a27a.jpg</picture>
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
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/725/7254c844d94c19221d46bcd920f1b6bc.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73705" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/fb8/fb812844903a4942a2adffd9e21f6a7d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73706" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d35/d352a5f08468c8a626646a77e7757bca.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73707" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/3b6/3b6a3fd22ca870fe1b18df03f1ccbfc5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73708" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-5-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4f2/4f231b400fb5de8931c31b519d31bcce.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73709" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--3-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17903</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5ed/5ed2e6389f57763569d86579e339d83a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73710" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/7d8/7d8d2c83b98448f705a2e194fb0bf62e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73711" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/469/4698adf7f5e05ec2bafeb5d0fd494a19.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73712" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/da8/da81a0fa840488d97c2ea2182cd4b5cf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73713" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0e8/0e81214143c94631ee95e1b9daa03007.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73714" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/bf2/bf2c2dbcc68f2b58d3b99f6c7028557c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73715" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7516</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/9f2/9f29543bfa1eee01952a73f73577a74b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №3 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73716" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-polio-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7611</price>
<currencyId>RUB</currencyId>
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/88f/88f1c9c7c6fae95f1a57f1b3cefa7d0b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO Macintosh №4 FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73717" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7516</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0a6/0a621525dfcf86258ccafa3ddae07498.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73718" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4126</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/e76/e7661ba3bb4c34793fabc4e069445a0f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73719" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-tyepro-makintosh-s-2-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3027</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/d17/d1758a1ee11ea2bf3bcdf27011ec0eb7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO Macintosh С №2 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73720" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-tyepro-makintosh-s-3-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3444</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/5f3/5f3f4146b1f58a117bbf77f3b24a83e4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №3 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73721" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-0-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/7de/7dee8a9d3042c89784fb458e730de82f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №0  Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73722" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-1-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b10/b104eaea52825f3fa36772685134a4c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №1  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73723" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led-2-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8fb/8fb0f130f5e0d1ba39aefdd5f78f2b0f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №2 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73724" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/272/272de5afc1bc1debf8f6c4bc6cd11e73.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №3 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73725" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d0c/d0c18432742c41b1918647b3a401afcb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №4 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73726" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-1-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/94f/94f066c57670d653eef9c9aee8380827.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №1 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73727" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-2-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/5e1/5e1d7208bf85b4702d0bd39c15515c0d.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №2 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73728" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9a7/9a78c02ac13c7a12b481dcac76ac9d07.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №3 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73729" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/8ba/8bafb494bd0350085b7c1b799c249297.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №4 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73732" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27614</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/d60/d60c7e9f0e84841a7a679b5c32fc3c92.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73733" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-rabotaet-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8658</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/010/010822fda3852e7c2cdf25a9fdaef404.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32мм) 2,5 В (работает от батареек) с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73734" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19-mm-25-v-batareechnayaakkumulyatornaya-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7153</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/343/343b56f796c1de4937e1b53ae07747ff.jpg</picture>
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
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/9b3/9b371c070d2e527cac5fdbcc73612190.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73736" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50434</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/65b/65be116100b15642ea63f8e9b872e488.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73737" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>40757</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/894/89419eea7ec9326a56d6700b6a88b262.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков / Универсальный набор (неонатология, педиатрия, взрослые, на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73738" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31981</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/877/877bb3c30cded3d97a2b4fc2e52950ea.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампа LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73739" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54800</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/890/89024a32cab85d2dd7b07a6d6449c4ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73740" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>45124</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>https://kawe.su/upload/iblock/7d1/7d134387ba33fb13114d3ae870d903ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, Универсальный набор (неонатология, педиатрия, взрослые) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73741" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26586</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/511/511f7ca3496ec19c8e04f7d5fb3c92ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73742" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/23109/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38660</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/475/475f49986420cb8ace1163c5ac1ab83e.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на аккумуляторах, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73743" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33265</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/541/54103047a1d534df139bbb4dc083834a.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73744" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61479</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/adc/adc478f63851f7c52258e93e8ab18673.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с комплектом клинков для взрослых (для проведения затрудненной интубации) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73745" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>51802</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/524/52442a836c0059320bd5fb43b7c70508.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, универсальный набор (неонатология, педиатрия, взрослые) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73916" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/molotochek-babinski-diskoobraznyy-ves-70g-gibkaya-rukoyatka-iz-plastika-s-rezboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1444</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/480/48096bbb0c0d902937685c3902064bc9.jpg</picture>
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
<categoryId>2982</categoryId>
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
<categoryId>2990</categoryId>
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
<price>49439</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/a6a/a6a68d8e8f173800bbcca815dfe98470.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74433" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>74894</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/ebd/ebdbeba2fdf290a5ed6b2c3e3387ef7f.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74434" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52195</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/749/749b8efdcfde00e8bf046025bfaee6ca.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74435" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50408</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/2b6/2b62806f2dde5b13041afe98cbddad67.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74436" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>78602</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/955/955b61d8d83db19c41bc60f27df6d9ed.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74437" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>84098</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/263/26361728ea357a1c98904f3f4dd924c2.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>53146</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/544/544190384d5c6621ed2c5d9d6df1e206.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>58642</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/cb6/cb68f8a54d0faf7ae2485f04556e0de6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74440" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55903</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/89d/89dc10480e44142b05b37f64499ace24.jpg</picture>
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
<price>3763</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/f69/f69f2b348b7a0902d89f82df083850ec.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74443" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31953</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/1b7/1b7b2866a922a3054a220138094527c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V с модулем воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74444" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/62d/62d14efa3138de23653464579ffd75cc.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74445" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33741</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/211/211122217a67fac637c4787095f88d35.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74446" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3305</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/27f/27f7633bae56e254f712e2ea8b221a15.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74447" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37449</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/84c/84c1790b2c25ef863126bb8e7f5eccd6.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, с модулем воронок, KaWe</name>
<description>
	Воронки для смены
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74448" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3763</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/76b/76b67d3bc8564f16487932825e8859ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74449" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4489</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/996/996e315eb161dfdb090e08b269cf4f94.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74450" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-podzaryazhaemaya-ot-medcharge4000-v-komplekte-s-akkumulyatorom-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9073</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/37b/37bb9fbd4f727984f3d30654857d8f8d.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, подзаряжаемая от MedCharge4000 в комплекте с аккумулятором 3.5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74451" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/rukoyat-eurolight-podzaryazhaemaya-ot-seti-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11555</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/00f/00fac415f46f92ca3fba264e0ac12a8c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять Eurolight, подзаряжаемая от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74452" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/keys-na-6-klinkov-miller-i-1-rukoyat-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3572</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/9be/9bef21988f396c0092e4209ef1c41e66.jpg</picture>
<vendor>Kawe</vendor>
<name>Кейс на 6 клинков Miller и 1 рукоять, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74453" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e25-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60072</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/b10/b1085d03dbf1f22de7f5ab5a89e7bc15.jpg</picture>
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
<price>34616</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/323/323d90b09292c6351b1fe32103640598.jpg</picture>
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
<price>467</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/51b/51bcdb62d18a8198528557e779dd18fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Planophon, плоская головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74460" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-duoscope-dvoynaya-golovka-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/30b/30bb649db9cd648674508a064ededc8f.jpg</picture>
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
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/c1f/c1f0b8aac6558d4c018911cbc7ea8477.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 5,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75433" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-mm-10-sht-0172214001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/b9f/b9f6125435bf07706ca2c7cebcc1604e.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75434" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-25-30-40-50-mm-10-sht-0172210001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/9d9/9d97cd4bfe1870040dfb4f4cd04fdb17.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.0, 2.5, 3.0, 4.0, 5.0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75435" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-30-mm-10-sht-0172215001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/5e0/5e005576e5096d1af7cd017ba2065078.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75436" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-malaya-d19mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5865</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/949/949fcc3773ccd3d0ee22b992efe7f1c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5 В малая (d=19мм) Ф.О. ксенон, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75437" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/61d/61d329ae6d50b134c907879471d162ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/32b/32be65a71cb1db7335a80ff01a6d4641.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-zhyoltyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/43a/43ab90e38a450a0439cff03711436752.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED жёлтый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75440" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/1f0/1f098da12e60bd079038fa30f73f01c4.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75441" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-seryy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>805</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/c88/c8873b9884089b2e0161b062bae59974.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75442" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13657</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/81b/81b66dcee9580485c6b29751297508c2.jpg</picture>
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
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f34/f342839617206a1c42b9bee3689e0c35.jpg</picture>
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
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/a98/a98f7672c9c41551dc564d90aacac404.jpg</picture>
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
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/51a/51a94fc0983326023037c6dc2ac6250b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75446" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1471</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/d07/d0753a82d6f45a414d009b173f67477f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75447" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-chernyy-black-line-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1652</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/b3e/b3e2c3aa52336e621990bf280421b265.jpg</picture>
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
<price>58642</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/2bc/2bc587dcc38aa4afa49370424f0bc33a.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75505" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>53146</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/291/2917933aff5b83591a6977820781a524.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75506" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49439</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/211/211dca13dd7fadfcb1bf598eaba9f845.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75507" available="true">
<url>https://kawe.su/catalog/otoskopy-lor/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-4-0-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>468</price>
<currencyId>RUB</currencyId>
<categoryId>3341</categoryId>
<picture>https://kawe.su/upload/iblock/f5b/f5bcbc5cf62c922b19b3e504bc3b8bef.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 4,0 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75508" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4861</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/685/685270cb4473de4a8ecdd4b390841d38.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный темно-синий, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75509" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4861</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/4f1/4f19a942410a08a8224a51f93406f39d.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75510" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5622</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/adc/adce7227046c7ae4d236ecca15c79c0d.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75511" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-goluboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5622</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/806/8060b9d6f9386a9186160b96e50d105d.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. голубой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75512" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5882</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/18a/18a1157d1315c0cd23cfe2d2d221c669.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. темно-синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75513" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5882</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/a7e/a7e8426db06602e417434ed4f3cc8c3b.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75514" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10820</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/256/256ad4d24f55bed26e041158e0f3641c.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75515" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10820</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/8a5/8a539428d08633e28a100904fef85274.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75516" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6782</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/d50/d50dc3249de65f53ea73b23940bdf616.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75517" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6782</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/f38/f387ef51b5e934aadbfe051bcdb35790.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75518" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-1-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11326</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/ea7/ea7fe285de37f7f2adfe82161c03edfc.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка вакумная)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75519" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-2-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22221</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/4c1/4c1e5a1f979af93f9d70a95fd6f35c17.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75520" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2629</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f46/f465f032b9460f77567d467c8d400e97.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75521" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-krasniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>889</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/590/590dea7dce627bb0808136d0a2ab152e.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический красный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75522" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-siniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/55c/55cb0b6f9f16561708d73a932c064a1e.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический синий, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75523" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-seriy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/35c/35cb709f40f38524d09221ccafd8816d.jpg</picture>
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
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/288/28819e5e6569203b86ec4c34e5606946.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический желтый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75525" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-tsvetnoy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>554</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/0b0/0b0419532cc0eb5ec5c1882f722ce425.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический фиолетовый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75526" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8528</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/b8b/b8be5094c30cc3ca8eb409bd0ad2ad43.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75527" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8528</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/b19/b191bde1318be45e3b6096c190f14219.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 темно-синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75528" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-night-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/134/134d811f0adc43244fc7ea00961e9154.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75529" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-temno-siniy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/b79/b79cf6ec628b770d5424668e3216319d.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 темно-синий, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75530" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-seriy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/f6a/f6a234d4fd25d4d56de61aec8c35cd54.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 серый, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75531" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-stone-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/7b2/7b26300aaa93ae6c082c5286c06be2d6.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 stone, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75532" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-sky-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10544</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/aa5/aa53899350b2dedeb7c42f0336d8bc35.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 sky, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75533" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-stone-seryy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11278</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/6fa/6fa3a50ca195a55b8690bf7ec79237d2.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) stone (серый), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75534" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-sky-temno-siniy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11278</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/a7f/a7fd936e44444361199728472ffe87a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) sky (темно-синий), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75535" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-25-v-nimh-35-v-malyi-28965-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/90a/90afb2e1e7dedabb05241d058246d3e5.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 3,5 В малый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75536" available="true">
<url>https://kawe.su/catalog/akkumulyatory-kawe-germaniya/akkumulyator-nimh-25-v-malyi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3806</price>
<currencyId>RUB</currencyId>
<categoryId>2909</categoryId>
<picture>https://kawe.su/upload/iblock/d7f/d7f6446fc8897b1243c10bbbd6ea65c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор NiMH 2,5 В малый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75537" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79568</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/87c/87c233582ffac0b99ad372bcdb472762.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на пояс</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75538" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-ogolove/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>74195</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/da3/da3c5534eebcd6d6450853e36993d901.jpg</picture>
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
<price>9532</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/242/242f3cef58aceeadb17f694c9b3768fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп ПЛАНЕТ Air Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75540" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/6d5/6d56da8c104a2c53a771f6838ba9d975.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75541" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/4d2/4d26db2ff8b67d01a6b8a544bae750e5.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75542" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8157</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/de9/de93e8dee8e3dfc10622598ccc989e19.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи бордовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75543" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7240</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/846/84612cda8b07b5bbf2bb87de5ae708f6.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75544" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/436/43672e2dd2807f7eed92e2e862190a47.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75545" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/db6/db603f3580c85c7f40af82a8eae7aad3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75546" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/35d/35df24b76c0051bec7716bccb21e92fd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75547" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/96e/96ef6cdfd6c37e21bf7ec771f845e5d0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75548" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/e6a/e6afa72eab2d117df8be865cfae9457f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75549" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-fioletovii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/4f1/4f183d4fa6645e91f29a6aed82606cf3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75550" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/030/030b76256a8cf01dbfe22d4f4f5b5730.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75551" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f60/f606f125cfc6d684d10c1513456d40d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75552" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/e36/e36008bf924673870c8e38c4d47abb48.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75553" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/901/90139e56dfb193d4858f210955fea1e0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75554" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/d78/d783ac44b84c60471b78237c11ed0cf1.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75555" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/d15/d1536a47373d5a87420708581c23f5bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75556" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/dec/decd2f5f0ee485c20756ffebb4cba9d6.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт зеленый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75557" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/87d/87da96b2bdb9d67008a6aa24343684ff.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75558" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2430</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/18b/18b3e8dfef2a0bf8347a4a053b62bdc8.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75559" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/b2d/b2d02981acc1840f009d9f0ebef637b0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75560" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/da4/da4227c25cf14cd1e5ff72e327d933de.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75561" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/929/929d122847a9c95724a07e0e326ac006.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75562" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/21e/21e39a65631abccc96500e065a9d2f1a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75563" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/aeb/aebdd236c964b446d2a4046293e7a03e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75564" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4030</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/360/360a81e998fc0ec507e5dd08ec66e6c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75565" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/8b5/8b5fed489e622c4d5e5298dc731be91b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75566" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/a9c/a9c6e4c7540a21171aa3577a5903c2ef.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75567" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/4e5/4e564ed7ab210338dcdccd0878aea179.jpg</picture>
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
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/dbf/dbf0d78bf74296e63e7a30e560f4ee56.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75569" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/007/00713f4ef9bed1c640abdff027782692.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3944</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/b79/b79db08a950f2dfcb3ae9bcff65ca14a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/cb9/cb9a5e41a519200efbe9ed618f22a692.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/45b/45bc049525328fc2132c78e3d875523e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/f76/f76021d61df0b153ee8bef7ab29fc0d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/061/06107872efe192bbede73f8f3d25f00f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/fdb/fdbd0022523b3c92a6041d0ab09b56ea.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75576" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3849</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/c6a/c6a489d19f386e561b1a83c657ec9d4d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75680" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetoskop-meditsinskiy-baby-prestige-zelenyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2335</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/7fb/7fbfd890eff3f20e9deb039e0828ac03.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
</offers>
</shop>
</yml_catalog>
