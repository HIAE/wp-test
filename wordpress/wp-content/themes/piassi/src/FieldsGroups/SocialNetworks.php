<?php

namespace Theme\FieldsGroups;

use SolidPress\Core\FieldGroup;
use SolidPress\Core\OptionsPage;
use SolidPress\Fields;
use Theme\Helpers\Icons;

/**
 * Register fields to SocialNetworks
 */
class SocialNetworks extends FieldGroup {

	/**
	 * Set fields and group args
	 */
	public function __construct() {
        $this->set_fields(
            array(
				'social_networks' => new Fields\Repeater(
                    __( 'Social Networks', 'piassi' ),
                    array(
						'sub_fields' => array(
							'name'    => new Fields\Text( 'Name' ),
							'icon'    => Icons::select_field(),
							'address' => new Fields\URL( 'Endereço' ),
						),
					)
                ),
            )
		);

		$this->args = array(
			'key'      => 'social-networks',
			'title'    => __( 'Social Networks', 'piassi' ),
			'location' => array(
				array(
					OptionsPage::is_equal_to( 'social-networks' ),
				),
			),
		);
	}
}
