<?php
/**
 * @author              Angelo Rocha
 * @author              Angelo Rocha <contato@angelorocha.com.br>
 * @link                https://angelorocha.com.br
 * @copyleft            2020
 * @license             GNU GPL 3 (https://www.gnu.org/licenses/gpl-3.0.html)
 * @package             WordPress
 * @subpackage          angelorocha
 * @since 1.0.0
 */

$social_options = new WPSSMetaBox();
$social_options->metabox_id = 'wpss_social_options';
$social_options->metabox_title = 'Redes Sociais';
$social_options->option_key = 'wpss-social-option';
$social_options->icon_url = 'dashicons-businessman';
$social_options->position = 5;
$social_options->post_type = array('options-page');

$social_options->fields = array(
    array(
        'name' => 'Links para redes sociais',
        'desc' => '',
        'id'   => 'op_header_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Facebook',
        'desc' => '',
        'id'   => '_op_facebook',
        'type' => 'text_url',
    ),
    array(
        'name' => 'Instagram',
        'desc' => '',
        'id'   => '_op_instagram',
        'type' => 'text_url',
    ),

    array(
        'name' => 'Twitter',
        'desc' => '',
        'id'   => '_op_twitter',
        'type' => 'text_url',
    ),
    array(
        'name' => 'Linkedin',
        'desc' => '',
        'id'   => '_op_linkedin',
        'type' => 'text_url',
    ),
    array(
        'name' => 'Behance',
        'desc' => '',
        'id'   => '_op_wbehance',
        'type' => 'text_url',
    ),
);

function get_social_link( $key ) {
    $option = WPSSMetaBox::wpss_option( $key, 'wpss-social-option' );

    return ( ! empty( $option ) ? $option : '' );
}