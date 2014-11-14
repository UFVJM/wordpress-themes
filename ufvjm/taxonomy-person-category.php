<?php
get_header();
global $wp_query;
$override_args = array(
		'posts_per_page' => 12,
		'order' => 'ASC',
		'orderby' => 'title',
);
$args = array_merge( $wp_query->query_vars, $override_args );
query_posts( $args );
?>
<div class="laydiv w has-sidebar" id="wrapper">
	<div class="c tr" id="content-outer">
		<div id="content">
			<div class="r">
				<div class="inner tr">
					<main class="col2" id="content-inner">
						<article class="inner">
							<div id="conteudo" class="c">
								<header>
									<h2 class="w100 contentheading"><?php single_term_title(); ?></h2>
								</header>
								<div class="table contentpaneopen">
								<?php
								while ( have_posts() ) {
									the_post();
									get_template_part( 'loop', 'single-person' );
								}
								?>
								</div>
							</div>
						</article>
					</main>
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
