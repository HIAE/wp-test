import './lazyLoad';
import '../../components/header';
import '../fonts/icons.font';
import { scrollWindowToElement } from './scroll';
import $ from 'jquery';

$(window).ready(function() {
	$('a.scroll-link, .scroll-link > a').on('click', function(e) {
		e.preventDefault();
		const headerRef = $('._header');

		const url = $(this).attr('href');
		const [, hash] = url.split('#');

		console.log(parseInt(headerRef.outerHeight()) * -1);

		if (hash) {
			scrollWindowToElement(`#${hash}`, { offset: parseInt(headerRef.outerHeight()) * -1 });
		}

		if (headerRef.find('.toggle-menu').hasClass('active')) {
			headerRef.find('.toggle-menu').click();
		}
	});
});
