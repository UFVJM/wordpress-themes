<?php

namespace UFVJM\Widgets;

class Recent_Posts extends \WP_Widget {

	public function __construct() {
		$widget_args = array( 'description' => __( 'Show recent posts', 'ufvjm' ) );
		parent::__construct( 'recent_posts', __( 'Recent Posts', 'ufvjm' ), $widget_args );
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title			 = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : __( 'Recent news', 'ufvjm' );
		$posts_per_page	 = isset( $instance[ 'posts_per_page' ] ) ? $instance[ 'posts_per_page' ] : 5;
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"><?php _e( 'Number of posts:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="number" min="0" max="5" value="<?php echo esc_attr( $posts_per_age ); ?>">
		</p>
		<?php
	}

	public function widget( $args, $instance ) {

		$posts_per_page	 = empty( $instance[ 'posts_per_page' ] ) ? 5 : intval( $instance[ 'posts_per_page' ] );
		$sticky			 = empty( $instance[ 'sticky' ] ) ? false : $instance[ 'sticky' ];
		$query_args		 = array(
			'posts_per_page' => $posts_per_page,
		);
		$posts			 = new \WP_Query( $query_args );

		echo $args[ 'before_widget' ];

		if ( !empty( $instance[ 'title' ] ) ) {
			echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
		}
		?>
		<ul class="table">
			<?php
			while ( $posts->have_posts() ) {
				$posts->the_post();
				?>
				<li class="td">
					<div class="thumbsup-date"><?php the_date(); ?></div>
					<div class="thumbsup-title">
						<a href="<?php the_permalink(); ?>" class="thumbsup-title">
							<?php the_title(); ?>
						</a>
					</div>	
				</li>	
				<?php
				wp_reset_postdata();
			}
			?>
		</ul>
		<?php
		echo $args[ 'after_widget' ];
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance			 = array();
		$instance[ 'title' ] = (!empty( $new_instance[ 'title' ] ) ) ? strip_tags( $new_instance[ 'title' ] ) : '';

		return $instance;
	}

}
