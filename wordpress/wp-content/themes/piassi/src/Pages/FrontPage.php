<?php
/**
 * FrontPage
 *
 * @package piassi
 */

namespace Theme\Pages;

use SolidPress\Core\Page;

/**
 * Handle Home template and props
 */
class FrontPage extends Page {
	/**
	 * Page template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'pages/front-page/template';

	/**
	 * Values returned by get_props will be avaliable at the template as variables
	 *
	 * @return array
	 */
	public function get_props(): array {
		return array();
	}
}
