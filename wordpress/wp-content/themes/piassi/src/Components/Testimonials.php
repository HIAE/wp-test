<?php
/**
 * Testimonials component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Testimonials title
 * @param string subtitle - Testimonials subtitle
 * @param array testimonials - Testimonials cards
 */
class Testimonials extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/testimonials/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'        => '',
		'title'        => '',
		'subtitle'     => '',
		'testimonials' => array(),
	);
}
