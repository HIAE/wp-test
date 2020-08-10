(function() {
	'use strict';

	$(document).ready(function() {

		$('.btn-mobile, .menu a').on('click', function(e) {
			e.preventDefault();
			$(".header nav").toggleClass('active');
		});

	});


})(window, jQuery);