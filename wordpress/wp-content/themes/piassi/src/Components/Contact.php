<?php
/**
 * Contact component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Contact title
 * @param string subtitle - Contact subtitle
 * @param string map - Google maps html embed
 * @param string mail_to - Email recipient address
 * @param string mail_subject - Email subject
 */
class Contact extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/contact/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'        => '',
		'title'        => '',
		'subtitle'     => '',
		'map'          => '',
		'mail_to'      => '',
		'mail_subject' => '',
	);
}