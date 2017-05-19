		</main>

	</div>
</div>
<!--page-wrap END-->

<footer class="s-footer">
	<div class="container">

		<div class="policy">
			&copy; ООО «Награды оптом».<br>
			Интернет-магазин сувенирной
			продукции с доставкой по России
		</div>

		<nav class="foot-nav">
			<a href="#" class="active">О компании</a>
			<a href="#">Доставка </a>
			<a href="#">Оплата</a>
			<a href="#">Комплектация и гравировкаи</a>
			<a href="#">Гарантия и возврат</a>
			<a href="#">Ответственность покупателя</a>
			<a href="#">Контакты</a>
		</nav>

		<div class="foot-right">
			<div class="foot-user">
				<a href="#">Вход</a>
				<a href="#">Регистрация</a>
			</div>
			<a href="#" class="develop">Разработчик сайта</a>
		</div>

	</div>
</footer>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h2 modal__title">Обратная связь</p>
		<form class="ajax-form vertical-form">
			<div class="input-group">
				<span class="input-group__label">Имя</span>
				<div class="input-group__input-block">
					<input type="text" name="user_name" data-label="Имя пользователя">
				</div>
			</div>
			<div class="input-group">
				<span class="input-group__label">Телефон или почта <mark>*</mark></span>
				<div class="input-group__input-block">
					<input type="text" name="user_contacts" data-label="Контакты" data-req="true">
					<span class="input-group__note">Телефон или почта</span>
				</div>
				<span class="input-group__error">Поле обязательно для заполнения</span>
			</div>
			<div class="input-group">
				<span class="input-group__label">Сообщение</span>
				<div class="input-group__input-block">
					<textarea name="user_comment" data-label="Сообщение" rows="5"></textarea>
				</div>
			</div>

			<input type="hidden" value="Обратная связь" name="form_subject">
			<div class="vertical-form__btnwrap">
				<button type="submit" class="btn">Отправить</button>
			</div>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p class="h2 modal__title">Спасибо</p>
		<p>Мы получили вашу заявку и свяжемся с вами в ближайшее время.</p>
		<span class="btn js-modal-close">Вернуться на сайт</span>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

	</body>
</html>
