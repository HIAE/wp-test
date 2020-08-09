<?php
/**
 * Section header component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 * @param string title - Section header title
 * @param string title_class - Css class for the title element
 * @param string subtitle - Section header subtitle
 * @param string description - Section header description
 * @param string description_class - Css class for the description element
 */
class SectionHeader extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/section-header/template';

	/**
     * Component default props
     *
     * @var string
     */
	public $props = array(
		'class'             => '',
		'title'             => '',
		'title_class'       => '',
		'subtitle'          => '',
		'description'       => '',
		'description_class' => '',
	);
}