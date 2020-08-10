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
		add_action( 'init', array( $this, 'sizes'  ) );
	}

	public function sizes(){
		add_theme_support('post-thumbnails');
		add_image_size( 'portfolio', 1200, 670, true );
		add_image_size( 'thumb-portfolio', 410, 270, true );
	}
}

