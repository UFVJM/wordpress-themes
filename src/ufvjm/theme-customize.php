<?php

namespace UFVJM;

/**
 *
 * @author jimmyandrade
 *        
 */
class Theme_Customize {

	public function __construct() {
		add_action( 'customize_register', array( __CLASS__, 'register' ) );
	}

	public static function register( $wp_customize ) {

		$site_logo_section_args = array(
			'title' => __( 'Website logos and icons', 'ufvjm' ),
		);
		$wp_customize->add_section( 'site_logo_section', $site_logo_section_args );

		$site_logo_setting_args		 = array();
		$site_logo_svg_setting_args	 = array();

		$wp_customize->add_setting( 'site_logo_setting', $site_logo_setting_args );
		$wp_customize->add_setting( 'site_logo_svg_setting', $site_logo_svg_setting_args );

		$site_logo_control_args		 = array(
			'label'		 => __( 'Website logo', 'ufvjm' ),
			'section'	 => 'site_logo_section',
			'settings'	 => 'site_logo_setting',
		);
		$site_logo_svg_control_args	 = array(
			'label'		 => __( 'Website logo SVG', 'ufvjm' ),
			'section'	 => 'site_logo_section',
			'settings'	 => 'site_logo_svg_setting',
		);

		$site_logo_control = new \WP_Customize_Image_Control( $wp_customize, 'site_logo', $site_logo_control_args );
		$wp_customize->add_control( $site_logo_control );

		$site_logo_svg_control = new \WP_Customize_Upload_Control( $wp_customize, 'site_logo_svg', $site_logo_svg_control_args );
		$wp_customize->add_control( $site_logo_svg_control );
	}

}

?>
