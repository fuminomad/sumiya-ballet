// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	// ドロワーメニュー
jQuery('.p-header_hamburger , .p-header_nav-background').on('click' , function(e){
	e.preventDefault();
	
	jQuery('.p-header_nav').toggleClass('open');
	jQuery('.p-header_nav-background').toggleClass('open');
	jQuery('.p-header_nav-close').toggleClass('open');
	jQuery('.p-header_hamburger').toggleClass('active');
	return false;
	});
	jQuery('.p-header_nav ul li a[href]').on('click', function(event) {
		jQuery('.p-header_hamburger').trigger('click');
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});


// topに戻るボタン

var show = jQuery(".p-mv").offset();
jQuery('.p-footer__btn').hide();
jQuery(window).scroll(function() {
if(jQuery(this).scrollTop() > show.top) {
jQuery('.p-footer__btn').fadeIn();
} else {
jQuery('.p-footer__btn').fadeOut();
	}
});
jQuery('.p-footer__btn').click(function(){
jQuery('html, body').animate({scrollTop: 0}, 500);

});


});
let swipeOption = {
	loop: true,
	effect: 'fade',
	autoplay: {
	  delay: 5000,
	  disableOnInteraction: false,
	},
	speed: 1000,
  }
  new Swiper('#swiper0', swipeOption);
	
// 1.関数の定義
function setHeight() {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
  }
  
  // 2.初期化
  setHeight();
  
  // 3.ブラウザのサイズが変更された時・画面の向きを変えた時に再計算する
//   window.addEventListener('resize', setHeight);

// slick

jQuery(function($){
	$(function() {
		var slide_main = $(".slide").slick({
		  asNavFor: ".slide-navigation",
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		});
		var slide_sub = $(".slide-navigation").slick({
		  asNavFor: ".slide",
		  centerMode: true,
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 4000,
		  speed: 400,
		  focusOnSelect: true,
		});
		var open_window_Width = $(window).width();
		$(window).resize(function() {
		  var width = $(window).width();
		  if (open_window_Width != width) {
			slide_main.slick("setPosition");
			slide_sub.slick("setPosition");
		  }
		});
	  });
});