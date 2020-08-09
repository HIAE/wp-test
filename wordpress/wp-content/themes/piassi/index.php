<?php
/**
 * Default page template
 *
 * @see Theme\Pages\Index
 *
 * @package piassi
 */

get_header();

echo new Theme\Pages\Index();

get_footer();
