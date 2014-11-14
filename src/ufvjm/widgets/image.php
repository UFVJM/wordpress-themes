<?php

namespace UFVJM\Widgets;

class Image extends \WP_Widget {

	public function __construct() {
		$widget_args = array( 'description' => __( 'Shows image (with link and text options)', 'ufvjm' ) );
		parent::__construct( 'image', __( 'Image', 'ufvjm' ), $widget_args );
	}

	public static function widgets_init() {
		register_widget( __CLASS__ );
	}

	public function widget( $args, $instance ) {
		$href		 = empty( $instance[ 'href' ] ) ? '#' : \esc_url( $instance[ 'href' ] );
		$svg_url	 = empty( $instance[ 'svg_url' ] ) ? '' : \esc_url( $instance[ 'svg_url' ] );
		$img_url	 = empty( $instance[ 'img_url' ] ) ? '' : \esc_url( $instance[ 'img_url' ] );
		$width		 = empty( $instance[ 'width' ] ) ? 'auto' : \intval( $instance[ 'width' ] ) . 'px';
		$height		 = empty( $instance[ 'height' ] ) ? 'auto' : \intval( $instance[ 'height' ] . 'px' );
		$margin_top	 = empty( $instance[ 'margin_top' ] ) ? '0' : \intval( $instance[ 'margin_top' ] );
		$alt_text	 = empty( $instance[ 'alt_text' ] ) ? '' : \sanitize_text_field( $instance[ 'alt_text' ] );
		$suffix_text = empty( $instance[ 'suffix_text' ] ) ? '' : \sanitize_text_field( $instance[ 'suffix_text' ] );
		echo $args[ 'before_widget' ];
		?>
		<a href="<?php echo $href ?>">
			<img
				alt="<?php echo $alt_text; ?>"
				src="<?php echo $svg_url; ?>"
				style="height: <?php echo $height; ?>; margin-top: <?php echo $margin_top; ?>px; width: <?php echo $width; ?>;" />
			<span><?php echo $suffix_text; ?></span>
		</a>

		<?php
		echo $args[ 'after_widget' ];
	}

	public function form( $instance ) {
		$href		 = isset( $instance[ 'href' ] ) ? $instance[ 'href' ] : '';
		$svg_url	 = isset( $instance[ 'svg_url' ] ) ? $instance[ 'svg_url' ] : '';
		$img_url	 = isset( $instance[ 'img_url' ] ) ? $instance[ 'img_url' ] : '';
		$width		 = isset( $instance[ 'width' ] ) ? $instance[ 'width' ] : '';
		$height		 = isset( $instance[ 'height' ] ) ? $instance[ 'height' ] : '';
		$margin_top	 = isset( $instance[ 'margin_top' ] ) ? $instance[ 'margin_top' ] : '';
		$alt_text	 = isset( $instance[ 'alt_text' ] ) ? $instance[ 'alt_text' ] : '';
		$suffix_text = isset( $instance[ 'suffix_text' ] ) ? $instance[ 'suffix_text' ] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'svg_url' ); ?>">
				<?php _e( 'SVG URL:', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'svg_url' ); ?>"
				   name="<?php echo $this->get_field_name( 'svg_url' ); ?>" type="url"
				   value="<?php echo \esc_url( $svg_url ); ?>" placeholder="//" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'img_url' ); ?>">
				<?php _e( 'Image URL:', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'img_url' ); ?>"
				   name="<?php echo $this->get_field_name( 'img_url' ); ?>" type="url"
				   value="<?php echo \esc_url( $img_url ); ?>" placeholder="//" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href' ); ?>">
				<?php _e( 'Link:', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'href' ); ?>"
				   name="<?php echo $this->get_field_name( 'href' ); ?>" type="url"
				   value="<?php echo \esc_url( $href ); ?>" placeholder="//" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'alt_text' ); ?>">
				<?php _e( 'Alternative text:', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'alt_text' ); ?>"
				   name="<?php echo $this->get_field_name( 'alt_text' ); ?>" type="text"
				   value="<?php echo \esc_attr( $alt_text ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'suffix_text' ); ?>">
				<?php _e( 'Text after image:', 'ufvjm' ); ?>
			</label>
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'suffix_text' ); ?>"
					  name="<?php echo $this->get_field_name( 'suffix_text' ); ?>" type="text"
					  ><?php echo \esc_html( $suffix_text ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'width' ); ?>">
				<?php _e( 'Image width (px):', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'width' ); ?>"
				   name="<?php echo $this->get_field_name( 'width' ); ?>" type="number"
				   min="0" step="1"
				   value="<?php echo \esc_attr( $width ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'height' ); ?>">
				<?php _e( 'Image height (px):', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>"
				   name="<?php echo $this->get_field_name( 'height' ); ?>" type="number"
				   min="0" step="1"
				   value="<?php echo \esc_attr( $height ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'margin_top' ); ?>">
				<?php _e( 'Top margin (px):', 'ufvjm' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'margin_top' ); ?>"
				   name="<?php echo $this->get_field_name( 'margin_top' ); ?>" type="number"
				   min="0" step="1"
				   value="<?php echo \esc_attr( $margin_top ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

}
