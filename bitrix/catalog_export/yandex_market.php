<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2021-10-15 06:29">
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
<category id="2865" parentId="2863">Дополнительное оборудование для дерматоскопии</category>
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
<category id="2914">Функциональная диагностика</category>
<category id="2982" parentId="2914">Пульсоксиметры</category>
<category id="2984" parentId="2982">Пульсоксиметры Nellcor, США</category>
<category id="2986" parentId="2982">Пульсоксиметры Кардекс, Россия</category>
<category id="2990" parentId="2982">Пульсоксиметры CHOICEMMED, Китай</category>
<category id="2991" parentId="2990">Дополнительные принадлежности к пульсоксиметрам CHOICEMMED, Китай</category>
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
<price>7714</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/6ab/6ab68911633aa586046e7d0d6b4d5f69.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость night (черный)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10237" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-kawe-diagnosticheskiy-belyy-s-knopochnym-vklyucheniem_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>637</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/85d/85d951b178ef3defd4b80d854386a9d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический KaWe белый с кнопочным включением</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10238" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-kawe-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>572</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/8fd/8fd4a8aa8bc87b248282998b4208115d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10239" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-rapport-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/85f/85fb019d0b2c9e2d1be48eeeda64e41d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10240" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12442</price>
<currencyId>RUB</currencyId>
<categoryId>2857</categoryId>
<picture>https://kawe.su/upload/iblock/b19/b196c15679132abc7e6758701229f4c2.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 2,5B Отоскоп лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10241" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b-otoskop-operacionniy-lampochniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12763</price>
<currencyId>RUB</currencyId>
<categoryId>2858</categoryId>
<picture>https://kawe.su/upload/iblock/d93/d9346c399a18b75f8b2759c0a0b50600.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 OP 2,5B Отоскоп операционный лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10242" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-ye50-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9643</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/460/46010bcab6710a35a109a8417ae6221b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10244" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-chernyy-eu-versiya-zelenyy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/772/7720c75ef3747de6476282e14c9636a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, черный, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10245" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/ftalmoskop-yevrolayt-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10286</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/2ee/2ee0873d55881ae0ccb91e7b601aea67.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е10 KaWe</name>
<description>
	Для кабинета офтальмолога
	
	Современный прибор для диагностики глаз пациента
	Не зеркальный офтальмоскоп
	Электрический
	Прямой
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10246" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye30-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12643</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/540/540993e7ff4374c2042a08a5ee3beeb2.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е30 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10247" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolait-e36-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15750</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/2d7/2d745569a83c0353b714eacf00f0cf67.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10248" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye36-35v-s-akkumulyatorom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24000</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/c53/c53d7d90fb1d3bbac182526e497a322c.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (с аккумулятором) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10249" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolajt-e36-3-5v-perezaryadka-ot-seti-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31072</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/9ac/9acbf1d084044da347aa5079bd4efc58.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (перезарядка от сети) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10250" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-serii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/0c2/0c2c82d6273edb74518ab8c65e918b19.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10251" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-sinii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12429</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/d2e/d2edb22818b3a25811ec705480961cb1.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10252" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/grusha-dlya-pnevmotesta-k-otoskopam-e-24840-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1018</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/7d3/7d3e21d03c87a3ae062d522e4d4775ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Груша для пневмотеста к отоскопам (E-24840) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10253" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/adapter-dlya-grushi-pnevmotestirovaniya-26290k-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>643</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/78b/78b73351e4c639cc0dc1501acc9d3846.jpg</picture>
<vendor>Kawe</vendor>
<name>Адаптер для груши пневмотестирования 26290K KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10254" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6000</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/cb6/cb650b09f6a45f056ccb1ea86810af6c.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	Рукоятка - аккумулятор

</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10255" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9595</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/7ab/7ab01a81e8b70894bd34379c65d5eacb.jpg</picture>
<vendor>Kawe</vendor>
<name>KAWE COMBILIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10256" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11679</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/8ea/8eaac6ea81c528f35f566d01060bb380.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description>
	Линза: трехкратное увеличение
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10257" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26143</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/e79/e795d120531be1a6e2ef4fa8e1613356.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10258" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7072</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/673/673821cf12ac7b223c6aea97825add83.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C10 2,5 В Лампочный отоскоп</name>
<description>
	
	Аккумуляторная рукоять

