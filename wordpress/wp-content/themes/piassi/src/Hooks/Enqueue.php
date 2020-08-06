<?php

/**
 * Enqueueable Interface.
 *
 * @package   Theme\Hooks
 */

namespace App\Hooks;

use SolidPress\Core\Hook;

/**
 * Enqueue assets for current template
 */
class Enqueue extends Hook
{
	/**
	 * Adds actions
	 */
	public function __construct()
	{
		$this->add_action('wp_enqueue_scripts', 'enqueue_template_scripts');
	}

	/**
	 * Enqueue assets
	 *
	 * @return void
	 */
	public function enqueue_template_scripts(): void
	{
		$template_name = $this->get_template_name();

		if (!$template_name) {
			return;
		}

		global $theme_class;

		// Theme scripts & styles
		$css_path = sprintf(
			get_template_directory_uri() . '/dist/%s.css',
			$template_name
		);

		$js_path = sprintf(
			get_template_directory_uri() . '/dist/%s.js',
			$template_name
		);

		wp_enqueue_style(
			'piassi-style',
			$css_path,
			array(),
			filemtime(get_template_directory($css_path))
		);

		wp_enqueue_script(
			'piassi-scripts',
			$js_path . '#defer',
			array('jquery'),
			filemtime(get_template_directory($js_path)),
			true
		);
	}

	/**
	 * Return current page template name based on WordPress template hierarchy
	 *
	 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @return string
	 */
	public static function get_template_name(): string
	{
		$template_name = 'default';

		if (is_front_page()) {
			// Home
			$template_name = 'front-page';
		} elseif (is_home() || is_search()) {
			$template_name = 'home';
		} elseif (is_single()) {
			$template_name = 'single';
		} elseif (is_category()) {
			// Category
			$template_name = 'category';
		} elseif (is_tax('tag')) {
			// Tags
			$template_name = 'tag';
		} elseif (is_page()) {
			$template_name = 'page';

			// Set $template_name for custom templates.
			if (is_page_template()) {
				$template_name = str_replace(
					['template-', '.php'],
					['', ''],
					get_page_template_slug()
				);
			}
		} elseif (is_404()) {
			// 404
			$template_name = '404';
		}

		// Return template name, providing filter hook to add or modify rules
		return apply_filters('solidpress_template_name', $template_name);
	}
}