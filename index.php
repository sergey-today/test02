<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Тестовое задание</title>

	<link rel="stylesheet" type="text/css" href="style_null.css?time=<? echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="style.css?time=<? echo time(); ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="script.jquery.js?t_time=<? echo time(); ?>" type="text/javascript"></script>
	
</head>
<body>

	<!-- <div id="mockup"></div> -->

	<div class="content">
		<div class="product">
			<div class="product__photo">
				<div class="product__photo-img"></div>
				<div class="product__photo-prev">
					<span class="product__photo-prev-content">
						<div data-link="2.jpg" class="product__photo-prev-content-img product_photo-prev-content-img_activ"></div>
						<div data-link="3.jpg" class="product__photo-prev-content-img"></div>
						<div data-link="4.jpg" class="product__photo-prev-content-img"></div>
					</span>
				</div>
			</div>
			<div class="product__delivery" data-region="<? echo ($_COOKIE['region']) ? $_COOKIE['region'] : 'Абакан' ?>">
				<div class="product_font-size_18 product_color_grey product_font-weight_600">Регион доставки:&#160;&#160;&#160;<span class="product__delivery-region product_color_black product_text-decoration_underline-dashed product_font-weight_800"></span></div>
				<div class="product__delivery-region-list">
					<ul>
						<li><span class="product_delivery-region_activ"></span></li>
						<li><span data-region="Абакан">Абакан</span></li>
						<li><span data-region="Бабакан">Бабакан</span></li>
						<li><span data-region="Вабакан">Вабакан</span></li>
						<li><span data-region="Габакан">Габакан</span></li>
						<li><span data-region="Дабакан">Дабакан</span></li>
						<li><span data-region="Краснодар">Краснодар</span></li>
					</ul>
				</div>
				<table class="product__delivery-table product_font-size_14">
					<tr>
						<td class="product__delivery-table-title">
							<span class="product_text-decoration_underline-dashed">Пункты самовывоза</span>
						</td>
						<td class="product__delivery-table-day">
							2 дня
						</td>
						<td class="product__delivery-table-price">
							165 <span class="product_text-decoration_line-through">Р</span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product__delivery-table-border"></td>
					</tr>
					<tr>
						<td class="product__delivery-table-title product_color_grey">
							Курьером
						</td>
						<td class="product__delivery-table-day product_color_grey">
							2 дня
						</td>
						<td class="product__delivery-table-price">
							305 <span class="product_text-decoration_line-through">Р</span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product__delivery-table-border"></td>
					</tr>
					<tr>
						<td class="product__delivery-table-title product_color_grey">
							Почта России
						</td>
						<td class="product__delivery-table-day product_color_grey">
							5-14 дней
						</td>
						<td class="product__delivery-table-price">
							250 <span class="product_text-decoration_line-through">Р</span>
						</td>
					</tr>
				</table>
				<div class="product__payment">
					<div class="product__payment-svg-wallet"><img src="svg/кошелек.svg"></div>
					<div class="product__payment-text-wallet product_font-size_14 product_font-weight_600">Оплата после<br>проверки</div>
					<div class="product__payment-svg-calendar"><img src="svg/календарь.svg"></div>
					<div class="product__payment-text-calendar product_font-size_14 product_font-weight_600">14 дней<br>на возврат</div>
				</div>
				<div class="product__questions">
					<div class="product__questions-text product_font-size_18 product_font-weight_600">Есть вопросы?<br>Звоните!</div>
					<div class="product__questions-number product_font-size_25 product_font-weight_600">8 (495) 105-98-18</div>
					<div class="product__questions-callback product_font-size_14 product_color_orange"><span class="product_font-size_18 product_font-weight_800">&#160;&#160;&#160;&#160;&#160;</span> Заказать обратный звонок</div>
				</div>
			</div>
			<div class="product__shopping">
				<div class="product__sep-dashed"></div>
				<div class="product__price">
					<div class="product__price-old-price product_font-size_18 product_color_grey product_text-decoration_line-through">3 700 <span class="product__rub">Р</span></div>
					<div class="product__price-price">2 290 <span class="product__rub">Р</span></div>
					<div class="product__price-economy"><span class="product_color_red product_font-size_18 product_font-weight_800"><span></span> <span class="product__rub">Р</span></span> <span>экономии</span></div>
					<div class="product__price-discount"></div>
					<div class="product__price-article">Код товара: <span class="product__price-article-number"><? echo rand(10000, 99999) ?></span></div>
					<div class="product__price-remains"><img src="svg/кружок-с-галочкой.svg"><div>На складе много</div></div>
					<div class="product__price-offer"><span class="product_color_grey">Нашли&#160;дешевле?</span> <span class="product_text-decoration_underline-dashed">Снизим&#160;цену!</span></div>
				</div>
				<div class="product__size">
					<div class="product__size-title">
						<span>Выберите размер</span>
					</div>
					<div class="product__size-content">
						<div data-size="S" class="product__size-content-i product__size-content-s product_size-content-i_enable product_size-content-i_activ">S</div>
						<div data-size="M" class="product__size-content-i product__size-content-m product_size-content-i_enable">M</div>
						<div data-size="L" class="product__size-content-i product__size-content-l product_size-content-i_enable">L</div>
						<div data-size="XL" class="product__size-content-i product__size-content-xl product_size-content-i_disable">XL</div>
						<div data-size="XXL" class="product__size-content-i product__size-content-xxl product_size-content-i_disable">XXL</div>
						<div class="product__size-content-img"></div>
						<div class="product__size-content-more"><span class="product_text-decoration_underline-dashed">Подобрать<br>оптимальный размер</span></div>
					</div>
				</div>
				<div class="product__basket">
					<div class="product__basket-input">
						<div class="product__basket-minus">-</div>
						<div data-count="1" class="product__basket-count">1</div>
						<div class="product__basket-plus">+</div>
					</div>
					<div class="product__basket-button">В корзину</div>
				</div>
				<div class="product__quick-order">
					<div class="product__quick-order-title">Быстрый заказ</div>
					<div class="product__quick-order-description product_color_grey">Вы можете не заполнять никаких форм, просто оставьте свой телефон<br>и наш менеджер свяжется с вами</div>
					<div class="product__quick-order-input">
						<input type="text" name="phone" value="+7 ( ___ ) ___ - __ - __" class="product__quick-order-input-phone">
					</div>
					<div class="product__quick-order-button">Заказать в один клик</div>
					<div class="product__sep-dashed"></div>
				</div>
			</div>
			<div class="product__description">
				<div class="product__description-menu">
					<table>
					<tr>
						<td class="product__description-menu-i product_description-menu-i_activ">
							Описание
						</td>
						<td class="product__description-menu-i">
							Характеристики
						</td>
						<td class="product__description-menu-i-l"></td>
					</tr>
				</table>
				</div>
				<div class="product__description-text">
					Помните веселого персонажа из мультфильма про кунг-фу? Энергичный, немного глуповатый и малость невезучий, По доказал каждому, что его возможности безграничны. Пожалуй, эта панда – настоящий символ настойчивости и упорства. Мы предлагаем вам облачиться в нежную черно-белую шерстку, которая так и просит «обними меня!».
					<br><br>
					Костюм мастера кунг-фу изготовлен из велсофта. Это позволяет коже дышать и не потеть, даже если вам предстоит веселить своих друзей весь день. Пижама застегивается на пуговички и плотно прилегает к рукам и ногам в области манжетов. Голову прикрывает яркая мордочка с ушками, которая завершает образ.
					<br><br>
					Панды – ленивые создания, но очень притягательные. Вам будет сложно отказать в объятиях. Почему бы не воспользоваться этой особенностью с пользой для себя? В таком костюме не важно, где именно будет ваша вечеринка. Главное то, что никто на ней вас точно не забудет. Покупая у нас, вы экономите в сравнении с конкурентами и получаете дешевую доставку «до двери». Торопитесь заказать пижаму «Кунг-фу Панда»!
				</div>
			</div>
		</div>
	</div>	

</body>
</html>