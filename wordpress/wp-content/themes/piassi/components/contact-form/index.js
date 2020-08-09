import $ from 'jquery';
import axios from 'axios';

const contactForm = () => {
	const ref = $('._contact-form');
	const refFormAlert = ref.find('.form-alert');
	const refFormSpinner = ref.find('.form-spinner');
	const refFormButton = ref.find('button[type="submit"]');

	ref.on('submit', function(e) {
		e.preventDefault();

		refFormSpinner.removeClass('d-none');
		refFormButton.find('.icon').addClass('d-none');
		refFormButton.attr('disabled', 'disabled');

		axios
			.post(`${ref.attr('action')}?action=send_contact_email`, ref.serialize(), {
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded'
				}
			})
			.then(function({ data }) {
				refFormSpinner.addClass('d-none');
				refFormButton.removeAttr('disabled');

				if (data.error) {
					refFormAlert.addClass('alert-danger');
				} else {
					refFormAlert.removeClass('alert-danger');
				}

				ref.find('input[type=text], input[type=email], select, textarea').val('');

				refFormAlert.removeClass('d-none');
				refFormButton.find('.icon').removeClass('d-none');
				refFormAlert.html(data.message);
			});
	});
};

contactForm();
