<?php
/**
 * @author              Angelo Rocha
 * @author              Angelo Rocha <contato@angelorocha.com.br>
 * @link                https://angelorocha.com.br
 * @copyleft            2020
 * @license             GNU GPL 3 (https://www.gnu.org/licenses/gpl-3.0.html)
 * @package             WordPress
 * @subpackage          angelorocha
 * @since 1.0.0
 */

/**
 * Theme Constants
 */
define( '_WPSS_THEME_VERSION', '1.0.0' );
define( '_WPSS_THEME_DIR', get_template_directory() );
define( '_WPSS_THEME_DIR_URI', get_template_directory_uri() );
define( '_WPSS_JS_DIR', _WPSS_THEME_DIR_URI . '/js/' );
define( '_WPSS_CSS_DIR', _WPSS_THEME_DIR_URI . '/css/' );
define( '_WPSS_IMAGES_DIR', _WPSS_THEME_DIR_URI . '/images/' );
define( '_WPSS_FILE_VERSION', 20200810 );
define( '_WPSS_THEME_STYLE_URI', get_stylesheet_directory_uri() );
define( '_WPSS_SITENAME', get_bloginfo( 'name' ) );
define( '_WPSS_SITEDESC', get_bloginfo( 'description' ) );
define( '_WPSS_SITE_LANG', get_bloginfo( 'language' ) );
define( '_WPSS_SITE_URL', home_url( '/' ) );

/**
 * Init Theme
 */
require_once 'init/WPSSinit.php';

/**
 * Include CMB2 Metabox framework
 */
require_once 'lib/cmb2/init.php';
require_once 'lib/cmb2-fontawesome-icon-picker/cmb2-fontawesome-picker.php';

/**
 * Load theme classes
 */
WPSSinit::wpss_load_class( 'WPSSMetaBox' );
WPSSinit::wpss_load_class( 'WPSSloadcss' );
WPSSinit::wpss_load_class( 'WPSSloadjs' );
WPSSinit::wpss_load_class( 'WPSScpt' );

/**
 * Load theme functions
 */
WPSSinit::wpss_load_files( 'inc' );

/**
 * Theme Setup
 */
add_action( 'after_setup_theme', 'wpss_theme_setup' );
function wpss_theme_setup() {
    load_theme_textdomain( 'wpss', get_template_directory() . '/lang' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 470, 270, true );
    add_image_size( 'post_cover', 870, 470, true );
    add_image_size( 'container_cover', 1920, 670, true );
    add_image_size( 'feedback_cover', 80, 80, true );

    register_nav_menus(
        array(
            'main_menu'   => __( 'Main Menu', 'wpss' ),
            'top_menu'    => __( 'Top Menu', 'wpss' ),
            'footer_menu' => __( 'Footer Menu', 'wpss' ),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support(
        'custom-logo',
        array(
            'width'       => 190,
            'height'      => 60,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => array( 'site-title', 'site-description' ),
        )
    );

    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
    add_theme_support( 'responsive-embeds' );
}