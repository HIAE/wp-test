<?php

namespace Theme\FieldsGroups;

use SolidPress\Core\FieldGroup;
use SolidPress\Core\OptionsPage;
use SolidPress\Fields;

/**
 * Register fields to Options
 */
class Options extends FieldGroup {

	/**
	 * Set fields and group args
	 */
	public function __construct() {
        $this->set_fields(
            array(
				// Footer
				'footer_tab' => new Fields\Tab( 'Footer' ),
				'footer'     => new Fields\Group(
                    '',
                    array(
						'sub_fields' => array(
							'logo'           => new Fields\Image( 'Logo' ),
							'copyright'      => new Fields\Textarea( 'Copyright' ),
							'certifications' => new Fields\Repeater(
								'Certificações',
								array(
									'sub_fields' => array(
										'image' => new Fields\Image( 'Imagem' ),
									),
								)
							),
							'buttons'        => new Fields\Repeater(
								'Botões',
								array(
									'sub_fields' => array(
										'link' => new Fields\Link( 'Link' ),
									),
								)
                            ),
						),
                    )
				),

            )
		);

		$this->args = array(
			'key'      => 'theme-options',
			'title'    => 'Opções do Tema',
			'location' => array(
				array(
					OptionsPage::is_equal_to( 'theme-options' ),
				),
			),
		);
	}
}