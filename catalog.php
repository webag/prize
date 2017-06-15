<?php include('header.php'); ?>


<div class="l-block">
	<p>Возможен краткий пояснительный текст перед разделами товаров, но лучше — после. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

	<div class="round-links">
		<a href="#" class="btn btn--outline current">Традиционные кубки</a>
		<a href="#" class="btn btn--outline">Недорогие кубки</a>
		<a href="#" class="btn btn--outline">Кубки премиум</a>
		<a href="#" class="btn btn--outline">Кубки оригинальной формы</a>
		<a href="#" class="btn btn--outline">Кубки с пластиковыми чашами</a>
		<a href="#" class="btn btn--outline">Кубки больших размеров</a>
		<a href="#" class="btn btn--outline">Элегантные кубки</a>
	</div>
</div>


<section class="s-filters">

	<div class="filters">
		<div class="filter">
			<header class="filter__title">Цена, <span class="rub">a</span></header>
			<main class="filter__drop">
				<div class="price-filter">
					<div class="price-filter__header">
						<label>
							<span>от</span>
							<input type="text" placeholder="1100" class="price-filter--from">
						</label>
						<label>
							<span>до</span>
							<input type="text" placeholder="25000" class="price-filter--to">
						</label>
					</div>
					<input type="text" class="price_range" data-min="1100" data-max="25000" data-from="2000" data-to="8000">
				</div>
			</main>
		</div>
		<div class="filter">
			<header class="filter__title">Цвет</header>
			<main class="filter__drop">
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Красный</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Коричнево-золотой</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Красный</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Красный</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox" disabled>
					<span>Красный</span>
				</label>
			</main>
		</div>
		<div class="filter">
			<header class="filter__title">Размер</header>
			<main class="filter__drop">
				<label class="style-checkbox">
					<input type="checkbox">
					<span>50см</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>40см</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>30см</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>20см</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox" disabled>
					<span>10см</span>
				</label>
			</main>
		</div>
		<div class="filter">
			<header class="filter__title">Материал</header>
			<main class="filter__drop">
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Золото</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Серебро</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox" disabled>
					<span>Бронза</span>
				</label>
			</main>
		</div>
		<div class="filter">
			<header class="filter__title">Акции</header>
			<main class="filter__drop">
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Хиты продаж</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox">
					<span>Скидки</span>
				</label>
				<label class="style-checkbox">
					<input type="checkbox" disabled>
					<span>Новинки</span>
				</label>
			</main>
		</div>
	</div>
	
	<div class="sorters">
		<div class="filter">
			<header class="filter__title">Сортировка</header>
			<main class="filter__drop filter__drop--sort">
				<a href="#" class="sort-method-link">Сначала популярные</a>
				<a href="#" class="sort-method-link active">По возрастанию цены</a>
				<a href="#" class="sort-method-link">По убыванию цены</a>
			</main>
		</div>
	</div>

</section>


<section class="s-active-filters">
	<span class="active-filters-title">Активные фильтры:</span>
	<div class="active-filters-row">
		<div class="active-filter">
			<span>500 – 30 000 <span class="rub"></span></span>
			<i class="i-close"></i>
		</div>
		<div class="active-filter">
			<span>Золото</span>
			<i class="i-close"></i>
		</div>
		<div class="active-filter">
			<span>Хит продаж</span>
			<i class="i-close"></i>
		</div>
		<div class="active-filter">
			<span>30 – 40 см</span>
			<i class="i-close"></i>
		</div>
	</div>
</section>


