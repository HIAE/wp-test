(function() {
	'use strict';

	$(document).ready(function() {

		$('.portfolio .job a').on('click', function(event) {
			event.preventDefault();
			let url = $(this).attr('href');
			$(".portfolio").find(".job").removeClass("active");
			$(this).parent().parent().addClass("active");
			$(".lightbox img").attr("src", url);
			$(".lightbox").addClass('active');
		});

		$('.arrow-right').on('click', function(event) {
			event.preventDefault();
			let url = $(".portfolio .content").find(".active").next().find("a").attr("href");
			$(".portfolio .content").find(".active").next().addClass("active").prev().removeClass("active");
			$(".lightbox img").attr("src", url);
		});

		$('.arrow-left').on('click', function(event) {
			event.preventDefault();
			let url = $(".portfolio .content").find(".active").prev().find("a").attr("href");
			$(".portfolio .content").find(".active").prev().addClass("active").next().removeClass("active");
			$(".lightbox img").attr("src", url);
		});

		$('.portfolio .close').on('click', function(event) {
			event.preventDefault();
			$(".lightbox").removeClass('active');
		});

	});

})(window, jQuery);