(function ($) {
	"use strict";

	// back to top start
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
		$('.backtotop:hidden').stop(true, true).fadeIn();
		} else {
		$('.backtotop').stop(true, true).fadeOut();
		}
	});
	$(function() {
		$(".scroll").on('click', function() {
		$("html,body").animate({scrollTop: 0}, "slow");
		return false
		});
	});

	// sticky start
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 300) {
			sticky.removeClass('sticky-header');
		} else {
			sticky.addClass('sticky-header');
		}
	});
	// sticky end

	// Preloader start
	$(window).on('load', function () {
		$(".preloder_part").fadeOut();
		$(".spinner").delay(1000).fadeOut("slow");
	});
	// preloader end

	// mobile menu start
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991"
	});

	$('.side-toggle').on('click', function () {
		$('.side-mobile-menu').addClass('info-open');
		$('.offcanvas-overlay').addClass('active');
	})

	$('.side-info-close,.offcanvas-overlay').on('click', function () {
		$('.side-mobile-menu').removeClass('info-open');
		$('.offcanvas-overlay').removeClass('active');
	})

	// cart info
	$(".cart-trigger").on("click", function (e) {
		e.preventDefault();
		$(".cart-bar-wrapper").toggleClass("show");
		$("body").addClass("on-side");
		$('.offcanvas-overlay').addClass('active');
		$(this).addClass('active');
	});

	$(".cart-bar__close > a").on("click", function (e) {
		e.preventDefault();
		$(".cart-bar-wrapper").removeClass("show");
		$("body").removeClass("on-side");
		$('.offcanvas-overlay').removeClass('active');
		$('.cart-trigger').removeClass('active');
	});

	$('.offcanvas-overlay').on('click', function () {
		$(this).removeClass('active');
		$(".cart-bar-wrapper").removeClass("show");
		$("body").removeClass("on-side");
		$('.cart-trigger').removeClass('active');
	});

	

	// slider active
	function mainSlider() {
		var BasicSlider = $('.slider__active');
		BasicSlider.on('init', function(e, slick) {
			var $firstAnimatingElements = $('.slider__single:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.slider__single[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: true,
			autoplaySpeed: 6000,
			dots: true,
			fade: true,
			pauseOnHover: false,
			arrows: false,
			responsive: [
				{ breakpoint: 767, settings: { dots: false, arrows: false } }
			]
		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function() {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function() {
					$this.removeClass($animationType);
				});
			});
		}
	}
	mainSlider();
	// slider end

	//data background
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ") ")
	})

	// data bg color
	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));

	});

	// category active start
	$('.category__active').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 5000,
		navText:['<i class="fal fa-arrow-left"></i>','<i class="fal fa-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 4,
		responsive:{
			0:{
				items:1,
				margin: 0
			},
			520:{
				items:2
			},
			767:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
		
	});

	$('.category__active--2').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 5000,
		navText:['<i class="fal fa-long-arrow-left"></i>','<i class="fal fa-long-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 6,
		responsive:{
			0:{
				items:2,
				margin: 0
			},
			520:{
				items:2
			},
			767:{
				items:4
			},
			992:{
				items:5
			},
			1200:{
				items:6
			}
		}
		
	});
	$('.category__active--3').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 6000,
		navText:['<i class="fal fa-long-arrow-left"></i>','<i class="fal fa-long-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 5,
		responsive:{
			0:{
				items:2,
				margin: 0
			},
			520:{
				items:2
			},
			767:{
				items:4
			},
			992:{
				items:4
			},
			1200:{
				items:5
			}
		}
		
	});

	// feature active
	$('.feature__carousel--active').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 6000,
		nav: false,
		dots: false,
		items: 4,
		responsive:{
			0:{
				items:1,
			},
			520:{
				items:2
			},
			767:{
				items:3
			},
			1200:{
				items:4
			}
		}
		
	});

	// // product active start
	$('.carousel__active').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 6000,
		navText:['<i class="fal fa-arrow-left"></i>','<i class="fal fa-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 4,
		responsive:{
			0:{
				items:1,
				margin: 0
			},
			520:{
				items:2
			},
			767:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});

	$('.carousel__active--2').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		margin: 20,
		autoplayTimeout: 5000,
		nav: false,
		dots: false,
		items: 4,
		responsive:{
			0:{
				items:1,
				margin: 0
			},
			520:{
				items:2,
			},
			767:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});
	// product active end

	// testimonial active start
	$('.testimonial__active').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		autoplayTimeout: 6000,
		navText:['<i class="fal fa-arrow-left"></i>','<i class="fal fa-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 1,
	});

	// testimonial active start
	$('.blog__carousel').owlCarousel({
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 20,
		autoplayHoverPause: true,
		autoplayTimeout: 5000,
		navText:['<i class="fal fa-arrow-left"></i>','<i class="fal fa-arrow-right"></i>'],
		nav: true,
		dots: false,
		items: 3,
		responsive:{
			0:{
				items:1,
				margin: 0
			},
			767:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:3
			}
		}
	});

	// shop cart start
	var CartPlusMinus = $('.cart__plus--minus');
	CartPlusMinus.prepend('<div class="qtybutton dec">-</div>');
	CartPlusMinus.append('<div class="qtybutton inc">+</div>');
	$(".qtybutton").on("click", function () {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() === "+") {
		var newVal = parseFloat(oldValue) + 1;
		} else {
		// Don't allow decrementing below zero
		if (oldValue > 1) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 1;
		}
		}
		$button.parent().find("input").val(newVal);
	});
	// shop cart end

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/* magnificPopup video view */
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});



	$('.main-menu nav > ul > li').slice(-3).addClass('menu-last');




	//  Countdown
	$('[data-countdown]').each(function () {

		var $this = $(this),
			finalDate = $(this).data('countdown');
		if (!$this.hasClass('countdown-full-format')) {
			$this.countdown(finalDate, function (event) {
				$this.html(event.strftime('<div class="single"><h1>%D</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Minutes</p></div> <div class="single"><h1>%S</h1><p>Second</p></div>'));
			});
		} else {
			$this.countdown(finalDate, function (event) {
				$this.html(event.strftime('<div class="single"><h1>%Y</h1><p>Years</p></div> <div class="single"><h1>%m</h1><p>Months</p></div> <div class="single"><h1>%W</h1><p>Weeks</p></div> <div class="single"><h1>%d</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Minutes</p></div> <div class="single"><h1>%S</h1><p>Second</p></div>'));
			});
		}
	});

	// range slider activation start
	$("#slider-range").slider({
		range: true,
		min: 0,
		max: 100,
		values: [0, 70],
		slide: function (event, ui) {
			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
		}
	});

	// product weight active
	$(function () {
		$('.product__weight li').on('click', function () {
		var active = $('.product__weight li.active');
		active.removeClass('active');
		$(this).addClass('active');
		});
	});

	// niceSelect start
	$('select').niceSelect();

	// toggle search bar start
	$('.search_icon').on('click', function (event) {
		event.preventDefault();
		$('.search-area').addClass('active');
	});

	$('.search-close').on('click', function (event) {
		event.preventDefault();
		$('.search-area').removeClass('active');
	});


})(jQuery);