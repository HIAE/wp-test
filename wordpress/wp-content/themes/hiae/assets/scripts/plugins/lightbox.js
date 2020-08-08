(function() {
	'use strict';

	$(document).ready(function() {

		$('.portfolio .job a').on('click', function(event) {
			event.preventDefault();
			$(".lightbox").addClass('active');
		});

		$('.portfolio .close').on('click', function(event) {
			event.preventDefault();
			$(".lightbox").removeClass('active');
		});

	});

})(window, jQuery);