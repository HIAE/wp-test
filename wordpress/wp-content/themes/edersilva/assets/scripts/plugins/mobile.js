(function() {
	'use strict';

	$(document).ready(function() {

		$('.btn-mobile').on('click', function() {
			$(".header nav").toggleClass('active');
		});

	});


})(window, jQuery);