<section class="s-products">

	<div class="product">
		<div class="product__images">
			<div class="product-big-slider__item">
				<a href="img/products/2.jpg" class="fancy" data-fancybox="ID_3">
					<img src="img/products/2.jpg" alt="cart">
					<span>Увеличить</span>
				</a>
			</div>
		</div>
		<div class="product__content">
			<div class="product-header">
				<h3 class="h3"><a href="/product-details.php">Кубок 12043</a></h3>
				<div class="prod-item__labels">
					<div class="prod-item__label prod-item__label--new"><i class="i-flash"></i>Новинка</div>
					<div class="prod-item__label prod-item__label--sale"><i class="i-percentage"></i>Скидка</div>
					<div class="prod-item__label prod-item__label--hit"><i class="i-star"></i>Хит</div>
				</div>
			</div>
			<div class="product-table">
				<div class="product-table__row product-table__row--head">
					<div class="product-table__col product-table__col--name">Код продукта</div>
					<div class="product-table__col product-table__col--nal">Наличие</div>
					<div class="product-table__col product-table__col--price">Цена</div>
					<div class="product-table__col product-table__col--num">Количество</div>
					<div class="product-table__col"></div>
				</div>

				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>234 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
			</div>
			<a href="/product-details.php" class="link-with-icon">Подробнее о товаре <i class="i-right-round"></i></a>
		</div>
	</div>

	<div class="product">
		<div class="product__images">
			<div class="product-big-slider">
				<div class="product-big-slider__item">
					<a href="img/products/1.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/1.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/2.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/2.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/3.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/3.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/4.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/4.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/5.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/5.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/6.jpg" class="fancy" data-fancybox="ID_1">
						<img src="img/products/6.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
			</div>

			<div class="product-small-slider">
				<div class="product-small-slider__item">
					<img src="img/products/1.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/2.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/3.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/4.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/5.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/6.jpg" alt="cart">
				</div>
			</div>
		</div>
		<div class="product__content">
			<div class="product-header">
				<h3 class="h3"><a href="/product-details.php">Кубок 12043</a></h3>
				<div class="prod-item__labels">
					<div class="prod-item__label prod-item__label--new"><i class="i-flash"></i>Новинка</div>
					<div class="prod-item__label prod-item__label--sale"><i class="i-percentage"></i>Скидка</div>
					<div class="prod-item__label prod-item__label--hit"><i class="i-star"></i>Хит</div>
				</div>
			</div>
			<div class="product-table">
				<div class="product-table__row product-table__row--head">
					<div class="product-table__col product-table__col--name">Код продукта</div>
					<div class="product-table__col product-table__col--nal">Наличие</div>
					<div class="product-table__col product-table__col--price">Цена</div>
					<div class="product-table__col product-table__col--num">Количество</div>
					<div class="product-table__col"></div>
				</div>

				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
			</div>
			<a href="/product-details.php" class="link-with-icon">Подробнее о товаре <i class="i-right-round"></i></a>
		</div>
	</div>

	<div class="product">
		<div class="product__images">
			<div class="product-big-slider__item">
				<a href="img/products/2.jpg" class="fancy" data-fancybox="ID_3">
					<img src="img/products/2.jpg" alt="cart">
					<span>Увеличить</span>
				</a>
			</div>
		</div>
		<div class="product__content">
			<div class="product-header">
				<h3 class="h3"><a href="/product-details.php">Кубок 12043</a></h3>
				<div class="prod-item__labels">
					<div class="prod-item__label prod-item__label--new"><i class="i-flash"></i>Новинка</div>
					<div class="prod-item__label prod-item__label--sale"><i class="i-percentage"></i>Скидка</div>
					<div class="prod-item__label prod-item__label--hit"><i class="i-star"></i>Хит</div>
				</div>
			</div>
			<div class="product-table">
				<div class="product-table__row product-table__row--head">
					<div class="product-table__col product-table__col--name">Код продукта</div>
					<div class="product-table__col product-table__col--nal">Наличие</div>
					<div class="product-table__col product-table__col--price">Цена</div>
					<div class="product-table__col product-table__col--num">Количество</div>
					<div class="product-table__col"></div>
				</div>

				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>234 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
			</div>
			<a href="/product-details.php" class="link-with-icon">Подробнее о товаре <i class="i-right-round"></i></a>
		</div>
	</div>

	<div class="product">
		<div class="product__images">
			<div class="product-big-slider">
				<div class="product-big-slider__item">
					<a href="img/products/1.jpg" class="fancy" data-fancybox="ID_2">
						<img src="img/products/1.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
				<div class="product-big-slider__item">
					<a href="img/products/2.jpg" class="fancy" data-fancybox="ID_2">
						<img src="img/products/2.jpg" alt="cart">
						<span>Увеличить</span>
					</a>
				</div>
			</div>

			<div class="product-small-slider">
				<div class="product-small-slider__item">
					<img src="img/products/1.jpg" alt="cart">
				</div>
				<div class="product-small-slider__item">
					<img src="img/products/2.jpg" alt="cart">
				</div>
			</div>
		</div>
		<div class="product__content">
			<div class="product-header">
				<h3 class="h3"><a href="/product-details.php">Кубок 5099-300-000</a></h3>
				<div class="prod-item__labels">
					<div class="prod-item__label prod-item__label--new"><i class="i-flash"></i>Новинка</div>
					<div class="prod-item__label prod-item__label--sale"><i class="i-percentage"></i>Скидка</div>
					<div class="prod-item__label prod-item__label--hit"><i class="i-star"></i>Хит</div>
				</div>
			</div>
			<div class="product-table">
				<div class="product-table__row product-table__row--head">
					<div class="product-table__col product-table__col--name">Код продукта</div>
					<div class="product-table__col product-table__col--nal">Наличие</div>
					<div class="product-table__col product-table__col--price">Цена</div>
					<div class="product-table__col product-table__col--num">Количество</div>
					<div class="product-table__col"></div>
				</div>

				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">205551 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
				<div class="product-table__row">
					<div class="product-table__col product-table__col--name">Кубок 12043 (32 см) D-100 12043 (32 см) D-100</div>
					<div class="product-table__col product-table__col--nal">20 шт</div>
					<div class="product-table__col product-table__col--price"><strong>2 405 <span class="rub">a</span></strong></div>
					<div class="product-table__col product-table__col--num">
						<div class="numblock">
							<span class="numblock__btn">-</span>
							<input type="text" value="1">
							<span class="numblock__btn">+</span>
						</div>
					</div>
					<div class="product-table__col"><a href="#" class="btn">В корзину</a></div>
				</div>
			</div>
			<a href="/product-details.php" class="link-with-icon">Подробнее о товаре <i class="i-right-round"></i></a>
		</div>
	</div>

