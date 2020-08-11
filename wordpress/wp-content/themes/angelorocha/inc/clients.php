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

$clients = new WPSSMetaBox();
$clients->metabox_id = 'wpss_clients_options';
$clients->metabox_title = 'Clientes';
$clients->option_key = 'wpss-clients-option';
$clients->icon_url = 'dashicons-groups';
$clients->position = 5;
$clients->post_type = array('options-page');

$clients->fields = array(
    array(
        'name' => 'Introdução',
        'desc' => '',
        'id'   => 'op_clients_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Título',
        'desc' => 'Escreva o título da seção',
        'id'   => 'op_clients_title',
        'type' => 'text',
    ),
    array(
        'name' => 'Descrição',
        'desc' => 'Escreva uma breve descrição',
        'id'   => 'op_clients_desc',
        'type' => 'textarea_small',
    ),

    array(
        'name' => 'Clientes',
        'desc' => '',
        'id'   => 'op_clients_title_2',
        'type' => 'title',
    ),
    array(
        'name'       => 'Cliete',
        'desc'       => 'Adicion um cliente',
        'id'         => 'op_client',
        'repeatable' => true,
        'text' => array(
            'add_row_text' =>  'Adicionar',
        ),
        'type'       => 'fontawesome_icon',
    ),
);
function get_clients($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-clients-option');

    return (!empty($option) ? $option : '');
}