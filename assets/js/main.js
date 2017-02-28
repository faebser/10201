// execute callback when the page is ready:
Zepto(function($) {
	var videoHeight;
	fastdom.measure(function m () {
		videoHeight = $('#background video').height();
	});

	fastdom.mutate(function m () {
		$('#background').css('height', videoHeight + 'px');
	});

	fastdom.mutate(function mut () {
		var lang = window.location.pathname.split('/')[1];
		$('nav a#' + lang).addClass('active');
	});
});