<?php
get_header();
?>
<main id="wrapper" class="laydiv w outline">
	<header id="header" class="errorboxoutline">
		<div id="logo">
			<h1 id="errorboxheader"><?php _e( 'Page not found', 'ufvjm' ); ?></h1>
			<h2><?php _e( 'We did not find the webpage you are looking for', 'ufvjm' ); ?></h2>
		</div>
	</header>
	<div class="c tr" id="content-outer">
		<div id="conteudo">
			<?php the_widget( 'UFVJM\Widgets\Google_Fix_Url_Search' ); ?>
		</div>
	</div>
</main>
<?php
get_footer();