</section>


<section class="s-show-more">
	<a href="#" class="show-more">
		<span>Показать еще <i class="i-refresh"></i></span>
	</a>
</section>


<section class="s-pagination l-block--margin">
	<a href="#" class="btn btn--outline"><i class="i-left"></i>Назад</a>
	<nav class="pager">
		<a href="#">1</a>
		<span>...</span>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#" class="active">7</a>
		<a href="#">8</a>
		<a href="#">9</a>
		<span>...</span>
		<a href="#">26</a>
	</nav>
	<a href="#" class="btn btn--outline">Вперед<i class="i-right"></i></a>
</section>


<section class="l-block">
	<h2 class="h3 section-title">Дополнительная комплектация</h2>
	<div class="round-links">
		<a href="#" class="btn btn--outline">Крышки для кубков</a>
		<a href="#" class="btn btn--outline">Ленты для кубков</a>
		<a href="#" class="btn btn--outline">Таблички для кубков</a>
	</div>
</section>

<section class="l-block l-block--margin">
	<h2 class="h3 section-title">Смотрите также</h2>
	<div class="round-links">
		<a href="#" class="btn btn--outline current">Традиционные кубки</a>
		<a href="#" class="btn btn--outline">Недорогие кубки</a>
		<a href="#" class="btn btn--outline">Кубки премиум</a>
		<a href="#" class="btn btn--outline">Кубки оригинальной формы</a>
		<a href="#" class="btn btn--outline">Кубки с пластиковыми чашами</a>
		<a href="#" class="btn btn--outline">Кубки больших размеров</a>
		<a href="#" class="btn btn--outline">Элегантные кубки</a>
	</div>
</section>


<section class="l-block l-block--margin">
	<h2 class="h2 section-title">Блок для seo или полезной информации</h2>
	<p>Компания «Награды-оптом» занимает лидирующие позиции по реализации наградной и сувенирной продукции. В нашем интернет-магазине представлен широкий <a href="#">ассортимент продукции</a>, которая отличается отменным качеством, элегантным стилем и эксклюзивным дизайном.</p>
	<p>Мы стремимся удовлетворить максимум требований, предъявляемых к наградной продукции, даже самых взыскательных заказчиков. Наши сотрудники — это команда профессионалов и квалифицированных специалистов, руками которых производится стильная продукция</p>
</section>


<section class="l-block l-block--margin s-triggers">
	<div class="row">
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-1.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Бесплатная доставка</h3>
				<p>Во&nbsp;все города России при&nbsp;заказе от&nbsp;30&nbsp;000 рублей</p>
			</div>
		</div>
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-3.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Доставим куда скажете</h3>
				<p>Работаем со многими транспортными службами и Почтой России</p>
			</div>
		</div>
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-2.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Гарантия возврата</h3>
				<p>Обменяем или вернём деньги, если товар не&nbsp;подойдёт</p>
			</div>
		</div>
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-4.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Большой ассортимент</h3>
				<p>Более 5000 товаров. Сотрудничаем с крупнейшими производителями</p>
			</div>
		</div>
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-5.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Грамотные консультанты</h3>
				<p>Ответим на все вопросы о продукции, поможем быстро оформить заказ</p>
			</div>
		</div>
		<div class="trigger trigger--vert grid-4 grid-12_s">
			<div class="trigger__icon">
				<img src="img/trigger-6.png" alt="trigger">
			</div>
			<div class="trigger__content">
				<h3 class="h3">Низкие цены и скидки</h3>
				<p>Постоянные распродажи, скидки от объема заказа и постоянным клиентам</p>
			</div>
		</div>
	</div>
</section>


<section class="l-block l-block--margin s-callback">
	<h2 class="h2">Остались вопросы?</h2>
	<p>Свяжитесь с нами по телефону <strong><a href="tel:8 800 500-73-89">8 800 500-73-89</a></strong><br>или оставьте заявку и мы вам перезвоним.</p>
	<a href="#" class="btn">Оставить заявку</a>
</section>



<?php include('footer.php'); ?>
