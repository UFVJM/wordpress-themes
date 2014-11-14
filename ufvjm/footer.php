<!-- livre::mod.breadcrumbs.default -->
<div class="breadcrumbs pathway">
	<nav class="laydiv">
		<ul>
			<li class="home-link">
				<a href="<?php echo network_site_url(); ?>" class="i" title="<?php _e( 'Back to UFVJM homepage', 'ufvjm' ); ?>">
					<span><?php _e( 'UFVJM Homepage', 'ufvjm' ); ?> &raquo;</span>
				</a>
			</li>
			<li class="with-link">
				<a href="<?php echo \esc_attr( \home_url() ); ?>" class="pathway" title="<?php _e( 'Go to', 'ufvjm' ); ?> <?php bloginfo( 'name' ); ?>">
					<span><?php bloginfo( 'name' ); ?></span>
				</a>
			</li>
			<li class="show-last" title="<?php _e( 'You are here:' ); ?> <?php wp_title(); ?>">
				<?php wp_title(); ?>
			</li>
		</ul>
		<div class="c"></div>
	</nav>
</div>
<footer class="c" id="footer">
	<div class="moduletable">
		<!-- livre::mod.footer.default -->
		<div class="c"></div>
		<div id="footer" role="contentinfo">
			<div class="laydiv" id="footer-container">
				<div class="l">
					<h2>
						<a href="<?php echo network_site_url(); ?>" class="i txtIndent">
							<?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?>
						</a>
					</h2>
				</div>
				<div class="l" id="instit-links-container">
					<ul class="menu horizontal instit-links" id="instit-links">
						<li class="item2"><a
								href="<?php echo network_site_url( '/universidade/historia/' ); ?>"
								class="txtIndent" id="quem-somos-link"><span><?php _e( 'History', 'ufvjm' ); ?></span></a></li>
						<li class="item3"><a
								href="<?php echo network_site_url( '/universidade/localizacao/' ); ?>"
								class="txtIndent" id="como-chegar-link"><span><?php _e( 'Directions', 'ufvjm' ); ?></span></a></li>
						<li class="item4"><a
								href="<?php echo network_site_url( '/universidade/contatos/' ); ?>"
								class="txtIndent" id="fale-conosco-link"><span><?php _e( 'Contact Us', 'ufvjm' ); ?></span></a></li>
					</ul>
					<div class="c"></div>
				</div>
				<p class="i" id="powerby"><?php _e( 'Website by: Dicom & DTI', 'ufvjm' ); ?></p>
				<div class="c"></div>
			</div>
		</div>
	</div>
</footer>
</body>
<?php wp_footer(); ?>
</html>
