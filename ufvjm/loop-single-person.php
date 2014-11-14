<?php
$lattes_curriculum = get_post_meta( get_the_ID(), 'lattes_curriculum', true );
?>
<div class="tr">
	<div class="td">
		<h3><?php the_title(); ?> <?php edit_post_link(); ?></h3>
		<?php the_excerpt(); ?>
		<?php if ( '' !== $lattes_curriculum ) { ?>
		<p>
			<a href="<?php echo esc_url( $lattes_curriculum ); ?>" rel="external" target="_blank">
				<?php _e( 'Lattes Curriculum', 'ufvjm' ); ?>
			</a>
		</p>
		<?php } ?>
	</div>
</div>