<?php
if ( is_active_sidebar( 'sidebar-nav' ) ) {
	dynamic_sidebar( 'sidebar-nav' );
} else {
	?>
	<div class="inner">
	<?php the_widget( 'UFVJM\Widgets\Site_Logo' ); ?>
	</div>
	<div class="inner">
		<?php
		$global_nav_args = array(
			'theme_location'	 => 'global_nav',
			'container'			 => 'nav',
			'container_class'	 => 'moduletable c',
			'menu_class'		 => 'menu mainmenu-level-2',
			'menu_id'			 => 'level2',
			'echo'				 => true,
			'link_before'		 => '<span>',
			'link_after'		 => '</span>',
			'depth'				 => 1,
		);
		wp_nav_menu( $global_nav_args );
		?>
	</div>
	<?php
}
