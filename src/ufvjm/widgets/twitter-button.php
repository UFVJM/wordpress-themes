<?php

namespace UFVJM\Widgets;

/**
 *
 * @author jimmyandrade
 *        
 */
class Twitter_Button extends \WP_Widget {
	
	/**
	 */
	public function __construct() {
		parent::__construct( false, __( 'Twitter Button', 'ufvjm' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'wp_enqueue_scripts' ) );
	}
	
	public function widget( $args, $instance ) {
?>
<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="UFVJM">Tweet</a>
<?php
	}
	
	public static function wp_enqueue_scripts() {
		wp_enqueue_script( 'twitter', 'http://platform.twitter.com/widgets.js', null, null, true );
	}
	
}
