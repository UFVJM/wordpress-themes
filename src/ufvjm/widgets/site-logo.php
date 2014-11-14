<?php

namespace UFVJM\Widgets;

/**
 *
 * @author jimmyandrade
 *        
 */
class Site_Logo extends \WP_Widget {

	/**
	 */
	public function __construct() {
		$widget_args = array( 'description' => __( 'Shows website logo (with Retina support)', 'ufvjm' ) );
		parent::__construct( 'site_logo', __( 'Website logo', 'ufvjm' ), $widget_args );
	}

	public function widget( $args, $instance ) {
		$site_logo_setting		 = get_theme_mod( 'site_logo_setting' );
		$site_logo_setting		 = empty( $site_logo_setting ) ? 'http://placehold.it/185x185' : $site_logo_setting;
		$site_logo_setting_2x	 = empty( $site_logo_setting ) ? 'http://placehold.it/370x370' : $site_logo_setting;

		$site_logo_svg_setting = get_theme_mod( 'site_logo_svg_setting' );
		?>
		<div class="bannergroup">
			<div class="banneritem">
				<a class="site-logo" href="<?php bloginfo( 'url' ); ?>" rel="home" title="<?php _e( 'Home', 'ufvjm' ); ?>"><picture>
						<?php if ( empty( $site_logo_svg_setting ) ) { ?>
							<img
								alt="<?php bloginfo( 'name' ); ?>"
								src="<?php echo $site_logo_setting; ?>" />
							<?php } else { ?>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
							<source srcset="<?php echo $site_logo_svg_setting; ?>" />
							<!--[if IE 9]></video><![endif]-->
							<img
								alt="<?php bloginfo( 'name' ); ?>"
								src="<?php echo $site_logo_svg_setting; ?>" />
							<?php } ?>
					</picture>
				</a>
				<div class="clr"></div>
			</div>
		</div>
		<?php
	}

}
