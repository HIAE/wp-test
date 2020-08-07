<?php
/**
 * Gallery component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Display ACF Gallery with thumbnails and lightbox
 *
 * @param string class - CSS class for the root element
 * @param array gallery - ACF Gallery field
 */
class Gallery extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/gallery/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'   => '',
		'gallery' => '',
	);
}