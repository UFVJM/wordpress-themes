<?php

namespace UFVJM\Widgets;

class Banners_Slider extends \WP_Widget {

	public function __construct() {
		$widget_args = array( 'description' => __( 'Show banner images in a slider format' ) );
		parent::__construct( 'banners_slider', __( 'Banners Slider', 'ufvjm' ), $widget_args );
	}

	public function widget( $args, $instance ) {
		?>
		<div class="moduletable">

			<style type="text/css" >

				.box_skitter_large377 {width:145px;height:121px;}



				.box_skitter {margin-bottom:40px;}


				.box_skitter_small {width:200px;height:200px;}

				.box_skitter {border:0px solid #000; background:#000}
				.label_skitter h5
				{
					padding-left: 10px !important;

				}
				.label_skitter h5,.label_skitter h5 a{

					margin:0;


					font-family: BebasNeueRegular !important;


					font-size:22px !important;

					font-weight:normal !important; 

					text-decoration:none !important;

					padding-right: 5px !important;

					padding-bottom:0px !important;

					padding-top:5px !important;

					color:#fff !important;

					line-height:27px !important;

					display: block !important;
					text-align:left !important;

				}

				.label_skitter p{

					letter-spacing: 0.4px !important;

					line-height:15px !important;

					margin:0 !important;


					font-family: Arial, Helvetica, sans-serif !important;


					font-size:10px !important;

					padding-left: 10px !important;

					padding-right: 5px !important;

					padding-bottom:2px !important;

					padding-top:0px !important;

					color:#fff !important;

					z-index:10 !important;

					display: block !important;
					text-align:left !important;


				}


				.box_skitter .info_slide {position:absolute;top:100%; margin-top:15px; }

				.box_skitter {margin-bottom:40px;}





			</style>


			<script src="http://www.ufvjm.edu.br/modules/mod_AutsonSlideShow/js/jquery-1.5.2.min.js" type="text/javascript"></script>


			<script src="http://www.ufvjm.edu.br/modules/mod_AutsonSlideShow/js/jquery.easing.1.3.js" type="text/javascript"></script>

			<script src="http://www.ufvjm.edu.br/modules/mod_AutsonSlideShow/js/jquery.animate-colors-min.js" type="text/javascript"></script>

			<script src="http://www.ufvjm.edu.br/modules/mod_AutsonSlideShow/js/jquery.skitter.min.js" type="text/javascript"></script>

			<script type='text/javascript'>

		        var ass377 = jQuery.noConflict();

		        ass377( document ).ready( function () {

		            ass377( '.box_skitter_large377' ).skitter(
		                {
		                    dots: true,
		                    fullscreen: false,
		                    label: true,
		                    interval: 1800,
		                    navigation: false,
		                    label:true,
		                        numbers: false,
		                    hideTools: false,
		                    thumbs: false,
		                    velocity: 1,
		                    animation: "fade",
		                    numbers_align: 'left',
		                    animateNumberOut: { backgroundColor: '#333', color: '#fff' },
		                    animateNumberOver: { backgroundColor: '#000', color: '#fff' },
		                    animateNumberActive: { backgroundColor: '#cc3333', color: '#fff' }

		                }

		            );

		        } );

			</script>
			<div class="joomla_ass" align="center" >

				<div class="border_box">

					<div class="box_skitter box_skitter_large377" >

						<ul>

							<li><a href="http://www.ufvjm.edu.br/site/revistamultidisciplinar/" target="_blank"><img src="http://ufvjm.edu.br/images/banners/bannerlateral/banner vozes do vale.jpg" class="fade"  /></a></li><li><a href="http://parquedaciencia.webnode.com.br/" target="_blank"><img src="http://ufvjm.edu.br/images/banners/banner-parque-da-ciencia.jpg" class="fade"  /></a></li><li><a href="http://www.cantacantos.com.br/revista/index.php/espinhaco/index" target="_blank"><img src="http://ufvjm.edu.br/images/banners/bannerlateral/banner_revista.png" class="fade"  /></a></li>
						</ul>

					</div>

				</div>

			</div>





		</div>

		<?php
	}

}
