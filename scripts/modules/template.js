define(["jquery"], function($) {

    $(".carousel").carousel();
	
	var $snappish = $('#wrapper').snappish();

	$snappish.on('scrollbegin.snappish', function(e, data) {
		data.toSlide.addClass('activated');
		$('nav a').removeClass('activated');
		$('nav a[data-slide-num="' + data.toSlideNum + '"]').addClass('activated');
	}).on('scrollend.snappish', function(e, data) {
		data.fromSlide.removeClass('activated');
	});

	$('.vertical-carousel-navigation a').on('click', function(e) {
		e.preventDefault();
		$snappish.trigger('scrollto.snappish', $(this).data('slide-num'));
	});

	$('.pc-projects a').on('click', function(e) {
		e.preventDefault();
		$snappish.trigger('scrollto.snappish', $(this).data('slide-num'));
	});

	$('.view-projects').on('click', function(e) {
		e.preventDefault();
		$snappish.trigger('scrollto.snappish', $(this).data('slide-num'));
	});

	$('.pm-first-project').on('click', function(e) {
		e.preventDefault();
		$snappish.trigger('scrollto.snappish', $(this).data('slide-num'));
	});

	$('.pm-next-project').on('click', function(e) {
		e.preventDefault();
		$snappish.trigger('scrollto.snappish', $(this).data('slide-num'));
	});
	
});