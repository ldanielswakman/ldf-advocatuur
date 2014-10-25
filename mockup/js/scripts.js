$(document).ready(function() {
	$('body').addClass('body-loaded');

	// setting min-height of 'traject' slideshow based on window
	$('.slide').each(function() {
		$(this).css('min-height', ($(window).outerHeight()*0.9));
	});

});