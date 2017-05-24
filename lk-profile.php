<?php include('header.php'); ?>



<section class="tab-links l-block--margin-top">
	<a href="/lk-profile.php" class="h3 active">Профиль</a>
	<a href="/lk-subscribe.php" class="h3">Подписка</a>
	<a href="/lk-history.php" class="h3">История заказов</a>
</section>


<form class="l-block--margin">
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
			<span class="input-group__label">Компания</span>
			<div class="input-group__input-block">
				<input type="text">
			</div>
		</div>
		<div class="input-group">
			<span class="input-group__label">Адрес доставки</span>
			<div class="input-group__input-block">
				<textarea rows="4"></textarea>
			</div>
		</div>
		<div class="input-group">
			<span class="input-group__label">Телефон</span>
			<div class="input-group__input-block">
				<input type="text">
				<span class="input-group__note">Например: 89376201111</span>
			</div>
		</div>
		<div class="input-group">
			<span class="input-group__label">E-mail <mark>*</mark></span>
			<div class="input-group__input-block">
				<input type="text" class="error">
			</div>
			<span class="input-group__error visible">Поле обязательно для заполнения</span>
		</div>
		<div class="input-group">
			<span class="input-group__label">Пароль <mark>*</mark></span>
			<div class="input-group__input-block">
				<input type="password" class="error">
				<i class="pass-show" title="Показать пароль"></i>
			</div>
			<span class="input-group__error visible">Пароль должен сожержать более 6 символов</span>
		</div>
		<div class="vertical-form__btnwrap">
			<button type="submit" class="btn">Сохранить</button>
		</div>
	</div>
</form>


<?php include('footer.php'); ?>
