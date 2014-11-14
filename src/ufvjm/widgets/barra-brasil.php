<?php

namespace UFVJM\Widgets;

/**
 *
 * @author jimmyandrade
 *        
 */
class Barra_Brasil extends \WP_Widget {
	
	/**
	 */
	public function __construct() {
		parent::__construct( false, __( 'Brazil Bar', 'ufvjm' ) );
	}
	
	public function widget( $args, $instance ) {
?>
<div id="barra-brasil-v3">
	<span>
		<div class="imagemGov">
			<a href="http://www.brasil.gov.br" target="_blank" class="brasilgov"></a>
			<a href="http://www.cgu.gov.br" target="_blank" class="acesso"></a>
		</div>
	</span>
</div>
<?php
	}
	
}
