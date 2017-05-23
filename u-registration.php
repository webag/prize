<?php include('header.php'); ?>


<section class="l-block">
	<div class="top-errors color-red">
		<div>Ошибки могут быть и тут например</div>
		<div>Ошибки могут быть и тут например, но это не точно</div>
	</div>
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
</section>



<section class="l-block l-block--bt l-block--height">
	<a href="/u-login.php" class="link-with-icon">Войти <i class="i-right-round"></i></a>
</section>



<?php include('footer.php'); ?>
