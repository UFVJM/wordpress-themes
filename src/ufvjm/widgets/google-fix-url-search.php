<?php

namespace UFVJM\Widgets;

class Google_Fix_Url_Search extends \WP_Widget {

	public function __construct() {

		$widget_args = array( 'description' => __( 'Shows Google Fix URL Search', 'ufvjm' ) );
		parent::__construct( 'barra_brasil', __( 'Google Fix URL Search', 'ufvjm' ), $widget_args );

		add_action( 'wp_head', array( __CLASS__, 'wp_head' ) );
	}

	/**
	 */
	public function widget( $args, $instance ) {
		?>
		<script type="text/javascript" src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
		<?php
	}

	public static function wp_head() {
		?>
		<script type="text/javascript">
		//<![CDATA[
		    var GOOG_FIXURL_LANG = '<?php echo str_replace( '_', '-', get_locale() ); ?>';
		    var GOOG_FIXURL_SITE = '<?php bloginfo( 'url' ); ?>';
		//]]>
		</script>
		<?php
	}

}
?>
