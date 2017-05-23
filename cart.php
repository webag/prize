<?php include('header.php'); ?>

<section class="s-cart-top l-block">
	<a href="#checkout" class="btn btn--outline btn--icon scrollto">К оформлению <i class="i-down-round"></i></a>
</section>


<section class="s-cart-list">

	<div class="cart-item">
		<div class="cart-item__col cart-item__thumb">
			<img src="img/products/1_s.jpg" alt="1">
		</div>
		<div class="cart-item__col cart-item__name">
			<span class="h5">Кубок 12043 (32 см) D-100</span>
		</div>
		<div class="cart-item__col cart-item__oldprice">
			<span>2 455 <span class="rub">a</span></span>
		</div>
		<div class="cart-item__col cart-item__price">
			<span>2 405 <span class="rub">c</span></span>
		</div>
		<div class="cart-item__col cart-item__num">
			<div class="numblock">
				<span class="numblock__btn">-</span>
				<input type="text" value="1">
				<span class="numblock__btn">+</span>
			</div>
		</div>
		<div class="cart-item__col cart-item__quantity">
			<span>Не более 39 шт.</span>
		</div>
		<div class="cart-item__col cart-item__delete">
			<a href="#" class="btn btn--outline btn--icon scrollto">Удалить <i class="i-close"></i></a>
		</div>
	</div>

	<div class="cart-item">
		<div class="cart-item__col cart-item__thumb">
			<img src="img/products/2_s.jpg" alt="2">
		</div>
		<div class="cart-item__col cart-item__name">
			<span class="h5">Кубок ФИФА (55 см, золото)</span>
		</div>
		<div class="cart-item__col cart-item__oldprice">

		</div>
		<div class="cart-item__col cart-item__price">
			<span>2 405 <span class="rub">c</span></span>
		</div>
		<div class="cart-item__col cart-item__num">
			<div class="numblock">
				<span class="numblock__btn">-</span>
				<input type="text" value="1">
				<span class="numblock__btn">+</span>
			</div>
		</div>
		<div class="cart-item__col cart-item__quantity">
			<span>Не более 4539 шт.</span>
		</div>
		<div class="cart-item__col cart-item__delete">
			<a href="#" class="btn btn--outline btn--icon scrollto">Удалить <i class="i-close"></i></a>
		</div>
	</div>

	<div class="cart-item">
		<div class="cart-item__col cart-item__thumb">
			<img src="img/products/2_s.jpg" alt="2">
		</div>
		<div class="cart-item__col cart-item__name">
			<span class="h5">Кубок ФИФА (55 см, золото) ФИФА Кубок золото</span>
		</div>
		<div class="cart-item__col cart-item__oldprice">

		</div>
		<div class="cart-item__col cart-item__price">
			<span>2 405 <span class="rub">c</span></span>
		</div>
		<div class="cart-item__col cart-item__num">
			<div class="numblock">
				<span class="numblock__btn">-</span>
				<input type="text" value="1">
				<span class="numblock__btn">+</span>
			</div>
		</div>
		<div class="cart-item__col cart-item__quantity">
			<span>Не более 4539 шт.</span>
		</div>
		<div class="cart-item__col cart-item__delete">
			<a href="#" class="btn btn--outline btn--icon scrollto">Удалить <i class="i-close"></i></a>
		</div>
	</div>

</section>


<section class="s-cart-bottom l-block l-block--margin">
	<div class="cart-totals">
		<span class="cart-totals__title">Итого:</span>
		<span class="cart-totals__sum">123 000 <span class="rub">c</span></span>
	</div>
	<a href="#" class="btn btn--outline btn--icon scrollto">Очистить корзину <i class="i-close"></i></a>
</section>


