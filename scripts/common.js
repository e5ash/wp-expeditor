$(document).ready(function($) {

	$('.text_phone').mask('+7 (999) 999-99-99');
	
	$('.clients__wrap').slick({
		slidesToShow: 6,
		autoplay: true,
		responsive: [{
			breakpoint: 1199,
      settings: {
        slidesToShow: 4,
        infinite: true
      }}, {
      breakpoint: 970,
      settings: {
        slidesToShow: 3,
        infinite: true
      }}, {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        infinite: true
      }
		}]
	});

	$('.reviews__wrap').slick({
		slidesToShow: 4,
		autoplay: true,
		responsive: [{
			breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        infinite: true
      }}, {
      breakpoint: 970,
      settings: {
        slidesToShow: 2,
        infinite: true
      }}, {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        infinite: true
      }
		}]
	});


	var panel = $('.panel');

	$(window).on('load scroll', function() {
		var windowScroll = $(window).scrollTop();
		if (windowScroll > 100) {
			panel.addClass('panel_scroll');
		} else{
			panel.removeClass('panel_scroll');
		}
	});

	$('.tabs').tabs();


	var nav = $('.panel__nav');

	




	$('.panel__button').click(function(event) {
		$(this).toggleClass('panel__button_toggle');
		nav.slideToggle(300);
	});

	$(window).on('resize', function() {
		var windowWidth = $(window).width();
		if (windowWidth > 767) {
			nav.removeAttr('style');
		}
	});

	new WOW().init();

});
