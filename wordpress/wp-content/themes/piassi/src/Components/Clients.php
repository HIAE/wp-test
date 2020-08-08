<?php
/**
 * Clients component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Clients title
 * @param string subtitle - Clients subtitle
 * @param string description - Clients description
 * @param array clients - Clients logos
 */
class Clients extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/clients/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'       => '',
		'title'       => '',
		'subtitle'    => '',
		'description' => '',
		'clients'     => array(),
	);
}