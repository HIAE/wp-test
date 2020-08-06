<?php

namespace App\Options;

use SolidPress\Core\OptionsPage;

class Theme extends OptionsPage
{
	public function __construct()
	{
		$this->args = [
			'page_title' 	=> 'Opções do tema',
			'menu_title'	=> 'Opções',
			'menu_slug' 	=> 'theme-options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		];
	}
}