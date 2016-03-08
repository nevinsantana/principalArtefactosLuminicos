jQuery(document).ready(function($) {
	moveNavigation();
	$(window).on('resize', function() {
		(!window.requestAnimationFrame) ? setTimeout(
			moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});
	$('.cd-nav-trigger').on('click', function(event) {
		event.preventDefault();
		if($('header').hasClass('nav-is-visible')) $('.moves-out').removeClass(
			'moves-out');
		$('header').toggleClass('nav-is-visible');
		$('.cd-main-nav').toggleClass('nav-is-visible');
		$('.cd-main-content').toggleClass('nav-is-visible');
	});
	$('.go-back').on('click', function(event) {
		event.preventDefault();
		$('.cd-main-nav').removeClass('moves-out');
	});
	$('.cd-subnav-trigger').on('click', function(event) {
		event.preventDefault();
		$('.cd-main-nav').toggleClass('moves-out');
	});
	function moveNavigation() {
		var navigation=$('.cd-main-nav-wrapper'), screenSize=checkWindowWidth();
    if (screenSize) {
			navigation.detach();
			navigation.insertBefore('.cd-nav-trigger');
		} else { navigation.detach(); navigation.insertAfter('.cd-main-content'); }
	}
	function checkWindowWidth() {
		var mq=window.getComputedStyle(document.querySelector('header'), '::before').getPropertyValue('content').replace(/"/g, '').replace(/'/g, "");
		return ( mq == 'mobile' ) ? false : true;
	}
});
