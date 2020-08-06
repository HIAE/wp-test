<?php

namespace App\FieldsGroups;

use App\Helpers\Icons;
use SolidPress\Core\FieldGroup;
use SolidPress\Core\OptionsPage;
use SolidPress\Fields;

class Options extends FieldGroup
{
	public function __construct()
	{
		$this->set_fields([
			// Footer
			'footer_tab' => new Fields\Tab('Footer'),
			'footer' => new Fields\Group('', [
				'sub_fields' => [
					'logo' => new Fields\Image('Logo'),
					'copyright' => new Fields\Textarea('Copyright'),
					'certifications' => new Fields\Repeater('Certificações', [
						'sub_fields' => [
							'image' => new Fields\Image('Imagem')
						]
					]),
					'buttons' => new Fields\Repeater('Botões', [
						'sub_fields' => [
							'link' => new Fields\Link('Link')
						]
					])
				]
			]),

			// Social networks
			'social_networks_tab' => new Fields\Tab('Redes sociais'),
			'social_networks' => new Fields\Repeater('Redes sociais', [
				'sub_fields' => [
					'icon' => Icons::select_field(),
					'link' => new Fields\Text('Link'),
				]
			]),
		]);

		$this->args = [
			'key' => 'theme-options',
			'title' => 'Opções do Tema',
			'location' => [
				[
					OptionsPage::is_equal_to('theme-options'),
				],
			]
		];
	}
}