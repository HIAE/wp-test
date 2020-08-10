<?php

namespace app;

/**
 * Thumbnails
 *
 * @package app
 */
class SizeThumbnails {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_theme_support('post-thumbnails');
		add_action( 'before_setup_theme', array( $this, 'sizes'  ) );
	}

	public function sizes(){
		add_image_size( 'portfolio', 1200, 670, true );
	}
}

