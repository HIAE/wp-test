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
				'hero_tab'         => new Fields\Tab( __( 'Hero', 'piassi' ) ),
				'hero'             => $this->hero_fields(),

				// About
				'about_tab'        => new Fields\Tab( __( 'About', 'piassi' ) ),
				'about'            => $this->about_fields(),

				// Services
				'services_tab'     => new Fields\Tab( __( 'Services', 'piassi' ) ),
				'services'         => $this->service_fields(),

				// Testimonials
				'testimonials_tab' => new Fields\Tab( __( 'Testimonials', 'piassi' ) ),
				'testimonials'     => $this->testimonials_fields(),

				// Clients
				'clients_tab'      => new Fields\Tab( __( 'Clients', 'piassi' ) ),
				'clients'          => $this->clients_fields(),

				// Contact
				'contact_tab'      => new Fields\Tab( __( 'Contact', 'piassi' ) ),
				'contact'          => $this->contact_fields(),
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
	 * Return Service fields
	 *
	 * @return Field
	 */
	private function service_fields(): Field {
		return new Fields\Group(
			__( 'Services', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'        => new Fields\Text( __( 'Title', 'piassi' ) ),
					'subtitle'     => new Fields\Text( __( 'Subtitle', 'piassi' ) ),
					'description'  => new Fields\Editor( __( 'Description', 'piassi' ) ),
					'testimonials' => new Fields\Repeater(
						__( 'Testimonials', 'piassi' ),
						array(
							'sub_fields' => array(
								'client'      => new Fields\Text( __( 'Client', 'piassi' ) ),
								'description' => new Fields\Textarea( __( 'Description', 'piassi' ) ),
							),
						)
					),
					'button'       => new Fields\Link( __( 'Button', 'piassi' ) ),
					'image'        => new Fields\Image( __( 'Image', 'piassi' ) ),
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
								'description' => new Fields\Textarea( __( 'Description', 'piassi' ) ),
							),
						)
					),
				),
			)
        );
	}

	/**
	 * Return testimonials fields
	 *
	 * @return Field
	 */
	private function testimonials_fields(): Field {
		return new Fields\Group(
			__( 'Testimonials', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'        => new Fields\Text( __( 'Title', 'piassi' ) ),
					'subtitle'     => new Fields\Text( __( 'Subtitle', 'piassi' ) ),
					'testimonials' => new Fields\Repeater(
						__( 'Testimonials', 'piassi' ),
						array(
							'layout'     => 'block',
							'sub_fields' => array(
								'image'       => new Fields\Image( __( 'Image', 'piassi' ) ),
								'client'      => new Fields\Text( __( 'Client', 'piassi' ) ),
								'description' => new Fields\Textarea( __( 'Description', 'piassi' ) ),
							),
						)
					),
				),
			)
        );
	}

	/**
	 * Return clients fields
	 *
	 * @return Field
	 */
	private function clients_fields(): Field {
		return new Fields\Group(
			__( 'Clients', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'       => new Fields\Text( __( 'Title', 'piassi' ) ),
					'subtitle'    => new Fields\Text( __( 'Subtitle', 'piassi' ) ),
					'description' => new Fields\Editor( __( 'Description', 'piassi' ) ),
					'clients'     => new Fields\Repeater(
						__( 'Cards', 'piassi' ),
						array(
							'layout'     => 'block',
							'sub_fields' => array(
								'logo' => new Fields\Image( __( 'Logo', 'piassi' ) ),
								'name' => new Fields\Text( __( 'Name', 'piassi' ) ),
							),
						)
					),
				),
			)
        );
	}

	/**
	 * Return contact fields
	 *
	 * @return Field
	 */
	private function contact_fields(): Field {
		return new Fields\Group(
			__( 'Contact', 'piassi' ),
			array(
				'sub_fields' => array(
					'title'        => new Fields\Text( __( 'Title', 'piassi' ) ),
					'subtitle'     => new Fields\Text( __( 'Subtitle', 'piassi' ) ),
					'map'          => new Fields\Text( __( 'Map', 'piassi' ) ),
					'mail_to'      => new Fields\Text( __( 'Mail recipient', 'piassi' ) ),
					'mail_subject' => new Fields\Text( __( 'Mail subject', 'piassi' ) ),
				),
			)
        );
	}
}