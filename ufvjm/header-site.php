<?php the_widget( 'UFVJM\Widgets\Barra_Brasil' ); ?>
<header class="header laydiv w section" id="header">
	<div class="w-row">
		<div class="col1">
			<div class="c">
				<?php dynamic_sidebar( 'logo' ); ?>
			</div>
		</div>
		<div class="col2">
			<div class="c">
				<?php dynamic_sidebar( 'header' ); ?>
			</div>
		</div>
		<div class="col3">
			<div class="c">
				<?php if ( is_active_sidebar( 'utils' ) ) { ?>
					<ul class="menu" id="servicos-web">
						<?php dynamic_sidebar( 'utils' ); ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</header>
<?php if ( is_home() ) { ?>
	<div class="section laydiv w w-row">
		<img src="http://placehold.it/990x150" />
	</div>
<?php } ?>
<div class="laydiv w section">
	<div class="w-row">
		<div class="col1">
			<?php dynamic_sidebar( 'search' ); ?>
		</div>
		<div class="col2">
			<?php
			$global_nav_menu_args = array(
				'theme_location' => 'global_nav',
				'container'		 => 'nav',
				'container_id'	 => 'globalNav',
				'menu_class'	 => 'menu sf-menu sf-horizontal',
				'depth'			 => 0,
				'echo'			 => true,
			);
			wp_nav_menu( $global_nav_menu_args );
			?>
			<div class="w-clearfix"></div>
		</div>
		<div class="w-clearfix"></div>
	</div>
</div>
