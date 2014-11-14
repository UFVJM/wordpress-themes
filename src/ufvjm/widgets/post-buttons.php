<?php

namespace UFVJM\Widgets;

/**
 *
 * @author jimmyandrade
 *        
 */
class Post_Buttons extends \WP_Widget {

	/**
	 */
	public function __construct() {

		$widget_args = array( 'description' => __( 'Shows Posts/Pages common buttons', 'ufvjm' ) );
		parent::__construct( 'post_buttons', __( 'Post Buttons', 'ufvjm' ), $widget_args );
	}

	public function widget( $args, $instance ) {
		?>
		<ul class="tr buttonsheading">
			<!--
				<li class="td button- buttonheading">
					<a href="" title="" onclick="" rel=""><img src="" alt=""></a>
				</li>
			-->
			<li class="td button-edit">
				<?php edit_post_link(); ?>
			</li>			
		</ul>
		<?php
	}

}
?>
