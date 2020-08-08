(function() {
	'use strict';

	$(document).ready(function() {

		$('.menu a').on('click', function(event) {

			$(this).parent().find("a").removeClass('active');
			$(this).addClass('active');

			var target = $(this.getAttribute('href'));

			if( target.length ) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 200
				}, 1000);
			}

		});

	});


})(window, jQuery);