<section class="l-block--margin js-block-with-tabs" id="checkout">
	<div class="tab-links">
		<a href="#" class="h3 active">Без авторзиации</a>
		<a href="#" class="h3">Авторизоваться</a>
	</div>

	<!--Без авторзиации-->
	<form action="/thanks.php" class="tab-block checkout-form">

		<div class="l-block l-block--bb">
			<label class="style-radio">
				<input type="radio" name="type" checked>
				<span>Физическое лицо</span>
			</label>
			<label class="style-radio">
				<input type="radio" name="type">
				<span>Юридическое лицо</span>
			</label>
		</div>

		<div class="l-block l-block--bb">
			<div class="input-group">
				<span class="input-group__label">Имя</span>
				<div class="input-group__input-block">
					<input type="text">
				</div>
			</div>
			<div class="input-group">
				<span class="input-group__label">Телефон<mark>*</mark></span>
				<div class="input-group__input-block">
					<input type="text">
					<span class="input-group__note">Например: 89376201111</span>
				</div>
				<span class="input-group__error">Поле обязательно для заполнения</span>
			</div>
			<div class="input-group">
				<span class="input-group__label">E-mail<mark>*</mark></span>
				<div class="input-group__input-block">
					<input type="text" class="error">
				</div>
				<span class="input-group__error visible">Поле обязательно для заполнения</span>
			</div>
			<div class="input-group">
				<span class="input-group__label">Адрес доставки</span>
				<div class="input-group__input-block">
					<input type="text">
				</div>
			</div>
			<div class="input-group">
				<span class="input-group__label">Комментарий</span>
				<div class="input-group__input-block">
					<textarea rows="5"></textarea>
				</div>
			</div>
		</div>

		<div class="l-block l-block--bb">
			<div class="chechkout-option-block">
				<h4 class="h4">Доставка</h4>
				<label class="style-radio">
					<input type="radio" name="type2" checked>
					<span>До пункта выдачи</span>
				</label>
				<label class="style-radio">
					<input type="radio" name="type2">
					<span>До двери</span>
				</label>
			</div>
			<div class="chechkout-option-block">
				<h4 class="h4">Служба доставки</h4>
				<label class="style-radio">
					<input type="radio" name="type3" checked>
					<span>Деловые линии — <strong>500 <span class="rub">a</span></strong></span>
				</label>
				<label class="style-radio">
					<input type="radio" name="type3">
					<span>ПЭК — <strong>250 <span class="rub">a</span></strong></span>
				</label>
				<label class="style-radio">
					<input type="radio" name="type3">
					<span>Почта России — <strong>190 <span class="rub">a</span></strong></span>
				</label>
			</div>
			<div class="chechkout-option-block">
				<h4 class="h4">Оплата</h4>
				<label class="style-radio">
					<input type="radio" name="type4" checked>
					<span>На карту — <strong>без комиссии</strong></span>
				</label>
				<label class="style-radio">
					<input type="radio" name="type4">
					<span>Яндекс.Касса (банковская карта, эл. деньги, терминалы) — <strong>комиссия до 5%</strong></span>
				</label>
			</div>
		</div>

		<div class="l-block checkout-footer">
			<div class="checkout-footer-item">Товаров на: <strong>5 456 <span class="rub">a</span></strong></div>
			<div class="checkout-footer-item">НДС (18%, включен в цену): <strong>1 137.36 <span class="rub">a</span></strong></div>
			<div class="checkout-footer-item">Скидка: <strong>499 <span class="rub">a</span></strong></div>
			<div class="checkout-footer-item">Доставка: <strong>500 <span class="rub">a</span></strong></div>
			<br>
			<div class="checkout-footer-item">Итого: <strong>123 000 <span class="rub">a</span></strong></div>
			<br>
			<button type="submit" class="btn">Оформить заказ</button>
		</div>

	</form>
	<!--Без авторзиации-->

	<!--Авторизоваться-->
	<div class="tab-block">
		<div class="cart-auth-block">

			<div class="cart-auth-block__half">
				<div class="l-block l-block--bb">
					<p class="h1">Вход</p>
					<form class="vertical-form">
						<div class="input-group">
							<span class="input-group__label">Эл. почта</span>
							<div class="input-group__input-block">
								<input type="text">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group__label">Пароль</span>
							<div class="input-group__input-block">
								<input type="password">
								<i class="pass-show" title="Показать пароль"></i>
							</div>
						</div>
						<div class="vertical-form__forgotpass">
							<a href="#">Забыли пароль?</a>
						</div>
						<div class="vertical-form__btnwrap">
							<button type="submit" class="btn">Войти</button>
						</div>
					</form>
				</div>
				<div class="l-block social-login">
					<span class="social-login__title">Войти через</span>
					<div class="social-login__links">
						<a href="#"><img src="img/s_vk.png" alt="1"></a>
						<a href="#"><img src="img/s_face.png" alt="1"></a>
						<a href="#"><img src="img/s_twitter.png" alt="1"></a>
						<a href="#"><img src="img/s_ya.png" alt="1"></a>
						<a href="#"><img src="img/s_google.png" alt="1"></a>
					</div>
				</div>
			</div>

			<div class="cart-auth-block__half">
				<div class="l-block">
					<p class="h1">Регистрация</p>
					<form class="vertical-form">
						<div class="input-group">
							<span class="input-group__label">Имя</span>
							<div class="input-group__input-block">
								<input type="text">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group__label">Телефон</span>
							<div class="input-group__input-block">
								<input type="text">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group__label">E-mail<mark>*</mark></span>
							<div class="input-group__input-block">
								<input type="text" class="error">
							</div>
							<span class="input-group__error visible">Поле обязательно для заполнения</span>
						</div>
						<div class="input-group">
							<span class="input-group__label">Пароль</span>
							<div class="input-group__input-block">
								<input type="password">
								<i class="pass-show" title="Показать пароль"></i>
							</div>
						</div>
						<div class="vertical-form__btnwrap">
							<button type="submit" class="btn">Зарегистрироваться</button>
						</div>
					</form>
					<p class="form-note">Звездочкой «<mark>*</mark>» отмечены обязательные поля.</p>
				</div>
			</div>

		</div>
		
		<a href="#" class="prod-block-footer">
			<span class="link-with-icon js-without-reg-link">Оформить без регистрации <i class="i-right-round"></i></span>
		</a>

	</div>
	<!--Авторизоваться-->

</section>

<?php include('footer.php'); ?>
