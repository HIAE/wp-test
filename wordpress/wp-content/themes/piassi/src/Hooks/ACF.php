<?php

namespace Theme\Hooks;

use SolidPress\Core\Hook;
use Theme\Models\Image;

/**
 * ACF specific hooks
 */
class ACF extends Hook {

	/**
	 * Add actions
	 */
	public function __construct() {
        $this->add_action( 'acf/format_value/type=image', 'image_format_value', 20, 3 );
		$this->add_filter( 'acf/settings/show_admin', 'acf_settings_show_admin' );
		$this->add_filter( 'acf/settings/url', 'acf_settings_url' );
	}

	/**
	 * Hook into image acf field to return Image model instance
	 *
	 * @param array  $value - acf original value.
	 * @param [type] $post_id - post id.
	 * @param [type] $field - field.
	 * @return Image|array
	 */
	public function image_format_value( $value, $post_id, $field ) {
		return is_array( $value ) ? Image::from_acf( $value ) : $value;
	}

	/**
	 * Customize the url setting to fix incorrect asset URLs.
	 *
	 * @param string $url
	 * @return string
	 */
	public function acf_settings_url( $url ): string {
		return MY_ACF_URL;
	}

	/**
	 * Hide the ACF admin menu item.
	 *
	 * @param bool $show_admin
	 * @return bool
	 */
	public function acf_settings_show_admin( $show_admin ): bool {
		return false;
	}
}