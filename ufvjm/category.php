<?php
get_header();
?>
<div class="laydiv w has-sidebar" id="wrapper">
	<div class="c tr" id="content-outer">
		<div id="content">
			<div class="r">
				<div class="inner tr">
					<div class="col2" id="content-inner">
						<main class="inner">
<?php if ( have_posts() ) { ?>
?<div class="table">
<?php
	while ( have_posts() ) {
		the_post();
?>
<div class="tr">
	<div class="td valign-top thumbsup-image">
		<time class="thumbsup-date"><?php \the_date(); ?></time><br />
		<a href="<?php \the_permalink(); ?>" class="thumbsup-title" title="<?php \the_title_attribute(); ?>">
			<?php \the_title(); ?>
		</a>
	</div>
</div>
<?php } // end while ?>
</div>
<?php
} // end if
?>
						</main>
					</div>
					<div id="sidebar" class="col3 default">
						<div class="inner">
							<?php dynamic_sidebar( 'sidebar' ); ?>
						</div>
					</div>
					<div class="c"></div>
				</div>
			</div>
		</div>
		<div class="col1 default" id="left">
			<?php get_sidebar( 'nav' ); ?>
		</div>
		<div class="c"></div>
	</div>
	<div id="globalNav"></div>
</div>
<?php
get_footer();
