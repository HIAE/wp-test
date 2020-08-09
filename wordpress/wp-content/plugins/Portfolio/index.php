<?php
/**
 * Plugin Name: Portfólio
 * Plugin URI: http://edersilva.com
 * Description: Plugin criado para cadastrar todos os trabalhos já desenvolvidos
 * Version: 1.0
 * Author: Eder Silva
 * Author URI: http://edersilva.com
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class Portfolio {

	public function __construct() {
		add_action( 'init', array( $this, 'post_portfolio' ) );
	}


	function post_portfolio() {
		register_post_type('portfolio', array(
			'labels' => array(
				'name' => __('Portfólio'),
				'singular_name' => __('Portfólio'),
				'add_new' => __('Novo Portfólio'),
				'add_new_item' => __('Adicionar Portfólio'),
				'edit_item' => __('Editar Portfólio'),
				'new_item' => __('Novo Portfólio'),
				'view_item' => __('Ver Portfólio'),
				'Procurar_items' => __('Procurar Portfólio'),
				'not_found' => __('Ops! Nada encontrado.'),
				'not_found_in_trash' => __('Ops! Lixo vazio.'),
				'parent_item_colon' => '',
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => true,
			'menu_position' => null,
			'supports' => array('title', 'thumbnail', 'excerpt'),
			'rewrite' => true,
			'rewrite'		=> array('slug' => 'portfolio'),
			'menu_position' => 3
		)
	);

	}

	

}

new Portfolio();



