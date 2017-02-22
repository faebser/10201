// execute callback when the page is ready:
Zepto(function($) {
	var videoHeight = $('#background video').height();
	console.log(videoHeight);

	$('#background').css('height', videoHeight + 'px');
});