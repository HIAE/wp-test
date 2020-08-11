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

$banners = new WPSSMetaBox();
$banners->metabox_id = 'wpss_banner_options';
$banners->metabox_title = 'Banner';
$banners->option_key = 'wpss-banner-option';
$banners->icon_url = 'dashicons-images-alt2';
$banners->position = 5;
$banners->post_type = array('options-page');

$banners->fields = array(
    array(
        'name'         => 'Inserir Banners',
        'desc'         => 'Insira os banners da página inicial, não esqueça de inserir as imagens na dimensão minima de <strong style="color: #F00;">1920px por 670px</strong>.',
        'id'           => '_op_banner_group',
        'type'         => 'group',
        'options'      => array(
            'group_title'   => esc_html__('Banner {#}', 'wpss'),
            'add_button'    => esc_html__('Adicionar', 'wpss'),
            'remove_button' => esc_html__('Remover', 'wpss'),
            'sortable'      => true,
            // 'closed'      => true,
            'remove_confirm' => esc_html__( 'Tem certeza que deseja remover?', 'wpss' ),
        ),
        'group_fields' => array(
            array(
                'name'       => 'Imagem do Banner',
                'desc'       => 'Clique em "<strong>Selecionar Imagem</strong>" para selecionar o arquivo em seu computador',
                'id'         => '_banner_image',
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
                'name' => 'Titulo do Banner',
                'id'   => '_banner_title',
                'type' => 'text',
            ),
            array(
                'name' => 'Texto do Banner',
                'id'   => '_banner_text',
                'type' => 'textarea_small',
            ),
            array(
                'name' => 'Texto do Botão',
                'id'   => '_banner_button',
                'type' => 'text',
            ),
            array(
                'name' => 'Link do Botão',
                'id'   => '_banner_link',
                'type' => 'text_url',
            ),
        )

    ),

);

function get_site_banners($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-banner-option');

    return (!empty($option) ? $option : '');
}