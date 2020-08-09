<?php
/**
 * Utils class
 *
 * @package CaptalysSaude
 */

namespace Theme\Helpers;

/**
 * Utils class
 */
class Utils {
	/**
	 * Transparent svg for lazy loading placeholder
	 *
	 * @return string
	 */
	public static function image_placeholder(): string {
		return 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAzIDInPjwvc3ZnPg==';
	}

	/**
	 * Sanitize post data
	 *
	 * @param string $data
	 * @return string
	 */
	public static function sanitize_post( string $data ): string {
		return wp_strip_all_tags( stripslashes( sanitize_text_field( filter_input( INPUT_POST, $data ) ) ) );
	}
}