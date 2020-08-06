<?php
/**
 * Footer component
 *
 * @package piassi
 */

namespace App\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 */
class Footer extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/footer/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'element' => 'h1',
		'content' => '',
	);

	/**
	 * Values returned by get_props will be avaliable at the template as variables
	 *
	 * @return array
	 */
	public function get_props(): array {
		return (array) get_field( 'footer', 'option' );
	}
}
