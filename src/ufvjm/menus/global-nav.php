<?php

namespace UFVJM\Menus;

/**
 *
 * @author jimmyandrade
 *        
 */
class Global_Nav {
	
	/**
	 */
	public function __construct() {
		add_action( 'init', array( __CLASS__, 'register_nav_menus' ) );
	}
	
	public static function register_nav_menus() {
	
		$locations = array(
				'global-nav' => __( 'Global Navigation', 'ufvjm' ),
		);
		register_nav_menus( $locations );
	
	}
	
}
