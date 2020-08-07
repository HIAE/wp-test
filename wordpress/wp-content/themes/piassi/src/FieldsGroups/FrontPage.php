<?php

namespace Theme\FieldsGroups;

use SolidPress\Core\Field;
use Theme\Helpers\Icons;
use SolidPress\Core\FieldGroup;
use SolidPress\Core\Page;
use SolidPress\Fields;

/**
 * Register fields to FrontPage
 */
class FrontPage extends FieldGroup {

	/**
	 * Set fields and group args
	 */
	public function __construct() {
        $this->set_fields(
            array(
				// Hero
				'hero_tab'    => new Fields\Tab( __( 'Hero', 'piassi' ) ),
				'hero'        => $this->hero_fields(),

				// About
				'about_tab'   => new Fields\Tab( __( 'About', 'piassi' ) ),
				'about'       => $this->about_fields(),

				// Gallery
				'gallery_tab' => new Fields\Tab( __( 'Gallery', 'piassi' ) ),
				'gallery'     => new Fields\Gallery( __( 'Images', 'piassi' ) ),
			)
		);

		$this->args = array(
			'key'      => 'home-fields',
			'title'    => 'Home',
			'location' => array(
				array(
					Page::type_is_equal_to( 'front_page' ),
				),
			),
		);
	}

	/**
	 * Return Hero fields
	 *
	 * @return Field
	 */
	private function hero_fields(): Field {
		return new Fields\Group(
			__( 'Hero', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'  => new Fields\Text( __( 'Title', 'piassi' ) ),
					'button' => new Fields\Link( __( 'Button', 'piassi' ) ),
				),
			)
        );
	}


	/**
	 * Return about fields
	 *
	 * @return Field
	 */
	private function about_fields(): Field {
		return new Fields\Group(
			__( 'About', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'       => new Fields\Text( __( 'Title', 'piassi' ) ),
					'subtitle'    => new Fields\Text( __( 'Subtitle', 'piassi' ) ),
					'description' => new Fields\Editor( __( 'Description', 'piassi' ) ),
					'cards'       => new Fields\Repeater(
						__( 'Cards', 'piassi' ),
						array(
							'layout'     => 'block',
							'sub_fields' => array(
								'icon'        => Icons::select_field(),
								'title'       => new Fields\Text( __( 'Title', 'piassi' ) ),
								'description' => new Fields\Editor( __( 'Description', 'piassi' ) ),
							),
						)
					),
				),
			)
        );
	}
}