<?php

namespace UFVJM\Widgets;

/**
 *
 * @author jimmyandrade
 *        
 */
class Google_Custom_Search extends \WP_Widget {
	
	public function __construct() {
		
		$widget_args = array( 'description' => __( 'Shows Google Custom Search', 'ufvjm' ) );
		parent::__construct( 'google_custom_search', __( 'Google Custom Search', 'ufvjm' ), $widget_args );
		
	}
	
	/**
	 */
	public static function wp_enqueue_scripts() {
		wp_enqueue_script( 'google-jsapi', '//www.google.com/jsapi' );
		wp_enqueue_script( 'cse-search-box-t13n', '//www.google.com/cse/t13n?form=cse-search-box&t13n_langs=' . str_replace( '_', '-', get_locale() ) );
		wp_enqueue_script( 'cse-search-box-brand', '//www.google.com/cse/brand?form=cse-search-box&lang=' . str_replace( '_', '-', get_locale() ) );
	}
	
	public static function wp_head() {
?>
<script type="text/javascript">
// <![CDATA[
google.load('search', '1', {language : '<?php echo str_replace( '_', '-', get_locale() ); ?>'});
google.setOnLoadCallback(function(){
	var customSearchControl = new google.search.CustomSearchControl('009853391236066929186:wwa_gre4nae');
	customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	customSearchControl.draw('cse');
}, true);
// ]]>
</script>
<?php
	}
	
}

?>