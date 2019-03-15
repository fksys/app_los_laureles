
/*!
 * Sidebar menu for Bootstrap 4
 * Copyright Zdeněk Papučík
 * MIT License
*/
(function($) {

	// toggle sidebar menu
	$('#navbar-sidebar-toggle').on('click', function() {
		$('#wrapper').toggleClass('toggle-sidebar');
	});

	// list init
	$('.list-ml-item').each(function() {
		$(this).parent().find('.link-arrow').addClass('up');
		if ($(this).children('.list-link-current').length > 0 ) {
			$(this).parents().find('.list-link-current').next('.list-ml-none').show();
			$(this).parent().find('.link-arrow').addClass('active down');
		}
	});

	// list open hidden
	$('.list-link').on('click', function() {
		$(this).parent().find('.link-arrow').toggleClass('active');
		$(this).next('.list-ml-none').slideToggle('fast');
	});

	// list transition arrow
	$('.link-arrow').on('click', function() {
		$(this).addClass('transition');
		$(this).toggleClass('rotate');
		if ($(this).parent().find('.link-arrow').hasClass('down')) {
			$(this).toggleClass('rotate-revert');
		}
	});

}(jQuery));
