<?php
/**
 * Services component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Services title
 * @param string subtitle - Services subtitle
 * @param string description - Services description
 * @param array cards - Services cards
 */
class Services extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/services/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'        => '',
		'title'        => '',
		'subtitle'     => '',
		'description'  => '',
		'testimonials' => array(),
		'button'       => array(),
		'image'        => null,
	);
}