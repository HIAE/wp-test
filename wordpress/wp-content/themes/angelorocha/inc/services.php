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

$services = new WPSSMetaBox();
$services->metabox_id = 'wpss_serv_options';
$services->metabox_title = 'Serviços';
$services->option_key = 'wpss-serv-option';
$services->icon_url = 'dashicons-hammer';
$services->position = 5;
$services->post_type = array('options-page');

$services->fields = array(
    array(
        'name' => 'Cabeçalho da Seção',
        'desc' => '',
        'id'   => 'op_serv_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Título',
        'desc' => 'Escreva o título da seção',
        'id'   => 'op_serv_titulo',
        'type' => 'text',
    ),
    array(
        'name' => 'Descrição',
        'desc' => 'Adicione uma breve descrição',
        'id'   => 'op_serv_desc',
        'type' => 'textarea_small',
    ),

    array(
        'name' => 'Serviços',
        'desc' => '',
        'id'   => 'op_about_title_2',
        'type' => 'title',
    ),
    array(
        'name'       => 'Descrição',
        'desc'       => 'Adicion um serviço',
        'id'         => 'op_service',
        'repeatable' => true,
        'text' => array(
            'add_row_text' =>  'Adicionar Serviço',
        ),
        'type'       => 'textarea_small',
    ),

);
function get_service($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-serv-option');

    return (!empty($option) ? $option : '');
}
