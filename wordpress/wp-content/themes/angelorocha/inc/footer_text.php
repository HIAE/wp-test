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

$footer_text = new WPSSMetaBox();
$footer_text->metabox_id = 'wpss_footer_options';
$footer_text->metabox_title = 'Texto do Rodapé';
$footer_text->option_key = 'wpss-footer-option';
$footer_text->icon_url = 'dashicons-format-aside';
$footer_text->position = 5;
$footer_text->post_type = array('options-page');

$footer_text->fields = array(
    array(
        'name' => 'Texto do Rodapé',
        'desc' => '',
        'id'   => 'op_footer_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Texto',
        'desc' => '',
        'id'   => '_op_footer_text',
        'type' => 'textarea_small',
    ),

);

function get_footer_text( $key ) {
    $option = WPSSMetaBox::wpss_option( $key, 'wpss-footer-option' );

    return ( ! empty( $option ) ? $option : '' );
}