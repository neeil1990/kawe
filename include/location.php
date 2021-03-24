<? if(!$arCityes = include $_SERVER['DOCUMENT_ROOT'].'/.cityes.php') return false; ?>

<li class="nav__item">
    <a href="#" class="nav__link" id="location_btn" style="background: #c82c30;text-decoration: none;"><?=($_COOKIE['city']) ?: 'Выбор города'?></a>
</li>

<div class="mfeedback-p" id="location" style="max-width: 500px;">
    <span class="button b-close"><span>&times;</span></span>
    <div class="mfeedback-p-head">Выбор города</div>

    <? if($arCityes['show'] && $arCityes['hide']): ?>
    <div class="city">
        <? if($arCityes['show']): ?>
        <div class="item-city">
            <? foreach ($arCityes['show'] as $s):?>
            <a href="javascript:void(0)" class="c"><?=$s?></a>
            <? endforeach; ?>
        </div>
        <? endif; ?>

        <div class="item-city">
            <a href="javascript:void(0)" class="city-show" onclick="$(this).closest('.city').find('.item-city:last-child').toggle(); return false;">Показать все города</a>
        </div>

        <? if($arCityes['hide']): ?>
        <div class="item-city" style="display: none;">
            <? foreach ($arCityes['hide'] as $h):?>
            <a href="javascript:void(0)" class="c"><?=$h?></a>
            <? endforeach; ?>
        </div>
        <? endif; ?>
    </div>
    <? endif; ?>
</div>

<style>
    .city .item-city {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 10px auto;
        padding: 0 10px;
    }
    .city .item-city a {
        width: 140px;
        margin-bottom: 5px;
        color: #575b71;
        text-decoration: none;
    }
    .city .item-city a:hover {
        color: #c82c30;
    }
    .city .item-city a.city-show {
        flex-grow: 1;
        text-align: center;
    }
</style>

<script>
    $('#location_btn').click(function(){
        $('#location').bPopup({
            zIndex:1000,
            position: ['auto', 50]
        });
    });

    $('.city .item-city a.c').click(function(){
        var city = $(this).text();
        document.cookie = "city=" + city + "; path=/;";
        $('#location_btn').text(city);

        var bPopup = $('#location').bPopup();
        bPopup.close();
    });
</script>
