<?php
/**
 * Default page template
 *
 * @see App\Pages\Index
 *
 * @package piassi
 */

get_header();

echo new App\Pages\Index();

get_footer();