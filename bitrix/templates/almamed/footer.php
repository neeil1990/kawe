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
                <form action="#" class="subscribe__form">
                    <input type="email" class="subscribe__input" placeholder="">
                    <button class="subscribe__btn" type="submit">Подписаться</button>
                    <label class="subscribe__label">
                        <input type="checkbox" class="subscribe__checkbox" checked>
                        <i class="icon-checkbox"></i>
                        <span>Нажимая на эту кнопку, я даю свое <a href="/upload/compliance.pdf" target="_blank" class="footer__link">согласие на обработку персональных данных</a> и соглашаюсь с условиями <a href="/upload/politics.pdf" target="_blank" class="footer__link">политики конфиденциальности</a></span>
                    </label>
                </form>
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
                <div class="footer__copy icon-copyright">2018 Все права защищены.</div>
                <a href="/upload/politics.pdf" target="_blank" class="footer__link">Политика конфиденциальности.</a>
                <a href="/upload/compliance.pdf" target="_blank" class="footer__link">Согласие на обработку персональных данных.</a>

                <script type="text/javascript" src="http://incut.prime-ltd.su/incut/incut.js" async></script>
                <link rel="stylesheet" href="http://incut.prime-ltd.su/incut/incut.css">
                <a class="prime-incut white colour marketing-only"></a>
            </div>
        </div>
    </div>
</div>




<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/alertify.js"></script>
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


