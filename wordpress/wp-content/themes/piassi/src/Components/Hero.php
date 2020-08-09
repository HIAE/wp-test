<?php
/**
 * Hero component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Hero title
 * @param string description - Hero description
 * @param array button - Button field array
 * @param string background_image - Background image address
 */
class Hero extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/hero/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'            => '',
		'title'            => '',
		'description'      => '',
		'button'           => array(),
		'background_image' => '',
	);
}