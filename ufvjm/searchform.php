<form role="search" method="get" class="search-form w-row" action="<?php echo \esc_attr( \home_url() ); ?>">
	<label class="label">
		<span class="screen-reader-text h">
			<?php \_e( 'Search for:', 'ufvjm' ); ?>
		</span>
	</label>
	<div class="w-col w-col-9">
		<input type="search" class="search-field inputbox"
			   placeholder="<?php \_e( 'Search &hellip;', 'ufvjm' ); ?>" value="" name="s"
			   title="<?php \_e( 'Search for:', 'ufvjm' ); ?>" />
	</div>
	<div class="w-col w-col-3">
		<button type="submit" class="search-submit button gsc-search-button"
				title="<?php \_e( 'Search', 'ufvjm' ); ?>" />
		<span class="dashicons dashicons-search"></span>
	</div>
</button>
</form>