</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10259" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8893</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/5d9/5d9d3f8edb302f49a097d152337f8ccd.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 2,5 В Лампочный отоскоп</name>
<description>
	Освещение: лампа вакуумная

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10260" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15536</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/290/29065f893bf0a6a9ccab554910629dd2.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description>
	
	Фиброоптика
	Освещение: лампа ксенон, яркое
	Поворотная лупа для равномерной регулировки
	Для рабочего места оториноларинголога

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10261" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe_eurolight_fo_30_led_2_5_v_otoskop_fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16607</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/2b2/2b2b9a71d6b34b640a606761d049d300.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description>
	Батареечная рукоятка
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10262" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30000</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/f5c/f5c0be20878bfc68746dfcb287ed58af.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10263" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-25-v-yevrolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26785</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/e6e/e6e55d74643ca7af17226bfb0a17c76d.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 2,5 В - ЕВРОЛАЙТ 2,5 В</name>
<description>
	Дерматоскоп - прибор для осмотра кожи.
	Материал - металл.
	Работает от батареек либо аккумулятора (Перезаряжаемая рукоять)
 

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10264" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-piccolight-d-25-v-pikkolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18750</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/bc9/bc96b7a012cf385f69d9f8704f300a00.jpg</picture>
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
<price>32142</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/ba0/ba01f579d7bca59eedb79175a2e8f223.jpg</picture>
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
<price>37307</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/133/13350a1a94518fdb87f11160b613364e.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe смотровой светильник передвижной напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10267" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-0-c-izognutyy-dlinavysota-7713-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/b78/b786559af9951ce90a2a8c8be660014f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 C изогнутый (длина/высота, 77/13 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10268" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31317</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/ff5/ff592ad23391b10234e80e403093e4ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10269" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22286</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/9fd/9fd9b9f85661e4f62a9c9c9dfd97b62f.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10270" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-1-c-izognutyy-dlinavysota-9218-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/706/706177f8ddf879e104c216d3f025a51a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 C изогнутый (длина/высота, 92/18 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10271" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-2-c-izognutyy-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/4ef/4ef0aaf4ffe2633dc13b4c987db11d2f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 C изогнутый (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10272" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-3-c-izognutyy-dlinavysota-13321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/738/73831cd6db1e5e1c55d9964069db8c22.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 C изогнутый (длина/высота, 133/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10273" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-4-c-izognutyy-dlinavysota-15321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/01e/01e0c2c0003f04af2b33594411bd0596.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 C изогнутый (длина/высота, 155/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10274" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-5-c-izognutyy-dlinavysota-17623-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/df9/df9e17ac5975285ab9dfaf85a97f41d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 C изогнутый (длина/высота, 175/23 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10275" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29250</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/7a8/7a85f574948caa1afe21712cf6f23744.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe cмотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10276" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-00-c-pryamoy-dlinavysota-6510-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/691/69177b21e0249341bd6e5aef39234af4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 C прямой (длина/высота, 65/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10277" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-0-c-pryamoy-dlinavysota-7910-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/79c/79cbd94418e2c05bea127a41a4abc730.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 C прямой (длина/высота, 79/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10279" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-1-c-pryamoy-dlinavysota-10310-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/85c/85c385556c8e88b5657f1d1d0ebe7994.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 C прямой (длина/высота, 103/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10280" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-2-c-pryamoy-dlinavysota-15312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/c1a/c1ad390e07d8dd852807897da2982144.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 C прямой (длина/высота, 153/12 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10281" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-3-c-pryamoy-dlinavysota-19212-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/7c3/7c34f15fc86c14cb1344a00dedbe8907.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 C прямой (длина/высота, 195/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10282" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-4-c-pryamoy-dlinavysota-20216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d82/d821ed0fe58d4c30d88dba4f5e10e930.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 C прямой (длина/высота, 205/16 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10283" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-0-c-pryamoy-dlinavysota-7712-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/db1/db1e9ef901009b33afdabeb94ee0584f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №0 C прямой (длина/высота, 77/12 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10284" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-1-c-pryamoy-dlinavysota-9214-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/70d/70d55fed6fece0e04137e2cda353ad65.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №1 C прямой (длина/высота, 92/14 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10285" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/nabor-dlya-lor-vracha-nabor-diagnosticheskiy-beysik-s10-kawe---otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/163/163cb164cb33f5581e6fe0b41e2387d5.jpg</picture>
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
<price>6322</price>
<currencyId>RUB</currencyId>
<categoryId>2861</categoryId>
<picture>https://kawe.su/upload/iblock/4fb/4fbdbbb00d0001090ce0c595617c1562.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп СУПРАБЕЛЛЬ ветеринарный с воронкой d=49,5мм,  длина 75см</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10287" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye10-kawe---oftalmoskop-1-apertura-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15322</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/21e/21e5061f00dbb67350d42b852a4efc3c.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е10 KaWe - офтальмоскоп 1 апертура и отоскоп с принадлежностями</name>
<description>
	лампа: вакумная
	
	Линз: 3-х увеличением
	
	Головка: пластиколвая
	
	Рукоять: цельнометаллическая
	
	Стерилизация, чистка: спиртовые растворы, автоклавируемый частично.
	
	Прибор для визуального осмотра лор органов (носовых пазух), после хирургических операций, рядового осмотра
	
	Возможность проведение массажа барабанной перепонки

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10288" available="true">
<url>https://kawe.su/catalog/zaryadnye-ustroystva-kawe-germaniya/universalnoe-zaryadnoe-ustroystvo-medcharge-4000-dlya-akkumulyatorov-nimh-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16929</price>
<currencyId>RUB</currencyId>
<categoryId>2885</categoryId>
<picture>https://kawe.su/upload/iblock/cf0/cf0ef1f5f45b3bda9b3dd3dd7da64dee.jpg</picture>
<vendor>Kawe</vendor>
<name>Универсальное зарядное устройство MedCharge 4000 для аккумуляторов NiMH, Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10289" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye16-kawe---oftalmoskop-6-apertur-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18214</price>
<currencyId>RUB</currencyId>
<categoryId>2938</categoryId>
<picture>https://kawe.su/upload/iblock/081/0814e208d103a549f0b31786d77f5ebe.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е16 KaWe - офтальмоскоп 6 апертур и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10291" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermagel-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>536</price>
<currencyId>RUB</currencyId>
<categoryId>2865</categoryId>
<picture>https://kawe.su/upload/iblock/5cf/5cf2259eec3d261873359a72dca90a52.jpg</picture>
<vendor>Kawe</vendor>
<name>Дермагель KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10292" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/kontaktnoe-steklo-so-shkaloy-dlya-kawe-dermatoskopov/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3322</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/65f/65f0b53fcc6a284bf137724a30118159.jpg</picture>
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
<price>42749</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/04b/04bbf58c5e5c9bc89bc2947129fdf593.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight F.O.30 / E36 2,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10300" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-led-fo30--e36-35-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64107</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/7e6/7e657a5c2039666ed0d6cbc1f0562c26.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight LED F.O.30 / E36 3,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10301" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-semeynogo-vracha-basic-set-combilight-c10e15-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16929</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/7fb/7fb0b350d9030b614c4e8d93b2a46160.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор семейного врача BASIC-Set Combilight C10/E15, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10302" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-piccolightkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1715</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/cfb/cfb04ba6e854ea1c478e7c915f0d5f85.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для PICCOLIGHT®,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10303" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1715</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/227/22725f0d176b05391e60be96f73d9aa9.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для BASIC-SET, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10305" available="true">
<url>https://kawe.su/catalog/kamertony-kawe/komplekt-meditsinskikh-kamertonov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18188</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/1b8/1b8fa453ad4ac621cdae2742594dfd33.jpg</picture>
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
<price>5108</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/bc6/bc6880a0f07c3da49f4475be08b90c5d.jpg</picture>
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
<price>4894</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/00b/00be300ba05b052fb2ca87e764015184.jpg</picture>
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
<price>4894</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/629/629c7e8b0563a8dc3845041d9a6d9cc4.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10309" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-alyuminievyy-bez-dempferov-0814051001-33523-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3404</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/851/851c58cd8044c2d9c10e81e01fb22408.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10310" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-1024-gts-1024-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3193</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/b35/b353bba9356ff9c146073db48e196341.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10311" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-2048-gts-2048-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3246</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/5fa/5fad3adf8ddc264a77f7054f6d47734a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10312" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-po-lukae-128-gts-128-hz-graduirovannyy-s-reguliruemymi-ot-c-do-h-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7767</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/345/34574cb8293a59509aa0055e9b07c83a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае градуированный с регулируемыми от C до H демпферами  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10313" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-128-gts-128-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5692</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/5ab/5ab23eb1682649524b0e956950c227ca.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10314" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-256-gts-256-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5108</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/f77/f775c3608627f24b0c7eb1f01015bda1.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10315" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-512-gts-512-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4894</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/02a/02a131a5b140b145e847f595f9d73262.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10316" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-1024-gts-1024-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4788</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/019/01946c3f9315caa3298929431142b5a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10317" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-2048-gts-2048-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4841</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/528/5280e29ad3b662ad39eeb51992912f1b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10318" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-4096-gts-4096-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4788</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/928/9289c1830b4f12ff5dc9c66f2f394749.jpg</picture>
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
<price>2980</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/aae/aaed0257210bc9d10a30e83d9e5c128b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10320" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-2048-gts-2048-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2873</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/f1e/f1e1e2a9a689fd74ccfb8810810a5f02.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10321" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-1024-gts-1024-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3246</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/00b/00b1d0d99f566c2742e17400223b1bef.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10322" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-512-gts-512-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3457</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/f31/f317cc4561099182e4fb582c73afcd14.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10323" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-256-gts-25-hz-po-hartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3597</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/cef/cefb23a959ee46dda5e798e0005d01d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10324" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4574</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/0e5/0e5aaf5ae36d5c029e1ef072a2cacbec.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов (частота 128 Гц) KaWe</name>
<description>
	Высокое качество звучания;
	
	Стальной, с подставкой;

</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10325" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-s-fiksirovannymi-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5533</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/6de/6de304c161992c332beb8a4bcbbdd445.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману с фиксированными демпферами  ( частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10326" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-ot-128-do-64gts-128-64-hz-po-ryudel-seyferu-graduirovanniy-s-gruzami-i-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9097</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/85c/85c8d1374268f2b39328b012927f1d09.jpg</picture>
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
<price>3831</price>
<currencyId>RUB</currencyId>
<categoryId>2814</categoryId>
<picture>https://kawe.su/upload/iblock/ef0/ef00f39d7c6406aa3c6f5de463187b96.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон A1 440 Гц (A1 440 Hz) без грузов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10328" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyy-nastennyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25794</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/60b/60b1a2bb9c93e906e0539d48ccb0105e.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый настенный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10329" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyydopolnitelnyy-modul-s-2-rukoyatyami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36914</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/906/906864c4f1fe5a59d2f171f21181202b.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый+дополнительный модуль с 2 рукоятями, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10330" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-dopolnitelnyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15591</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/442/442a6e06e0af703f05c7f96b60872653.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 дополнительный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10331" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-modul-dlya-ushnykh-voronok-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4127</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/5c0/5c02f8511fce76c917c634ecf9c8ca09.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 модуль для ушных воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10332" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-ce55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48722</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/9b7/9b7cf13922e4e1573c35ededf9589fae.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 набор C/E55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10333" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55714</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/18d/18d06da6263d479d43d110eb1412a688.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (США), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10334" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55714</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ca6/ca6f74f77944517e2db6ce40ddb18621.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (ЕС), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10335" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88274</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/567/56772fa4d83627241ca656fb1de51655.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10336" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-c-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5619</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d41/d4170665bec4b8da14310acc88b9dc14.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight C, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10337" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11694</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/0a1/0a158ffc26db35be3a2ff01f8e20fe0b.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10338" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60670</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5a0/5a0178fabcc864e56ad32733dfbe1fc8.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10339" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14920</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/22f/22f0effe83c2289a5bed2cca69f07509.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10340" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-eu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17402</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/392/392dee5ec747e4e4b0bed32a87b3f0c9.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (EU), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10341" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-usa-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17405</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/019/01987598ff9055ce437a8c9e2db3d1b7.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (USA), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10342" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor_voronok_mnogorazovyh_2_5_3_5_4_5mm_3_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1063</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/a12/a124b0a05dc7ed53607ad4ed6fc39640.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/3,5/4,5 мм (3 шт. в пластике) 01.72101.001 (24846), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10343" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-3-sht-0172102001-24847/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1063</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/7cd/7cd0c7d5af757c28967ae2180b8b3601.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (3 шт. в пластике) 01.72102.001 (24847),KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10344" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-rukoyatey-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>804</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/4cf/4cf21ed391fdddf5c0b0369804d4b691.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для рукоятей EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10345" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-35-mm-3-sht-0172103001-24848/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1063</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/7a2/7a253be27a744b0b2ccb56dde51a7617.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,5 мм (3 шт. в пластике) 01.72103.001 (24848) , KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10346" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-piccolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>590</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/ea1/ea103c79f781cd4d99133c4384429e39.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для PICCOLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10347" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-45-mm-3-sht-0172104001-24849/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1063</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/0bd/0bd87267dce60ad7a0c6775b2ce212cc.jpeg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4,5 мм (3шт. в пластике) 01.72104.001 (24849), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10348" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumka-kozhzam-na-molnii-dlya-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1072</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/774/7744343f6bc6bde0a11ff0eec3ac98de.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумка кож/зам на молнии для EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10349" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20251</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/70e/70ea11fd4e0c081a067dfc7dd902d2e8.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10350" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-10-sht-0172212001-26200/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/0c3/0c386105c60d9f10f8eb8b4b6ce08fbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (10 шт. в пластике) 01.72212.001 (26200), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10351" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumochka-tkanevaya-na-lipuchke-dlya-piccolight-chernaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>965</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/6dd/6dd65e69ea5ca42b2823e449d8cb6dd9.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка тканевая на липучке для PICCOLIGHT, черная, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10352" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-3-5-v-otoskop-fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17036</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/f85/f85479c4f267b7c7289dc8a69d91bb2a.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Прибор для исследования слухового прохода и барабанных перепонок в отоларингологии
	Линза с 3 кратным увеличением исследуемой области
	Освещение ксеноновой лампой
	
	Артикул: 01.12430.101

 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10353" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25071</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e66/e66222eefb30142a40d08133ef38b8fc.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10354" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-4-mm-10-sht-0172213001-26205/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/9eb/9eb5a4c52ca99406ed491dc9842d8b65.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4 мм (10 шт. в пластике) 01.72213.001 (26205), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10355" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/kronshteyn-osvetitelya-dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1501</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/418/41819bd7a23eb0534c2b35838a455dfc.jpg</picture>
<vendor>Kawe</vendor>
<name>Кронштейн осветителя для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10356" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-op-led-25-v-lampochnyy-otoskop-operatsionnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15215</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/f16/f16169185cb4be97eb03c09744f8d38d.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 OP LED 2,5 В Лампочный отоскоп операционный</name>
<description>Освещение: лампа вакуумная
 </description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10357" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-2540mm-10-sht-0172211001-26210/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1614</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/f0a/f0a662e03b7d5a073f5b18a4b04f9a2b.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/4,0мм (10 шт) 01.72211.001 (26210), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10358" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nabor-laringealnykh-zerkal-3-i4dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>708</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/8e0/8e0a5dd00d02b3862e35a40c21b78bbf.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор ларингеальных зеркал №3 и№4,для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10359" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21214</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/314/3140f4fa3111b97b558159549790c518.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description>
	Арт: 01.11430.101
	Освещение: лампа ксенон
</description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10360" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171112001-28912/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6696</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/454/454964fc115e9923dbfd2256c2557cd1.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100 шт., в пластике) 01.71112.001 (28912), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10361" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/derzhatel-shpateley-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>386</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/153/1534cd85ddfa87612fdce48d9690b60f.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателей для  Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10362" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171122001-28913/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6696</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/e4b/e4bee6c021f1c5603dde63fd43c961a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4,0мм (100 шт. в пластике ) 01.71122.001 (28913), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10363" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/razdvizhnaya-nazalnaya-voronka-dlya-basic-set-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2036</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/bef/beffa0e7b79fe250a5ed4378cc8b823c.jpg</picture>
<vendor>Kawe</vendor>
<name>Раздвижная назальная воронка для Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10364" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-v-plastike-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/3d6/3d62def217029ad73387881c1d63273a.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10365" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-rossypyu-0171211002-28900/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>3341</categoryId>
<picture>https://kawe.su/upload/iblock/f90/f9036c59bf46a05173049c7c6d0cdb0c.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые серые маленькие, ? 2.5 мм, (1000 шт. в карт.упаковке) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10366" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-100-sht-v-plastike-0171222001-28911/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>536</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/967/967e0dc57cce9de84ae3e5a38d6073e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10367" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-1000-sht-rossypyu-0171221002-28901/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5e9/5e9fc09fce372951476692541d25e865.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (1000 шт. в карт.упаковке) 01.71221.002 (28901), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10368" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/474/474e7516208b44c08f1b2e2f89907129.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10369" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-253545559mm-5-sht-0172106001/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2411</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/5c4/5c4835cacb5e606c6f44221798046f36.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.5, 3.5, 4.5, 5.5, 9.0 мм (5 шт. в пластике)  01.72106.001, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10370" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-25-mm-1000-sht-0171111002-28902/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5422</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/852/852a4df44a3afad3869fd635d56c5c73.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5 мм (1000 шт., в карт.упаковке) 01.71111.002 (28902), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10371" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-40-mm-1000-sht-0171121002-28903/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5422</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/359/359bc3981eb8d755eefa85e00e9a1cfb.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые черные большие 4,0 мм (1000 шт., в карт.упаковке) 01.71121.002 (28903), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10372" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/mnogorazovye-ushnye-voronki-dlya-veterinarnogo-otoskopa---nabor--40--50--70-mm-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2733</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/d61/d6159c4953dd4e9229ecf4b3005db7f3.jpg</picture>
<vendor>Kawe</vendor>
<name>Многоразовые ушные воронки  для ветеринарного отоскопа -  набор, ? 4.0, 5.0, 7.0 мм, 3 шт. в пластике, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10374" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-2-5-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>527</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/691/6917fd8a87b65598b5afa3c7a872ee5e.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 2,5 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10375" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7821</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/906/90682ccd454a27a287126af475955d9a.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп стандартного освещения 2,5 V, KaWe</name>
<description>
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
<price>8893</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/40f/40f932d1b66536131e4f2f9f1c482d78.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 2,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10377" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13608</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/71b/71bd0e12e97f97a55c2f4384368617e4.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от зарядного устройства, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10378" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23036</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/8ce/8ce6f7d417fd533006e971e1f92d2167.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10379" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/028/028e8e2ea9aeb9ea650d370591e7c51c.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 2,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10380" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13608</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/843/843194e74b6625cdbc9fc5c2335bd8ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe,в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10381" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23036</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/ec1/ec112f6da3166babc98416791b46552c.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10382" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-2-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8786</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/dc4/dc4fd4218e4fbc686630ec578ea86e5e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №2 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10383" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-2-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26250</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d44/d447adf6e0ef21eb14928c8efc43de83.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №2 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10384" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_flaplight_3_fo_s_podvizhnym_nakonechnikom_so_smennym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26250</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/3bd/3bd4301c64c828c3ea79ad5210f5cba9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №3 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10385" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-4-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26250</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f4a/f4aab48dc13a1cf55eccbd16f5a0e2a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №4 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10386" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--2-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27322</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/88a/88a5628f490805c92610dc8776952038.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №2 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10387" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_megalight_flaplight_3_f_o_s_podvizhnym_nakonechnikom_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27322</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c35/c35dfd7a192b6e7b4cdc6724074dbf01.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №3 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10388" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--4-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27322</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/87e/87e53e73e54185cb2ffba112b4d9de8f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №4 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10389" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/011/011cf1b444c0d755ccdb5eb9d679d2a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №0 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10390" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-1-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/f70/f70123714c395d489f73d52abed7bcc9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №1 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10391" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/60c/60cbf754eb5368e253d50fedf57f0174.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №2 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10392" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-3-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/160/1609841d4a2d7dd9727aad8e634b3c2a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №3 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10393" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-4-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ceb/ceb1ba1e2c017b8e6b9533ec4e7cf6d0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №4 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10394" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/31d/31da0904fad17dc8eb2c5502dc792221.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10395" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/369/3694f6348d20f29bfdf9582620ba7196.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10396" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/bfc/bfc4ba348ec1a0990e0c6b1084169240.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10397" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/0ea/0ea92c5e0ce9625e16c10d72c9180f0b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10398" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/linok-macintosh--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/3a7/3a7552194a3e618b571a30b0d03256b5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10399" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--5-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9d4/9d4562aa17ed811e9f7427a1e5e297eb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10400" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/386/38667ccebd0f8234e090e661ea3e94b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10401" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/548/54802e2f8bd8585f584cc9425992c466.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10402" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh-3-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/885/8850a7369533a062878854798c06cabc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10403" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--2-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/852/852ad18803e9f070e3a4577e196718be.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10404" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok_megalight_macintosh_4_f_o_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/e17/e17be78e4ee93be703cbf5dec9bd8a48.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10405" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--5-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/804/8041b8ec0577bb6d082b255c60ad59b9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №5 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10406" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--00-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f7c/f7c2acd6d58df508c1f0c9aea5fd5e67.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №00 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10407" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8d6/8d6c4a377e1af5ef037bbedf358dbfd8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10408" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b8e/b8e783822204ed8d5b080f59af60a453.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10409" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller-2-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/474/474cc19f01aa2a3514e518af546ed3ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10410" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--3-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1b3/1b3e46c7561a88ec5311dd6f0ea3dd5c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10411" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--4-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9214</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/a30/a3077e51682cb457829ca07a2930407c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10412" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--00-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/8b3/8b3c5deee46b2667534966c0851b19f9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10413" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/85d/85db651a7ac7b2fc03c7ac36eb0718ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10414" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/01d/01d153afa838374a9bc18f369bab153b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10415" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/434/434ff61c5eb6489bb26aab054a07599e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10416" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/dd9/dd94c9f3700e56d6ca2e88b6cadb878e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10417" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/8b6/8b6c86debfd5b25c25c36e853ccdd3fe.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10418" available="true">
<url>https://kawe.su/catalog/klinki-polio-f-o-kawe-germaniya/klinok-polio-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8679</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5e3/5e39920552bf8fe4017b2738be6ef5d9.jpg</picture>
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
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/08b/08b760ee09255a4ded860d095c95d1bc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10429" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--00-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f73/f7369b636a0e83d84a3934ad8f8e1251.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10430" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--4-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22179</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/263/263c23decb0949a43d096f6a4c3b2960.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10431" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-2-c-s-podvizhnym-nakonechnikom-dlinavysota-10021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15750</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/ea9/ea990bd851540b8c6301dca546ca5c81.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Flaplight №2 C с подвижным наконечником (длина/высота, 100/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10432" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-3-c-s-podvizhnym-nakonechnikom-dlinavysota-13021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15750</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/f46/f460ddb1f67fdb71a2021e479e146fbc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №3 C с подвижным наконечником (длина/высота, 130/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10433" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-4-c-s-podvizhnym-nakonechnikom-dlinavysota-15025-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15750</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5d7/5d70c9ffcf596078d15ea31e035c8aa0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №4 C с подвижным наконечником (длина/высота, 150/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10434" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/linok-foregger-2-c-pryamoy-dlinavysota-11215-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/dc7/dc73e2d1bb24359c881424605ef1ba07.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №2 C прямой (длина/высота, 112/15 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10435" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-3-c-pryamoy-dlinavysota-13216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/d62/d62e02a19d66c1af9ec4fb8f02709a9c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №3 C прямой (длина/высота, 132/16 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10436" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-4-c-pryamoy-dlinavysota-15718-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3206</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4b4/4b4566d0bf986181f6c8dc0ef45a4511.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №4 C прямой (длина/высота, 157/18 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10437" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinki-tyepro-makintosh-s-4-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3636</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5cc/5cc29d791861e7bf033d9435ec8bd8b2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки ТЕПРО Макинтош С №4 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10438" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-3-s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3838</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7ac/7acb6d6727eff147211bce203a0512c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №3 С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10439" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-4s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3838</price>
<currencyId>RUB</currencyId>
<categoryId>2878</categoryId>
<picture>https://kawe.su/upload/iblock/bba/bbacec5ea5d7611ef1717246a8a114dc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Macintosh №4С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10442" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--0-c-dlinavysota-8015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/1e1/1e11d4ec9152090a11184ec41d5b8fc6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 C (длина/высота, 80/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10443" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--1-c-dlinavysota-9520-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/037/037a99c35bcf1efd963107c4448efbf1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 C (длина/высота, 95/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10444" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--2-c-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/669/66950e775252d66153efebebce81c374.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 C (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10445" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--3-c-dlinavysota-13324-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/203/203e2d871ed64cbc88bc4822855569a6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 C (длина/высота, 133/24 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10446" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--4-c-dlinavysota-15325-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/50b/50b85420131d0752169a3aea378c6749.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 C (длина/высота, 153/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10447" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--5-c-dlinavysota-17925-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/f02/f02272ce5923105a8e8bf5eee23699c9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 C (длина/высота, 179/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10448" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--1-c-dlinavysota-10312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/836/836939037ccb20a2cd858065600f74b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 C (длина/высота, 103/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10449" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--2-c-dlinavysota-16015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/8ae/8aef5f0e91dbe2c139cb312ee885fdc0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 C (длина/высота, 160/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10450" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--3-c-dlinavysota-20014-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/af7/af73a479b3210a8048cc409fb06513c1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 C (длина/высота, 200/14 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10451" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--4-c-dlinavysota-21017-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/5e0/5e0579241c380ca7d7f523a2ec120a9d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 C (длина/высота, 210/17 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10452" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--00-c-dlinavysota-6812-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b66/b666ca64f295cc7258e4f926053d900a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 C (длина/высота, 68/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10453" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--0-c-dlinavysota-8112-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4ed/4edeee17f6dda3356da2c40a7bbd6105.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 C (длина/высота, 81/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10454" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/0ac/0acacaa289b3ca81d70c56600a4c01ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №00  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10455" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy--0-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/a4b/a4b628e9dcd847f38111f84bfec9dc1b.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №0 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10456" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7714</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/263/263c6849166106ee74124f6a717d727d.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10457" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/b66/b66ce35d77bd159deba282fcfca53ba5.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10458" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7821</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/2ea/2ea6b270a4ccdc3cab4f0fa4cf805ca5.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10459" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12108</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/4e8/4e8957b739a966f623d3a413828be3b0.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10460" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-led-d28mm--akkumulyator-35v-li-lon-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20786</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/c42/c42d6c8e9659d5485a2449871e080470.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя LED (d=28мм) + аккумулятор 3,5V Li-lon осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10462" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-led-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19286</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/d36/d360e80b983f84c578d1d2e20e74c7f4.jpg</picture>
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
<price>6643</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/4c1/4c1c3b1541e0f0e05c42c394823d94c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10466" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm--akkumulyator-35v-li-lon-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13286</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/34c/34c0ca3ef01fd3c9de86adad48c3b4ba.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) + аккумулятор 3,5V Li-lon, NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10467" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20465</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/17b/17b74661cc7e4a179f2cdc73f3f22bfb.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10468" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/e67/e67cb39046ab80c06077b72e99af80c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10469" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/c3e/c3e3197f9f8c838735aac0ed6b4e7cc7.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10470" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-ekonom-fo-d-30mm-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/fc2/fc2ee6a97df2a959c52f05ba9efd99f6.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка 2,5В (d= 30мм)  Эконом F.O.</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10471" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14893</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/1ea/1ea006e5fc915e0084fc28976f8c2433.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10472" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-malaya-25-v-d19mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3429</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/56e/56e5594c74926f2d3523a671958d04d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая 2,5 В (d=19мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10473" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-25-v-d28-mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3643</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8ae/8aea7085f0a0f0437d545ac80ab9db0d.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя 2,5 В (d=28 мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10474" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-25-v-d32-mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3857</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/687/6875cd4bffb229f37171c36365f06268.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая 2,5 В (d=32 мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10475" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-economy-25-v-d30mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2787</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/196/1967e065883da14640bbf9c18106908c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка Economy 2,5 В (d=30мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10477" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--3-klinka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2357</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/37c/37c60b4b209fcb51a514d6956c613fde.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 3 клинка Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10478" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--5-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3108</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/80b/80b7345e395d1a7ad767f0248cbdd2ee.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 5 клинков Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10479" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--7-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3857</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/49c/49cad6448cd6e9b648303ef32b3c4118.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 7 клинков Макинтош и Миллер ) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10480" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--2-klinka-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3964</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8c6/8c65d5c5834b1308cb8713790b140e5e.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 2 клинка FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10481" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/sumochka-dlya-laringoskopa-rukoyat--4-klinka-sinyaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>911</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ee4/ee4699f709ef888bccf17f9b6d8aaa0f.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка для ларингоскопа (рукоять + 4 клинка) синяя KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10482" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--1-klinok-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3891</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/40a/40a2c98480d206dc16f6935ea16570ce.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 1 клинок FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10483" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/kartonnyy-boks-na-4-klinka-i-1-rukoyatkwe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>946</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/a41/a4141a89909d561cc964a4e8cc81609f.jpg</picture>
<vendor>Kawe</vendor>
<name>Картонный бокс на  4 клинка и 1 рукоять,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10484" available="true">
<url>https://kawe.su/catalog/rostomery/nastennyy-rostomer-ruletka-person-check-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1854</price>
<currencyId>RUB</currencyId>
<categoryId>2915</categoryId>
<picture>https://kawe.su/upload/iblock/05f/05f244cc68696b65107f3059e9bbea0f.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенный ростомер (рулетка) Person-Check KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10487" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-iz-nerzhaveyushchey-stali-0911005002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7447</price>
<currencyId>RUB</currencyId>
<categoryId>3350</categoryId>
<picture>https://kawe.su/upload/iblock/5af/5af606ca582e6698d284420b2901988d.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка из нержавеющей стали KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10488" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-khromirovannaya-0911800002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5304</price>
<currencyId>RUB</currencyId>
<categoryId>3348</categoryId>
<picture>https://kawe.su/upload/iblock/320/320ea3d93a54ccd0f1be59c3641f1012.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка хромированная KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10489" available="true">
<url>https://kawe.su/catalog/shtativy/stoyka-infuzionnaya-peredvizhnaya-iz-nerzhaveyushchey-stali-tyazhyolaya-dlya-infuzomatov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14143</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/06a/06ae2b4c98dcab54690ee93455e069a7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стойка инфузионная передвижная из нержавеющей стали тяжёлая (для инфузоматов), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10490" available="true">
<url>https://kawe.su/catalog/shtativy/derzhateli-dlya-butylok-kronshteyn-dlya-stoyki-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>310</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/ab7/ab7b886667f619ba702b053df8faefe7.jpg</picture>
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
<name>Стакан для сливания остатков растворов для всех видов стоек, KaWe</name>
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
<price>5412</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/806/806dff942360715505e3df80d92c65d9.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор Фонариков диагностических CLIPLIGHT (6 шт разного цвета), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10496" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3643</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/def/def5739cf1f5f8c4a10fa818b912862d.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10497" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-cherniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f79/f792bc591b10142eb39c814050f9069d.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический черный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10498" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/derzhatel-shpatelya-dlya-cliplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/b0d/b0d7a031f313065734ef75fe352ef690.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателя для CLIPLIGHT, Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10499" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-night-chernyy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/43b/43b5026f2919e9ab8a082d8fb8deb794.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) night (черный), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10500" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v-led-lampakawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16607</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/bec/beccb4d5794bd30fd7a7b87348108a45.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E36  (2,5В ЛЭД лампа),KaWe</name>
<description></description>
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
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10536" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastolnoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3108</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/f72/f72abb8a57f127cdca894389254711f8.jpg</picture>
<vendor>Kawe</vendor>
<name>Настольное крепление для Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10537" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastennoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2357</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/7f7/7f7070e7a33ba841c65ad72f31a2c762.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенное  крепление  для  Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10549" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-ogolove-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21964</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/5fd/5fdfb98df5b0ef440f1f0f77d3227b23.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на оголовье для Н-600 LED KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10550" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-poyas-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27322</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/9f2/9f2e2422a716dd82a8bf3ee2652c8c2a.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на пояс для Н-600 LED  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10551" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28124</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/6c6/6c677210e777568aaa79c7ad5bf0020b.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10552" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28124</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/04e/04e783887a841f8feaa416078df9ac98.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10553" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28124</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/5a4/5a4307e05d61407d69261cc4caac4dbd.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10554" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28124</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/607/607ae7e4e7566cf34420f891c7c85613.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10555" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-90g-metallicheskaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2232</price>
<currencyId>RUB</currencyId>
<categoryId>2918</categoryId>
<picture>https://kawe.su/upload/iblock/75a/75a3a5c775c1d697361d643b09e585fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 90г, металлическая рукоятка,  с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10556" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16500</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/c82/c823cf34ffb4642be68d39e14ae97b59.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Планет Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10557" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11786</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/546/54674cbe0a0fa372ce6c64d2160a24bc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10558" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9965</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/0ee/0ee93e71628b7b02f4270a34d03f27bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10559" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-petifon-kawe-pediatricheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5572</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/b24/b24dc1313d744e1fb6de50295f068baf.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп Петифон KaWe педиатрический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10560" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-multifon-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4982</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/920/920388655ea9380b2200ab3ec831fd74.jpg</picture>
<vendor>Kawe</vendor>
<name>Stethoscope Мультифон для взрослых, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10561" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/fonendoskop-kawe-singl-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>531</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/fb6/fb631eec14a7ac496feedb758c9fe45f.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонендоскоп KaWe Сингл черный</name>
<description></description>
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
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/111/111dcbd77414bb72ea24da40a63b64c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп учебный PLANO с 2-мя парами ушных дужек, только мембрана, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-krasnii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/bdd/bdd465e9af762a5ecc8a9663deccb29f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/333/333465f4d8635d83e275d286701a60a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-krasnii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/28c/28ccec43bf7b9ea288ae9fd63d95eef2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/386/3866c251ebdce3fee1d76522a9bd6ead.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/2fe/2fed2c5ef33f3d9bfa876f2180279ae8.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/02c/02cc0fbcdd8fe37c4ccb6eee25dad616.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10576" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-varioflyeks-v-forme-toporika-po-fassbenderu-155g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4179</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/81d/81d8d3e8e9480bf9c4419f55d8f1f06e.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВАРИОФЛЕКС в форме топорика по Фассбендеру 155г, с иглой и кисточкой, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10577" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-babinski-diskoobraznyy-95g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1913</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/936/936db716154949e5174e35b41987cc95.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БАБИНСКИ дискообразный 95г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10579" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-80g-plastikovaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2045</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/413/4136002418e94a55367571ea231e6235.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 80г, пластиковая рукоятка, с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10581" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2518</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/fa3/fa357ce8079b3432fd82af4cbdd81d69.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек Colorflex большой 110г, черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10583" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2518</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/336/336cf3c0a52ea2df661878d2124c7167.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек КОЛОРОФЛЕКС большой 110г, синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10584" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/molotochek-koloroflyeks-bolshoy-so-shtyrkom-bez-kistochki-i-igly-ves-110g-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2518</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/11f/11f08240e4400d408e71a3e2a71a6751.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек KaWe КОЛОРОФЛЕКС, для диагностики рефлексов, большой, серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10585" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-175g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3197</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/828/8284499c19e7467555fa994e1cf25bb7.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 175г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10586" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-220g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3161</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/450/450b2ab27e5001e2739a37c73a3a036d.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 200г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10587" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3554</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/5c3/5c3d7b0448f124d321acafc7e5d25bb2.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 210г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10588" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-190g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3269</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/9e0/9e08dc1ab2572f2e1a875c01cb1a46fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 190г, с кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10589" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-150g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2840</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/3a6/3a6dfb5a51f96a43ac387b80729926aa.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 150г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10590" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-vitroye-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2896</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/47b/47b2e776f212f944b741ced0d977e42c.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВИТРОЕ (Witroe) тяжелый 198 г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10592" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-nalobnyy-osvetitel-led-v-komplekte--2-akkumulyatora--kreplenie-na-ogolove--kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>112498</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/641/64197ca3958d502700894e67b05ba9b7.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором (Налобный осветитель LED в комплекте + 2 аккумулятора ( крепление на оголовье + крепление на пояс))</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10593" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>902</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/997/99778b782bade8650f045edb91373cbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73705" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/2b7/2b7d7ff73c2eb8d97525d5b7f6d238c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73706" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/59d/59d4c1eb6f3517b71155177d4862824a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73707" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b53/b53ce5f358915e3982be313488432b39.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73708" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-5-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/fa0/fa0096a139054573f0256ae1bf320980.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73709" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--3-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22179</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/4bd/4bd200ed154f90dec49472bbdb85cb7c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73710" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/dd1/dd13a0ee0f75ff8ad5d759066f778ccd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73711" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/fa1/fa1ac27bfa0251ecc42ecf13ee7fb51a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73712" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/3e0/3e0e12ce6405d85c866a1d19e82bc74e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73713" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9ac/9ac32dc4b03a60775f7d9e70dfc1f231.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73714" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e1a/e1a9b31cc499c429b3517f134d018424.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73715" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8786</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/539/539085ffb32f5670426723b4455a7fc7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №3 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73716" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-polio-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6666</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/080/080eb82836fbfbc113eccb7a2a73593a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO Macintosh №4 FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73717" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8786</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f3c/f3c3789539b4e2421be6bc110bdb66bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73718" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4715</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/dbc/dbccebc40c7c40cfe61325494067b364.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73719" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-tyepro-makintosh-s-2-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3636</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/fbb/fbb9adc1afc0203f331b1f99fd41dcb4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO Macintosh С №2 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73720" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-tyepro-makintosh-s-3-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4267</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f1e/f1ea8df72d008ecc9259c916b2fcf28c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №3 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73721" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-0-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9ab/9ab5dd528e3bc2f063a3cae3c9747203.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №0  Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73722" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-1-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/d30/d3085ec15ecad26f460dbef6c84ad509.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №1  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73723" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led-2-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/2e2/2e2707382560641d175d3abaea73f93d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №2 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73724" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/40f/40f109287180451b107ace03d9000735.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №3 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73725" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ef7/ef718ad8f0ef7739edfff8719dce3543.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №4 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73726" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-1-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f53/f5327998910b9e3b9f1a587b2d0f2c8c.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №1 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73727" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-2-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/329/32938e3aae363c48390bddb52bb688fb.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №2 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73728" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/27f/27f6987969489832413f33f33256e85c.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №3 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73729" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/826/8260263704f33925b575eda3b991bd7c.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №4 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73732" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34209</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/fae/fae3cf3a6fe1475be4ef0d6c9d009cd3.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73733" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-rabotaet-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10725</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/79b/79ba3e4b6c1e934af31ced3c1d858282.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32мм) 2,5 В (работает от батареек) с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73734" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19-mm-25-v-batareechnayaakkumulyatornaya-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7515</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/39a/39a43c6794996f8b636c378021f76482.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19 мм) 2,5 В (батареечная/аккумуляторная) + аккумулятор с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73735" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/%D0%BDabor-laringoskopov-dlja-vzroslyh/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30208</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/9b3/9b371c070d2e527cac5fdbcc73612190.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73736" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>62478</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/98e/98e399e2870b922cb63f7db7e6b673ad.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73737" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50491</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/84f/84fd689886a0ac7654d1cdbddefdd875.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков / Универсальный набор (неонатология, педиатрия, взрослые, на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73738" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39618</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/c86/c868228683378082316bcc0e90a1ec79.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампа LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73739" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>67887</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>https://kawe.su/upload/iblock/11b/11b128b772765a98fa2e07b991555daa.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73740" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55900</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<picture>https://kawe.su/upload/iblock/087/0874fa4330262b0fd147531792025631.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, Универсальный набор (неонатология, педиатрия, взрослые) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73741" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32935</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/9aa/9aa933392047d390fddfda2d624bf5eb.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73742" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/23109/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>47891</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/885/8856830acd0ec9136f699ead0ca5d132.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на аккумуляторах, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73743" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41210</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/820/82016bfc03dc169a09eef6fe552ad799.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73744" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>76161</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/6df/6dfd5874c22ef7168320d81673c51bb3.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с комплектом клинков для взрослых (для проведения затрудненной интубации) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73745" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64173</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/151/15114677b762bde8ef675f5a688a3839.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, универсальный набор (неонатология, педиатрия, взрослые) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73916" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/molotochek-babinski-diskoobraznyy-ves-70g-gibkaya-rukoyatka-iz-plastika-s-rezboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1715</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/c45/c45b12139c4e6fc603c301786c4ea0b7.jpg</picture>
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
<categoryId>2990</categoryId>
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
<categoryId>2990</categoryId>
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
<price>54928</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/54d/54db56f23696b6e74207fe57062ade34.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74433" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>84552</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/783/7832afdbe679911e8d24c6ec996df141.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74434" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59241</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/9b7/9b772c087dbcbb96d4613c81a084e828.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74435" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57455</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/11b/11b512bb5239d1a2558354ed82d65b43.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74436" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88660</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/1bb/1bb910c106316916009e3aed39ffccad.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74437" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>94731</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/c58/c582906e9db62df639f5b229442d3b5a.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59036</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/371/3715e26c878a882bd427a88583c9d9c3.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>65107</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/4db/4db241b9f68085cd96a5dc409b801dbe.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74440" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63437</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/4da/4dad53bdb8997cbe66ef6d775fa1457f.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74441" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31518</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/439/4393b15a2439d95c6429c3b37dcbf4cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74442" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4072</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/556/556787f7a6a99e536104af6510288c0e.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74443" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35625</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/4e0/4e0f98d3bdceb7ac5f6782d753f56abd.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V с модулем воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74444" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4179</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/667/667ea3347669e0aaabe9f0b86bea827c.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74445" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37499</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/b8e/b8e67cc624ef4c4f03b6081f87a6ebde.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74446" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3750</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/3a1/3a1b8e84543f0be57674c818ba6ae1df.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74447" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41696</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/d27/d275e96f8349e1b9a74a9c4afbba33ad.jpg</picture>
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
<price>4179</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/04c/04cf22c9aab1e2ac7fae3dc755dc1ae4.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74452" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/keys-na-6-klinkov-miller-i-1-rukoyat-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3857</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/b99/b99bd720d2ac1f0b0fa46497e070ba1e.jpg</picture>
<vendor>Kawe</vendor>
<name>Кейс на 6 клинков Miller и 1 рукоять, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74453" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e25-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>67767</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/4bb/4bba5e2b7f40460d2cb4e29b26884e8e.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E25, 3.5 V, цвет белый, KaWe</name>
<description></description>
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
<price>38143</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/683/683066a55f417a187f8e8603d1476125.jpg</picture>
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
<price>531</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/646/6467893d5f0d121ef5585afd06ecb0d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Planophon, плоская головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74460" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-duoscope-dvoynaya-golovka-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>569</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/0ec/0ec39ac31d4f1431c941849e345dd051.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Duoscope, двойная головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75432" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-50-mm-10-sht-0172216001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/e07/e07f14f112458a7326d4b1e4dffe9dab.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 5,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75433" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-mm-10-sht-0172214001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/e50/e5045c971dc8564a8c4fcde82187f7f7.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75434" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-25-30-40-50-mm-10-sht-0172210001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/e36/e36d3be86abc013d919f8c63c3e9c3a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.0, 2.5, 3.0, 4.0, 5.0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75435" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-30-mm-10-sht-0172215001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/66e/66e8a21d08a512e5aab05c564b7807a0.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75436" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-malaya-d19mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6751</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/69d/69d7b5d995898bf8252b9672ab0a3b57.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5 В малая (d=19мм) Ф.О. ксенон, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75437" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>901</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/3d8/3d888c38fc5da1065c989b99eec99519.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>902</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/6b4/6b49fae3b7331f4eff016811dc168ae2.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-zhyoltyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>902</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/454/454195058dbb3ad9c996d7b5c58ce7e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED жёлтый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75440" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>902</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/12b/12b9b3d9b957c6c008f9bda4e06b7ddd.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75441" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-seryy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>902</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/b01/b016dac01c1e47caa3016176f7e63240.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75442" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15750</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/ea6/ea6f71638222d769e4a31531ae625f44.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Eurolight E36 2,5V KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75443" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/acb/acb172ca1ad9bf82054b720eba282947.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75444" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/9b3/9b362ce8bcf49b71f42bcacecea0fe96.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75445" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-zelenyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/862/8623e9701153674845fd740bd28298c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75446" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1608</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/a70/a700b8a0b2fbd506877b20fac1a5d341.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75447" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-chernyy-black-line-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1929</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/f63/f63b480ae223e639f2312dfc283b64ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) черный (Black line) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75504" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>65107</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/bb2/bb2ff103b7473e9100ac81980a9fee99.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75505" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59036</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/7e8/7e82efd702ada11cb283e47512773696.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75506" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54928</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/0e8/0e8c842d268e66ade5097747c1921c13.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75507" available="true">
<url>https://kawe.su/catalog/otoskopy-lor/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-4-0-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>527</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>https://kawe.su/upload/iblock/32f/32f0c9c6a00bcdd6cf473e1e31ff43a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 4,0 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75508" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ade/adedbe6c88bddf26c439c3b0069f13fe.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный темно-синий, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75509" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/9ab/9abf32e0981226964f6c663fd9d16aa5.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75510" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/e1e/e1e18684c9a2f4b24d7ef0b3d9448498.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75511" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-goluboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/98c/98c42bb7b7c7ad292bcd68e31d46f922.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. голубой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75512" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>3364</categoryId>
<picture>https://kawe.su/upload/iblock/445/44514ac4e6c7dfa5c44dfb7585a4b1aa.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. темно-синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75513" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6965</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/f03/f0339bc336288ef27f75c08e45665374.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75514" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12429</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/4ee/4eee5a1acd1af2679712be4ee8a91cd6.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75515" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12429</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/abb/abb87e3168a397af37af56594fcf3722.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75516" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7714</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/245/245cf0f4823859e32bd430b08749e740.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75517" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7714</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/c2c/c2cac3610a652475f4748190f33fd524.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75518" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-1-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14030</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f59/f59040070d5af1c26c554f8fcdb72054.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка вакумная)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75519" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-2-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27527</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/831/8315c16e2ca281b7df2535872c78bf48.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75520" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3643</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f81/f816cb9052c516b11795ce434b4d0be0.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75521" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-krasniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/d38/d38e2d1e40506fe42f84202c18f1c161.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический красный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75522" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-siniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c54/c5448e78285f068278869c0fbaea8e13.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический синий, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75523" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-seriy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/033/033992222bc37445782e491b596e6445.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический серый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75524" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-jeltiy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/86c/86cbea3db769ce54d846829f44ae2dd6.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический желтый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75525" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-tsvetnoy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>686</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c85/c858183132bf5b059a977903384d1fa7.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический фиолетовый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75526" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9643</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/15a/15a5815bfb26736d20eee59d61dc2bf5.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75527" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9643</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/14f/14fe936a05273249e86c2d4dd940966b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 темно-синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75528" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-night-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/208/208c0face49e2d8667fa10248412301b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75529" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-temno-siniy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/597/597f34da3ef4e4efde4c927c6a581e34.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 темно-синий, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75530" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-seriy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/3ee/3ee2564d910eb2e97d176103a447542e.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 серый, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75531" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-stone-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/957/957dd9e7c36cb454f201a49f9fdbad72.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 stone, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75532" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-sky-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/dd8/dd8b2f69b1013066bbce9d7fb233e2f3.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 sky, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75533" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-stone-seryy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/49b/49b1993f6d7a3e5fabea50cb85a697e6.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) stone (серый), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75534" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-sky-temno-siniy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12857</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/cb2/cb2aa4ff3353905a1bfafa42a0e41f75.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) sky (темно-синий), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75537" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>98570</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/0bf/0bfc8e725b8fdd44def4db0343e61b5b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на пояс</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75538" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-ogolove/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>94285</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/1a2/1a2900d5c60022eeba0e274988380a1f.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на оголовье</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75539" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-air-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10607</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/81f/81f7b3e872dc18528618d7ab59d83ab1.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп ПЛАНЕТ Air Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75540" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>572</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/4e0/4e0f3400f9721c9a556b4f3ba08e61b9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75541" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>572</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/8c2/8c2347e81193fabed0141c84808c134e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75542" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11786</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/bcb/bcbf2d05f373ad2f19a238e484c51d61.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи бордовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75543" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9965</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/670/67006b27ddab147444c9c33dcf804f39.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75544" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/155/155dccff3480b538119ea08e19f60a10.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75545" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/8ce/8ced5fcecc98392326723c36c1760890.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75546" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/2a4/2a40ff24a5179b7611f34a7ed261519f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75547" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/e90/e908d789cbd6aa06cb64ac9f047475e9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75548" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/6f7/6f7511df6f3257d115170d313be9c058.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75549" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-fioletovii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/1d0/1d08bfa0a8b2f4d3184bff03aeda6c43.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75550" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/bd1/bd1f8dfb9b8e607d9779dac2fbd3f93c.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75551" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/0fd/0fd122eee1685ba631ea3925c5bb61be.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75552" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/d88/d886ef95043c2faa493002b41085c60e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75553" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/94d/94d02c430beda083df1fa15f86e63df8.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75554" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/5c6/5c60818dc2a372ae8ac73d4622aaabca.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75555" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/b44/b4487508402de77462e5d94346f6334e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75556" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/556/55640ca283c13f852e51da76bda36f74.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт зеленый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75557" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/5c6/5c6d0a83443837806e1f6aa36d46d3f9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75558" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2571</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/468/468c0e32a11bdb23d19664e4bc2dad04.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75559" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/6af/6afbbe9bd100013ecdb52d387f151b9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75560" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/c42/c4240b5882cb9b13b2631cb77df7b77b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75561" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/07b/07b6ac1cfd1afa88831bca0e0108526d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75562" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/70d/70d9380467faa90bea4825ff7c6c6d23.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75563" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/dd9/dd956b58a9c54ec306fad94d5165187e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75564" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4501</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/2aa/2aa467ab1059229cc5e1332444517559.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75565" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/7e7/7e770782ef29afa67cad8c6106874b40.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75566" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/3fd/3fd704b1803e11859a05bd5f73c27c0b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75567" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/c8e/c8e2dadf1777b768cc36873e657f8ed5.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75568" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/ac6/ac6ddf3e95e758f7fcbb16154993c0cf.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75569" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2464</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/c0e/c0e69c01724b2512c0a2ec3b473f3c6c.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4394</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/376/3768359a82eaae2757c2ec170a2e259e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/750/75081763aeecff10dca2e5ae0eb46d5b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/7c2/7c27d71b2f0364cae4c71edd3beb93b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d19/d197d0d86f5d192bd3e5b4df7853e97a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/0b4/0b4bfc343b9db6772ed2a37e5b415e2d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/eaf/eaff777b97d2b0f8b8598ca2a911c5de.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75576" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4286</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/162/162e0cd9803b9b7cb250942525a78cdf.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
</offers>
</shop>
</yml_catalog>
