<?php
/**
 * About component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - About title
 * @param string subtitle - About subtitle
 * @param string description - About description
 * @param array cards - About cards
 */
class About extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/about/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'       => '',
		'title'       => '',
		'subtitle'    => '',
		'description' => '',
		'cards'       => array(),
	);
}