import $ from 'jquery';
import { Swiper, Navigation, Pagination, Autoplay } from 'swiper';

const carousel = () => {
	const ref = $('._carousel');

	$(window).ready(function() {
		if (ref.length) {
			Swiper.use([Navigation, Pagination, Autoplay]);

			ref.each(function() {
				const swiperId = $(this).attr('id');

				new Swiper(`#${swiperId} .swiper-container`, {
					autoplay: true,
					slidesPerView: 1,
					slidesPerGroup: 1,
					autoHeight: true,
					threshold: 5,
					loop: $(this).data('loop') || true,
					pagination: {
						el: `#${swiperId} .swiper-pagination`
					},
					navigation: {
						nextEl: `#${swiperId} .swiper-button-next`,
						prevEl: `#${swiperId} .swiper-button-prev`
					},
					breakpoints: {
						768: {
							slidesPerView: $(this).data('slides-per-view') || 1,
							slidesPerGroup: $(this).data('slides-per-group') || 1
						}
					}
				});
			});
		}
	});
};

carousel();
