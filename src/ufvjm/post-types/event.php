<?php

class ufvjm_event_post_type {

	public function __construct() {
		add_action( 'init', array( __CLASS__, 'init' ) );
	}

	public static function init() {

		$events_labels	 = array(
			'name'				 => __( 'Events', 'ufvjm' ),
			'singular_name'		 => __( 'Event', 'ufvjm' ),
			'menu_name'			 => __( 'Events', 'ufvjm' ),
			'name_admin_bar'	 => __( 'Event', 'ufvjm' ),
			'all_items'			 => __( 'All Events', 'ufvjm' ),
			'add_new'			 => __( 'Add New', 'ufvjm' ),
			'add_new_item'		 => __( 'Add New Event', 'ufvjm' ),
			'edit_item'			 => __( 'Edit Event', 'ufvjm' ),
			'new_item'			 => __( 'New Event', 'ufvjm' ),
			'view_item'			 => __( 'View Event', 'ufvjm' ),
			'search_items'		 => __( 'Search Events', 'ufvjm' ),
			'not_found'			 => __( 'Event Not Found', 'ufvjm' ),
			'not_found_in_trash' => __( 'Event Not Found in Trash', 'ufvjm' ),
		);
		$events_rewrite	 = array(
			'slug'		 => 'eventos',
			'with_front' => true,
			'feeds'		 => true,
			'pages'		 => true,
		);
		$events_args	 = array(
			'label'					 => 'events',
			'labels'				 => $events_labels,
			'description'			 => __( 'Eventos realizados na Universidade', 'ufvjm' ),
			'public'				 => true,
			'exclude_from_search'	 => false,
			'publicly_queryable'	 => true,
			'show_ui'				 => true,
			'show_in_nav_menus'		 => true,
			'show_in_menu'			 => true,
			'show_in_admin_bar'		 => true,
			'menu_position'			 => 5,
			'menu_icon'				 => 'dashicons-calendar',
			'capability_type'		 => 'post',
			'hierarchical'			 => false,
			'supports'				 => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions' ),
			'taxonomies'			 => array( 'campus', 'curso' ),
			'has_archive'			 => true,
			'rewrite'				 => $events_rewrite,
			'can_export'			 => true,
		);
		register_post_type( 'event', $events_args );
	}

// end public function register
}

// end class
