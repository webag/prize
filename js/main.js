/***********************
 отправка формы в php BEGIN
***********************/
$(document).ready(function(){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				$(this).parents('.input-group').find('.input-group__error').addClass('visible');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
			$(this).parents('.input-group').find('.input-group__error').removeClass('visible');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
***********************/


/***********************
Input mask BEGIN
***********************/
jQuery(function($){
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});
/***********************
Input mask END
***********************/


/***********************
fancybox BEGIN
***********************/
$(document).ready(function(){
	$('.fancy').fancybox({
		fullScreen: false,
		slideShow: false,
		thumbs: false,
		smallBtn: 'auto',
		focus: false
	});
	$('.fancy-video').fancybox({
		fullScreen: false,
		thumbs: false,
		youtube: {
			controls : 1,
			showinfo : 0,
			autoplay: 1
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if ( video ) {
				video.hide();
				width  = current.$slide.width() - 100;
				height = current.$slide.height() - 100;
				if ( height * ratio > width ) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width  : width,
					height : height
				}).show();
			}
		}
	});

	$('.js-modal-close').on('click',function (e) {
		e.preventDefault();
		$.fancybox.close();
	})
});
/***********************
fancybox END
***********************/


/***********************
 Прокрутка к секциям BEGIN
***********************/
$(document).ready(function(){
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').velocity( "scroll", { duration: 1000, easing: "easeInOutCubic", offset: destination, mobileHA: true });
		return false;
	});
});
/***********************
 Прокрутка к секциям END
***********************/


/***********************
Custom scrollbars BEGIN
***********************/
$(document).ready(function(){
	$(".scroll").mCustomScrollbar({
		axis:"y",
		scrollInertia: 200,
		scrollButtons:{ enable: true }
	});
});
/***********************
Custom scrollbars END
***********************/


/***********************
mobile-search BEGIN
***********************/
$(document).ready(function() {
	$('.mob-top-serch').on('click',function (e) {
		e.preventDefault();
		$('.top-search-mob').slideToggle();
	});

	$('.top-search-mob__close').on('click',function (e) {
		e.preventDefault();
		$('.top-search-mob').slideUp();
	})
});
/***********************
mobile-search END
***********************/


/***********************
 Mobile menu BEGIN
 ***********************/
$(document).ready(function(){
	$('.menu-btn').click(function() {
		$(this).toggleClass('active');
		$('.mob-menu').toggleClass('opened');
	});
});
/***********************
 Mobile menu END
 ***********************/


/***********************
Cat nav BEGIN
***********************/
$(document).ready(function() {
	$('.cat-nav__item--has-sub')
	.on('click',function (e) {
		var target = $(e.target);
		if(target.is('.cat-nav-sub__close')){
			return false;
		} else {
			$('.cat-nav-sub').removeClass('opened');
			$(this).find('.cat-nav-sub').addClass('opened');
			$('.cat-nav__overlay').addClass('cat-nav__overlay--show');
		}
	})
	.hover(function () {
		$(this).find('.cat-nav-sub').addClass('opened');
		$('.cat-nav__overlay').addClass('cat-nav__overlay--show');
	}, function () {
		$(this).find('.cat-nav-sub').removeClass('opened');
		$('.cat-nav__overlay').removeClass('cat-nav__overlay--show');
	});

	$('.cat-nav-sub__close,.cat-nav__overlay').on('click',function (e) {
		e.preventDefault();
		$('.cat-nav-sub').removeClass('opened');
		$('.cat-nav__overlay').removeClass('cat-nav__overlay--show');
	});
});
/***********************
Cat nav END
***********************/


/***********************
 big-slider BEGIN
***********************/
$(document).ready(function() {
	$('.big-slider').slick({
		speed: 500,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		adaptiveHeight: true,
		infinite: false
	})
});
/***********************
 big-slider END
***********************/


/***********************
prod-slider BEGIN
***********************/
$(document).ready(function() {
	$('.prod-slider').slick({
		speed: 500,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		slidesToShow: 5,
		slidesToScroll: 5,
		infinite: false,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			},
			{
				breakpoint: 601,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	})
});
/***********************
prod-slider END
***********************/


