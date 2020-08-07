<?php

namespace Theme\FieldsGroups;

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
				'hero_tab' => new Fields\Tab( 'Hero' ),
				'hero'     => new Fields\Group(
                    '',
                    array(
						'sub_fields' => array(
							'buttons'     => new Fields\Repeater(
								'Botões Principais',
								array(
									'sub_fields' => array(
										'link' => new Fields\Link( 'Link' ),
										'icon' => Icons::select_field(),
									),
								)
							),

							'buttons_bar' => new Fields\Repeater(
								'Botões Inferiores',
								array(
									'sub_fields' => array(
										'link' => new Fields\Link( 'Link' ),
										'icon' => Icons::select_field(),
									),
								)
							),
						),
                    )
				),
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
}