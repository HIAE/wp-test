<?php

namespace App\FieldsGroups;

use App\Helpers\Icons;
use SolidPress\Core\FieldGroup;
use SolidPress\Core\Page;
use SolidPress\Fields;

class Home extends FieldGroup
{
	public function __construct()
	{
		$this->set_fields([
			// Hero
			'hero_tab' => new Fields\Tab('Hero'),
			'hero' => new Fields\Group('', [
				'sub_fields' => [
					'buttons' => new Fields\Repeater('Botões Principais', [
						'sub_fields' => [
							'link' => new Fields\Link('Link'),
							'icon' => Icons::select_field()
						]
					]),

					'buttons_bar' => new Fields\Repeater('Botões Inferiores', [
						'sub_fields' => [
							'link' => new Fields\Link('Link'),
							'icon' => Icons::select_field()
						]
					]),
				]
			]),

			// Quem Somos
			'who_we_are_tab' => new Fields\Tab('Quem somos'),
			'who_we_are' => new Fields\Group('', [
				'sub_fields' => [
					'title' => new Fields\Text('Título'),
					'image' => new Fields\Image('Imagem', [
						'wrapper' => ['width' => 30]
					]),
					'description' => new Fields\Editor('Descrição', [
						'wrapper' => ['width' => 70]
					]),
				]
			]),

			// CTA App
			'app_cta_tab' => new Fields\Tab('CTA App'),
			'app_cta' => new Fields\Group('', [
				'sub_fields' => [
					'title' => new Fields\Text('Título'),
					'description' => new Fields\Editor('Descrição'),
					'buttons' => new Fields\Repeater('Botões', [
						'sub_fields' => [
							'link' => new Fields\Link('Link'),
							'icon' => new Fields\Image('Ícone')
						]
					]),
					'background' => new Fields\Image('Fundo')
				]
			]),

			// Partners
			'partners_tab' => new Fields\Tab('Parceiros'),
			'partners' => new Fields\Group('', [
				'sub_fields' => [
					'title' => new Fields\Text('Título'),
					'items' => new Fields\Repeater('Carousel', [
						'sub_fields' => [
							'link' => new Fields\URL('Link'),
							'logo' => new Fields\Image('Logo')
						]
					]),
				]
			]),

			// Testimonials
			'testimonials_tab' => new Fields\Tab('Depoimento'),
			'testimonials' => new Fields\Group('', [
				'sub_fields' => [
					'title' => new Fields\Text('Título'),
					'items' => new Fields\Repeater('Carousel', [
						'sub_fields' => [
							'text' => new Fields\Textarea('Texto'),
							'name' => new Fields\Text('Nome')
						]
					]),
				]
			]),

			// Posts Cta
			'posts_cta_tab' => new Fields\Tab('CTA Posts'),
			'posts_cta' => new Fields\Group('', [
				'sub_fields' => [
					'title' => new Fields\Text('Título'),
				]
			]),
		]);

		$this->args = [
			'key' => 'home-fields',
			'title' => 'Home',
			'location' => [
				[
					Page::type_is_equal_to('front_page'),
				],
			]
		];
	}
}