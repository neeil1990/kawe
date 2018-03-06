<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


?>

	<div class="title"><?=$arResult['NAME']?></div>
	<div class="cart">
		<div class="cart__gallery">
			<div class="cart__rate">
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star"></i>
				<i class="icon-star-o"></i>
			</div>
			<div class="cart__alert">new</div>

			<ul class="cart__slider">

				<li class="cart__slider_item" data-thumb="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg" alt="">
				</li>
				<li class="cart__slider_item" data-thumb="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg" alt="">
				</li>
				<li class="cart__slider_item" data-thumb="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/gallery.jpg" alt="">
				</li>

			</ul>

		</div>
		<div class="cart__content">
			<p>Арт: 252023а</p>
			<br>
			<p>Варианты:</p>
			<div class="cart__wrapper">
				<label class="cart__label">
					<input type="radio" name="color" class="cart__radio" checked><i></i>
					Черный
				</label>
				<label class="cart__label">
					<input type="radio" name="color" class="cart__radio"><i></i>
					Темно-серый
				</label>
				<label class="cart__label">
					<input type="radio" name="color" class="cart__radio"><i></i>
					Серый
				</label>
				<label class="cart__label">
					<input type="radio" name="color" class="cart__radio"><i></i>
					Белый
				</label>
			</div>

			<div class="cart__availability">В наличии</div>
			<div class="cart__price">17 124  Р</div>
			<div class="cart__desc">за штуку</div>
			<div class="cart__actions">

				<div class="cart__counter goods__counter">
					<div class="goods__counter_subtract">-</div>
					<input type="text" class="goods__counter_input" value="1" readonly>
					<div class="goods__counter_add">+</div>
				</div>

				<a href="#" class="cart__basket">В корзину</a>
			</div>
		</div>
	</div>

	<div class="tabs">
		<a href="#" class="tabs__nav">Описание</a>
		<div class="tabs__content text">
			<p>Повседневная практика показывает, что дальнейшее развитие различных форм деятельности требуют от нас анализа дальнейших направлений развития. Товарищи! реализация намеченных плановых заданий способствует подготовки и реализации дальнейших  направлений развития. Таким образом реализация намеченных плановых заданий:</p>
			<ul>
				<li>в значительной степени обуславливает;</li>
				<li>создание форм развития. Задача организации, в особенности.</li>
			</ul>
			<p>Дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке форм развития. С другой стороны сложившаяся структура организации способствует подготовки и реализации модели развития. Задача организации, в особенности же начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий.</p>
		</div>
		<a href="#" class="tabs__nav">Характеристики</a>
		<div class="tabs__content text">
			<table>
				<tr>
					<td>Бренд</td>
					<td>KAWE</td>
				</tr>
				<tr>
					<td>Виды апертуры</td>
					<td>европейская, американская</td>
				</tr>
				<tr>
					<td>Регулировка линз в диапазоне</td>
					<td>от +2 до -20</td>
				</tr>
			</table>
		</div>
		<a href="#" class="tabs__nav">Комплектация</a>
		<div class="tabs__content text">
			<p>Повседневная практика показывает, что дальнейшее развитие различных форм деятельности требуют от нас анализа дальнейших направлений развития. Товарищи! реализация намеченных плановых заданий способствует подготовки и реализации дальнейших  направлений развития. Таким образом реализация намеченных плановых заданий:</p>
		</div>

	</div>








