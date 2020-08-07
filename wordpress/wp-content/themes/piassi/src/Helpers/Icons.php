<?php

namespace Theme\Helpers;

use SolidPress\Core\Field;
use SolidPress\Fields;

/**
 * Helper class to handle icons
 */
class Icons {

	const LIST = array(
		'arrow',
		'beneficiario',
		'coracao',
		'corretor',
		'email',
		'facebook',
		'instagram',
		'ok',
		'papel',
		'Search',
		'telefone',
		'whatsapp',
		'whatsapp-logo',
	);

	/**
	 * Generate a select field with the list of icons.
	 *
	 * @param string $label - Field label on admin.
	 * @return Field - Fields\Select instance with icons as options.
	 */
	public static function select_field( string $label = 'Ícone' ): Field {
		return new Fields\Select(
			$label,
			array(
				'choices' => array_combine( self::LIST, self::LIST ),
			)
		);
	}
}