/***********************
prod-tabs BEGIN
***********************/
$(document).ready(function() {

	$('.prod-block-tabs a').on('click',function (e) {
		e.preventDefault();
		var index = $(this).index();
		var parent = $(this).parents('.js-block-with-tabs');
		select_prod_tab(index,parent);
	});

	function select_prod_tab(index,parent) {
		parent.find('.prod-block-tabs a').removeClass('active').eq(index).addClass('active');
		parent.find('.prod-block-tab').removeClass('active').eq(index).addClass('active');
	}

	$('.js-block-with-tabs').each(function () {
		select_prod_tab(0,$(this));
	})
});
/***********************
prod-tabs END
***********************/


/***********************
To top link BEGIN
***********************/
$(document).ready(function() {
	$('.s-footer').waypoint(function () {
		if ($('body').innerHeight() > 1500){
			$('.to-top-link').toggleClass('to-top-link--hidden');
		}
	}, {
		offset: '100%'
	});

	$('.cat-nav').waypoint(function () {
		if ($('body').innerHeight() > 1500){
			$('.to-top-link').toggleClass('to-top-link--hidden');
		}
	}, {
		offset: function() {
			return -this.element.clientHeight/2
		}
	});
});
/***********************
To top link END
***********************/


/***********************
Filters BEGIN
***********************/
$(document).ready(function() {
	$('.filter__title').on('click',function () {
		var this_filter = $(this).parents('.filter');
		$('.filter').not(this_filter).removeClass('filter--opened');
		this_filter.toggleClass('filter--opened');
	});

	$(document).on('click',function (e){
		var div = $(".filter");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			div.removeClass('filter--opened');
		}
	});


	// price-slider
	var price_slider = $(".price_range");

	price_slider.ionRangeSlider({
		type: "double",
		hide_min_max: true,
		hide_from_to: true,
		grid: false
	});

	price_slider.on('change',function () {
		var from = $(this).data("from");
		var to = $(this).data("to");
		$('.price-filter--from').val(from);
		$('.price-filter--to').val(to);
	});

	var price_slider_data = price_slider.data("ionRangeSlider");
	$('.price-filter--from').on('change',function () {
		price_slider_data.update({
			from: $(this).val()
		});
	});
	$('.price-filter--to').on('change',function () {
		price_slider_data.update({
			to: $(this).val()
		});
	})
	// price-slider

});
/***********************
Filters END
***********************/


/***********************
product images BEGIN
***********************/
$(document).ready(function() {

	$('.product-big-slider').each(function (key, item) {
		var sliderIdName = 'slider' + key;
		var sliderNavIdName = 'sliderNav' + key;

		this.id = sliderIdName;
		if ($('.product-small-slider')[key]){
			$('.product-small-slider')[key].id = sliderNavIdName;
		}


		var sliderId = '#' + sliderIdName;
		var sliderNavId = '#' + sliderNavIdName;

		$(sliderId).slick({
			speed: 500,
			arrows: false,
			adaptiveHeight: true,
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			accessibility: false,
			asNavFor: sliderNavId
		});

		$(sliderNavId).slick({
			speed: 500,
			prevArrow: '<div class="slick-prev"></div>',
			nextArrow: '<div class="slick-next"></div>',
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			vertical: true,
			focusOnSelect: true,
			accessibility: false,
			verticalSwiping: true,
			asNavFor: sliderId
		});
	})
});
/***********************
product images END
***********************/


/***********************
table wrappers BEGIN
***********************/
$(document).ready(function() {
	$('table').each(function () {
		$(this).wrap('<div class="table-wrap"></div>')
	})
});
/***********************
table wrappers END
***********************/


/***********************
 product-description-tabs BEGIN
***********************/
$(document).ready(function() {
	$('.product-description-tabs a').on('click',function (e) {
		e.preventDefault();
		var index = $(this).index();
		select_product_description_tab(index);
	});

	function select_product_description_tab(index) {
		$('.product-description-tabs a').removeClass('active').eq(index).addClass('active');
		$('.product-description-tab').removeClass('active').eq(index).addClass('active');
	}

	select_product_description_tab(0);
});
/***********************
 product-description-tabs END
***********************/
