<?php include('header.php'); ?>


<section class="l-block">
	<p>Введите электронную почту, которую вы указывали при регистрации. Мы вышлем на нее инструкцию по восстановлению пароля.</p>
	<div class="top-errors color-red">
		<div>Ошибки могут быть и тут например, но это не точно</div>
	</div>
	<form class="vertical-form">
		<div class="input-group">
			<span class="input-group__label">Эл. почта</span>
			<div class="input-group__input-block">
				<input type="text" class="error">
			</div>
			<span class="input-group__error visible">Поле обязательно для заполнения</span>
		</div>
		<div class="vertical-form__btnwrap">
			<button type="submit" class="btn">Выслать</button>
		</div>
	</form>
</section>


<section class="l-block l-block--bt l-block--height">
	<a href="/u-login.php" class="link-with-icon">Войти <i class="i-right-round"></i></a>
	<br><br>
	<a href="/u-registration.php" class="link-with-icon">Зарегистрироваться <i class="i-right-round"></i></a>
</section>



<?php include('footer.php'); ?>
