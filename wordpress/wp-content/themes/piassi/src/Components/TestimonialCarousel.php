<?php
/**
 * Testimonial carousel component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Testimonial title
 * @param string subtitle - Testimonial subtitle
 * @param string description - Testimonial description
 * @param array cards - Testimonial cards
 */
class TestimonialCarousel extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/testimonial-carousel/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'       => '',
		'client'      => '',
		'description' => '',
	);
}
