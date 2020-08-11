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

$about = new WPSSMetaBox();
$about->metabox_id = 'wpss_about_options';
$about->metabox_title = 'Sobre mim';
$about->option_key = 'wpss-about-option';
$about->icon_url = 'dashicons-format-status';
$about->position = 5;
$about->post_type = array('options-page');

$about->fields = array(
    array(
        'name' => 'Sobre',
        'desc' => '',
        'id'   => 'op_about_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Título',
        'desc' => 'Escreva o título da seção',
        'id'   => 'op_about_titulo',
        'type' => 'text',
    ),
    array(
        'name' => 'Descrição',
        'desc' => 'Adicione uma breve descrição',
        'id'   => 'op_about_desc',
        'type' => 'textarea_small',
    ),


    array(
        'name' => 'Habilidades',
        'desc' => '',
        'id'   => 'op_about_title_2',
        'type' => 'title',
    ),

    array(
        'name'         => 'Cadastrar Habilidades',
        'desc'         => 'Adicione suas habilidades',
        'id'           => '_op_about_group',
        'type'         => 'group',
        'options'      => array(
            'group_title'    => esc_html__('Habilidade {#}', 'wpss'),
            'add_button'     => esc_html__('Adicionar', 'wpss'),
            'remove_button'  => esc_html__('Remover', 'wpss'),
            'sortable'       => true,
            // 'closed'      => true,
            'remove_confirm' => esc_html__('Tem certeza que deseja remover?', 'wpss'),
        ),
        'group_fields' => array(
            array(
                'name' => 'Ícone',
                'id'   => '_skill_icon',
                'type' => 'fontawesome_icon',
            ),
            array(
                'name' => 'Titulo',
                'id'   => '_skill_title',
                'type' => 'text',
            ),
            array(
                'name' => 'Descrição',
                'id'   => '_skill_desc',
                'type' => 'textarea_small',
            ),
        )
    )
);
function get_about($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-about-option');

    return (!empty($option) ? $option : '');
}
