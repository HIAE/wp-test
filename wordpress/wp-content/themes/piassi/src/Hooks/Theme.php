<?php

namespace App\Hooks;

use SolidPress\Core\Hook;

class Theme extends Hook
{
	public function __construct()
	{
		$this->add_action('after_setup_theme', 'setup_theme');
		$this->add_action('wp_enqueue_scripts', 'enqueue_scripts');
		$this->add_filter('body_class', 'add_classes_to_body');
		$this->add_action('wp_head', 'add_pingback_url_header');
	}

	public function setup_theme(): void
	{
		// Make theme available for translation.
		// Translations can be filed in the /languages/ directory.
		load_theme_textdomain('solidpress-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		// By adding theme support, we declare that this theme does not use a hard-coded <title> tag, and expect WordPress to provide it for us.
		add_theme_support('title-tag');

		// This theme uses wp_nav_menu() in the Header and Footer.
		register_nav_menus(array(
			'main-menu' => esc_html__('Main Menu', 'admin'),
			'mobile-menu' => esc_html__('Mobile Menu', 'admin'),
			'footer-menu' => esc_html__('Footer Menu', 'admin')
		));

		// Switch default core markup for search form, gallery and image captions to output valid HTML5.
		add_theme_support('html5', [
			'search-form',
			'gallery',
			'caption',
		]);

		add_theme_support('post-thumbnails');

		add_theme_support('custom-logo', [
			'width' => 200,
			'height' => 50,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => ['site-title', 'site-description'],
		]);

		register_sidebar(
			array(
				'name'          => __('Sidebar'),
				'id'            => 'blog-sidebar',
				'description'   => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4 class="h5 mb-3 widget-title font-weight-normal">',
				'after_title'   => '</h4>',
			)
		);
	}

	public function enqueue_scripts(): void
	{
		// Replace jQuery for a newer version
		// wp_deregister_script('jquery');
		// wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), null, true);

		// Remove Gutemberg styles for any page except posts
		if (!is_single()) {
			wp_dequeue_style('wp-block-library');
		}

		// Remove unnecessary scripts
		wp_deregister_script('wp-embed');
	}

	/**
	 * Adds custom classes to the array of body classes.
	 * @param array $classes Classes for the body element.
	 */
	function add_classes_to_body($classes): array
	{
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}

	// Add a pingback url auto-discovery header for single posts, pages, or attachments.
	public function add_pingback_url_header(): void
	{
		if (is_singular() && pings_open()) {
			echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
		}
	}
}