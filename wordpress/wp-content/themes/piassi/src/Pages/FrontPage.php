<?php
/**
 * FrontPage
 *
 * @package piassi
 */

namespace Theme\Pages;

use SolidPress\Core\FieldGroup;
use SolidPress\Core\Page;
use Theme\FieldsGroups\FrontPage as FrontPageFieldsGroups;
use Theme\Models\Image;

/**
 * Handle Home template and props
 */
class FrontPage extends Page {
	/**
	 * Page template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'pages/front-page/template';

	/**
	 * Values returned by get_props will be avaliable at the template as variables
	 *
	 * @return array
	 */
	public function get_props(): array {
		$home_fields = FieldGroup::get_values( new FrontPageFieldsGroups() );

		$home_fields['hero']['background_image'] = Image::from_post_thumbnail();
		$home_fields['hero']['description']      = apply_filters( 'the_content', get_the_content( null, false, get_the_ID() ) );

		return $home_fields;
	}
}