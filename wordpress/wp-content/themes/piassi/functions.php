<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package piassi
 */

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL | E_WARNING );

use SolidPress\Core\Theme;
use SolidPress\Core\WPTemplate;

add_filter( 'use_block_editor_for_post', '__return_false' );

// Composer autoload
require get_template_directory() . '/vendor/autoload.php';

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_template_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
require_once MY_ACF_PATH . 'acf.php';

$registrable_namespaces = array();

// Check if ACF plugin is active to register fields
if ( function_exists( 'acf_add_local_field_group' ) ) {
	$registrable_namespaces[] = 'FieldsGroups';
	$registrable_namespaces[] = 'Options';
}

// Set core registrables
$registrable_namespaces = array_merge(
    $registrable_namespaces,
    array(
		'Taxonomies',
		'PostTypes',
		'Hooks',
	)
);

// Setup a theme instance for SolidPress
global $theme_class;
$theme_class = new Theme(
    array(
		'template_engine'        => new WPTemplate(),
		'namespace'              => 'Theme',
		'base_folder'            => 'src',
		'registrable_namespaces' => $registrable_namespaces,
    )
);
