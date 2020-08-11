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

/**
 * Post type definition
 */
add_action('init', 'wpss_portfolio_cpt');
function wpss_portfolio_cpt(){
    $portfolio = new WPSScpt();                                      // Instance of CPT
    $portfolio->param_cpt_key = 'portfolio';                         // Post type key
    $portfolio->param_cpt_name = 'Meus Trabalhos';                   // Post type name
    $portfolio->param_cpt_new = 'Trabalho';                          // Name to label "new item"
    $portfolio->param_cpt_all = 'Trabalhos';                         // Label to all CPT items
    $portfolio->param_menu_position = 5;                             // Post type position
    $portfolio->param_show_in_menu = '';                             // Show in menu, to cpt group add a string 'edit.php?post_type=[_post_type_key]'
    $portfolio->param_cpt_hierarchical = false;                      // Add support "Attributes", like a 'page' cpt
    $portfolio->param_supports = array('title');                     // Post type supports
    $portfolio->param_custom_input = 'Digite o título do portfolio'; // Custom input title placeholder
    $portfolio->param_taxonomies = null;                             // Post type taxonomies, accept array
    $portfolio->param_rewrite = '';                                  // Add a custom rewrite url
    $portfolio->param_redirect_archive = false;                      // Redirect archive templates to site home, accept string to redirect in internal pages or archive pages.
    $portfolio->param_redirect_single = false;                       // Redirect single templates to site home, accept string to redirect in internal pages or archive pages.
    $portfolio->param_menu_icon = 'dashicons-info';                  // Custom admin menu icon
    $portfolio->param_remove_cpt_columns = false;                    // If is "true ", remove post type default columns show only title column, accept array to remove specific columns
    $portfolio->param_add_cap = array('administrator');              // Add cap to roles, accept array
    $portfolio->param_remove_cap = '';                               // Remove cap from role, accept array
    $portfolio->param_custom_cpt_js = false;                         // Add custom js to edit/new cpt screen, accept array
    $portfolio->param_custom_cpt_css = false;                        // Add custom css to edit/new cpt screen, accept array
    $portfolio->param_cpt_custom_menu = false;                       // Set post type archives to attach custom menu
    $portfolio->param_cpt_custom_sidebar = false;                    // Set post type archives to attach custom sidebar
    $portfolio->param_cpt_contact_form = false;                      // Add post type contact form support
    $portfolio->param_cpt_admin_notice = false;                      // Add a custom notice on post type admin page.

    $portfolio->wpss_make_cpt();                                     // Make new post type
    $portfolio->wpss_flush_rewrite_rules();                          // Flush WordPress Rewrite Rules

    /*** Define custom post type metaboxes */
    $portfolio_metabox                = new WPSSMetaBox();
    $portfolio_metabox->metabox_id    = 'wpss_portfolio_metabox';
    $portfolio_metabox->metabox_title = 'Portfólio';
    $portfolio_metabox->post_type     = 'portfolio';
    $portfolio_metabox->fields        = array(
        array(
            'name'         => "Imagem",
            'desc'         => "Selecione a imagem do portfolio",
            'id'           => 'wpss_post_image',
            'type'         => 'file',
            'preview_size' => '_thumbnail',
            'options'      => array(
                'url' => true,
            ),
            'text'         => array(
                'add_upload_file_text' => "Enviar Imagem"
            ),
            'query_args'   => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                ),
            ),
            'column'       => array(
                'name'     => "Imagem",
                'position' => 2,
            )
        ),
        array(
            'name'       => 'Link do Portfólio',
            'desc'       => '',
            'id'         => 'wpss_post_image_link',
            'type'       => 'text',
            'attributes' => array(
                'style' => 'width:100%;'
            )
        )
    );
}