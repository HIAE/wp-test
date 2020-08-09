<?php
/**
 * Social networks component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 */
class SocialNetworks extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/social-networks/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'           => '',
		'social_networks' => array(),
	);


	/**
	 * Query for social networks optios field
	 *
	 * @return array
	 */
	public function get_props(): array {
		return array(
			'social_networks' => get_field( 'social_networks', 'option' ),
		);
	}
}