<?php

namespace UFVJM\Taxonomies;

/**
 *
 * @author jimmyandrade
 *        
 */
class Person_Category {
	
	/**
	 */
	public function __construct() {
		add_action( 'init', array( __CLASS__, 'init' ), 0 );
	}
	
	public static function init() {
	
		$labels = array(
				'name'                       => _x( 'Person Categories', 'Taxonomy General Name', 'ufvjm' ),
				'singular_name'              => _x( 'Person Category', 'Taxonomy Singular Name', 'ufvjm' ),
				'menu_name'                  => __( 'Categories', 'ufvjm' ),
				'all_items'                  => __( 'All Categories', 'ufvjm' ),
				'parent_item'                => __( 'Parent Category', 'ufvjm' ),
				'parent_item_colon'          => __( 'Parent Category:', 'ufvjm' ),
				'new_item_name'              => __( 'New Person Category', 'ufvjm' ),
				'add_new_item'               => __( 'Add New Person Category', 'ufvjm' ),
				'edit_item'                  => __( 'Edit Person Category', 'ufvjm' ),
				'update_item'                => __( 'Update Person Category', 'ufvjm' ),
				'separate_items_with_commas' => __( 'Separate person categories with commas', 'ufvjm' ),
				'search_items'               => __( 'Search Categories', 'ufvjm' ),
				'add_or_remove_items'        => __( 'Add or remove categories', 'ufvjm' ),
				'choose_from_most_used'      => __( 'Choose from the most used person categories', 'ufvjm' ),
				'not_found'                  => __( 'Person Category Not Found', 'ufvjm' ),
		);
		$rewrite = array(
				'slug'                       => 'categorias-de-pessoal',
				'with_front'                 => false,
				'hierarchical'               => true,
		);
		$args = array(
				'labels'                     => $labels,
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => false,
				'rewrite'                    => $rewrite,
		);
		
		register_taxonomy( 'person-category', array( 'person' ), $args );
		
		wp_insert_term( __( 'Docents' ), 'person-category', array( 'slug' => 'docentes' ) );
		wp_insert_term( __( 'Collegiate' ), 'person-category', array( 'slug' => 'colegiado' ) );
	}
	
}
