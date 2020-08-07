<?php

namespace Theme\Options;

use SolidPress\Core\OptionsPage;

/**
 * Register SocialNetworks options page
 */
class SocialNetworks extends OptionsPage {
	/**
	 * Set options page args
	 */
	public function __construct() {
		$this->args = array(
			'page_title' => __( 'Social Networks', 'piassi' ),
			'menu_title' => __( 'Social Networks', 'piassi' ),
			'menu_slug'  => 'social-networks',
			'capability' => 'edit_posts',
			'redirect'   => false,
		);
	}
}