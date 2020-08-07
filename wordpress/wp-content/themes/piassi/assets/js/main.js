import './lazyLoad';
import '../../components/header';
import '../fonts/icons.font';
import { scrollWindowToElement } from './scroll';
import $ from 'jquery';

$(window).ready(function() {
	$('a.scroll-link, .scroll-link > a').on('click', function(e) {
		e.preventDefault();

		const url = $(this).attr('href');
		const [, hash] = url.split('#');

		if (hash) {
			scrollWindowToElement(`#${hash}`, { offset: -92 });
		}

		if (
			$('._header')
				.find('.toggle-menu')
				.hasClass('active')
		) {
			$('._header')
				.find('.toggle-menu')
				.click();
		}
	});
});
