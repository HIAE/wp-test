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

$feedback = new WPSSMetaBox();
$feedback->metabox_id = 'wpss_feedback_options';
$feedback->metabox_title = 'Opniões';
$feedback->option_key = 'wpss-feedback-option';
$feedback->icon_url = 'dashicons-megaphone';
$feedback->position = 5;
$feedback->post_type = array('options-page');

$feedback->fields = array(
    array(
        'name' => 'Cabeçalho',
        'desc' => '',
        'id'   => 'op_feedback_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Título',
        'desc' => 'Escreva o título da seção',
        'id'   => 'op_feedback_titulo',
        'type' => 'text',
    ),
    array(
        'name' => 'Opniões',
        'desc' => '',
        'id'   => 'op_feedback_title_2',
        'type' => 'title',
    ),
    array(
        'name'         => 'Cadastrar Opnião',
        'desc'         => '',
        'id'           => '_op_feedback_group',
        'type'         => 'group',
        'options'      => array(
            'group_title'    => esc_html__('Opnião {#}', 'wpss'),
            'add_button'     => esc_html__('Adicionar', 'wpss'),
            'remove_button'  => esc_html__('Remover', 'wpss'),
            'sortable'       => true,
            // 'closed'      => true,
            'remove_confirm' => esc_html__('Tem certeza que deseja remover?', 'wpss'),
        ),
        'group_fields' => array(
            array(
                'name'       => 'Foto',
                'desc'       => '',
                'id'         => '_feedback_image',
                'type'       => 'file',
                'options'    => array(
                    'url' => false,
                ),
                'text'       => array(
                    'add_upload_file_text' => 'Selecionar Imagem'
                ),
                'query_args' => array(
                    'type' => array(
                        'image/gif',
                        'image/jpeg',
                        'image/png',
                    ),
                ),
            ),
            array(
                'name' => 'Nome do Cliente',
                'id'   => '_feedback_title',
                'type' => 'text',
            ),
            array(
                'name' => 'Texto',
                'id'   => '_feedback_text',
                'type' => 'textarea_small',
            ),
        )
    )
);
function get_feedback($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-feedback-option');

    return (!empty($option) ? $option : '');
}
