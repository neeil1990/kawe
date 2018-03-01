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
                        <span>Нажимая на эту кнопку, я даю свое согласие на обработку персональных данных и соглашаюсь с условиями политики конфиденциальности</span>
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
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "catalog_horizontal",
                    "MENU_THEME" => "site",	// Тема меню
                ),
                    false
                );?>

            </div>
            <div class="footer__col flex-3">
                <div class="footer__phone icon-phone">8-800-100-37-97</div>
                <a href="#" class="footer__callback footer__link">Заказать звонок</a>
                <div class="footer__email icon-email">
                    <a href="mailto:info@kawerus.ru" class="footer__link">info@kawerus.ru</a>
                    (Для заказов)
                </div>
            </div>
            <div class="footer__col flex-2">
                <div class="footer__copy icon-copyright">2017 Все права защищены.</div>
                <a href="#" class="footer__link">Политика конфиденциальности.</a>
                <a href="#" class="footer__link">Согласие на обработку персональных данных.</a>
            </div>
        </div>
    </div>
</div>



<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

</body>

</html>


