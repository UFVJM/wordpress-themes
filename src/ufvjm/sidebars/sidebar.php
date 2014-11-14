<?php

namespace UFVJM\Sidebars;

/**
 *
 * @author jimmyandrade
 *        
 */
class Sidebar {

	/**
	 */
	public function __construct() {
		add_action( 'widgets_init', array( __CLASS__, 'widgets_init' ) );
	}

	public static function widgets_init() {

		$sidebar_args = array(
			'id'			 => 'sidebar',
			'name'			 => __( 'Sidebar', 'ufvjm' ),
			'description'	 => __( 'Right sidebar', 'ufvjm' ),
			'class'			 => 'moduletable',
			'before_title'	 => '<div class="tr"><div class="th"><h3>',
			'after_title'	 => '</h3></div></div><div class="cellpadd0 cellspace0 moduletable"><div class="tr"><div class="td">',
			'before_widget'	 => '<div class="moduletable">',
			'after_widget'	 => '</div></div></div></div>'
		);
		register_sidebar( $sidebar_args );

		register_sidebar( array(
			'id'			 => 'hero',
			'name'			 => \__( 'Home hero banner', 'ufvjm' ),
			'before_widget'	 => '<div class="moduletable">',
			'after_widget'	 => '</div>',
		) );

		register_sidebar( array(
			'id'			 => 'sidebar-nav',
			'name'			 => \__( 'Navigation sidebar', 'ufvjm' ),
			'before_widget'	 => '<div class="inner"><div class="moduletable">',
			'after_widget'	 => '</div></div>',
			'before_title'	 => '<div class="tr"><div class="th"><h3>',
			'after_title'	 => '</h3></div></div>',
		) );

		$logo_args = array(
			'id'			 => 'logo',
			'name'			 => __( 'Logo', 'ufvjm' ),
			'before_widget'	 => '',
			'after_widget'	 => '',
		);
		register_sidebar( $logo_args );

		$header_args = array(
			'id'	 => 'header',
			'name'	 => __( 'Header', 'ufvjm' ),
		);
		register_sidebar( $header_args );

		$utils_args = array(
			'id'			 => 'utils',
			'name'			 => __( 'Header utilities', 'ufvjm' ),
			'before_widget'	 => '<li>',
			'after_widget'	 => '</li>',
		);
		register_sidebar( $utils_args );

		$search_args = array(
			'id'	 => 'search',
			'name'	 => __( 'Search', 'ufvjm' ),
		);
		register_sidebar( $search_args );

		$home_column_1_args = array(
			'name'			 => \__( 'Home column 1', 'ufvjm' ),
			'id'			 => 'home-column-1',
			'before_widget'	 => '<div class="moduletable featuring">',
			'after_widget'	 => '</div>',
			'before_title'	 => '<div class="tr"><div class="th"><h3>',
			'after_title'	 => '</h3></div></div>',
		);
		register_sidebar( $home_column_1_args );

		$home_column_2_args = array(
			'name'			 => \__( 'Home column 2', 'ufvjm' ),
			'id'			 => 'home-column-2',
			'before_widget'	 => '<div class="moduletable">',
			'after_widget'	 => '</div>',
			'before_title'	 => '<div class="tr"><div class="th"><h3>',
			'after_title'	 => '</h3></div></div>',
		);
		register_sidebar( $home_column_2_args );
	}

}
