<?php
get_header();
the_post();
?>
<div class="laydiv w has-sidebar" id="wrapper">
	<div class="c tr" id="content-outer">
		<div id="content">
			<div class="r">
				<div class="inner tr">
					<main class="col2" id="content-inner">
						<article class="<?php post_class( 'inner' ); ?>">
							<div id="conteudo" class="c">
								<div class="table contentpaneopen">
									<?php get_template_part( 'loop', 'single-person' ); ?>
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
