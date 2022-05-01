/*
================================================================
* Template:  	 Zoon - Coming Soon Template
* Written by: 	 Harnish Design - (http://www.harnishdesign.net)
* Description:   Main Custom Script File
================================================================
*/

(function ($) {
	"use strict";

// Preloader
$(window).on('load', function () {
	$('.lds-ellipsis').fadeOut();
	$('.preloader').delay(333).fadeOut('slow');
	$('body').delay(333);
});

// Mobile Menu
$('.navbar-toggler').on('click', function() {
	$(this).toggleClass('show');
});
$(".navbar-nav a").on('click', function() {
    $(".navbar-collapse, .navbar-toggler").removeClass("show");
});

/*---------------------------------
   Carousel (Owl Carousel)
----------------------------------- */
$(".owl-carousel").each(function (index) {
    var a = $(this);
	if ($("html").attr("dir") == 'rtl') {
		var rtlVal = true
	}else{
		var rtlVal = false
    }
	$(this).owlCarousel({
		rtl: rtlVal,
		autoplay: a.data('autoplay'),
		center: a.data('center'),
		autoplayTimeout: a.data('autoplaytimeout'),
		autoplayHoverPause: a.data('autoplayhoverpause'),
		loop: a.data('loop'),
		speed: a.data('speed'),
		nav: a.data('nav'),
		dots: a.data('dots'),
		autoHeight: a.data('autoheight'),
		autoWidth: a.data('autowidth'),
		margin: a.data('margin'),
		stagePadding: a.data('stagepadding'),
		slideBy: a.data('slideby'),
		lazyLoad: a.data('lazyload'),
		navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		animateOut: a.data('animateout'),
		animateIn: a.data('animatein'),
		video: a.data('video'),
		items: a.data('items'),
		responsive:{
        0:{items: a.data('items-xs'),},
        576:{items: a.data('items-sm'),},
		768:{items: a.data('items-md'),},
        992:{items: a.data('items-lg'),}
        }
    });
});

/*------------------------------------
    Magnific Popup
-------------------------------------- */
// Image on Modal
$('.popup-img-gallery').each(function() {
$(this).magnificPopup({
    delegate: '.popup-img:visible',
	type: "image",
	tLoading: '<div class="preloader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>',
    closeOnContentClick: !0,
    mainClass: "mfp-fade",
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    },
});
});

/*------------------------------------
    YTPlayer YouTube Background
-------------------------------------- */

$(".player").each(function () {
    $(this).mb_YTPlayer();
});

/*------------------------
   tooltips
-------------------------- */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/*------------------------
   Countdown
-------------------------- */
var countdown = $('.countdown[data-countdown-end]');

if (countdown.length > 0) {
	countdown.each(function() {
		var $countdown = $(this),
			finalDate = $countdown.data('countdown-end');
		$countdown.countdown(finalDate, function(event) {
			$countdown.html(event.strftime(
				'<div class="row"><div class="col"><div class="text-12 fw-600 px-sm-3">%-D</div><span class="fw-300 opacity-9">Day%!d</span></div><div class="col"><div class="text-12 fw-600 px-sm-3">%H</div><span class="fw-300 opacity-9">Hrs</span></div><div class="col"><div class="text-12 fw-600 px-sm-3">%M</div><span class="fw-300 opacity-9">Min</span></div><div class="col"><div class="text-12 fw-600 px-sm-3">%S</div><span class="fw-300 opacity-9">Sec</span></div></div>'
			));
		});
	});
}




})(jQuery)