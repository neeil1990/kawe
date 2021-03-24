<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2021-03-24 07:39">
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
<category id="2809" parentId="2799">Камертоны</category>
<category id="2810" parentId="2809">Камертоны Kawe, Германия</category>
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
<category id="2868" parentId="2866">Медицинские светильники KaWe, Германия</category>
<category id="2869" parentId="2866">Налобные осветители</category>
<category id="2870" parentId="2869">Налобные осветители KaWe, Германия</category>
</categories>
<offers>
<offer id="10236" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-chernyy-standartnaya-yarkost/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7669</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/aad/aadba21fe1602853ad9ccca7674d8709.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический стандартная яркость</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10237" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-kawe-diagnosticheskiy-belyy-s-knopochnym-vklyucheniem_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>633</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/4d7/4d7f2f9026c2974fb736f24056994d6b.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический KaWe белый с кнопочным включением</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10238" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-dubl-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>568</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/7a2/7a23563fb8b47008cc791924f7547b76.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Дубль KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10239" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-rapport-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/67a/67af629112f16a7a4acacd82e0261c5e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт черный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10240" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12568</price>
<currencyId>RUB</currencyId>
<categoryId>2857</categoryId>
<picture>https://kawe.su/upload/iblock/667/667a996c2e686c4ac95f3a6ae9713e9f.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 2,5B Отоскоп лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10241" available="true">
<url>https://kawe.su/catalog/veterinarnye-otoskopy-kawe-germaniya/otoskop-lampochnyy-eurolight-vet-c30-25b-otoskop-operacionniy-lampochniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12887</price>
<currencyId>RUB</currencyId>
<categoryId>2858</categoryId>
<picture>https://kawe.su/upload/iblock/31c/31cc192c32b1c8100342b3b11cc82794.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe Eurolight VET C30 OP 2,5B Отоскоп операционный лампочный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10242" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-ye50-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9586</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e25/e25728a0f2195102b9d802235ab04923.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт Е50 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10244" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-pikkolayt-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11929</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/f1c/f1c64ae772de53b0d49da65dbd8f66b6.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Пикколайт E56 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10245" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/ftalmoskop-yevrolayt-ye10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10225</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/ab7/ab7c37a8cc8267ac9c0acd2eebcf3301.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е10 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10246" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye30-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12568</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/6be/6be51e6b57b74f67651efb7cbb568389.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е30 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10247" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolait-e36-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15657</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/9ed/9edafc7db44a0a18bb4ec6f199eb0304.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10248" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-yevrolayt-ye36-35v-s-akkumulyatorom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23858</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/6ac/6ac36e54bcfd97a64fb5fe398de14f3a.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (с аккумулятором) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10249" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-evrolajt-e36-3-5v-perezaryadka-ot-seti-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30887</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/e42/e4277ee67640195752d0ae9ac510f4f6.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Евролайт Е36 3.5В (перезарядка от сети) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10250" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-c-25-v-otoskop-lampochnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5325</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/819/819905ceb71a08bf3b2505c11d482838.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT C 2,5 В Отоскоп лампочный, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10251" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/kawe-piccolight-fo-led-otoskop-fibroopticheskiy-temno-siniy-povyshennaya-yarkost/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12355</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/53e/53ec4e6887be89af6c2cbbe3056f1f13.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe PICCOLIGHT FO LED Отоскоп фиброоптический повышенная яркость</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10252" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/grusha-dlya-pnevmotesta-k-otoskopam-e-24840-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1013</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/1b2/1b2a78877416b6e96e70892dc73ee4f2.jpg</picture>
<vendor>Kawe</vendor>
<name>Груша для пневмотеста к отоскопам (E-24840) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10253" available="true">
<url>https://kawe.su/catalog/dopolnitelnoe-prinadlezhnosti-k-otoskopam-kawe-germaniya/adapter-dlya-grushi-pnevmotestirovaniya-26290k-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>639</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/de9/de91707ba225da579fb45bd488a92972.jpg</picture>
<vendor>Kawe</vendor>
<name>Адаптер для груши пневмотестирования 26290K KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10254" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5965</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/a5f/a5f7b93949ec00103acf0e336cd9e132.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT C10 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10255" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10651</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/ad5/ad5140f5c9ff556b5dbc9a22207c5e2d.jpg</picture>
<vendor>Kawe</vendor>
<name>KAWE COMBILIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10256" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11610</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/bd0/bd0bc8bb120b4677df1fb42a98a86af1.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10257" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25988</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/173/1737abbdaf5651acb92bc3b3ad4e446b.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10258" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c10-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7030</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/66f/66f976b4139434b13ca6f76686bc1198.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C10 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10259" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-25-v-lampochnyy-otoskop/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8841</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/efb/efb30efd33b0357d8f25e0bddd784175.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 2,5 В Лампочный отоскоп</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10260" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-25-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15443</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/3c5/3c5486557917e732bf9e32f1e6240ac7.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10261" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe_eurolight_fo_30_led_2_5_v_otoskop_fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16508</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/0a6/0a61962af45182cadb080e905b279d65.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 2.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10262" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy-s-podzaryadkoy-ot-seti/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29822</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/df9/df9bc495744067aede29d42200d601cc.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический с подзарядкой от сети</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10263" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-25-v-yevrolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26627</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/d3c/d3c1eb68121c389088665aed055e0893.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 2,5 В - ЕВРОЛАЙТ 2,5 В</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10264" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-piccolight-d-25-v-pikkolayt-25-v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18639</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/429/429fbdb0ac47eba24f5e235c9948a883.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE PICCOLIGHT D 2,5 В - ПИККОЛАЙТ 2,5 В</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10265" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermatoskop-kawe-eurolight-d30-35-v---yevrolayt-35-v-s-led-lampoy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31952</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/f0e/f0eba32e2c881c08fba47eff2c0eb559.jpg</picture>
<vendor>Kawe</vendor>
<name>Дерматоскоп KAWE EUROLIGHT D30 3,5 В - ЕВРОЛАЙТ 3,5 В с LED лампой</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10266" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37810</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/c59/c591fa8ea4f240a4719b3d63a27a2416.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe смотровой светильник передвижной напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10267" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-0-c-izognutyy-dlinavysota-7713-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/465/4659d495101f7472ffc2ffd94ccd4a42.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 C изогнутый (длина/высота, 77/13 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10268" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik-napolniy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31739</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/1f0/1f08238e1ce5fedf268251293fc67bc9.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник напольный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10269" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22154</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/a22/a229ac379221767e2b40932043aa6c67.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик KaWe смотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10270" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-1-c-izognutyy-dlinavysota-9218-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/ebb/ebb3987e309776c11527e27392a5f198.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 C изогнутый (длина/высота, 92/18 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10271" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-2-c-izognutyy-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/578/578d59fd30ca3b490f9f5624824d20af.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 C изогнутый (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10272" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-3-c-izognutyy-dlinavysota-13321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a74/a7433cef09b506e340d8a5a8b2fa73e1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 C изогнутый (длина/высота, 133/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10273" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-4-c-izognutyy-dlinavysota-15321-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/372/3723c286e99d05b44ce07b6809f897ee.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 C изогнутый (длина/высота, 155/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10274" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-macintosh-5-c-izognutyy-dlinavysota-17623-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/96e/96e0d8908dc68fd83716b0ed88fd0eb8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 C изогнутый (длина/высота, 175/23 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10275" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/masterlight-klassik-led-kawe-smotrovoy-svetilnik/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29077</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/3d1/3d1b7f9d152f378c329d6f41dce72943.jpg</picture>
<vendor>Kawe</vendor>
<name>Masterlight Классик LED KaWe cмотровой светильник</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10276" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-00-c-pryamoy-dlinavysota-6510-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/643/643d6517013e027c9cb2a52736a61b24.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 C прямой (длина/высота, 65/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10277" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-0-c-pryamoy-dlinavysota-7910-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/915/915632ad7ca0041015db9fc7f69ef275.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 C прямой (длина/высота, 79/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10279" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-1-c-pryamoy-dlinavysota-10310-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5fc/5fcccd83172777e5b91aa98c073c1d25.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 C прямой (длина/высота, 103/10 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10280" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-2-c-pryamoy-dlinavysota-15312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2875</categoryId>
<picture>https://kawe.su/upload/iblock/75f/75f59cefdbda0c944eeaa470dd9f917e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 C прямой (длина/высота, 153/12 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10281" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-3-c-pryamoy-dlinavysota-19212-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/697/6974d33caff1ae7b84e22df1e33b5c8d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 C прямой (длина/высота, 195/13 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10282" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-germaniya/klinok-miller-4-c-pryamoy-dlinavysota-20216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c66/c66ee2fe920cd741920fb4ee6645b54c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 C прямой (длина/высота, 205/16 мм) в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10283" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-0-c-pryamoy-dlinavysota-7712-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/340/34013b7e56a4a8fc63177ec69f93842c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №0 C прямой (длина/высота, 77/12 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10284" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-1-c-pryamoy-dlinavysota-9214-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/485/485d8da09549b21cada53936d8010a20.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №1 C прямой (длина/высота, 92/14 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10285" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/nabor-dlya-lor-vracha-nabor-diagnosticheskiy-beysik-s10-kawe---otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12781</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/807/80709fa4252b8f579b92d9e81eb4cbc5.jpg</picture>
<vendor>Kawe</vendor>
<name>Оториноскоп - набор для ЛОР врача, диагностический Бейсик С10 KaWe - отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10286" available="true">
<url>https://kawe.su/catalog/stetoskopy-veterinarnye/stetoskop-suprabyell-s-voronkoy-d495mm-dlina-75sm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6285</price>
<currencyId>RUB</currencyId>
<categoryId>2861</categoryId>
<picture>https://kawe.su/upload/iblock/108/10864f61946ceb575a5013f9bc462719.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп СУПРАБЕЛЛЬ с воронкой d=49,5мм,  длина 75см</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10287" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye10-kawe---oftalmoskop-1-apertura-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15231</price>
<currencyId>RUB</currencyId>
<categoryId>2938</categoryId>
<picture>https://kawe.su/upload/iblock/b8b/b8be81e145ed1784ddb4351efc11690d.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е10 KaWe - офтальмоскоп 1 апертура и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10288" available="true">
<url>https://kawe.su/catalog/zaryadnye-ustroystva-kawe-germaniya/universalnoe-zaryadnoe-ustroystvo-medcharge-4000-dlya-akkumulyatorov-nimh-li-ion-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16829</price>
<currencyId>RUB</currencyId>
<categoryId>2938</categoryId>
<picture>https://kawe.su/upload/iblock/0b8/0b899aab931c5426295c7f7fc686b8fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Универсальное зарядное устройство MedCharge 4000 для аккумуляторов NiMH, Li-Ion KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10289" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-beysik-s10ye16-kawe---oftalmoskop-6-apertur-i-otoskop-s-prinadlezhnostyami/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18106</price>
<currencyId>RUB</currencyId>
<categoryId>2860</categoryId>
<picture>https://kawe.su/upload/iblock/494/494ef842b005cc20756fd0b8458fb88e.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Бейсик С10/Е16 KaWe - офтальмоскоп 6 апертур и отоскоп с принадлежностями</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10291" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/dermagel-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>533</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/df6/df62c69cf3e8d8da5a5040ec9e9ecc9b.JPG</picture>
<vendor>Kawe</vendor>
<name>Дермагель KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10292" available="true">
<url>https://kawe.su/catalog/dermatoskopy-kawe-germaniya/kontaktnoe-steklo-so-shkaloy-dlya-kawe-dermatoskopov/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3302</price>
<currencyId>RUB</currencyId>
<categoryId>2864</categoryId>
<picture>https://kawe.su/upload/iblock/469/46963378e935410099f294dcae20685f.jpg</picture>
<vendor>Kawe</vendor>
<name>Контактное стекло со шкалой для KaWe дерматоскопов</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10299" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-fo30--e36-25-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>42497</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/97d/97d646218b199803e0636e1e1a7805fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight F.O.30 / E36 2,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10300" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-combilight-led-fo30--e36-35-v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63726</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/a8f/a8fc97c44356724fe3fc5d2040821096.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор Combilight LED F.O.30 / E36 3,5 В KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10301" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/diagnosticheskiy-nabor-semeynogo-vracha-basic-set-combilight-c10e15-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16829</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/4ca/4ca7004184e6f7976a73e1ec1185f8ce.jpg</picture>
<vendor>Kawe</vendor>
<name>Диагностический набор семейного врача BASIC-Set Combilight C10/E15, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10302" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-piccolightkawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1704</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/185/1855b5e77a2c3d2b07eceba57b169b20.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для PICCOLIGHT®,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10303" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/plastikovyy-keys-chernyy-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1704</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d1a/d1a7d3c60050a94047d02d3bf2c6e1b4.jpg</picture>
<vendor>Kawe</vendor>
<name>Пластиковый кейс, черный для BASIC-SET, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10305" available="true">
<url>https://kawe.su/catalog/kamertony-kawe/komplekt-meditsinskikh-kamertonov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18080</price>
<currencyId>RUB</currencyId>
<categoryId>2810</categoryId>
<picture>https://kawe.su/upload/iblock/86a/86a9d993af524282c5a7177d0ab27f59.jpg</picture>
<vendor>Kawe</vendor>
<name>Комплект медицинских камертонов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10306" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-128-gts-128-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5077</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/740/740d6073ab8901cb39aa2382c43eb15a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10307" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-alyuminievyy-s-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4866</price>
<currencyId>RUB</currencyId>
<categoryId>2811</categoryId>
<picture>https://kawe.su/upload/iblock/e47/e47524a8aca7d38767ba364f4b312762.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый с демпферами (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10308" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-256-gts-256-hz-aluminieviy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4866</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/986/9869986ef5a196d3e71a5b755f806d26.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10309" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-alyuminievyy-bez-dempferov-0814051001-33523-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3383</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/730/7303236bcf17c4b5e57c00ad3d8fe883.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10310" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-1024-gts-1024-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3174</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/5c8/5c8b55968cc52e666442f11923ed15d6.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10311" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-alyuminievye-meditsinskie-germaniya/kamerton-2048-gts-2048-hz-alyuminievyy-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3227</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/8b8/8b822c21e41144d4e71a04da8b708111.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон алюминиевый без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10312" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-po-lukae-128-gts-128-hz-graduirovannyy-s-reguliruemymi-ot-c-do-h-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7720</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/991/991b1a0eee073fcbe79c33b518d191a2.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае градуированный с регулируемыми от C до H демпферами  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10313" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-128-gts-128-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5659</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/c91/c914ef5327b40633b923aa2b7370d219.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10314" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-256-gts-256-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5077</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/079/079e4fc014d853356e122479c2e37892.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10315" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-512-gts-512-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4866</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c84/c84b876688e1a3a571e4c96d218c9692.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10316" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-1024-gts-1024-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4760</price>
<currencyId>RUB</currencyId>
<categoryId>2812</categoryId>
<picture>https://kawe.su/upload/iblock/976/97613126065fbe464a12bfd576fe334d.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10317" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-2048-gts-2048-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4812</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/4dd/4dd1b1aeb2859b0f47df690318987748.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10318" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-lukae/kamerton-4096-gts-4096-hz-po-lukae-s-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4760</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/f74/f74879843b5b5f5c98135a3f8a0f7a97.JPG</picture>
<vendor>Kawe</vendor>
<name>Камертон по Лукае без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10319" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-4096-gts-4096-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2961</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/f43/f43586f55a882f128f6a7f5a70bfacc8.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 4096 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10320" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-2048-gts-2048-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2857</price>
<currencyId>RUB</currencyId>
<categoryId>2813</categoryId>
<picture>https://kawe.su/upload/iblock/492/492dd793bdf1661d48074e6abbb0ffe7.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 2048) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10321" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-1024-gts-1024-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3227</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/87f/87f939168f69f68742d4ce3a19f6cc16.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 1024 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10322" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-512-gts-512-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3437</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/46b/46b41617d9dd69a5b432d8386f5276ff.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 512 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10323" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-256-gts-25-hz-po-hartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3575</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/3f3/3f3c3f0e50e007550b328925bbb0026b.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов  (частота 256 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10324" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4547</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/b5e/b5ea1ea11da0658db9030321ae2b44b4.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману без демпферов (частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10325" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-po-khartmanu/kamerton-128-gts-128-hz-po-khartmanu-s-fiksirovannymi-gruzami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5500</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/b73/b73b61d7782883f09ca72ca268ea8b6a.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон по Хартману с фиксированными демпферами  ( частота 128 Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10326" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-ot-128-do-64gts-128-64-hz-po-ryudel-seyferu-graduirovanniy-s-gruzami-i-podstavkoi-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9043</price>
<currencyId>RUB</currencyId>
<categoryId>2809</categoryId>
<picture>https://kawe.su/upload/iblock/539/539aa9d09778df0aae0d05a62bca6cbd.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон KaWe по Рюдель-Сейфферу градуированный (частота без демпферов 128Гц) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10327" available="true">
<url>https://kawe.su/catalog/kamertony-kawe-stalnye-meditsinskie-germaniya/kamerton-a1-440-gts-a1-440-hz-bez-gruzov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3808</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/68d/68dcbe131f6d643568b7fc5b6eaa263d.jpg</picture>
<vendor>Kawe</vendor>
<name>Камертон A1 440 Гц (A1 440 Hz) без грузов, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10328" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyy-nastennyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25642</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/5a1/5a16b43fc22338bb38243aeaef3a39f6.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый настенный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10329" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-bazovyydopolnitelnyy-modul-s-2-rukoyatyami-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36696</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/029/029c553e81b72980b36ee9519b2d1d91.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 базовый+дополнительный модуль с 2 рукоятями, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10330" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-dopolnitelnyy-modul-s-1-rukoyatyu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15499</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/f52/f52c175902e11e35bf94180eeec0a52a.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 дополнительный модуль с 1 рукоятью, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10331" available="true">
<url>https://kawe.su/catalog/bazovye-nastennye-moduli-kawe/medcenter-5000-modul-dlya-ushnykh-voronok-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4103</price>
<currencyId>RUB</currencyId>
<categoryId>2817</categoryId>
<picture>https://kawe.su/upload/iblock/e30/e307867cac43f9cec37420bb99e18e08.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 модуль для ушных воронок, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10332" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-ce55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48434</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/fce/fce01f669b83105f5ba18a360a115076.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 набор C/E55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10333" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55383</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/343/343b5b0757fc6cd9076d7efabf251ad1.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10334" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e56-kawe-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55383</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/011/01191f001f824efb0b47fa8ed23bc59f.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E56, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10335" available="true">
<url>https://kawe.su/catalog/gotovye-komplekty-kawe/medcenter-5000-nabor-fo-led-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>87751</price>
<currencyId>RUB</currencyId>
<categoryId>2818</categoryId>
<picture>https://kawe.su/upload/iblock/0d9/0d923667a65b3a11a23f6cacb7e00fa8.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter 5000 Набор FO LED/ E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10336" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-c-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5585</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/141/14126e11c01527d94c84b2ef8131ca6b.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight C, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10337" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-otoskopa-dlya-medcenter5000-piccolight-fo-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11624</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/bce/bce9084cd54c1c56b027cd4de82e058a.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка отоскопа для MedCenter5000 Piccolight FO, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10338" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-eurolight-e25-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60311</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/3f5/3f5e1c1bf5d87ab6c599bce57b73f4da.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Eurolight E25, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10339" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye55-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14831</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/6f1/6f11ca2b2c24f83e64c87566ef80cd2c.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е55, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10340" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-eu-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17299</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/7d0/7d0810ea6292f25ca8f7d29ff3f1fcb3.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (EU), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10341" available="true">
<url>https://kawe.su/catalog/komplektuyushchie-k-diagosticheskim-naboram-kawe/golovka-oftalmoskopa-dlya-medcenter5000-piccolight-ye56-usa-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17303</price>
<currencyId>RUB</currencyId>
<categoryId>2819</categoryId>
<picture>https://kawe.su/upload/iblock/1ef/1ef41871fb8099cf418941ac16386d3b.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка офтальмоскопа для MedCenter5000 Piccolight Е56 (USA), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10342" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor_voronok_mnogorazovyh_2_5_3_5_4_5mm_3_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1056</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/968/968859e3199945fdb13b57a4238648fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/3,5/4,5 мм (3 шт. в пластике) 01.72101.001 (24846), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10343" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-3-sht-0172102001-24847/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1056</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/5af/5af92ebe95ac3fa7116b4163096eea8e.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (3 шт. в пластике) 01.72102.001 (24847),KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10344" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-rukoyatey-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>799</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/26b/26bccf6ed82f0af02eb2aa49b7545f3a.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для рукоятей EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10345" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-35-mm-3-sht-0172103001-24848/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1056</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/ebe/ebea3fa9d4cd0d2ab39265f59f44bf99.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,5 мм (3 шт. в пластике) 01.72103.001 (24848) , KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10346" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/podstavka-dlya-piccolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>586</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/960/960f70e0c406a52623ac6fbd8202014b.jpg</picture>
<vendor>Kawe</vendor>
<name>Подставка для PICCOLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10347" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-45-mm-3-sht-0172104001-24849/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1056</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c78/c780e1fb33f303b507c13c7abef1b4f9.jpeg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4,5 мм (3шт. в пластике) 01.72104.001 (24849), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10348" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumka-kozhzam-na-molnii-dlya-eurolight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/1fd/1fdfc1c5c86338878141643e0bb628b8.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумка кож/зам на молнии для EUROLIGHT, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10349" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20130</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/f96/f96bac1d5031d66cc3eaad1180bb822e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10350" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-25-mm-10-sht-0172212001-26200/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/f6a/f6ae7f26e5fdf1087a75d6199960f432.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5 мм (10 шт. в пластике) 01.72212.001 (26200), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10351" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/sumochka-tkanevaya-na-lipuchke-dlya-piccolight-chernaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>959</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/b50/b50016e9dafc7010c49d4a313cf50a94.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка тканевая на липучке для PICCOLIGHT, черная, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10352" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-combilight/kawe-combilight-fo-30-3-5-v-otoskop-fibroopticheskij/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16935</price>
<currencyId>RUB</currencyId>
<categoryId>2804</categoryId>
<picture>https://kawe.su/upload/iblock/825/825256b53e3a494b54bed0561c17724e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe COMBILIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10353" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-led-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24923</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/3c3/3c33bbac8b7f6696be7024ea0635debf.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 LED 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10354" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-4-mm-10-sht-0172213001-26205/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/7e8/7e825fea3ccd45d31937f52b65c939fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 4 мм (10 шт. в пластике) 01.72213.001 (26205), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10355" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/kronshteyn-osvetitelya-dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1492</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/65a/65abd7556445847f65676ef8f02ffc81.jpg</picture>
<vendor>Kawe</vendor>
<name>Кронштейн осветителя для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10356" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-c30-op-led-25-v-lampochnyy-otoskop-operatsionnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15124</price>
<currencyId>RUB</currencyId>
<categoryId>2805</categoryId>
<picture>https://kawe.su/upload/iblock/334/33479b736c0b50391bb0014695662efd.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT C30 OP LED 2,5 В Лампочный отоскоп операционный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10357" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-2540mm-10-sht-0172211001-26210/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/180/1803d9cb602fa15c987bb48faf07452a.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,5/4,0мм (10 шт) 01.72211.001 (26210), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10358" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nabor-laringealnykh-zerkal-3-i4dlya-eurolight-s10-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>703</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/45e/45eed0e3033dd477c5846b5e7d772522.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор ларингеальных зеркал №3 и№4,для EUROLIGHT® С10, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10359" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-eurolight-kawe-germaniya/kawe-eurolight-fo-30-35-v-otoskop-fibroopticheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21089</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/07a/07a430d85e9621e24dee69b2aa458906.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe EUROLIGHT FO 30 3.5 В Отоскоп фиброоптический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10360" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171112001-28912/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6657</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/6a4/6a44d6f2b5d422b608d16b853a68ac10.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100 шт., в пластике) 01.71112.001 (28912), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10361" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/derzhatel-shpateley-dlya-basic-set-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>384</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/c6a/c6ae8f52e88f35d49989cb688e5a84d1.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателей для  Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10362" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-100-sht-0171122001-28913/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6657</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/d1c/d1ce3b9b179fbd0916f18c4886365194.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4,0мм (100 шт. в пластике ) 01.71122.001 (28913), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10363" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/razdvizhnaya-nazalnaya-voronka-dlya-basic-set-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2024</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/580/5809098735de82298ced858fdbb7730d.jpg</picture>
<vendor>Kawe</vendor>
<name>Раздвижная назальная воронка для Basic-Set, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10364" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-v-plastike-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5325</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/adb/adbbcd01e6cae88949a659e08b1326cd.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10365" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-25mm-1000-sht-rossypyu-0171211002-28900/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4474</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/faa/faa0d93188817e3f7c997610cbdd3721.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые серые маленькие, ? 2.5 мм, (1000 шт. в карт.упаковке) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10366" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-100-sht-v-plastike-0171222001-28911/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5325</price>
<currencyId>RUB</currencyId>
<categoryId>3344</categoryId>
<picture>https://kawe.su/upload/iblock/99e/99e3e5197796138e7ad71d81e081e480.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (100шт. в пластике), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10367" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-4mm-1000-sht-rossypyu-0171221002-28901/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4474</price>
<currencyId>RUB</currencyId>
<categoryId>3341</categoryId>
<picture>https://kawe.su/upload/iblock/35a/35a939285af7ce9d9ec8e8ec805770c6.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 4мм (1000 шт. в карт.упаковке) 01.71221.002 (28901),KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10368" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/otoskop-piccolight-fo-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6923</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/239/23964b7514e14fbd236a4f127b992f9f.jpg</picture>
<vendor>Kawe</vendor>
<name>Отоскоп PICCOLIGHT F.O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10369" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-253545559mm-5-sht-0172106001/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2397</price>
<currencyId>RUB</currencyId>
<categoryId>3342</categoryId>
<picture>https://kawe.su/upload/iblock/e0b/e0bd9ec58388d022884fcee12b1d6ea6.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.5, 3.5, 4.5, 5.5, 9.0 мм (5 шт. в пластике)  01.72106.001, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10370" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-25-mm-1000-sht-0171111002-28902/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5389</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/76f/76f4ad0a7a3e30e1013e1953295207d9.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок одноразовых 2,5 мм (1000 шт., в карт.упаковке) 01.71111.002 (28902), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10371" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-odnorazovykh-40-mm-1000-sht-0171121002-28903/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5389</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/c5f/c5f398f2b1a48169cd9275746ea066ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Воронки одноразовые черные большие 4,0 мм (1000 шт., в карт.упаковке) 01.71121.002 (28903), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10372" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/mnogorazovye-ushnye-voronki-dlya-veterinarnogo-otoskopa---nabor--40--50--70-mm-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2716</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/25c/25c4ebba8a37b3fc1a348365bb0c61ac.jpg</picture>
<vendor>Kawe</vendor>
<name>Многоразовые ушные воронки  для ветеринарного отоскопа -  набор, ? 4.0, 5.0, 7.0 мм, 3 шт. в пластике, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10373" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-vyet-v-upakovke-3sht-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2770</price>
<currencyId>RUB</currencyId>
<categoryId>3340</categoryId>
<picture>https://kawe.su/upload/iblock/b70/b709723615fce393062142293de6c9c5.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых ВЕТ  (в упаковке 3шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10374" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-odnorazovye/nabor-voronok-odnorazovykh-d--25-mm-100sht-v-korobke-kartonnoy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>524</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/090/0906530ac327999f8baed4b3201f7526.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор  воронок одноразовых 100шт в коробке картонной, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10375" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7776</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/18b/18ba29da5fc7f00768b37b677375fc04.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп 2.5 V в комплектации, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10376" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-25-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8841</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e99/e99fb67cc4f9d8409d0168db513e717d.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп 2.5 V в комплектации, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10377" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13527</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/26e/26ed81a73692737cb13857fbe54e71f7.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп 3.5 V в комплектации, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10378" available="true">
<url>https://kawe.su/catalog/rinoskopy-dlya-lor-vrachej/rinoskop-35-v-v-komplektatsii-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22899</price>
<currencyId>RUB</currencyId>
<categoryId>2820</categoryId>
<picture>https://kawe.su/upload/iblock/ddf/ddf22765a2be46a1adddf7922ef7ceb1.jpg</picture>
<vendor>Kawe</vendor>
<name>Риноскоп 3.5 V в комплектации, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10379" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/d65/d657f0f0901a7bd6c46d35f443ad16d0.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 2,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10380" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13527</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/e0c/e0c61d700be5d874c5e3d1a28a131c4e.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe,в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10381" available="true">
<url>https://kawe.su/catalog/diafanoskop/diafanoskop-transillyuminator-35v-kawe_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22899</price>
<currencyId>RUB</currencyId>
<categoryId>3152</categoryId>
<picture>https://kawe.su/upload/iblock/a41/a41d3657e78c86805f2e2d29f7a9950e.jpg</picture>
<vendor>Kawe</vendor>
<name>Диафаноскоп (трансиллюминатор) 3,5V, KaWe, в комплектации</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10382" available="true">
<url>https://kawe.su/catalog/klinki-tepro-macintosh-f-o-kawe-germaniya/klinok-flaplight-2-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8734</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/dba/dbab394679cba6f5c502f92c74b7bdc0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №2 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10383" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-2-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26094</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/cb2/cb24e918380d9be0d1257deee654407b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №2 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10384" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_flaplight_3_fo_s_podvizhnym_nakonechnikom_so_smennym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26094</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/50b/50baefc944cac49fece3f621d7d8abbc.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №3 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10385" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-flaplight-4-f-o-s-podvizhnym-nakonechnikom-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26094</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/551/551fd4c224d5fcde2f03340048b3ef0c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа FLAPLIGHT №4 F. O. с подвижным наконечником, со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10386" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--2-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27159</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/6bf/6bf29ab525a89c4fb0d6b3279960d7d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №2 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10387" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok_megalight_flaplight_3_f_o_s_podvizhnym_nakonechnikom_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27159</price>
<currencyId>RUB</currencyId>
<categoryId>2888</categoryId>
<picture>https://kawe.su/upload/iblock/ab9/ab90ae1cbf67ac310b87cc6eca998bbe.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №3 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10388" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-f-o-kawe-germaniya/klinok-megalight-flaplight--4-f-o-s-podvizhnym-nakonechnikom-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27159</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a42/a420d004c6af36c23ea843ff8c97b295.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа MEGALIGHT FLAPLIGHT №4 F. O. с подвижным наконечником, с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10389" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/7af/7af8c8d1436454e304c47fd25a0abc2d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №0 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10390" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-1-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/d59/d59672118807ae32079ff60f5bedbd07.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №1 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10391" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e4b/e4b8e9472810323d9e8dd09940fbf3d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №2 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10392" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-3-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/6ef/6ef36d6578be59084a959335543e4d6f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №3 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10393" available="true">
<url>https://kawe.su/catalog/klinki-foregger-f-o-kawe-germaniya/klinok-foregger-4-f-o-so-smennim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2889</categoryId>
<picture>https://kawe.su/upload/iblock/034/034ed15e988e729b571947f869b81439.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки Foregger №4 (многоразовые, фиброоптический) со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10394" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/68e/68edefb8b62952e09826f801812e297e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №0 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10395" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/91d/91dd53091a4a003ef86f889ff328f035.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №1 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10396" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/aec/aecf35b417d25741e15c61055045c577.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №2 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10397" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/15b/15bdf3a326b22480453458e274ee85a6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №3 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10398" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/linok-macintosh--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/927/927850eafa2d21bcd58858ba24f14645.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №4 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10399" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-f-o-kawe-germaniya/klinok-macintosh--5-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2890</categoryId>
<picture>https://kawe.su/upload/iblock/753/753cf90dc94fec2c1e90476f5cca838c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Macintosh №5 F. O. со сменным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10400" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/6fe/6fe961356c27bf3f51035c2fdecc02c3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10401" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/c2e/c2efa2b7764182e2049b65a128382601.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10402" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh-3-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/27d/27d1383e12b84c54431cb91346497868.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10403" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--2-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/95b/95b85bd72160b6648d7a6fb900829a55.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10404" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok_megalight_macintosh_4_f_o_s_integrirovannym_svetovodom_kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2892</categoryId>
<picture>https://kawe.su/upload/iblock/ee0/ee00048ccd0c76925c65ed1752d692af.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10405" available="true">
<url>https://kawe.su/catalog/klinki-megalight-macintosh-f-o-kawe-germaniya/klinok-megalight-macintosh--5-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/347/34783c6ac25797b62716e0bf1f8008ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Macintosh №5 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10406" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--00-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/377/37783c31d0a34147429191975f8009a6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №00 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10407" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--0-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/281/281bdf50894ac3257fa87df090de5ae0.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №0 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10408" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--1-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/635/635dfd7c46261e4c4fa8703b75f1d4b6.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №1 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10409" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller-2-f-o-s-integrirovannim-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/1a2/1a2bed5b981281d2fbc53c052fdbaf76.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №2 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10410" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--3-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/939/939ca0d1311af36d2c17e25d2098d10c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №3 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10411" available="true">
<url>https://kawe.su/catalog/klinki-megalight-miller-f-o-kawe-germaniya/klinok-megalight-miller--4-f-o-s-integrirovannym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9160</price>
<currencyId>RUB</currencyId>
<categoryId>2893</categoryId>
<picture>https://kawe.su/upload/iblock/38a/38a01b489f5100e93e1c03fcecb2b7f4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок MEGALIGHT Miller №4 F. O. с интегрированным световодом KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10412" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--00-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/295/2954ba8263f2f60b3ef780b46a8fbe40.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №00 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10413" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--0-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/5f8/5f81aaa2ba600c04dc9c818ae562b320.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №0 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10414" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--1-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/b96/b966f363d5494a1ab1aae3817c226535.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №1 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10415" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--2-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/f38/f384bbf982fccca6c0992f97738b6e63.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №2 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10416" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--3-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/d67/d67eb998c516d99d18941f380bf72cae.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №3 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10417" available="true">
<url>https://kawe.su/catalog/klinki-miller-f-o-kawe-germaniya/klinok-miller--4-f-o-so-smennym-svetovodom-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2894</categoryId>
<picture>https://kawe.su/upload/iblock/0b9/0b94d8a8d811a2e3ecd517c99a5bf3dd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller №4 F. O. со сменным световодом в ларингоскоп KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10418" available="true">
<url>https://kawe.su/catalog/klinki-polio-f-o-kawe-germaniya/klinok-polio-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8627</price>
<currencyId>RUB</currencyId>
<categoryId>2895</categoryId>
<picture>https://kawe.su/upload/iblock/d84/d84ab47c946e3fb08ea2165d7e10a54d.jpg</picture>
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
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/853/85392402a2d1c5712480112586ddf492.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10429" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--00-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/5c6/5c6d59e3761e56100ee3d8fcc3c742f4.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10430" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--4-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22047</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/32f/32fe8eee33b3b02517af993a3cca9c49.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №4 F. O. KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10431" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-2-c-s-podvizhnym-nakonechnikom-dlinavysota-10021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15657</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b3b/b3b1ad9dbf45e0819993b0224962173d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопа Flaplight №2 C с подвижным наконечником (длина/высота, 100/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10432" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-3-c-s-podvizhnym-nakonechnikom-dlinavysota-13021-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15657</price>
<currencyId>RUB</currencyId>
<categoryId>2877</categoryId>
<picture>https://kawe.su/upload/iblock/190/1902fc745ab7f5dee728c8c8457212d3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №3 C с подвижным наконечником (длина/высота, 130/21 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10433" available="true">
<url>https://kawe.su/catalog/klinki-flaplight-c-kawe-germaniya/klinok-flaplight-4-c-s-podvizhnym-nakonechnikom-dlinavysota-15025-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15657</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/aed/aed7306f453390731d7421309395ec9c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ларингоскопический Flaplight №4 C с подвижным наконечником (длина/высота, 150/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10434" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/linok-foregger-2-c-pryamoy-dlinavysota-11215-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/21b/21b118540a669cd9e35e87cdc8edff5b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №2 C прямой (длина/высота, 112/15 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10435" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-3-c-pryamoy-dlinavysota-13216-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2876</categoryId>
<picture>https://kawe.su/upload/iblock/db8/db8b102388b35e4a083cdd7e4f147624.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №3 C прямой (длина/высота, 132/16 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10436" available="true">
<url>https://kawe.su/catalog/klinki-foregger-c-kawe-germaniya/klinok-foregger-4-c-pryamoy-dlinavysota-15718-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3186</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a64/a6423fc0b5e081f5fd68669b600513ab.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Foregger №4 C прямой (длина/высота, 157/18 мм) в ларингоскопы KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10437" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinki-tyepro-makintosh-s-4-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4260</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e0f/e0fa8e9130b11c0243af20dc6d939b5f.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинки ТЕПРО Макинтош С №4 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10438" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-3-s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4793</price>
<currencyId>RUB</currencyId>
<categoryId>2878</categoryId>
<picture>https://kawe.su/upload/iblock/22c/22cce337858d3f73a0e5a4196a819407.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio №3 С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10439" available="true">
<url>https://kawe.su/catalog/klinki-polio-c-kawe-germaniya/klinok-polio-4s-izognutyy-dlya-slozhnykh-intubatsiy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4793</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/780/7804a552dcd9d8aa605c37fdfdd0cc4e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Polio №4С изогнутый для сложных интубаций KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10442" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--0-c-dlinavysota-8015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/192/192a8aad0ccc71b0ff9a206ac6594421.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №0 C (длина/высота, 80/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10443" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--1-c-dlinavysota-9520-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/c6d/c6df4b1f5d99abbe75766bb5847a7aac.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 C (длина/высота, 95/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10444" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--2-c-dlinavysota-11220-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/1be/1bed31c34937b880706a22a97ec128a2.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 C (длина/высота, 112/20 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10445" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--3-c-dlinavysota-13324-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/9e3/9e366bd945be5925931180acfe5eac07.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 C (длина/высота, 133/24 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10446" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--4-c-dlinavysota-15325-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/1bc/1bcbdbe4ef9900e16f27a76615101078.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 C (длина/высота, 153/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10447" available="true">
<url>https://kawe.su/catalog/klinki-serii-macintosh-yesonomy-c-kawe-germaniya/klinok-macintosh-economy--5-c-dlinavysota-17925-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1768</price>
<currencyId>RUB</currencyId>
<categoryId>2881</categoryId>
<picture>https://kawe.su/upload/iblock/4e5/4e5655ed2ea68db4b59b8acad9696613.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 C (длина/высота, 179/25 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10448" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--1-c-dlinavysota-10312-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/841/8413b0731ec44e1f8a74766be0772cae.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 C (длина/высота, 103/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10449" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--2-c-dlinavysota-16015-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/93e/93e14676d24162a4808fb9734511619d.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 C (длина/высота, 160/15 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10450" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--3-c-dlinavysota-20014-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2882</categoryId>
<picture>https://kawe.su/upload/iblock/6e3/6e382163f3ac1f6e96812ea628b14515.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 C (длина/высота, 200/14 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10451" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--4-c-dlinavysota-21017-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ac2/ac251ab902eb8cc37a206721ebd52728.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 C (длина/высота, 210/17 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10452" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--00-c-dlinavysota-6812-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/54b/54be92388f4038f39bb896abedbd82bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №00 C (длина/высота, 68/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10453" available="true">
<url>https://kawe.su/catalog/klinki-serii-miller-yesonomy-c-kawe-germaniya/klinok-miller-economy--0-c-dlinavysota-8112-mm-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1759</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/119/119921f106efc81955b67dfa1a481805.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 C (длина/высота, 81/12 мм) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10454" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/c86/c86bf47751f7c5a3f992c054bee29f3b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №00  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10455" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy--0-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0e0/0e0f12b85b68bcc34e49b92b43c09136.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №0 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10456" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7669</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/0f5/0f58619470819b673d23b89f740db397.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10457" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11929</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/670/670aa51a21f6e8f5f65261317cd7a4d4.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10458" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm-25-v-standartnoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7776</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/967/967a91dcac6e6fe541fb4f322a8c8e12.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) 2,5 В стандартной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10459" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm-25-v-povyshennoy-yarkosti-s-led-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12036</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/87a/87a21b293a30ab6a49f450e8e0ae4864.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В повышенной яркости с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10460" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-led-d28mm--akkumulyator-35v-li-lon-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20663</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/37f/37ffaf2ce9d890ab5633a0241fbf7bbc.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя LED (d=28мм) + аккумулятор 3,5V Li-lon осветителем повышенной яркости для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10462" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-led-osvetitelem-povyshennoy-yarkosti-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19171</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/f0d/f0d4e0ea1e7e60e4e8303b3d72e52adf.jpg</picture>
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
<price>6604</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/907/9070a2a8b8386375b1a103219196526d.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) 2,5 В с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10466" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28mm--akkumulyator-35v-li-lon-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13208</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/193/193942ffaf06f1e83af5971b84099428.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28мм) + аккумулятор 3,5V Li-lon, NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10467" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-d28-mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20343</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/a4b/a4bc6af6be659c4c2534eda42dd6c035.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя (d=28 мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10468" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6923</price>
<currencyId>RUB</currencyId>
<categoryId>3146</categoryId>
<picture>https://kawe.su/upload/iblock/411/411cbe3b833e4e5f5fdebc853e7d935f.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10469" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-d32-mm-25-v-rabotaet-tolko-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6923</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/550/55009106a00265a5eb57d4d988e43313.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32 мм) 2,5 В (работает только от батареек) с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10470" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyat-25v-ekonom-fo-d-30mm-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5325</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bfa/bfabcea52cd541d15178ec551b69f38c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка 2,5В (d= 30мм)  Эконом F.O.</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10471" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19mm--akkumulyator-35v-nimh-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14805</price>
<currencyId>RUB</currencyId>
<categoryId>2903</categoryId>
<picture>https://kawe.su/upload/iblock/793/7931f6eeec35d559b3d01ff6e09ddd97.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая (d=19мм) + аккумулятор 3,5V NiMH с ксеноновым осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10472" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-malaya-25-v-d19mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3409</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/a73/a731dd80702e69bb88038f5bcb322451.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка малая 2,5 В (d=19мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10473" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-srednyaya-25-v-d28-mm-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3622</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/4cf/4cfa37c32ff7f05cd280c2e43e00ace0.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка средняя 2,5 В (d=28 мм) для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10474" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-bolshaya-25-v-d32-mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/ef2/ef216fa95c742c116111ec610ed68ded.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка большая 2,5 В (d=32 мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10475" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyatka-economy-25-v-d30mm-rabotaet-tolko-ot-batareek-dlya-lampochnykh-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2769</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/479/47987ea202555bd5da04206a121b17f2.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка Economy 2,5 В (d=30мм) работает только от батареек для лампочных ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10477" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--3-klinka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2344</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/7fa/7fa064d1b1fe18c395939e44ccd2e65d.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 3 клинка Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10478" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--5-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3089</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bb9/bb93ce00e6f96563a9fba8874dd35996.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 5 клинков Макинтош) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10479" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-1-rukoyat--7-klinkov--kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/da2/da217b5a96865851843cf01edfb78537.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (1 рукоять + 7 клинков Макинтош и Миллер ) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10480" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--2-klinka-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3941</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/c25/c25bec96a678edcd7038b05b8f4ca51b.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 2 клинка FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10481" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/sumochka-dlya-laringoskopa-rukoyat--4-klinka-sinyaya-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>906</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/b76/b76d959a8920eda83606b9718b851e78.jpg</picture>
<vendor>Kawe</vendor>
<name>Сумочка для ларингоскопа (рукоять + 4 клинка) синяя KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10482" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/futlyar-dlya-laringoskopa-rukoyat--1-klinok-flaplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3867</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/e76/e76010baf7d0d4ae25222c2f92d950b4.jpg</picture>
<vendor>Kawe</vendor>
<name>Футляр для ларингоскопа (рукоять + 1 клинок FLAPLIGHT) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10483" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/kartonnyy-boks-na-4-klinka-i-1-rukoyatkwe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>941</price>
<currencyId>RUB</currencyId>
<categoryId>2905</categoryId>
<picture>https://kawe.su/upload/iblock/2a0/2a061e877176f397d99f4bf5b057e40e.jpg</picture>
<vendor>Kawe</vendor>
<name>Картонный бокс на  4 клинка и 1 рукоять,KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10484" available="true">
<url>https://kawe.su/catalog/rostomery/nastennyy-rostomer-ruletka-person-check-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1843</price>
<currencyId>RUB</currencyId>
<categoryId>2915</categoryId>
<picture>https://kawe.su/upload/iblock/a51/a518ba0b0e37284bde069b9f0d389077.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенный ростомер (рулетка) Person-Check KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10487" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-iz-nerzhaveyushchey-stali-0911005002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7403</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/e7e/e7ecc913f1473163a78d97fcabe2260f.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка из нержавеющей стали KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10488" available="true">
<url>https://kawe.su/catalog/shtativy/infuzionnaya-stoyka-khromirovannaya-0911800002-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5273</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/a62/a62bf238a2f40464c9bdd6f69b0667f0.jpg</picture>
<vendor>Kawe</vendor>
<name>Инфузионная стойка хромированная KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10489" available="true">
<url>https://kawe.su/catalog/shtativy/stoyka-infuzionnaya-peredvizhnaya-iz-nerzhaveyushchey-stali-tyazhyolaya-dlya-infuzomatov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14059</price>
<currencyId>RUB</currencyId>
<categoryId>2928</categoryId>
<picture>https://kawe.su/upload/iblock/2b9/2b9b276f4533773fbb80f2f70deacb05.jpg</picture>
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
<price>5379</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/01d/01d142ab1de8253c0fcb38bdc82de13b.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор Фонариков диагностических CLIPLIGHT (6 шт разного цвета), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10496" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-dialight-xl-kawe-diagnosticheskiy_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3622</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/c1e/c1e0f38079908c47fe34026b6d53cf8a.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик медицинский диагностический DIALIGHT XL KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10497" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-cliplight-kawe-diagnosticheskiy-tsvetnoy-klipsa-s-vklyuchatelem/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>682</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/259/25922c7269fba4a42af67d611107da50.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик CLIPLIGHT KaWe диагностический цветной, клипса с включателем</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10498" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/derzhatel-shpatelya-dlya-cliplight-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/ba8/ba835c04d1c21ec1dec13dc11e2f3017.jpg</picture>
<vendor>Kawe</vendor>
<name>Держатель шпателя для CLIPLIGHT, Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10499" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-piccolight-e-56-s-led-lampoy-25v-sumochka-v-komplekte-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12781</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/e90/e90864addda5730f4e58488f52807a37.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп карманный PICCOLIGHT E 56 (с ЛЭД лампой 2,5В), сумочка в комплекте, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10500" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v-led-lampakawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16508</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/fed/fed75b58b6766113a274fe659f532301.jpg</picture>
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
<price>3089</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/379/379de3f95067035919035156258eed51.jpg</picture>
<vendor>Kawe</vendor>
<name>Настольное крепление для Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10537" available="true">
<url>https://kawe.su/catalog/meditsinskie-svetilniki-kawe-germania/nastennoe-kreplenie-dlya-masterlight-klassik-galogen-ili-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2344</price>
<currencyId>RUB</currencyId>
<categoryId>2868</categoryId>
<picture>https://kawe.su/upload/iblock/55a/55a07f0ae87d48a5dc3ac9ac1e2270ee.jpg</picture>
<vendor>Kawe</vendor>
<name>Настенное  крепление  для  Masterlight Классик (галоген или LED),Kawe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10549" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-ogolove-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21834</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/5d0/5d04cce8ecdd7835af401ab0673ca9ca.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на оголовье для Н-600 LED KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10550" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/akkumulyator-na-poyas-dlya-n-600-led-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27159</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/144/144c6af21658424e0e50f653889f2301.jpg</picture>
<vendor>Kawe</vendor>
<name>Аккумулятор на пояс для Н-600 LED  KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10551" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27958</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/4a9/4a9ff042fcf29c16262c7b36d53483c0.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10552" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-25-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27958</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/18e/18e2b15f1ac4a826cb6c1cbe6a79f235.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 2.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10553" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-340mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27958</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/4cd/4cdaaaaa84690dc389d84633e34cfd15.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 340мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10554" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/binokulyarnaya-lupa-35-x-420mm-uvelichenie-kh-rabochee-rasstoyanie-dlya-n-600-led-kawe-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27958</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/a90/a905ccdd121171a03435825d9af85e2a.jpg</picture>
<vendor>Kawe</vendor>
<name>Бинокулярная лупа 3.5 x 420мм (Увеличение х Рабочее расстояние) для Н-600 LED, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10555" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-90g-metallicheskaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2219</price>
<currencyId>RUB</currencyId>
<categoryId>2918</categoryId>
<picture>https://kawe.su/upload/iblock/688/6880bc7841ff02c9491ca8bf279ac20c.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 90г, металлическая рукоятка,  с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10556" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-planet-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16403</price>
<currencyId>RUB</currencyId>
<categoryId>2855</categoryId>
<picture>https://kawe.su/upload/iblock/de3/de3e6bd00e57a4f46a8bc00573685908.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Планет-Кардиолоджи KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10557" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-top-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11716</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/754/75442affd9e94032ea081ad2dcee24e9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Топ-Кардиолоджи, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10558" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetofonendoskop-profi-kardiolodzhi-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9906</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/bc6/bc618d9dea43a8d195f9d0a8b99c3029.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп кардиологический Профи-Кардиолоджи KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10559" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-petifon-kawe-pediatricheskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5539</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/b73/b73fe0bfed1996d21d3d252f9f05a4bd.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетоскоп Петифон KaWe педиатрический</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10560" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/stetoskop-multifon-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4953</price>
<currencyId>RUB</currencyId>
<categoryId>2853</categoryId>
<picture>https://kawe.su/upload/iblock/438/4380eb06e800e9faee74209e7700b35b.jpg</picture>
<vendor>Kawe</vendor>
<name>Stethoscope Мультифон KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10561" available="true">
<url>https://kawe.su/catalog/stetoskopy-kawe/fonendoskop-kawe-singl/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>528</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/157/157847fcaf1611a0b05cb14fc172a927.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонендоскоп KaWe Сингл</name>
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
<categoryId>2848</categoryId>
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
<price>2344</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/7da/7da6ab0a70eadc0bff4fc90d6a922224.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп учебный PLANO с 2-мя парами ушных дужек, только мембрана, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10570" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4474</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/03e/03e0045a1d3e0b8d8afefd7f8a5b42df.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10571" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-standart-prestizh-kawe-germaniya/stetofonendoskop-standart-prestizh-layt-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2557</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/078/07875d509f66be50dd9fcf4a3b29747b.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Стандарт-Престиж Лайт KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10572" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4367</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/550/5508b63d8bca21d42327d00c1cb5e470.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж KaWe детский</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10573" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-kinder-prestizh-kawe-detskiy-germaniya/stetofonendoskop-kinder-prestizh-layt-kawe-detskiy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2450</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/fa2/fa28337d6201a1bfebb804f19792d207.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Киндер-Престиж ЛАЙТ KaWe детский</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10574" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4260</price>
<currencyId>RUB</currencyId>
<categoryId>2852</categoryId>
<picture>https://kawe.su/upload/iblock/573/573aca28cc76a7a551ec2ad2cef7a9fa.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж KaWe неонатальный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10575" available="true">
<url>https://kawe.su/catalog/stetofonendoskop-bebi-prestizh-kawe-neonatalnyy-germaniya/stetofonendoskop-bebi-prestizh-layt-kawe-neonatalnyy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2450</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/48b/48b834842cbef44f333addeb8bc25374.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Бэби-Престиж ЛАЙТ KaWe неонатальный</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10576" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-varioflyeks-v-forme-toporika-po-fassbenderu-155g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4155</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/44b/44b0d4a86077cb55cff56e50759ebb73.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВАРИОФЛЕКС в форме топорика по Фассбендеру 155г, с иглой и кисточкой, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10577" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/nevrologicheskiy-molotochek-babinski-diskoobraznyy-95g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1901</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/232/23244e8693d8d46fd9a0f585be5a190d.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БАБИНСКИ дискообразный 95г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10579" available="true">
<url>https://kawe.su/catalog/seriya-buk/nevrologicheskiy-molotochek-buk-80g-plastikovaya-rukoyatka-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2033</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/a20/a207df82cf446436be438639663e2701.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек БУК 80г, пластиковая рукоятка, с кисточкой и иглой KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10581" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2504</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/8f4/8f416fe1a2a94c4bcdd09be1f3d6873c.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек Colorflex большой 110г, черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10583" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/nevrologicheskiy-molotochek-koloroflyeks-bolshoy-110g-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2504</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/71d/71d7227fcdd13e17d49c71d29961475f.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек КОЛОРОФЛЕКС большой 110г, синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10584" available="true">
<url>https://kawe.su/catalog/seriya-kolorfleks/molotochek-koloroflyeks-bolshoy-so-shtyrkom-bez-kistochki-i-igly-ves-110g-iz-plastika-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2504</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/789/78965c2f99dd8498941004e552e1ecf7.jpg</picture>
<vendor>Kawe</vendor>
<name>Молоточек KaWe КОЛОРОФЛЕКС, для диагностики рефлексов, большой, серый</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10585" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-175g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3178</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/f70/f70ebb7649c0deb27bac9dfb96d1e896.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 175г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10586" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-220g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3143</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/3b8/3b84988c25a6a73d1be07327c607eada.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 220г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10587" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3533</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/4fd/4fd2398787cca1c5b4229d4064bd67c0.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 210г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10588" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-tyazhelyy-190g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3250</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/a5e/a5ecefa30bd2501928e1e5e87cf0d9cd.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР тяжелый 190г, с кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10589" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-tromnyer-legkiy-150g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2823</price>
<currencyId>RUB</currencyId>
<categoryId>2920</categoryId>
<picture>https://kawe.su/upload/iblock/1f3/1f3ef5d5d6635c4f92b35cd7923657a6.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ТРОМНЕР легкий 150г, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10590" available="true">
<url>https://kawe.su/catalog/seriya-tromner-i-vitroe/nevrologicheskiy-molotochek-vitroye-tyazhelyy-210g-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2879</price>
<currencyId>RUB</currencyId>
<categoryId>3357</categoryId>
<picture>https://kawe.su/upload/iblock/31b/31b46c76f06568a892e40396519f4273.jpg</picture>
<vendor>Kawe</vendor>
<name>Неврологический молоточек ВИТРОЕ (Witroe) тяжелый 198 г, с иглой и кисточкой, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10592" available="true">
<url>https://kawe.su/catalog/nalobnye-osvetiteli-kawe-germaniya/kawe-h-800-lyed-nalobnyy-osvetitel-s-akkumulyatorom/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>111831</price>
<currencyId>RUB</currencyId>
<categoryId>2870</categoryId>
<picture>https://kawe.su/upload/iblock/1be/1befb99c9ef67e98c81ab9dbd174491e.jpg</picture>
<vendor>Kawe</vendor>
<name>KaWe H-800 LЕD Налобный осветитель с аккумулятором</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="10593" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>897</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/ac3/ac3bd0a3080631f336bf6e138c748241.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED синий, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73705" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/755/7559c5e626f084a05368af747e57c6c9.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73706" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0eb/0ebdee9eedbe816723138be1211e43e3.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73707" available="true">
<url>https://kawe.su/catalog/laringoskopy/klinok-macintosh-economy-4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/41e/41e326db434ca735e8e8ee3c905b476e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73708" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-5-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/899/89991e68b47376b959ef215683c87d9b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №5 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73709" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-flaplight-economy--3-f-o-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22047</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/a89/a89d3eba0ed7a2ffd18f65e48a71cbe1.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Flaplight Economy №3 F. O. KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73710" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--0-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/60e/60e4dd7cc5766cdd998d74d417dd801b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №0 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73711" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bf9/bf9662c0ac581783e197dadc3ac92749.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73712" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--2-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/899/899fe96ec1a81e8ed8aa78f834171603.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №2 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73713" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--3-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/503/503c307702bad8d7cdecb88216a787ae.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №3 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73714" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-miller-economy--4-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/2ab/2abd226f5e3df43a5c701a64b6871a94.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller Economy №4 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73715" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-flaplight-3/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8734</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/cc7/cc76dd4f8f1a228653bd32131895f26e.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №3 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73716" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-polio-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8627</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/352/35264cff45c7f23d07835904a9cc101b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок POLIO №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73717" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-flaplight-4/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8734</price>
<currencyId>RUB</currencyId>
<categoryId>2887</categoryId>
<picture>https://kawe.su/upload/iblock/c1a/c1aa85eead465f30723e73a5e838f47c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок TEPRO® Macintosh №4 KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73718" available="true">
<url>https://kawe.su/catalog/klinki-serii-economy-f-o-kawe-germaniya/klinok-macintosh-economy-1-f-o-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4687</price>
<currencyId>RUB</currencyId>
<categoryId>2900</categoryId>
<picture>https://kawe.su/upload/iblock/e82/e822fefb11c3412c88d285ff216e045b.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Macintosh Economy №1 F. O. KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73719" available="true">
<url>https://kawe.su/catalog/rasprodazha/klinok-tyepro-makintosh-s-2-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4260</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/b07/b07985a4991e8619f9d0c0add9088e26.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №2 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73720" available="true">
<url>https://kawe.su/catalog/klinki-macintosh-c-kawe-germaniya/klinok-tyepro-makintosh-s-3-izognutye-zubosberegayushchie-mnogorazovye-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4242</price>
<currencyId>RUB</currencyId>
<categoryId>2874</categoryId>
<picture>https://kawe.su/upload/iblock/46c/46ce118d417e66b34246a6132fb759a8.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок ТЕПРО Макинтош С №3 (изогнутые, зубосберегающие) многоразовые, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73721" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-0-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/711/71110bcf3038cfef24b9875fa4dde124.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №0  Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73722" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-1-metall-led-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/72f/72fb71d895a1928804824ba394a05f41.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №1  Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73723" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-00-metall-led-2-1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/f7f/f7fb317dbab0250580daa6285a866341.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №2 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73724" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/0e8/0e857622dabc5d1794b195a014d3650c.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №3 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73725" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-miller-pryamoy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/64b/64b013c83578be52562b1c149f7c88be.jpg</picture>
<vendor>Kawe</vendor>
<name>Клинок Miller (прямой) №4 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73726" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-1-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/81d/81d576a63ddaee2875bb9b7d4bd71ce1.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №1 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73727" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-2-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/4a6/4a6cdd918eb3b0a55a36e7c40d5e67ec.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №2 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73728" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-3-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/80a/80a6faf4a7c1a6890737023c1ef80979.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №3 Металл, LED </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73729" available="true">
<url>https://kawe.su/catalog/klinki-miller-c-kawe-led-germaniya/klinok-macintosh-izognutyy-4-metall-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>537</price>
<currencyId>RUB</currencyId>
<categoryId>2883</categoryId>
<picture>https://kawe.su/upload/iblock/f43/f43581fa6efb4974d131a19b87910367.jpg</picture>
<vendor>Kawe</vendor>
<name> Клинок Macintosh (изогнутый) №4 Металл, LED</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73732" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34249</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/5cd/5cdf81b65f04196de5cbd9ccc92eb59d.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73733" available="true">
<url>https://kawe.su/catalog/rukoyati-s-led-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-korotkaya-rabotaet-ot-batareek-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10661</price>
<currencyId>RUB</currencyId>
<categoryId>2902</categoryId>
<picture>https://kawe.su/upload/iblock/9c6/9c6c00359b9d18df58c3a487f23a5f15.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоятка короткая (d=32мм) 2,5 В (работает от батареек) с LED осветителем для F. O. ларингоскопов KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73734" available="true">
<url>https://kawe.su/catalog/rukoyati-s-ksenonovym-osvetitelem-dlya-fo-laringoskopov-kawe-germaniya/rukoyatka-malaya-d19-mm-25-v-batareechnayaakkumulyatornaya-s-ksenonovym-osvetitelem-dlya-f-o-laringoskopov-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7471</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/7ed/7ed10c5e965d61b1b3edda63e9874ef3.jpg</picture>
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
<price>62657</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/c29/c29f11f5bca34fb5a1b302897181280f.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73737" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50613</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/174/174ffa51d7096694cb96de2009967eb5.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков / Универсальный набор (неонатология, педиатрия, взрослые, на батарейках, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73738" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-neonatologii-i-pediatrii-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39815</price>
<currencyId>RUB</currencyId>
<categoryId>3141</categoryId>
<picture>https://kawe.su/upload/iblock/5c7/5c7ab66c0990f031239c72a217591a07.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на батарейках, лампа LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73739" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>68222</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/68b/68bd4537056d6497d665148716d7a685.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73740" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-batareykakh-lampochka-led/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>56178</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/8c8/8c8c44a15008dcd9001b8a9458836ec4.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, Универсальный набор (неонатология, педиатрия, взрослые) (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73741" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-batareykakh-lampochka-led_1/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36426</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/bb9/bb924caaccd8cba595dd27fc6d80d99f.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на батарейках, лампочка LED)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73742" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/23109/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48128</price>
<currencyId>RUB</currencyId>
<categoryId>3143</categoryId>
<picture>https://kawe.su/upload/iblock/2b4/2b4e572ebe0d2fec15970a039832d2db.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для неонатологии и педиатрии (на аккумуляторах, лампа ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73743" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41414</price>
<currencyId>RUB</currencyId>
<categoryId>3142</categoryId>
<picture>https://kawe.su/upload/iblock/c5e/c5ee32b4ddc7fa4a1b81ee017af05322.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73744" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/nabor-laringoskopov-dlya-vzroslykh-dlya-provedeniya-zatrudnennoy-intubatsii-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>76538</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/15d/15d90408b5ee2c244c9c20d977c7b319.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков для взрослых (для проведения затрудненной интубации) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73745" available="true">
<url>https://kawe.su/catalog/laringoskop-s-naborom-klinkov/universalnyy-nabor-neonatologiya-pediatriya-vzrozlye-na-akkumulyatorakh-lampochka-ksenon-/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64491</price>
<currencyId>RUB</currencyId>
<categoryId>2939</categoryId>
<picture>https://kawe.su/upload/iblock/071/0718b480001627932ef0de455793020e.jpg</picture>
<vendor>Kawe</vendor>
<name>Ларингоскоп с набором клинков, универсальный набор (неонатология, педиатрия, взрослые) (на аккумуляторах, лампочка ксенон)</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="73916" available="true">
<url>https://kawe.su/catalog/nevrologicheskie-molotochki-kawe/molotochek-babinski-diskoobraznyy-ves-70g-gibkaya-rukoyatka-iz-plastika-s-rezboy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1704</price>
<currencyId>RUB</currencyId>
<categoryId>2917</categoryId>
<picture>https://kawe.su/upload/iblock/b6e/b6e2b898aad78fcff6e46982a05768b5.jpg</picture>
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
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54602</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/c32/c3274feedd9e6430d28efca097426f16.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74433" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>84051</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/f45/f4502800f8303814642d830f409d6d6d.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74434" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>58890</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/be4/be43cd4a432cb6e518972989d0f7b2c5.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74435" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>57115</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/fc3/fc334ae57ce570877846bbbfe75fe36d.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E55, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74436" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88134</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/aa8/aa863f6027b3df6ac92ca3ecf697835e.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E25, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74437" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede25-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>94170</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/6b8/6b8804703415b2f3a843dab150abf758.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E25, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-ce56-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>58685</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/891/89123cf78bd6d27783a51495b95805a3.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор C/E56, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede56-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64720</price>
<currencyId>RUB</currencyId>
<categoryId>2808</categoryId>
<picture>https://kawe.su/upload/iblock/a1b/a1b3c8e745ca5dca87f17213aa9b7b3e.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E56, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74440" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-lornabory-kawe/medcenter-5000-nabor-fo-lede55-s-modulem-voronok-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63061</price>
<currencyId>RUB</currencyId>
<categoryId>2807</categoryId>
<picture>https://kawe.su/upload/iblock/b11/b11a4bf40953afc635063bb5b64adc56.jpg</picture>
<vendor>Kawe</vendor>
<name>MedCenter® 5000 Набор FO LED/E55, с модулем воронок, 3,5 V, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74441" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33270</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/81d/81d2da4933d1ca80e2795a1a65221d6f.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74442" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4048</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/4e3/4e3773124c1e564a596e9ccb4efd7fe6.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 2,5V, KAWE, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74443" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/oftalmoskop-piccolight-c-35-v-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37605</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/46e/46e205272eab36847d4bb6c644915a71.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп PICCOLIGHT C 3.5 V с модулем воронок, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74444" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/golovka-transillyuminatora-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4155</price>
<currencyId>RUB</currencyId>
<categoryId>2799</categoryId>
<picture>https://kawe.su/upload/iblock/e64/e644c29f597d6b33ab8f2203706892ef.jpg</picture>
<vendor>Kawe</vendor>
<name>Головка трансиллюминатора 3,5V, KAWE, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74445" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37277</price>
<currencyId>RUB</currencyId>
<categoryId>2802</categoryId>
<picture>https://kawe.su/upload/iblock/9cb/9cbd4fff33bcf4e773486eb559958223.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® FO LED 3.5 V, цвет белый, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74446" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-25v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3728</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/93e/93e6d89c4fedefce1d578c89789f6f7a.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 2,5V, KAWE, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74447" available="true">
<url>https://kawe.su/catalog/otoskopy-serii-piccolight/piccolight-fo-led-35-v-tsvet-belyy-s-modulem-voronok-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41449</price>
<currencyId>RUB</currencyId>
<categoryId>2800</categoryId>
<picture>https://kawe.su/upload/iblock/bd0/bd00947f70483a5cdf72b8cd41f72aec.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® FO LED 3.5 V, цвет белый, с модулем воронок, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74448" available="true">
<url>https://kawe.su/catalog/otoskopy-kawe-germaniya/nazalnyy-osvetitel-fibroopticheskiy-35v-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4155</price>
<currencyId>RUB</currencyId>
<categoryId>2801</categoryId>
<picture>https://kawe.su/upload/iblock/254/254308b3dab4aa46676055d07b75aa2d.jpg</picture>
<vendor>Kawe</vendor>
<name>Назальный осветитель фиброоптический 3,5V, KAWE, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74452" available="true">
<url>https://kawe.su/catalog/keysy-dlya-laringoskopov-kawe/keys-na-6-klinkov-miller-i-1-rukoyat-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3834</price>
<currencyId>RUB</currencyId>
<categoryId>2871</categoryId>
<picture>https://kawe.su/upload/iblock/02c/02c86bc852d75cfbc66ff3e14557e191.jpg</picture>
<vendor>Kawe</vendor>
<name>Кейс на 6 клинков Miller и 1 рукоять, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74453" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e25-35-v-tsvet-belyy-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>67366</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/7a3/7a39c68b0c3338a74106af56c08e5cd4.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп EUROLIGHT® E25, 3.5 V, цвет белый, KaWe, Германия</name>
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
<price>37916</price>
<currencyId>RUB</currencyId>
<categoryId>2827</categoryId>
<picture>https://kawe.su/upload/iblock/509/509e89382065a258e8a5ab6b0877804b.jpg</picture>
<vendor>Kawe</vendor>
<name>PICCOLIGHT® E56, 3.5 V, цвет белый, USA-версия, синий фильтр, KaWe, Германия</name>
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
<price>528</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/0ea/0eaf01445e0e7177cb74fa7a5fc0350e.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Planophon, плоская головка, KaWe, Германия			 </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="74460" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-duoscope-dvoynaya-golovka-kawe-germaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>565</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/568/5681182a65c53026a1269a471b4fc385.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Duoscope, двойная головка, KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75432" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-50-mm-10-sht-0172216001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/f74/f7404548aee5b4c6122fce754c5b9e9c.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 5,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75433" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-mm-10-sht-0172214001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/c3b/c3b030c0a7475e43a65b0230186d9957.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75434" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-20-25-30-40-50-mm-10-sht-0172210001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/ef1/ef1433c0d1b3892e27f6ea89cd0eae69.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 2.0, 2.5, 3.0, 4.0, 5.0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75435" available="true">
<url>https://kawe.su/catalog/voronki-ushnye-k-otoskopam-kawe-germaniya/nabor-voronok-mnogorazovykh-30-mm-10-sht-0172215001-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2806</categoryId>
<picture>https://kawe.su/upload/iblock/eb3/eb33836f560288ef7e438e3003eddbc4.jpg</picture>
<vendor>Kawe</vendor>
<name>Набор воронок многоразовых 3,0 мм (10 шт), KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75436" available="true">
<url>https://kawe.su/catalog/rukoyatki-dlya-lampochnykh-laringoskopov-kawe-germaniya/rukoyat-25v-malaya-d19mm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6710</price>
<currencyId>RUB</currencyId>
<categoryId>2904</categoryId>
<picture>https://kawe.su/upload/iblock/e45/e45fd0e284421a9acdf24b02bfd08a1c.jpg</picture>
<vendor>Kawe</vendor>
<name>Рукоять 2,5 В малая (d=19мм) Ф.О. ксенон, KaWe </name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75437" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>895</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/f1e/f1e1ab032f15e7577947acb51190aa02.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED красный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75438" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-chernyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>897</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/eca/eca44fbed30e5cd8691a8a0a4ee6e21a.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED черный, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75439" available="true">
<url>https://kawe.su/catalog/diagnosticheskie-fonariki-kawe-germaniya/fonarik-diagnosticheskiy-cliplight-led-zhyoltyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>897</price>
<currencyId>RUB</currencyId>
<categoryId>2826</categoryId>
<picture>https://kawe.su/upload/iblock/7f0/7f0a6d43fd1c22e789d1dd1edeb09bae.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED жёлтый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75440" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>897</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/089/0897e8fe92e520fa0e4f38e34fe14391.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED фиолетовый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75441" available="true">
<url>https://kawe.su/catalog/diagnosticheckie-fonariki/fonarik-diagnosticheskiy-cliplight-led-seryy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>897</price>
<currencyId>RUB</currencyId>
<categoryId>2825</categoryId>
<picture>https://kawe.su/upload/iblock/da2/da2c62bdb794ce96980a7be6f33dc200.jpg</picture>
<vendor>Kawe</vendor>
<name>Фонарик диагностический CLIPLIGHT LED серый, KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75442" available="true">
<url>https://kawe.su/catalog/oftalmoskopy-kawe/oftalmoskop-eurolight-e36-25v/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15657</price>
<currencyId>RUB</currencyId>
<categoryId>2828</categoryId>
<picture>https://kawe.su/upload/iblock/1c7/1c7fa6e2dcbc0438fe45f58a700db72b.jpg</picture>
<vendor>Kawe</vendor>
<name>Офтальмоскоп Eurolight E36 2,5V KaWe, Германия</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75443" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-krasnyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2854</categoryId>
<picture>https://kawe.su/upload/iblock/436/436f0526aaa6ff26b3d5e7c1254e33be.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) красный KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75444" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-siniy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/16a/16a284d3f41825c58b4c93259813fab9.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) синий KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75445" available="true">
<url>https://kawe.su/catalog/stetoskopy-rapporta/stetofonendoskop-rapport-zelenyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2848</categoryId>
<picture>https://kawe.su/upload/iblock/ffa/ffa5cef570e41ee7c27d991d45915cb8.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) зеленый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75446" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-fioletovyy-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1598</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/7c1/7c133276b10074c62789f9030cdbb809.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт фиолетовый KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
<offer id="75447" available="true">
<url>https://kawe.su/catalog/stetoskopy-i-fonendoskopy/stetofonendoskop-rapport-chernyy-black-line-kawe/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1918</price>
<currencyId>RUB</currencyId>
<categoryId>2847</categoryId>
<picture>https://kawe.su/upload/iblock/3d3/3d338fd8f4a9f62791344cd1b5572a4a.jpg</picture>
<vendor>Kawe</vendor>
<name>Стетофонендоскоп Раппорт (Rapport) черный (Black line) KaWe</name>
<description></description>
<sales_notes>Минимальный заказ 1т.р Работаем с физ.,юр.лицами</sales_notes>
<country_of_origin>Германия</country_of_origin>
</offer>
</offers>
</shop>
</yml_catalog>
