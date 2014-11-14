<article id="conteudo" <?php post_class( 'w-row' ); ?>>
	<header>
		<h2 class="w100 contentheading"><?php the_title(); ?></h2>
	</header>
	<div class="table contentpaneopen">
		<div class="tr">
			<div class="td">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<footer>
		<ul class="w-list-unstyled">
			<li><?php edit_post_link(); ?></li>
		</ul>
	</footer>
	<span class="article_separator">&nbsp;</span>
</article>
