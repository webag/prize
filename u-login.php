<?php include('header.php'); ?>


<section class="l-block">
	<div class="top-errors color-red">
		<div>Ошибки могут быть и тут например</div>
		<div>Ошибки могут быть и тут например, но это не точно</div>
	</div>
	<form class="vertical-form">
		<div class="input-group">
			<span class="input-group__label">Эл. почта</span>
			<div class="input-group__input-block">
				<input type="text">
			</div>
			<span class="input-group__error">Поле обязательно для заполнения</span>
		</div>
		<div class="input-group">
			<span class="input-group__label">Пароль</span>
			<div class="input-group__input-block">
				<input type="password" class="error">
				<i class="pass-show" title="Показать пароль"></i>
			</div>
			<span class="input-group__error visible">Поле обязательно для заполнения</span>
		</div>
		<!--если понадобится чекбокс-->
		<div class="vertical-form__forgotpass">
			<label class="style-checkbox">
				<input type="checkbox">
				<span>Запомнить меня</span>
			</label>
		</div>
		<!--если понадобится чекбокс-->
		<div class="vertical-form__forgotpass">
			<a href="/u-forgotpass.php">Забыли пароль?</a>
		</div>
		<div class="vertical-form__btnwrap">
			<button type="submit" class="btn">Войти</button>
		</div>
	</form>
</section>


<section class="l-block l-block--bt l-block--bb social-login">
	<span class="social-login__title">Войти через</span>
	<div class="social-login__links">
		<a href="#"><img src="img/s_vk.png" alt="1"></a>
		<a href="#"><img src="img/s_face.png" alt="1"></a>
		<a href="#"><img src="img/s_twitter.png" alt="1"></a>
		<a href="#"><img src="img/s_ya.png" alt="1"></a>
		<a href="#"><img src="img/s_google.png" alt="1"></a>
	</div>
</section>


<section class="l-block l-block--height">
	<a href="/u-registration.php" class="link-with-icon">Зарегистрироваться <i class="i-right-round"></i></a>
</section>



<?php include('footer.php'); ?>
