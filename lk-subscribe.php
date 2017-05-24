<?php include('header.php'); ?>



<section class="tab-links l-block--margin-top">
	<a href="/lk-profile.php" class="h3">Профиль</a>
	<a href="/lk-subscribe.php" class="h3 active">Подписка</a>
	<a href="/lk-history.php" class="h3">История заказов</a>
</section>


<section class="l-block l-block--height">
	<form class="vertical-form">
		<div class="input-group">
			<span class="input-group__label">Эл. почта</span>
			<div class="input-group__input-block">
				<input type="text">
			</div>
		</div>
		<div class="vertical-form__forgotpass">
			<label class="style-checkbox">
				<input type="checkbox" checked>
				<span>Распродажи</span>
			</label>
			<label class="style-checkbox">
				<input type="checkbox">
				<span>Новинки</span>
			</label>
		</div>
		<div class="vertical-form__btnwrap">
			<button type="submit" class="btn">Подписаться</button>
		</div>
	</form>
</section>


<?php include('footer.php'); ?>
