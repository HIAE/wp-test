<?php
/**
 * ContactForm component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string mail_to - Email recipient address
 * @param string mail_subject - Email subject
 */
class ContactForm extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/contact-form/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'        => '',
		'title'        => '',
		'mail_to'      => '',
		'mail_subject' => '',
	);
}
