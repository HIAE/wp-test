<?php
/**
 * Header component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 */
class Header extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/header/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'element' => 'h1',
		'content' => '',
	);
}
