<?php

namespace Theme\Hooks;

use SolidPress\Core\Hook;

/**
 * ImageSizes
 */
class ImagesSizes extends Hook {
	/**
	 * Bind action
	 */
	public function __construct() {
        $this->add_action( 'after_setup_theme', 'images_sizes' );
	}

	/**
     * Set thumbnail sizes
     */
	public function images_sizes(): void {
		// SQUARE
		add_image_size( 'SIZE_105_105', 105, 105, true );

		// HORIZONTAL
		add_image_size( 'SIZE_680_380', 680, 380, true );

		// VERTICAL
		// ...
	}
}
