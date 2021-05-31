<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2021-05-31 07:53">
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
<price>8002</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/521/521ad51254744469bbf01a9ab998eed7.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость night (черный)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10237" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-kawe-diagnosticheskiy-belyy-s-knopochnym-vklyucheniem_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>661</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/cba/cbaa0ad692649d0af3793e9f05ba8ea3.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический KaWe белый с кнопочным включением</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10238" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-kawe-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>593</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/73f/73f35e8ca69b401bb5cf591eb02f11db.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10239" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-rapport-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/7cc/7cc6b8c40b990082cccf93a0f5fb5718.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10240" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13115</price>
<currencyId>RUB</currencyId>
<categoryId>2857</categoryId>
<picture>https://kawe.su/upload/iblock/050/050a458f37825a65329ba17363f50b3c.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 2,5B Отоскоп лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10241" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b-otoskop-operacionniy-lampochniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13448</price>
<currencyId>RUB</currencyId>
<categoryId>2858</categoryId>
<picture>https://kawe.su/upload/iblock/3d2/3d2cf2efb4a9169847b9fa88f6c5b143.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 OP 2,5B Отоскоп операционный лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10242" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-ye50-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10003</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/843/843c9351d99a1f0bedc67a1cdb1e1666.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10244" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-chernyy-eu-versiya-zelenyy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12448</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/d94/d94fedc9872e7c8b0e02f386ecdd22b5.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, черный, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10245" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/ftalmoskop-yevrolayt-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10670</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/0fa/0fa3074089d3f3244ad6c4ebf404cd33.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е10 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10246" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye30-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13115</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/c40/c404a95aa5d38030896cab8430421004.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е30 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10247" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolait-e36-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16338</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/34e/34e98ae52f84348bd6979bf5c960b774.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10248" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye36-35v-s-akkumulyatorom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24895</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/ecf/ecf9238688569808edc2a7d962d48130.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (с аккумулятором) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10249" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolajt-e36-3-5v-perezaryadka-ot-seti-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32231</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/439/439a75261434b0bc2012ae2eb097d7b7.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (перезарядка от сети) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10250" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-serii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5557</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/fdd/fdd68a67a71144e7949cdd967d7754b6.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10251" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-sinii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12893</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/f0b/f0b5f2a3532ff8b42b13da7b3a71125c.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10252" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/grusha-dlya-pnevmotesta-k-otoskopam-e-24840-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1056</price>
<currencyId>RUB</currencyId>
<categoryId>2803</categoryId>
<picture>https://kawe.su/upload/iblock/fa2/fa2409c819a38439e93d41b944e15afb.jpg</picture>
<vendor>Kawe</vendor>
<name>Груша для пневмотеста к отоскопам (E-24840) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10253" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/adapter-dlya-grushi-pnevmotestirovaniya-26290k-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>668</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/24e/24e05c4df2ac6af5854638cdb3e7cbc0.jpg</picture>
<vendor>Kawe</vendor>
<name>Адаптер для груши пневмотестирования 26290K KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10254" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6225</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/bff/bff1e206db2f42e18c1ff3476876fce0.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT C10 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10255" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9595</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d37/d37fc404dd1996c60e213dd7d2a39233.jpg</picture>
<vendor>Kawe</vendor>
<name>KAWE COMBILIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10256" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12115</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/8a7/8a7414a1a01cc8c5a6dd48a22b206d24.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10257" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27119</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/5e0/5e073c586ff1660326fc931f8d4ae9d9.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10258" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7336</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/3d3/3d307ce04db2e8eb3fcbcd3fe39e081b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C10 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10259" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9225</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/3a4/3a41b2eb22585c64145c624029f3418d.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10260" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16116</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/cc0/cc01e5b435c355b1080f3362fba6e8f9.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10261" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe_eurolight_fo_30_led_2_5_v_otoskop_fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17228</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/55c/55cefe06fe3c90c394af52af2a9360c9.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10262" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31120</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/8e9/8e95ce533ce0e22512dc75d2cd307782.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10263" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-25-v-yevrolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27785</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/06e/06eb6ea7d9bd38e9f22ec29ceaed675d.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 2,5 В - ЕВРОЛАЙТ 2,5 В</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10264" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-piccolight-d-25-v-pikkolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19450</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/aa3/aa373d5eead22bf42878a875957b66c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE PICCOLIGHT D 2,5 В - ПИККОЛАЙТ 2,5 В</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10265" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-35-v---yevrolayt-35-v-s-led-lampoy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33342</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/397/397ba7c9f3d01f0f0533f2845beac831.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 3,5 В - ЕВРОЛАЙТ 3,5 В с LED лампой</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10266" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38700</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/68b/68b68c5ad700215d29f9668934ebba88.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe смотровой светильник передвижной напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10267" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-0-c-izognutyy-dlinavysota-7713-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/8cb/8cbbf82724f5a5180e2dab9d3d013a84.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 C изогнутый (длина/высота, 77/13 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10268" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32486</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/985/985e5121bf9efd75d7d1b4a6b0254713.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10269" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23118</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/385/385a53ca48f0f4abf6f2435e31987123.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10270" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-1-c-izognutyy-dlinavysota-9218-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/91a/91ad31e946026b2b90797b55f3e8b6f0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 C изогнутый (длина/высота, 92/18 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10271" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-2-c-izognutyy-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/738/73808d124575aff5274d7ae9ce5b7902.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 C изогнутый (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10272" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-3-c-izognutyy-dlinavysota-13321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/74e/74ed499822521b14028e3477bbecd15f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 C изогнутый (длина/высота, 133/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10273" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-4-c-izognutyy-dlinavysota-15321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/44e/44e9de64f2251f2f7cce6983ea8c05a4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 C изогнутый (длина/высота, 155/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10274" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-5-c-izognutyy-dlinavysota-17623-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/3f4/3f471f73c0b0906d9d3d91405230809c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 C изогнутый (длина/высота, 175/23 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10275" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30341</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/ab1/ab18b15d1123e77efeddfd4d10fc97b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe cмотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10276" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-00-c-pryamoy-dlinavysota-6510-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/967/9677eedc5c468462133f9ca677865a85.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 C прямой (длина/высота, 65/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10277" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-0-c-pryamoy-dlinavysota-7910-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/08c/08caf8e62d266b8c8841420add7d91c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 C прямой (длина/высота, 79/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10279" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-1-c-pryamoy-dlinavysota-10310-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/dbc/dbcf35b3477ae1a7016a2fb0dd0fda1a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 C прямой (длина/высота, 103/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10280" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-2-c-pryamoy-dlinavysota-15312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/04f/04fb83e412dda8da5e345bd116e602e5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 C прямой (длина/высота, 153/12 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10281" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-3-c-pryamoy-dlinavysota-19212-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/33b/33b4c21e553456ab9a0ed6b0b9c2aafb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 C прямой (длина/высота, 195/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10282" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-4-c-pryamoy-dlinavysota-20216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1fa/1faa78545f99441bc206e902e98233c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 C прямой (длина/высота, 205/16 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10283" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-0-c-pryamoy-dlinavysota-7712-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/30d/30d00397a2498a58f0b41b1229e0b9b5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №0 C прямой (длина/высота, 77/12 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10284" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-1-c-pryamoy-dlinavysota-9214-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/247/247dd25cc0231765d00b5af671cea4a5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №1 C прямой (длина/высота, 92/14 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10285" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/nabor-dlya-lor-vracha-nabor-diagnosticheskiy-beysik-s10-kawe---otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/281/2819d7c11e3499abd64eeec53647a228.jpg</picture>
<vendor>Kawe</vendor>
<name>Оториноскоп - набор для ЛОР врача, диагностический Бейсик С10 KaWe - отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10286" available="true">
<url>https://kawe.su/catalog/stetoskopy-veterinarnye/stetoskop-suprabyell-s-voronkoy-d495mm-dlina-75sm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6558</price>
<currencyId>RUB</currencyId>
<categoryId>2861</categoryId>
<picture>https://kawe.su/upload/iblock/b96/b960436529e80a90e8e3276333d61680.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп СУПРАБЕЛЛЬ с воронкой d=49,5мм,  длина 75см</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10287" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye10-kawe---oftalmoskop-1-apertura-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15893</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/16a/16af488dbd43aa133064da254ee86cfb.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е10 KaWe - офтальмоскоп 1 апертура и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10288" available="true">
<url>https://kawe.su/catalog/zaryadnye-ustroystva-kawe-germaniya/universalnoe-zaryadnoe-ustroystvo-medcharge-4000-dlya-akkumulyatorov-nimh-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17561</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/f89/f8904c81bbb5a8e5243e7810fd4d049c.jpg</picture>
<vendor>Kawe</vendor>
<name>Универсальное зарядное устройство MedCharge 4000 для аккумуляторов NiMH, Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10289" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye16-kawe---oftalmoskop-6-apertur-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18894</price>
<currencyId>RUB</currencyId>
<categoryId>2860</categoryId>
<picture>https://kawe.su/upload/iblock/8ec/8ec07099dfec724706e3fd08e3ce45c8.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е16 KaWe - офтальмоскоп 6 апертур и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10291" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermagel-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>557</price>
<currencyId>RUB</currencyId>
<categoryId>2865</categoryId>
<picture>https://kawe.su/upload/iblock/306/306a0fd3e30619e1849154c5dea641ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Дермагель KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10292" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/kontaktnoe-steklo-so-shkaloy-dlya-kawe-dermatoskopov/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3446</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/cd9/cd9ec2f57c969f43f53252d1ffebc100.jpg</picture>
<vendor>Kawe</vendor>
<name>Контактное стекло со шкалой для KaWe дерматоскопов</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10299" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-fo30--e36-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>44345</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/d73/d73bb9da4a957b643eaf50eaf6fbb856.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight F.O.30 / E36 2,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10300" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-led-fo30--e36-35-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>66499</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5ab/5abbb16f2559acac595e3029f2cdac1a.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight LED F.O.30 / E36 3,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10301" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-semeynogo-vracha-basic-set-combilight-c10e15-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17561</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/40a/40a14a3749fc370b83b714f638c25b8a.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор семейного врача BASIC-Set Combilight C10/E15, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10302" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-piccolightkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/f35/f356c702310125b178b16ce0b8ba5741.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для PICCOLIGHT®,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10303" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/f8b/f8bb7e36325553c0704b9e516896196f.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для BASIC-SET, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10305" available="true">
<url>https://kawe.su/catalog/kamertony-kawe/komplekt-meditsinskikh-kamertonov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18867</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/fb1/fb1698a19b2bfbc43d3a4d692314ebf4.jpg</picture>
<vendor>Kawe</vendor>
<name>Комплект медицинских камертонов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10306" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-128-gts-128-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5298</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/7bb/7bbd5935ec21c99bd95c6b40f5000168.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10307" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5077</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/5d1/5d199d1e3b120eaf2965df895bf63c13.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10308" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-aluminieviy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5077</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/661/66101986e4d0931118f9e8ceca22908b.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10309" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-alyuminievyy-bez-dempferov-0814051001-33523-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3531</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/482/482380e3587918a779b0aa4a25bf49ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10310" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-1024-gts-1024-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3312</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/aeb/aeb4a1517a15547d828bc19254f931b1.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10311" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-2048-gts-2048-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3367</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/2c6/2c601873b4cd987b91f92d246cb4917d.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10312" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-po-lukae-128-gts-128-hz-graduirovannyy-s-reguliruemymi-ot-c-do-h-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8057</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/010/010fa318a2a7fc7f9d6d0da3f3b8b1eb.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае градуированный с регулируемыми от C до H демпферами  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10313" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-128-gts-128-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5904</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/093/0930272e6dcf867b745fa245d3e5e398.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10314" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-256-gts-256-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5298</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/eca/eca1ee8bb1a71259e7135ed42b68c6bc.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10315" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-512-gts-512-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5077</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/15d/15dc8eaa6ade0dbb7601fad2d8461e34.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10316" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-1024-gts-1024-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4966</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/61d/61d768d31c92be650e966a60ab7b159e.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10317" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-2048-gts-2048-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5022</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/f88/f88cf582946fad6f1147383ae64c16e7.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10318" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-4096-gts-4096-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4966</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/104/1040a52c399f893666172ad4c2b9c4fa.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10319" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-4096-gts-4096-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3091</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/2fc/2fc79cda5793f617e793e069221ca1cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10320" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-2048-gts-2048-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2981</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/6e2/6e261b49e536f1d7b7922db35104f635.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10321" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-1024-gts-1024-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3367</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/6d3/6d3f517c582b9d5481a33dd4e390413a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10322" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-512-gts-512-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3587</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/32c/32ce112d2a2cf88ca2fb8828d1f31d38.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10323" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-256-gts-25-hz-po-hartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3731</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/ca0/ca0272b374784530ba157d1f5ac4187b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10324" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4745</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/913/9135ec3bf474ba879a5873e1aa076c49.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10325" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-s-fiksirovannymi-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5739</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/845/8456d132673cc621b09e4a1dc1f66b97.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману с фиксированными демпферами  ( частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10326" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-ot-128-do-64gts-128-64-hz-po-ryudel-seyferu-graduirovanniy-s-gruzami-i-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9436</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/498/498705a747a0e940d329ba2356daf9b1.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон KaWe по Рюдель-Сейфферу градуированный (частота без демпферов 128Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10327" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-a1-440-gts-a1-440-hz-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3973</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/912/9128b1bd94d8a9d61cd53f7d7e3f1816.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон A1 440 Гц (A1 440 Hz) без грузов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10328" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyy-nastennyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26758</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/fef/fefec4c195ecc166c6dece645be8077c.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый настенный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10329" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyydopolnitelnyy-modul-s-2-rukoyatyami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38293</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ae1/ae1054585857bef363867dfc524d6512.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый+дополнительный модуль с 2 рукоятями, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10330" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-dopolnitelnyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16173</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/f10/f10ec7672dcc4f543cca634bfb725395.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 дополнительный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10331" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-modul-dlya-ushnykh-voronok-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4281</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/71c/71cf86fe27d31cc5ec9cae947b6f00e0.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 модуль для ушных воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10332" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-ce55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50541</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/901/90110fcd829214d23a949bb942780fb6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 набор C/E55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10333" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57793</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/819/819b1a565bbfdb97121a99252972a20a.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (США), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10334" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57793</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/04d/04d76d240ba8cf787524f0440fcd9f73.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56 (ЕС), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10335" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>91569</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/8d2/8d204dea6d07f625d53efe99f96c3415.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10336" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-c-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5828</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/6c6/6c6feb3c45b5999266a1abf47b27e9dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight C, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10337" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12130</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/990/99013554cd1babd9eb2e3840f681a5c4.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10338" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>62935</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/5b3/5b3ce27cb8645481102c325e8db89e84.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10339" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15477</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/3ab/3abd839d7a5a04f57b16b2aaa123b0f7.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10340" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-eu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18052</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/884/88458ad9b62fd68aac7ff584857a13c9.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (EU), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10341" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-usa-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18055</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/755/75559f8790c85c5764a36a776b4c93a0.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (USA), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10342" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor_voronok_mnogorazovyh_2_5_3_5_4_5mm_3_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1103</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/b5f/b5f9a3b256b0046c7eb05db259c8a242.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/3,5/4,5 мм (3 шт. в пластике) 01.72101.001 (24846), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10343" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-3-sht-0172102001-24847/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1103</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/12a/12ad585c8f82a514b476a46d62a06995.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (3 шт. в пластике) 01.72102.001 (24847),KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10344" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-rukoyatey-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>834</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/2fe/2fe5141a386d2df428f95c929f54c71e.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для рукоятей EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10345" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-35-mm-3-sht-0172103001-24848/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1103</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/af3/af33fca16e46d8208f69aceda6597401.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,5 мм (3 шт. в пластике) 01.72103.001 (24848) , KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10346" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-piccolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>612</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/674/674ab227c7ad25d4d301962067d41ca4.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для PICCOLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10347" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-45-mm-3-sht-0172104001-24849/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1103</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/3ae/3ae139caf6e12689b94637d73e1c9deb.jpeg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4,5 мм (3шт. в пластике) 01.72104.001 (24849), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10348" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumka-kozhzam-na-molnii-dlya-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1112</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/6ea/6ea7ddb89ba763e271bfd181daaa1068.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумка кож/зам на молнии для EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10349" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21006</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/be6/be69fbf5e59ef95914f14cd8581116ee.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10350" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-10-sht-0172212001-26200/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/152/1520b4798988841b274a894866ebc15f.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (10 шт. в пластике) 01.72212.001 (26200), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10351" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumochka-tkanevaya-na-lipuchke-dlya-piccolight-chernaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1001</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/42f/42f274c67d45c0a9ca0af228284de7e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка тканевая на липучке для PICCOLIGHT, черная, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10352" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-3-5-v-otoskop-fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17672</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/2c9/2c9b10460efd43555bd2a4c09670fa0b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10353" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26008</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/501/5016ebbca8646f3cc8781fdac6c482d4.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10354" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-4-mm-10-sht-0172213001-26205/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/efb/efb62a31cae3519fbba736e58b68b9f5.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4 мм (10 шт. в пластике) 01.72213.001 (26205), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10355" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/kronshteyn-osvetitelya-dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1556</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/c43/c43fa2b46d4e006c086da2dac2c7255f.jpg</picture>
<vendor>Kawe</vendor>
<name>Кронштейн осветителя для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10356" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-op-led-25-v-lampochnyy-otoskop-operatsionnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15782</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/dbf/dbfd9954b4a207ee40625a248000ebe7.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 OP LED 2,5 В Лампочный отоскоп операционный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10357" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-2540mm-10-sht-0172211001-26210/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1614</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/25b/25bb571e42d1284a483b6fdf0cbbb1f5.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/4,0мм (10 шт) 01.72211.001 (26210), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10358" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nabor-laringealnykh-zerkal-3-i4dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>734</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/df0/df0a3d440e807fbfc562b4ae9a871df3.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор ларингеальных зеркал №3 и№4,для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10359" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22006</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/260/2607061b1d8a4a165f56cd3f2ef98d87.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10360" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171112001-28912/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6947</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/98c/98c2c9066d405c2747237720b535b2f7.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100 шт., в пластике) 01.71112.001 (28912), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10361" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/derzhatel-shpateley-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>401</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e4d/e4d0003e54b5b54ced5b0bcb76569ea8.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателей для  Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10362" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171122001-28913/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6947</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c92/c925425188ec502d0a9b59b945ce68ec.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4,0мм (100 шт. в пластике ) 01.71122.001 (28913), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10363" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/razdvizhnaya-nazalnaya-voronka-dlya-basic-set-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2112</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5e7/5e7aa39556e95950b8641034bf734f02.jpg</picture>
<vendor>Kawe</vendor>
<name>Раздвижная назальная воронка для Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10364" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-v-plastike-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5557</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d49/d491fdd568e4593cd87573be267a7969.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10365" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-rossypyu-0171211002-28900/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/3f9/3f965627ba092931e15c5625f0fd9c33.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые серые маленькие, ? 2.5 мм, (1000 шт. в карт.упаковке) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10366" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-100-sht-v-plastike-0171222001-28911/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>557</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/6cb/6cb7ba575198b081c542e94841ba4723.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10367" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-1000-sht-rossypyu-0171221002-28901/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>https://kawe.su/upload/iblock/043/043b155d9f23f34d21af092e88e2e492.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (1000 шт. в карт.упаковке) 01.71221.002 (28901), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10368" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/ade/ade691fd493e3b32e1c2ef64430862ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10369" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-253545559mm-5-sht-0172106001/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2501</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/c27/c277528a3c5e9899444c8ce1415cbcbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.5, 3.5, 4.5, 5.5, 9.0 мм (5 шт. в пластике)  01.72106.001, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10370" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-25-mm-1000-sht-0171111002-28902/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5625</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/762/762a0e746c543ce945905521321f6afb.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5 мм (1000 шт., в карт.упаковке) 01.71111.002 (28902), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10371" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-40-mm-1000-sht-0171121002-28903/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5625</price>
<currencyId>RUB</currencyId>
<categoryId>3343</categoryId>
<picture>https://kawe.su/upload/iblock/f94/f94f4084b1a4ca9d420cc78cc6c538c7.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые черные большие 4,0 мм (1000 шт., в карт.упаковке) 01.71121.002 (28903), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10372" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/mnogorazovye-ushnye-voronki-dlya-veterinarnogo-otoskopa---nabor--40--50--70-mm-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2835</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/456/45686a5c33e8bfc7d84e7a9b447db313.jpg</picture>
<vendor>Kawe</vendor>
<name>Многоразовые ушные воронки  для ветеринарного отоскопа -  набор, ? 4.0, 5.0, 7.0 мм, 3 шт. в пластике, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10373" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-vyet-v-upakovke-3sht-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2891</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/3c0/3c07ee1e2254fce5dc4588c3fc90f5a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых ВЕТ  (в упаковке 3шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10374" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-2-5-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>547</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/02e/02e6c379a2e96ca4d9deb5694c469637.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 2,5 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10375" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8113</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/f5b/f5bdfccf578d20a2acc7e594e4ecb6a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп стандартного освещения 2,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10376" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-fibroopt-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9225</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/b5e/b5e3c044505b1320e4db31dc479fafb9.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 2,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10377" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14116</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c64/c64fa14db0eac7c0fff0125fbf3ecf9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от зарядного устройства, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10378" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23896</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/6d0/6d0cc56acd352893adebfc4fbebdfd79.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп фиброоптический 3,5 V, заряжаемый от сети, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10379" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/549/5499d8b14813fdfae1e78b6b4a4d3dcf.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 2,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10380" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14116</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/16c/16c52248e3487a99766b1995b4abb314.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe,в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10381" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23896</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/a2a/a2abb3064a848269ebe4538510e2cf44.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10382" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-2-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9114</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/984/984c08384beef43501d4bcfc224f8bcd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №2 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10383" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-2-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27230</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/417/41707c3a77a5753aa766c4f8d1ab88cd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №2 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10384" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_flaplight_3_fo_s_podvizhnym_nakonechnikom_so_smennym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27230</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/d6d/d6d6e6bd83669c438a25c0f962028a04.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №3 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10385" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-4-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27230</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9b5/9b51e335fad48dd292c01352ade0a619.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №4 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10386" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--2-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28342</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9ff/9ffa7d2c65496d1f85147df401ac09cc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №2 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10387" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_megalight_flaplight_3_f_o_s_podvizhnym_nakonechnikom_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28342</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/fbe/fbe1fb9242fd3821e85ee87ca0ac8a75.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №3 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10388" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--4-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28342</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/2f7/2f76244d86e01a2826bff20c8c6f9b7a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №4 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10389" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e4b/e4ba6dc7fda977def8ad6c51f2a69dbf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №0 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10390" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-1-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/1b9/1b9390d51780897e9fb0050517bdcab6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №1 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10391" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/5bb/5bbdd42e0224d64b4be5b7eb184d04d9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №2 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10392" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-3-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/22d/22d14bf84f90668c9566cccfbbdaf881.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №3 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10393" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-4-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/6bb/6bbaa56d7d9f9d55a1a082dd1e5f690f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №4 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10394" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ea5/ea53ca88c49b83e80511f8be38f81cf7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10395" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/508/5086efd72547025e48460f7be22ea526.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10396" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/e83/e83e7a933c3a92213f7f17a090be1a07.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10397" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f1b/f1b64eeba2440e08ea492100d812bb14.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10398" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/linok-macintosh--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/519/5196682057f7395b4dd1139c9855e111.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10399" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--5-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/73e/73e9450f3ee9eccebe238d92007d8ccd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10400" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/495/4959417029488dd9a67ce7043402c7a9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10401" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/e78/e78a1761229e52e19e0170c0f05beba4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10402" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh-3-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/814/814ae7b1e138c464085ab8bb54715f62.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10403" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--2-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/1db/1db9f61e5fedc59c2bc7ec86ab58183a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10404" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok_megalight_macintosh_4_f_o_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/7b0/7b0d51e5e1c5049bced3b98e02c0d03e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10405" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--5-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/6a7/6a7948eb5f9b104738cea2f863162633.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №5 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10406" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--00-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/916/916d9013a28a7172076f23cda54f11d0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №00 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10407" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/770/770ddce1d8e572d85b9012d2db73fc4f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10408" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9e5/9e5de44f7dc803ba1f4f31b674b9a031.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10409" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller-2-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a15/a158c5ddb03c05a5cdab6698cccac4e0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10410" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--3-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/2d3/2d325593267cd9f6d00d3897839bc069.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10411" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--4-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9559</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/8ab/8ab351d887dc3a91876923b9b4d79d04.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10412" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--00-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/6b8/6b83ac7acf77cac42b44ad8986dee46f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10413" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a79/a797fd65558c998cee8fa751db6e550d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10414" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/3f5/3f58f75f76ac669b0dd8e763d9eb0571.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10415" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/a42/a42a21b1ac63f92a520e9b9db1ff6adf.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10416" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/0ba/0bab404255544f393b8300b4e45741e4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10417" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/5c4/5c43dc76d5749dfaceef0ec922597741.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10418" available="true">
<url>https://kawe.su/catalog/klinki-polio-f-o-kawe-germaniya/klinok-polio-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9003</price>
<currencyId>RUB</currencyId>
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/d64/d640b2d03372b09f667fcef5966a63f3.jpg</picture>
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
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/cde/cde10018d0cff307d999254df85a2f13.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10429" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--00-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/59c/59c95de4eca206c8ffb4047806f66092.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10430" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--4-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23007</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/7c0/7c05173b398b9eb2c292ee31e8f7ccb7.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10431" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-2-c-s-podvizhnym-nakonechnikom-dlinavysota-10021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16338</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/277/277b09bdbc27165d5c59c1ac8fe92f02.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Flaplight №2 C с подвижным наконечником (длина/высота, 100/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10432" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-3-c-s-podvizhnym-nakonechnikom-dlinavysota-13021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16338</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/356/356e2bdd71b81e5e39dabe51106f0e32.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №3 C с подвижным наконечником (длина/высота, 130/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10433" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-4-c-s-podvizhnym-nakonechnikom-dlinavysota-15025-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16338</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0c5/0c591cfc36b4039b76cd1537959dc6dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №4 C с подвижным наконечником (длина/высота, 150/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10434" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/linok-foregger-2-c-pryamoy-dlinavysota-11215-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/72d/72db376fe0d120e3a2f0cc685609c535.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №2 C прямой (длина/высота, 112/15 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10435" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-3-c-pryamoy-dlinavysota-13216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/33e/33e09e3f397666c8843600a0a5287d59.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №3 C прямой (длина/высота, 132/16 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10436" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-4-c-pryamoy-dlinavysota-15718-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3326</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/8fc/8fc298e62c11fd5c3dd2a57324a2d3dd.jpg</picture>
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
<picture>https://kawe.su/upload/iblock/6e8/6e87c3d5fc151e198be6ee1e74ae866d.jpg</picture>
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
<picture>https://kawe.su/upload/iblock/211/211fbd1dc16bca1688ffa26d6437e9c2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio Макинтош №3 С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10439" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-4s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3838</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/563/56332c686aea35099d09327ad91ea588.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio №4С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10442" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--0-c-dlinavysota-8015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b8f/b8f946de47c9d552903560fed3276ae5.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 C (длина/высота, 80/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10443" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--1-c-dlinavysota-9520-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cf9/cf90de0165d71556e0c0d72f4e4f2a74.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 C (длина/высота, 95/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10444" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--2-c-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8e4/8e4201a980acd21f0feb1a4a40c8ebf3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 C (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10445" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--3-c-dlinavysota-13324-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7bf/7bfb3030b5c94214aec07adff284c459.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 C (длина/высота, 133/24 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10446" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--4-c-dlinavysota-15325-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/2a1/2a11c767f8d4073657c0a5f87bf8a728.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 C (длина/высота, 153/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10447" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--5-c-dlinavysota-17925-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1845</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/eb1/eb10bcef78bf2f2d564216be34ccf970.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 C (длина/высота, 179/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10448" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--1-c-dlinavysota-10312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/869/869f6a917b1eb3315cf3ade702577835.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 C (длина/высота, 103/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10449" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--2-c-dlinavysota-16015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/10b/10b34a8314dde7b2055631cfda8a6734.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 C (длина/высота, 160/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10450" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--3-c-dlinavysota-20014-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b97/b97f07379d76b828934eb00d45d89e5a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 C (длина/высота, 200/14 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10451" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--4-c-dlinavysota-21017-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/970/9707ba4cc83030e9f1b3c5e25a43da14.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 C (длина/высота, 210/17 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10452" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--00-c-dlinavysota-6812-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/95e/95edf7b88ff7879427c9517811be0d8f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 C (длина/высота, 68/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10453" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--0-c-dlinavysota-8112-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1835</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/8bd/8bd50e56b539c1b97fd15c57108c12b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 C (длина/высота, 81/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10454" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/e88/e885e69b6c45be07db9e27ab32d8b12b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №00  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10455" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy--0-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/efd/efdb3cde1cd93e41d5e285c3253a2590.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №0 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10456" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/784/78429a4e9d85a04fe399df3875c40450.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10457" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12448</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/f02/f024367709848381c254fe8350e656b5.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10458" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8113</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/898/8980e0426ddc4a40fd70aadbc9980e56.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10459" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12559</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/eae/eae35a380189b694e77ca4fbb018e14c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10460" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-led-d28mm--akkumulyator-35v-li-lon-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0c7/0c7f509a6a5aa918945e1711540b12e2.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя LED (d=28мм) + аккумулятор 3,5V Li-lon осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10462" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-led-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20006</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/78d/78d3dd91b9005e67247cacf43fcd0891.jpg</picture>
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
<price>6891</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/e78/e789cc3ac1dd57eb9cfd1b747263f905.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10466" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm--akkumulyator-35v-li-lon-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13781</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5a4/5a43aa4ba13b972bfb6d080256dacabe.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) + аккумулятор 3,5V Li-lon, NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10467" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21228</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1ce/1cec7ef8b13b3585b15344508fb91c54.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10468" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bde/bdeecbb620bf716ec8d09ef20cf0a738.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10469" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/9e9/9e9f807f31b72903c126ecf479151a2f.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10470" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-ekonom-fo-d-30mm-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5557</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bc0/bc03695c2209138ed476aecd20cf66ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка 2,5В (d= 30мм)  Эконом F.O.</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10471" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15449</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/020/020059e4e96e69949495ef1a5bc4113d.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10472" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-malaya-25-v-d19mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3557</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/6ad/6ad9b281deb09088e7c591aa7e0f28d7.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая 2,5 В (d=19мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10473" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-25-v-d28-mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3779</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/fd7/fd7fd106f8e74f151d44875e115fb267.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя 2,5 В (d=28 мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10474" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-25-v-d32-mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4002</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/d70/d70dc2d1a3eb8eb1c83080d128ce213f.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая 2,5 В (d=32 мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10475" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-economy-25-v-d30mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2891</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/248/248fe74d255474791b4714ac93afe604.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка Economy 2,5 В (d=30мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10477" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--3-klinka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2445</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/569/5692c3c3f4394c7d65703271a73da3ff.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 3 клинка Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10478" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--5-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3224</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/38d/38d47fabc837fd37e13040c787769200.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 5 клинков Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10479" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--7-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/15b/15b7ad205d6d3ad99444abfe15250414.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 7 клинков Макинтош и Миллер ) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10480" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--2-klinka-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4113</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/89a/89ab913248597127bcb75f1f23bf7003.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 2 клинка FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10481" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/sumochka-dlya-laringoskopa-rukoyat--4-klinka-sinyaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>945</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/9c0/9c0ccec837483efbfd5d75d3c2cc246e.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка для ларингоскопа (рукоять + 4 клинка) синяя KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10482" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--1-klinok-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4035</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/0a8/0a8ec232b76af689030c4e73d07d6202.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 1 клинок FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10483" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/kartonnyy-boks-na-4-klinka-i-1-rukoyatkwe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>982</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/2ac/2acca27e29b175604d20d81032bbeb77.jpg</picture>
<vendor>Kawe</vendor>
<name>Картонный бокс на  4 клинка и 1 рукоять,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10484" available="true">
<url>https://kawe.su/catalog/rostomery/nastennyy-rostomer-ruletka-person-check-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1923</price>
<currencyId>RUB</currencyId>
<categoryId>2922</categoryId>
<picture>https://kawe.su/upload/iblock/0d7/0d77bc9bc6deb08c310f16ee16345b9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенный ростомер (рулетка) Person-Check KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10487" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-iz-nerzhaveyushchey-stali-0911005002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7724</price>
<currencyId>RUB</currencyId>
<categoryId>3350</categoryId>
<picture>https://kawe.su/upload/iblock/5c4/5c47c4590998fd493adf917d3a97e5e8.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка из нержавеющей стали KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10488" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-khromirovannaya-0911800002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5501</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/378/3782bc42bbe164b096351f507de7dcc4.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка хромированная KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10489" available="true">
<url>https://kawe.su/catalog/shtativy/stoyka-infuzionnaya-peredvizhnaya-iz-nerzhaveyushchey-stali-tyazhyolaya-dlya-infuzomatov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14671</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/cfc/cfcaaba896cedc841a2dc45ce9329944.jpg</picture>
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
<price>5614</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/9b4/9b40facf4675c543154cb271d2240221.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор Фонариков диагностических CLIPLIGHT (6 шт разного цвета), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10496" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3779</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/4e7/4e7f4938f3a278d4d9be02b75b47704f.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10497" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-cherniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/b5b/b5bbe3bb001bbc2e0a27373f2790ed64.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический черный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10498" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/derzhatel-shpatelya-dlya-cliplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>145</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/22e/22ecd96d5a80a8bbe49fdc4479ea6f19.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателя для CLIPLIGHT, Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10499" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-night-chernyy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/cbf/cbf7185564f3c9de3c93f1c7b6a47b51.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) night (черный), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10500" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v-led-lampakawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17228</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/531/531662f24c73015134f9ff5bf5c62fdc.jpg</picture>
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
<description></description>
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
<price>3224</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/4d1/4d16ba306d6d4bce2c4a7ce3b01e52aa.jpg</picture>
<vendor>Kawe</vendor>
<name>Настольное крепление для Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10537" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastennoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2445</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/7f6/7f604cf975e5388e0119636242401f0c.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенное  крепление  для  Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10549" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-ogolove-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22785</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/a1d/a1d8602018129efcd642b8b9414396b1.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на оголовье для Н-600 LED KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10550" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-poyas-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28342</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/7fb/7fbf04c20fc4ca6f930e50449aa7e995.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на пояс для Н-600 LED  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10551" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29175</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/f67/f67adad00592fa9be5bad7888e85cebf.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10552" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29175</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/4ea/4ea9008263e656f466002d6e9c97ecbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10553" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29175</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/6e0/6e05651cb1261456f1696904a699cfcb.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10554" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29175</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/1f6/1f6b87c1833738d3a213ede7221fe6b7.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10555" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-90g-metallicheskaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2316</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/08c/08cdcd2676407e205595f3cc4c441a09.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 90г, металлическая рукоятка,  с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10556" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17116</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/dd9/dd9d547c9826d9b384f924a1bdefc3b3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Планет Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10557" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12226</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/e25/e25762a4f463521e19c070fe636fa739.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10558" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-chernii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10336</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/77c/77ceb4377f74c975b917abd81a73d603.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10559" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-petifon-kawe-pediatricheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5780</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/1ce/1ce446661a255edfba0e952d7f452107.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп Петифон KaWe педиатрический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10560" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-multifon-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5168</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/038/038cb7b77648ffa0d8f0ccf590be0680.jpg</picture>
<vendor>Kawe</vendor>
<name>Stethoscope Мультифон для взрослых, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10561" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/fonendoskop-kawe-singl-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/f11/f1118e6f8172abb78c5c0cbdb338ec1e.jpg</picture>
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
<offer id="10565" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/zapasnaya-voronka-dlya-multiphon-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>586</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d27/d27a818671a472a32bbd05b891d9adef.jpg</picture>
<vendor>Kawe</vendor>
<name>Запасная воронка для Multiphon, KaWe</name>
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
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/253/25346623cb3d3b33532b508def57b6ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/a85/a85ab176c40319d935ce3e7f38be23dc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-krasnii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/f01/f013af8bea19874cad67c04479c4f948.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/6e0/6e02a28d46864b08d2d0abea08faae70.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/bba/bba96d478ab15b0ffca37c05a0ba79fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/82c/82cb323ede3a8f3810fa014db1716d9e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10576" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-varioflyeks-v-forme-toporika-po-fassbenderu-155g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4335</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/596/59664a31633d06e5c7526fa82fbfcc5f.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВАРИОФЛЕКС в форме топорика по Фассбендеру 155г, с иглой и кисточкой, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10577" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-babinski-diskoobraznyy-95g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1985</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/e56/e56dfb36bd4a67d0473d58d394e0d68b.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БАБИНСКИ дискообразный 95г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10579" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-80g-plastikovaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2121</price>
<currencyId>RUB</currencyId>
<categoryId>2918</categoryId>
<picture>https://kawe.su/upload/iblock/a02/a02e53e89da4daa87729cc277c9f7d6a.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 80г, пластиковая рукоятка, с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10581" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2612</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/201/201a6b13f5bc26e9a27ea16ccef6b9ed.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек Colorflex большой 110г, черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10583" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2612</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/53c/53cd8eb7645bc684c888bff46f809778.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек КОЛОРОФЛЕКС большой 110г, синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10584" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/molotochek-koloroflyeks-bolshoy-so-shtyrkom-bez-kistochki-i-igly-ves-110g-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2612</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/8d3/8d328d68951f9f3786298d726fe3cfc0.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек KaWe КОЛОРОФЛЕКС, для диагностики рефлексов, большой, серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10585" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-175g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3316</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/3b5/3b57779dfdd7cfa622243bfa2b243c0b.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 175г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10586" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-220g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3279</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/691/691c424fb09bbc12d4a40ba0ff80d467.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 200г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10587" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3687</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/8b3/8b36fc98ce905e84b3a283855f279ca8.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 210г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10588" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-190g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3392</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/3d5/3d5f95fe46650ee918b02f2a20d9b280.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 190г, с кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10589" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-150g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2946</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/b41/b41bc5920493ee0127c14dcfae320a08.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 150г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10590" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-vitroye-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3004</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/ccc/ccc746492ac59097985ce3650a48f1da.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВИТРОЕ (Witroe) тяжелый 198 г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10592" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-nalobnyy-osvetitel-led-v-komplekte--2-akkumulyatora--kreplenie-na-ogolove--kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>116697</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/e62/e6221ece9539c90c6be4e1e947bac692.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором (Налобный осветитель LED в комплекте + 2 аккумулятора ( крепление на оголовье + крепление на пояс))</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10593" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>936</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/e8f/e8f67573aad250f0e95574d7cd121d61.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73705" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/47a/47a8c0da2b3723b18f47f641895dffeb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73706" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/fd4/fd4cfe2cf37098fb5a03438d12f8ec88.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73707" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/b1e/b1edf5c9cdbee4909e944bea136fd9ec.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73708" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-5-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/96f/96fa63c44653818a1a652caa506e92db.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73709" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--3-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23007</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/704/70406dbe8a58b839119c248ae1f9f266.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73710" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/83c/83c16104581323d157fe6c7f7e597cf9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73711" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/480/480daf8891569d67460f7e46756eb766.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73712" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/5c8/5c8083b558e64331d30d4c62af9bec6a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73713" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b97/b9742ecc7deec6571a7618847336ca35.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73714" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/2d7/2d70155ccab3bef3681e6721a253d9fb.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73715" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9114</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/98f/98faecab1d480e31dcc29aa5d0efce0b.jpg</picture>
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
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/080/080eb82836fbfbc113eccb7a2a73593a.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO Macintosh №4 FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73717" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9114</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/b61/b61c8f395f985bdbaa387b4b230050de.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73718" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4890</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/75e/75e5f8f89b9d7cf4425e7aae5b3055d8.jpg</picture>
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
<picture>https://kawe.su/upload/iblock/469/469af7065edc1ee2a851f9dad5a9a931.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №2 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73720" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-tyepro-makintosh-s-3-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4426</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/078/078e6b34c1abde6feda84aa20d0a7952.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №3 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73721" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-0-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/e70/e702c56da9462b2e217dcec7b16f9132.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №0  Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73722" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-1-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/8e2/8e25265788a1a14d297a14e0d412d6a2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №1  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73723" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led-2-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/6af/6afa16d968ae1528dc970f85babf6817.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №2 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73724" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/4e9/4e9fa83770c8742f552a13a5f9c658a1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №3 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73725" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/a9f/a9f15e72afe2ae6fa50b9fd72b42db21.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №4 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73726" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-1-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/036/0360125e1aa24f28d3d5b50f230775f0.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №1 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73727" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-2-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a44/a4474f8e4934f97bd69f725603878f92.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №2 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73728" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/f33/f33243f251b324bfd7d4e2434b7bf23a.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №3 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73729" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>561</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/1fa/1fa6d9a1b2e01dd75327db4099e4a208.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №4 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73732" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35485</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/184/18424f188b88b5e5c44d8e94f5937737.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73733" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-rabotaet-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11126</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/7da/7dacb7689b478230bdf846e1069e9280.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32мм) 2,5 В (работает от батареек) с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73734" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19-mm-25-v-batareechnayaakkumulyatornaya-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7796</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ce4/ce48bf52f6b469190b1740b90e7d6d13.jpg</picture>
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
<price>64810</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/bd5/bd5ec860a4943ed50acbf82fb9490f8c.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73737" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52376</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/062/0627a16663565d926adf9749c1dff47e.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков / Универсальный набор (неонатология, педиатрия, взрослые, на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73738" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41098</price>
<currencyId>RUB</currencyId>
<categoryId>3145</categoryId>
<picture>https://kawe.su/upload/iblock/634/6347488c8f1318f95f15c2108bc3edf2.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампа LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73739" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>70422</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/91c/91ce728ac2e4813711cdfc4738f3c868.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73740" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57987</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/ab0/ab04a125c2e03da11a8c3279f1feaa99.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, Универсальный набор (неонатология, педиатрия, взрослые) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73741" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34165</price>
<currencyId>RUB</currencyId>
<categoryId>3144</categoryId>
<picture>https://kawe.su/upload/iblock/dbe/dbe32768ae24aabf4d2f843ef4be9367.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73742" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/23109/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49679</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/d41/d4198c313790da77ac05527e348a0c8f.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на аккумуляторах, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73743" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>42748</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/253/253751e9855a82cfaee0cb57ed707370.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73744" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79004</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/943/943749bd9f60893c1b3536c1ea86d3de.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с комплектом клинков для взрослых (для проведения затрудненной интубации) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73745" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>66569</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/b37/b370fe5e12571164440de73c4aa046d8.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, универсальный набор (неонатология, педиатрия, взрослые) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73916" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/molotochek-babinski-diskoobraznyy-ves-70g-gibkaya-rukoyatka-iz-plastika-s-rezboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1779</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/d08/d08192fadd5d6cb7580760457f60524e.jpg</picture>
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
<price>56978</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c60/c60d4373662f14fbb294cf78a789f368.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74433" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>87708</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/233/2334e381ecb12dce72234562d5f9cdf3.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74434" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61451</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/f28/f289466301a14f39a98252e889c3bbc8.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74435" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59599</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/228/2287b9bb4bd4724ba8f659a2a56a783b.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74436" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>91970</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/a70/a7041f6fd1c9685ac5e8ea73fa273222.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74437" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>98267</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/cd0/cd0648e7d93e81f6315561e1da9d354e.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E25, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61239</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e2b/e2b11ba62b8e00c62152629d5fa9c815.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок, EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-eu-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>67537</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/8df/8dfbf2b9bdb427ba5045d0ba2b4e7f34.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок EU, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74440" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>65805</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/0eb/0eb7fe7f9dce1af3c07679b6c37a51fb.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, с модулем воронок, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74441" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32695</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/832/8327ebaf234ead816e617ce81fe29aac.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74442" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4224</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/6b3/6b30d5be9dba90fa3a65233d53e69007.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74443" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36955</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/f34/f34fc6f5e0cf52481f139a57ca9b0eb4.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V с модулем воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74444" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4335</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e1e/e1e758ea727ac19078ed7677de6ccd31.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74445" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38899</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5c9/5c99cd8ebefd6a2819b3bba590a82775.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74446" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3891</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/9a0/9a00cc4601c345cafd714fcad5c176f6.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 2,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74447" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>43252</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/5c9/5c99816ea16484af5f7de303fcf3af8e.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® F.O. LED 3.5 V, цвет белый, с модулем воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74448" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4335</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/bda/bda1e056c7f5e26f80b0f9d67889677b.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 3,5V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74452" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/keys-na-6-klinkov-miller-i-1-rukoyat-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4002</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c44/c447a348915a473ed530eafab7a24f04.jpg</picture>
<vendor>Kawe</vendor>
<name>Кейс на 6 клинков Miller и 1 рукоять, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74453" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e25-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>70297</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/654/6547ef3e49eff8ed64b6bdfaa7532a69.jpg</picture>
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
<price>39567</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/7a0/7a039834d15e85885246951fc30af3c3.jpg</picture>
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
<price>550</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/a1f/a1f838b58bd3201c9369f73a2dfd0784.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Planophon, плоская головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74460" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-duoscope-dvoynaya-golovka-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>590</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/35e/35e3dba458a9817b5cd9d87bd9e98afb.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Duoscope, двойная головка, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75432" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-50-mm-10-sht-0172216001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/4eb/4eb8fca04c306b68760a6644150e981f.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 5,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75433" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-mm-10-sht-0172214001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/9fe/9fe59758bd6b03ee5e230e87f5559b58.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75434" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-25-30-40-50-mm-10-sht-0172210001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/53f/53ffb536346f3f1b1e227ea37887e93c.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.0, 2.5, 3.0, 4.0, 5.0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75435" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-30-mm-10-sht-0172215001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/a3c/a3cb95b249355b3fdec9d60db6efd8e7.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75436" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyat-25v-malaya-d19mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7002</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/dde/ddea94ed43f7a93c80d4eef4bcb16365.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5 В малая (d=19мм) Ф.О. ксенон, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75437" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>934</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f75/f75452a283b7adb7ce205aa1b3105c3c.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>936</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/9e7/9e7a704abdeeafdd2f6bea37af9eb686.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-zhyoltyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>936</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/4d1/4d119cd02ca41bb590d1a59d9a4d76bb.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED жёлтый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75440" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>936</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/942/9427536141fef848fcfdbf2251a5733b.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75441" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-seryy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>936</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/305/305c592088dec5aec275b98ae84111cb.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75442" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16338</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e7e/e7e512402d8d49da19e2d8a65146cf2c.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Eurolight E36 2,5V KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75443" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/a3c/a3c8a260ebc7c161eff09fe550000eb0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75444" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/f51/f5194a3489fe849b99b287dc9cae5466.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75445" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-zelenyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/fd0/fd00cb9777082874be42b9b9459da5ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75446" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1668</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/143/143d2ecca5f6b0e9bbd17c6eea519002.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75447" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-chernyy-black-line-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2001</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/426/426d381ad2b892f9d0f0e6034082a2d5.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) черный (Black line) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75504" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>67537</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/ebc/ebc6a077301ea60d7c75c1d104211f84.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75505" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61239</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/40c/40c4377212ebfb4e03129d3504d9bcbe.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75506" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-us-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>56978</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/277/2774936d140d18e2d67974b26cf31a5f.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, US, 3,5 V, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75507" available="true">
<url>https://kawe.su/catalog/otoskopy-lor/nabor-voronok-odnorazovykh-d--25-mm-100sht-d-4-0-mm-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>547</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/ab0/ab0350b9d9020fb2042381885425a5f4.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт d = 4,0 мм в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75508" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5557</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/444/444f03e1d931f61ddae5b05d82027aca.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный темно-синий, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75509" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy-chernii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5557</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/2b5/2b5b9218cf0c02e0948d3ca65357a469.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75510" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/583/583efe8a5a470cc9451fe2bf34fe2efa.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75511" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-goluboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/473/473361b297eeebf2decf7eb0d03cb5b6.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. голубой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75512" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/54e/54e1e5ed107fba5116a5a9993f5b9833.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. темно-синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75513" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7225</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/a6f/a6fbd21cbc4f3ec64f0d2ba97c8756d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75514" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12893</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/f98/f98092b0cd4af71356f8c3ad1ef95078.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75515" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost-temno-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12893</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/b88/b88c6ae9cdfc18aa176315ba812922fa.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75516" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8002</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/b3f/b3f293c7978df012b2cff0923e11ab54.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75517" available="true">
<url>https://kawe.su/catalog/fibroopticheskie-otoskopy/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost-temno-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8002</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/d57/d576d409b0a492cc314e137dd42e7bb4.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость темно-синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75518" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-1-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14553</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/dd6/dd6ff5716d8c0dc9c3bf65a806cea00c.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка вакумная)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75519" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/laringoskop-s-naborom-klinkov-klassicheskiy-macintosh-2-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28555</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/3fd/3fd5c0b617e5692afedb38a0de1a826e.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75520" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-meditsinskiy-diagnosticheskiy-dialight-xl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3779</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/538/53882d661d29e42b4a8d99c76a7c10dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75521" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-krasniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c25/c2541fa562f4301a525f3438c719d38c.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический красный, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75522" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-siniy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f40/f408bccc57fb36d0f47c8c145795c93c.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический синий, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75523" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-seriy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/19d/19d66ca81a8fa1284d7ea2b577196cec.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический серый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75524" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-jeltiy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/9ed/9ed8a7259ce385a24514f229c39dec87.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический желтый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75525" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-tsvetnoy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>712</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c2b/c2b2720ad005b544557fa47e2b55f4bb.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический фиолетовый, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75526" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10003</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e9a/e9a2b623da89ffd9967fac2a151c0034.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75527" available="true">
<url>https://kawe.su/catalog/oftalmoskopy/oftalmoskop-pikkolayt-ye50-temno-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10003</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/7c4/7c4aa1336d61c1f28e91bf3be3ad03db.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 темно-синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75528" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-night-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e8a/e8ad5315e3a90d269cb3ef5abb566100.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75529" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-temno-siniy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12448</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/660/6601b976870791b58b07de19d129bd42.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 темно-синий, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75530" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-seriy-eu-versiya-zeleniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12448</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/0b3/0b3b5b167c98bdf941a3373eb8f52a4a.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 серый, EU-версия, зеленый фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75531" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-stone-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/c64/c640e3325734441f9b377d2c04144cbd.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 stone, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75532" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-sky-usa-versiya-siniy-filtr-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/79e/79e678366bf9399018f5d634d0949bc4.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 sky, USA-версия, синий фильтр, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75533" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-stone-seryy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/747/74730e25367b6402700913be386355d5.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) stone (серый), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75534" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-karmannyy-piccolight-e-56-s-led-lampoy-25v-sky-temno-siniy-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13337</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/5b4/5b47dd84caf9a9ade6087c79873359e8.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В) sky (темно-синий), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75537" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-poyas/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>102249</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/916/91650d61b6a3490a0e46a6d052be1483.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на пояс</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75538" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom-kreplenie-na-ogolove/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>97804</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/f93/f93f9ef7b8613c60e9dc29691058c9d6.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором, крепление на оголовье</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75539" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-air-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11003</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/db4/db4ebfb2d9de43b29dcac2f71d123a0a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп ПЛАНЕТ Air Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75540" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-krasniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>593</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/8be/8bec70b0f3fa6b5a5928e6384be6dc79.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75541" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>593</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/d48/d48794c8e4e12d8cd11135945e6b5b0d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75542" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12226</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/37d/37d705b6a64980186e4934bfe66f26be.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи бордовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75543" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10336</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/964/964e5b03639a523b15c4c5ca745234a0.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75544" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/22b/22b3df18ec29be8070013a6b6a9ce8fc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75545" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/03d/03d069757f6f54334bbc894a12066e2c.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75546" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/9c0/9c045541175f6b7aad6b9e0159dcea53.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75547" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/7c6/7c6f30e64ce9e7b50cacae7327d6d7c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75548" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/6a2/6a2568af4ff8929b00978c0ab43e416f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75549" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-fioletovii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/326/326b1e04ceb4cc0622dad0846ee668b6.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75550" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-cherniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/571/57199686271a590b8e60eae3ba13765d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский черный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75551" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/c50/c5043f5b135a69c04a3dae149644e4cc.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75552" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/e03/e03922c6fb517f5be41b4f31dee13699.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75553" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/78b/78b2edaf84faccfb70925077ea6b2822.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75554" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/10a/10a804de6b877b39d8bd9a6c27acbe72.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75555" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/974/97441391b982a02a784614a1490e5e7b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75556" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/01e/01e62f74ab44a8244871d6835b3f453b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт зеленый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75557" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/d4d/d4d19d84f9c5e7e39f92bb021043f91d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75558" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2667</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/f15/f15e4c00160d0e25a8be100d45cf74c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75559" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-bordoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/d34/d3445284552064a9bb82f48c9b77151e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж бордовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75560" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-fioletoviy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/04c/04c682a30b1c66793d823529545df72a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75561" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-zeleniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/996/99605ccb6a0dd598128c4a18c430b506.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75562" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/1b2/1b2d255c86db3af6a9c555f43cbcb7ee.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75563" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-cherniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/f00/f00c6cab96d8fe1e1655177d7b39dee7.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75564" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-seriy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4668</price>
<currencyId>RUB</currencyId>
<categoryId>2850</categoryId>
<picture>https://kawe.su/upload/iblock/f8c/f8c2af8945ba137f732734577e9994e3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж серый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75565" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/e8a/e8a21fa007d2103c23e1b396ec49a58d.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75566" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/e0c/e0c752930b37efb64be2f432ca32fa4e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75567" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/a1a/a1a67a0a71daa84f0868aae669f7589f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75568" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/006/006112394bb042a4163616e1707dbfc3.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75569" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2556</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/419/419e981933ab0c12f882e12051d65378.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4557</price>
<currencyId>RUB</currencyId>
<categoryId>2851</categoryId>
<picture>https://kawe.su/upload/iblock/8fe/8fee4cdf7bde025e407b445e859c7369.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-krasniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/ec4/ec4d2a03b2391390fb6cea815f9f1639.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный красный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-siniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/921/9210d8bb8736cbd36e72cae2496ed430.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный синий</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-zeleniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/305/3056b487fd6af55c6e8381770d7b31ba.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный зеленый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-fioletoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/99c/99cb4cf4b136989a2acd678598aca00f.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный фиолетовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-bordoviy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/00b/00b912b08e66dffc6d541582d5a25e5b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный бордовый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75576" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-seriy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4446</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/904/904d84127707d5b18152ff4b6a022b3e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
</offers>
</shop>
</yml_catalog>
