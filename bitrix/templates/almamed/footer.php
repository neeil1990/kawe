<? if(!CSite::InDir('/index.php')): ?>
</div>
<?endif;?>

<div class="footer">
    <div class="container">
        <div class="footer__wrapper footer__row">
            <div class="footer__col">
                <div class="footer__subscribe">
                    <i class="icon-email_big"></i>
                    <span>Подпишитесь! Новинки, скидки, предложения!</span>
                </div>
            </div>
            <div class="footer__col">

                <?$APPLICATION->IncludeComponent(
	"bitrix:sender.subscribe", 
	"sender.subscribe", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONFIRMATION" => "N",
		"HIDE_MAILINGS" => "N",
		"SET_TITLE" => "N",
		"SHOW_HIDDEN" => "N",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => "sender.subscribe",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>

            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="footer__row">
            <div class="footer__col">

                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom.menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "catalog_horizontal",
                    "MENU_THEME" => "site",	// Тема меню
                ),
                    false
                );?>

            </div>
            <div class="footer__col flex-3">
                <div class="footer__phone icon-phone">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_phone.jpg">
                    <span>88005555550</span>
                </div>
                <a href="#" class="footer__callback footer__link">Заказать звонок</a>
                <div class="footer__email icon-email">
                    <a href="mailto:<?=tplvar('email');?>" class="footer__link"><?=tplvar('email', true);?></a>
                    (Для заказов)
                </div>
            </div>
            <div class="footer__col flex-2">
                <div class="footer__copy icon-copyright"><?=date("Y")?> Все права защищены.</div>
                <a href="/upload/politics.pdf" target="_blank" class="footer__link">Политика конфиденциальности.</a>
                <a href="/upload/compliance.pdf" target="_blank" class="footer__link">Согласие на обработку персональных данных.</a>

                <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/incut/incut.js"></script>
                <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/incut/incut.css">
                <a class="prime-incut white colour marketing-only"></a>
            </div>
        </div>
    </div>
</div>




<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/alertify.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskinput.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script>



<!-- Yandex.Metrika counter от Prime -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48001034 = new Ya.Metrika({
                    id:48001034,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48001034" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>


