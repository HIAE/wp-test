<?php
/**
 * Carousel component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Carousel of items
 *
 * @param string class CSS class for the root element
 * @param Component[] items Array of Components instances,
 * @param boolean show_navigators Show arrow navigation
 * @param boolean show_indicators Show pager
 *
 * @package CaptalysSaude
 */
class Carousel extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/carousel/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'            => '',
		'show_navigators'  => true,
		'show_indicators'  => true,
		'loop'             => true,
		'slides_per_view'  => 1,
		'slides_per_group' => 1,
		'items'            => array(),
	);
}