<?php include('header.php'); ?>


<section class="l-block l-block--bb s-contacts">
	<div class="row">
		<div class="grid-4 grid-6_l grid-12_s">
			<div class="cont-item">
				<i class="i-phone"></i>
				<strong><a href="tel:8 800 500-73-89">8 800 500-73-89</a></strong>
				<span>Звонок по России бесплатный</span>
			</div>
		</div>
		<div class="grid-4 grid-6_l grid-12_s">
			<div class="cont-item">
				<i class="i-clock"></i>
				<span>Время работы: <nobr>с 9:00 до 18:00</nobr></span>
				<span>по московскому времени</span>
			</div>
		</div>
		<div class="grid-4 grid-6_l grid-12_s">
			<div class="cont-item">
				<i class="i-envelope"></i>
				<span><a href="mailto:shop@nagrady-optom.ru">shop@nagrady-optom.ru</a></span>
			</div>
		</div>
	</div>
</section>


<section class="l-block l-block--bb s-adresses">
	<div class="row">
		<div class="grid-6 grid-12_s">
			<div class="address-item">
				<h3 class="h3">Главный офис</h3>
				<address>123557, г. Москва, ул. Пресненский Вал, д. 17.</address>
				<span>Здесь можно получить заказ, оформленный на сайт</span>
				<div class="map-wrap">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f795520b485beb8fb23b126ff5c0eb17ed7428112cdc697d78618b72cffb6c6&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
		<div class="grid-6 grid-12_s">
			<div class="address-item">
				<h3 class="h3">Розничные продажи</h3>
				<address>295494, Республика Крым, г. Симферополь, ул. Шоссейная, д.28</address>
				<div class="map-wrap">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f795520b485beb8fb23b126ff5c0eb17ed7428112cdc697d78618b72cffb6c6&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="l-block">
	<h3 class="h3 section-title">Обратная связь</h3>
	<form class="ajax-form vertical-form">
		<div class="input-group">
			<span class="input-group__label">Имя</span>
			<div class="input-group__input-block">
				<input type="text" name="user_name" data-label="Имя пользователя">
			</div>
		</div>
		<div class="input-group">
			<span class="input-group__label">Телефон <mark>*</mark></span>
			<div class="input-group__input-block">
				<input type="text" name="user_phone" data-label="Телефон" data-req="true">
			</div>
			<span class="input-group__error">Поле обязательно для заполнения</span>
		</div>
		<div class="input-group">
			<span class="input-group__label">E-mail <mark>*</mark></span>
			<div class="input-group__input-block">
				<input type="text" name="user_email" data-label="E-mail" data-req="true">
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
</section>


<?php include('footer.php'); ?>
