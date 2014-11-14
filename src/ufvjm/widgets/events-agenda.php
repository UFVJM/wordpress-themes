<?php

namespace UFVJM\Widgets;

class Events_Agenda extends \WP_Widget {

	public function __construct() {
		parent::__construct(
		'events_agenda', __( 'Events agenda', 'ufvjm' ), array(
			'description' => __( 'This widget shows incoming events' ),
		)
		);
	}

	public function widget( $args, $instance ) {

		echo $args[ 'before_widget' ];

		wp_reset_postdata();
		$event_posts_args	 = array(
			'post_type' => 'event'
		);
		$event_posts		 = new \WP_Query( $event_posts_args );

		if ( !empty( $instance[ 'title' ] ) ) {
			echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
		}
		?>
		<div class="table contentpaneopen">
			<div class="tr">
				<div class="td article">
					<ul class="list-unstyled">
						<?php
						while ( $event_posts->have_posts() ) {
							$event_posts->the_post();
							$local = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_local', true );

							$data_inicio = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_data_inicio', true );
							$hora_inicio = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_hora_inicio', true );
							$inicio		 = new \DateTime( $data_inicio . ' ' . $hora_inicio );
							?>
							<li <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a> &mdash;
								<time datetime="<?php echo date_format( $inicio, 'Y-m-d H:i:s' ); ?>">
									<?php echo date_i18n( get_option( 'date_format' ), strtotime( $data_inicio ) ); ?>
								</time> &mdash; <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php \_e( 'More info', 'ufvjm' ); ?>
								</a>
							</li>
						<?php } wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</div>
		<?php
		echo $args[ 'after_widget' ];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Agenda', 'text_domain' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'ufvjm' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	public function new_widget( $args, $instance ) {
		wp_reset_postdata();
		$event_posts_args	 = array(
			'post_type' => 'event'
		);
		$event_posts		 = new \WP_Query( $event_posts_args );
		?>
		<div id="agenda-panel" class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Agenda UFVJM</h3>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled">
					<?php
					while ( $event_posts->have_posts() ) {
						$event_posts->the_post();
						$local = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_local', true );

						$data_inicio = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_data_inicio', true );
						$hora_inicio = get_post_meta( get_the_ID(), 'ufvjm_eventinfo_hora_inicio', true );
						$inicio		 = new \DateTime( $data_inicio . ' ' . $hora_inicio );
						?>
						<li <?php if ( has_post_thumbnail() ) { ?>class="has-image"<?php } ?>>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'full' ); ?>
							</a>
							<time datetime="<?php echo date_format( $inicio, 'Y-m-d H:i:s' ); ?>">
								<?php echo date_format( $inicio, 'd' ) ?>
								<span class="sr-only"> de </span>
								<abbr title="<?php echo date_format( $inicio, 'M' ) ?>">
									<?php echo date_format( $inicio, 'M' ) ?>
								</abbr>
								<span class="sr-only"> de </span>
								<strong><?php echo date_format( $inicio, 'Y' ) ?></strong>
								<?php if ( !empty( $hora_inicio ) ) { ?>
									<em><?php echo date_format( $inicio, 'H:i' ) ?></em>
								<?php } ?>
							</time>
							<h4>
								<a
									href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?><br />
									<small><?php echo $local; ?></small>
								</a>
							</h4>
							<p class="btn-group btn-group-xs">
								<a class="btn btn-sm btn-default" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<span class="glyphicon glyphicon-plus"></span>
									Continuar lendo
								</a>
								<a class="btn btn-sm btn-default" href="#">
									Confirmar presença
								</a>
							</p>
						</li>
					<?php } wp_reset_postdata(); ?>
				</ul>
			</div>
			<div class="panel-footer"></div>
		</div>
		<?php
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
		$instance[ 'title' ]	 = (!empty( $new_instance[ 'title' ] ) ) ? strip_tags( $new_instance[ 'title' ] ) : '';

		return $instance;
	}

}
