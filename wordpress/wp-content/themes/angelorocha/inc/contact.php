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

$contact = new WPSSMetaBox();
$contact->metabox_id = 'wpss_contact_options';
$contact->metabox_title = 'Fale Conosco';
$contact->option_key = 'wpss-contact-option';
$contact->icon_url = 'dashicons-email-alt';
$contact->position = 5;
$contact->post_type = array('options-page');

$contact->fields = array(
    array(
        'name' => 'Informações de Contato',
        'desc' => '',
        'id'   => 'op_contact_title_1',
        'type' => 'title',
    ),
    array(
        'name' => 'Cabeçalho',
        'desc' => 'Defina o texto do cabeçalho da seção',
        'id'   => 'op_contact_head',
        'type' => 'text',
    ),
    array(
        'name' => 'Email',
        'desc' => 'Defina o email que receberá o formulário',
        'id'   => 'op_contact_mail',
        'type' => 'text_email',
    ),
    array(
        'name' => 'Google Maps',
        'desc' => 'Insira o codigo iframe do google maps',
        'id'   => 'op_contact_map',
        'type' => 'textarea_code',
    ),
);

function get_contact($key){
    $option = WPSSMetaBox::wpss_option($key, 'wpss-contact-option');

    return (!empty($option) ? $option : '');
}