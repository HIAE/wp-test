<?php

namespace Theme\PostTypes;

use SolidPress\Core\PostType;

/**
 * Register 'solution' custom post type
 */
class PortfolioItem extends PostType {
	/**
	 * Set custom post type args
	 */
	public function __construct() {
        $this->post_type = 'portfolio-item';

		$labels = array(
			'name'               => _x( 'Portfolio', 'Post Type Labels', 'piassi' ),
			'singular_name'      => _x( 'Portfolio Item', 'Post Type Labels', 'piassi' ),
			'menu_name'          => _x( 'Portfolio', 'Post Type Labels', 'piassi' ),
			'all_items'          => _x( 'Todos os Itens', 'Post Type Labels', 'piassi' ),
			'add_new'            => _x( 'Adicionar novo', 'Post Type Labels', 'piassi' ),
			'add_new_item'       => _x( 'Adicionar novo Portfolio Item', 'Post Type Labels', 'piassi' ),
			'edit_item'          => _x( 'Editar Portfolio Item', 'Post Type Labels', 'piassi' ),
			'new_item'           => _x( 'Novo Portfolio Item', 'Post Type Labels', 'piassi' ),
			'view_item'          => _x( 'Ver Portfolio Item', 'Post Type Labels', 'piassi' ),
			'insert_into_item'   => _x( 'Inserir na Portfolio Item', 'Post Type Labels', 'piassi' ),
			'view_items'         => _x( 'Ver Portfolio', 'Post Type Labels', 'piassi' ),
			'search_items'       => _x( 'Perquisar Portfolio', 'Post Type Labels', 'piassi' ),
			'not_found'          => _x( 'Nenhum Portfolio Item encontrada', 'Post Type Labels', 'piassi' ),
			'not_found_in_trash' => _x( 'Nenhum Portfolio Item encontrada na Lixeira', 'Post Type Labels', 'piassi' ),
		);

		$this->args = array(
			'label'               => _x( 'Portfolio Item', 'Post Type Labels', 'piassi' ),
			'labels'              => $labels,
			'description'         => '',
			'public'              => false,
			'publicly_queryable'  => false,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => false,
			'show_in_menu'        => true,
			'exclude_from_search' => true,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'menu_position'       => 8,
			'rewrite'             => false,
			'query_var'           => false,
			'supports'            => array( 'title', 'thumbnail' ),
			'menu_icon'           => 'dashicons-book-alt',
			'taxonomies'          => array(),
		);
	}
}