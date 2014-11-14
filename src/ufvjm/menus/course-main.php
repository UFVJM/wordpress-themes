<?php

namespace UFVJM\Menus;

/**
 *
 * @author jimmyandrade
 *        
 */
class Course_Main {
	
	protected static $menu_slug = 'course_main_nav';
	protected static $menu_name;
	
	/**
	 */
	function __construct() {
		static::$menu_name = __( 'Course Main Navigation', 'ufvjm' );
		add_action( 'init', array( __CLASS__, 'register_nav_menus' ) );
	}
	
	/**
	 * Sitewide global navigation register function
	 */
	public static function register_nav_menus() {
	
		$locations = array(
				static::$menu_slug => static::$menu_name,
		);
		register_nav_menus( $locations );
	
		$menu_exists = wp_get_nav_menu_object( static::$menu_name );
		
		if ( !$menu_exists ) {
			$menu_id    = wp_create_nav_menu( static::$menu_name );
			$menu_items = array(
					array(
							'menu-item-title' => __( 'Home', 'ufvjm' ),
							'menu-item-classes' => 'home',
							'menu-item-url' => home_url( '/' ),
							'menu-item-status' => 'publish',
					),
			);
			foreach ( $menu_items as $menu_item ) {
				wp_update_nav_menu_item( $menu_id, 0, $menu_item );
			}
		}	
		
	}
	
}
