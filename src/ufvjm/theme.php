<?php

namespace UFVJM;

use UFVJM\Sidebars\Sidebar;
use UFVJM\Menus\Global_Nav;
use UFVJM\Post_Types\Person;
use UFVJM\Taxonomies\Person_Category;

/**
 * Main theme class
 * 
 * @author jimmyandrade
 *        
 */
class Theme {

	/**
	 * Main theme constructor
	 */
	function __construct() {

		add_action( 'after_setup_theme', array( __CLASS__, 'after_setup_theme' ) );
		add_action( 'init', array( __CLASS__, 'init' ) );
		add_action( 'widgets_init', array( __CLASS__, 'widgets_init' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'wp_enqueue_scripts' ) );
		add_action( 'wp_head', array( __CLASS__, 'wp_head' ) );
		add_action( 'wp_footer', array( __CLASS__, 'wp_footer' ) );

		add_filter( 'upload_mimes', array( __CLASS__, 'upload_mimes' ) );
		add_filter( 'show_admin_bar', '__return_false' );

		require_once 'sidebars/sidebar.php';
		$sidebar = new Sidebar();

		require_once 'menus/global-nav.php';
		$global_nav_menu = new Global_Nav();

		require_once 'post-types/person.php';
		$person_post_type = new Person();

		require_once 'taxonomies/person-category.php';
		$person_category_taxonomy = new Person_Category();

		require_once 'theme-customize.php';
		$theme_customize = new Theme_Customize();
	}

	/**
	 * Define tipos de arquivos adicionais que podem ser enviados para os sites
	 * 
	 * Adiciona o tipo SVG, muito utilizado em logos
	 * 
	 * @param array $mimes Vetor com os formatos aceitos (é passado pelo WordPress)
	 * @return array Vetor alterado
	 */
	public static function upload_mimes( array $mimes ) {
		$mimes[ 'svg' ] = 'image/svg+xml';
		return $mimes;
	}

	/**
	 * Main theme widgets initializer
	 */
	public static function widgets_init() {

		require_once 'widgets/barra-brasil.php';
		register_widget( 'UFVJM\Widgets\Barra_Brasil' );

		require_once 'widgets/events-agenda.php';
		register_widget( 'UFVJM\Widgets\Events_Agenda' );

		require_once 'widgets/twitter-button.php';
		register_widget( 'UFVJM\Widgets\Twitter_Button' );

		require_once 'widgets/post-buttons.php';
		register_widget( 'UFVJM\Widgets\Post_Buttons' );

		require_once 'widgets/google-fix-url-search.php';
		register_widget( 'UFVJM\Widgets\Google_Fix_Url_Search' );

		require_once 'widgets/site-logo.php';
		register_widget( 'UFVJM\Widgets\Site_Logo' );

		require_once 'widgets/image.php';
		register_widget( 'UFVJM\Widgets\Image' );

		require_once 'widgets/recent-posts.php';
		register_widget( 'UFVJM\Widgets\Recent_Posts' );
	}

	/**
	 * Main theme scripts and styles
	 */
	public static function wp_enqueue_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_style( 'dashicons' );
		wp_enqueue_style( 'webflow', get_template_directory_uri() . '/../src/css/webflow.css' );
		wp_enqueue_style( 'superfish', get_template_directory_uri() . '/../src/css/superfish.css' );
		wp_enqueue_style( 'nav', get_template_directory_uri() . '/../src/css/nav.css' );
		wp_enqueue_style( 'forms', get_template_directory_uri() . '/../src/css/forms.css' );
		wp_enqueue_style( 'footer', get_template_directory_uri() . '/../src/css/footer.css' );
		wp_enqueue_style( 'portal', get_template_directory_uri() . '/../src/css/portal.css', null, '1.1.4' );
		wp_enqueue_style( 'tabelas', get_template_directory_uri() . '/../src/css/tabelas.css' );
		wp_enqueue_style( 'tipografia', get_template_directory_uri() . '/../src/css/tipografia.css' );
	}

	/**
	 * Main theme head tags
	 */
	public static function wp_head() {
		
	}

	/**
	 * Main theme footer tags
	 */
	public static function wp_footer() {
		
	}

	/**
	 * Adiciona suporte a várias funcionalidades do WordPress
	 * 
	 * Incluindo traduções feitas usando as funções __() e _e() e uso de tags HTML5
	 */
	public static function after_setup_theme() {
		add_theme_support( 'html5' );
		load_theme_textdomain( 'ufvjm', get_template_directory() . '/../language' );
	}

	public static function init() {
		add_editor_style( '../src/css/tipografia.css' );
	}

}

?>
