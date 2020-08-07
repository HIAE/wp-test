<?php

namespace Theme\Options;

use SolidPress\Core\OptionsPage;

/**
 * Register OptionsPage
 */
class Theme extends OptionsPage {
	/**
	 * Set options page args
	 */
	public function __construct() {
		$this->args = array(
			'page_title' => 'Opções do tema',
			'menu_title' => 'Opções',
			'menu_slug'  => 'theme-options',
			'capability' => 'edit_posts',
			'redirect'   => false,
		);
	}
}