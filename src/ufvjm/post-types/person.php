<?php

namespace UFVJM\Post_Types;

/**
 * Person custom post type class
 * 
 * @author jimmyandrade
 *        
 */
class Person {
	
	/**
	 * Person custom post type constructor
	 */
	public function __construct() {
		add_action( 'init', array( __CLASS__, 'init' ), 0 );
	}
	
	/**
	 * Person custom post type initializator
	 */
	public static function init() {
	
		$labels = array(
				'name'                => _x( 'People', 'Post Type General Name', 'ufvjm' ),
				'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'ufvjm' ),
				'menu_name'           => __( 'People', 'ufvjm' ),
				'parent_item_colon'   => __( 'Parent Person:', 'ufvjm' ),
				'all_items'           => __( 'All People', 'ufvjm' ),
				'view_item'           => __( 'View Person', 'ufvjm' ),
				'add_new_item'        => __( 'Add New Person', 'ufvjm' ),
				'add_new'             => __( 'Add New', 'ufvjm' ),
				'edit_item'           => __( 'Edit Person Data', 'ufvjm' ),
				'update_item'         => __( 'Update Person Data', 'ufvjm' ),
				'search_items'        => __( 'Search People', 'ufvjm' ),
				'not_found'           => __( 'Person not found', 'ufvjm' ),
				'not_found_in_trash'  => __( 'Person not found in Trash', 'ufvjm' ),
		);
		$rewrite = array(
				'slug'                => 'pessoal',
				'with_front'          => false,
				'pages'               => false,
				'feeds'               => true,
		);
		$args = array(
				'label'               => __( 'person', 'ufvjm' ),
				'description'         => __( 'Person related to website/organization', 'ufvjm' ),
				'labels'              => $labels,
				'supports'            => array( 'title', 'author', 'thumbnail', 'excerpt', 'custom-fields', ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'show_in_admin_bar'   => false,
				'menu_position'       => 20,
				'menu_icon'           => 'dashicons-admin-users',
				'can_export'          => true,
				'has_archive'         => false,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'rewrite'             => $rewrite,
				'capability_type'     => 'post',
		);
		
		register_post_type( 'person', $args );
	}
	
}

?>