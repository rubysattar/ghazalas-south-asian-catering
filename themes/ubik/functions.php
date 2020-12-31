<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Ubik WordPress theme
 */

// Core Constants
define( 'UBIK_THEME_DIR', get_template_directory() );
define( 'UBIK_THEME_URI', get_template_directory_uri() );

class UBIK_Init {

	/**
	 * Main Theme Class Constructor
	 *
	 * @since   1.0.0
	 */
	public function __construct() {

		// Define constants
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'constants' ), 0 );

		// Load helper functions used throughout the theme
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'helper_functions' ), 1 );

		// Hooks
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'hooks' ), 2 );

		// Extras
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'extras' ), 3 );

		// Load customizer
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'customizer' ), 4 );

		// Sets up theme defaults and registers support for various WordPress features.
		add_action( 'after_setup_theme', array( 'UBIK_Init', 'theme_setup' ), 10 );

		// register sidebar widget areas
		add_action( 'widgets_init', array( 'UBIK_Init', 'widget_areas' ) );

		// Load theme CSS
		add_action( 'wp_enqueue_scripts', array( 'UBIK_Init', 'theme_css' ) );

		// Load theme js
		add_action( 'wp_enqueue_scripts', array( 'UBIK_Init', 'theme_js' ) );

		// Add a pingback url auto-discovery header for singularly identifiable articles
		add_action( 'wp_head', array( 'UBIK_Init', 'pingback_header' ), 1 );

		// Loads html5 shiv script
		add_action( 'wp_head', array( 'UBIK_Init', 'html5_shiv' ) );

		// Outputs custom CSS to the head
		add_action( 'wp_head', array( 'UBIK_Init', 'custom_css' ), 9999 );

		// Minify the WP custom CSS because WordPress doesn't do it by default
		add_filter( 'wp_get_custom_css', array( 'UBIK_Init', 'minify_custom_css' ) );

		// Alter tagcloud widget to display all tags with 1em font size
		add_filter( 'widget_tag_cloud_args', array( 'UBIK_Init', 'widget_tag_cloud_args' ) );

		// Add schema markup to the authors post link
		add_filter( 'the_author_posts_link', array( 'UBIK_Init', 'the_author_posts_link' ) );

		// Special nav items classes
		add_filter( 'nav_menu_css_class', array( 'UBIK_Init', 'nav_menu_css_class' ) );

	}

	/**
	 * Returns current theme version
	 *
	 * @since   1.0.0
	 */
	public static function ubik_theme_version() {

		// Get theme data
		$theme = wp_get_theme();

		// Return theme version
		return $theme->get( 'Version' );

	}

	/**
	 * Define Constants
	 *
	 * @since   1.0.0
	 */
	public static function constants() {

		$version = self::ubik_theme_version();

		// Theme version
		define( 'UBIK_THEME_VERSION', $version );

		// Javascript and CSS Paths
		define( 'UBIK_JS_DIR_URI', UBIK_THEME_URI .'/assets/js/' );
		define( 'UBIK_CSS_DIR_URI', UBIK_THEME_URI .'/assets/css/' );

		// Include Paths
		define( 'UBIK_INC_DIR', UBIK_THEME_DIR .'/inc/' );
		define( 'UBIK_INC_DIR_URI', UBIK_THEME_URI .'/inc/' );

	}

	/**
	 * Load helper functions used throughout the theme
	 *
	 * @since 1.0.0
	 */
	public static function helper_functions() {
		require_once ( UBIK_INC_DIR .'helpers/common-functions.php' );
		require_once ( UBIK_INC_DIR .'helpers/general-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/top-bar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/mobile-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/header-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/vertical-bar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/sidebar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/footer-helpers.php' );

		require_once ( UBIK_INC_DIR .'helpers/frontpage/frontpage-header-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/frontpage/frontpage-top-bar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/frontpage/frontpage-vertical-bar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/frontpage/frontpage-sidebar-helpers.php' );
		require_once ( UBIK_INC_DIR .'helpers/frontpage/frontpage-footer-helpers.php' );
	}

	/**
	 * Hooks
	 *
	 * @since 1.0.0
	 */
	public static function hooks() {
		require_once ( UBIK_INC_DIR .'hooks/hooks.php' );
	}

	/**
	 * Extras
	 *
	 * @since   1.0.0
	 */
	public static function extras() {

		// Custom nav walker class
		require_once ( UBIK_INC_DIR .'walker/menu-walker.php' );

		// Breadcrumbs class
		require_once ( UBIK_INC_DIR .'breadcrumb/breadcrumb-trail.php' );

		// kirki
		require_once ( UBIK_INC_DIR .'customizer/kirki/kirki.php' );

	}

	/**
	 * Load customizer
	 *
	 * @since   1.0.0
	 */
	public static function customizer() {

		require_once ( UBIK_INC_DIR .'customizer/customizer.php' );

	}

	/**
	 * Theme Setup
	 *
	 * @since   1.0.0
	 */
	public static function theme_setup() {

		// Load text domain if multilingual theme
		load_theme_textdomain( 'ubik', UBIK_THEME_DIR .'/languages' );

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		// Set the default content width.
		if ( ! isset( $content_width ) ) {
			$content_width = apply_filters( 'astra_content_width', 1200 );
		}

		// Register navigation menus
		register_nav_menus( array(
			'top_bar_nav'      					=> esc_html__( 'Top Bar', 'ubik' ),
			'mobile_nav'      					=> esc_html__( 'Mobile Menu', 'ubik' ),
			'header_menu_bar_nav'      	=> esc_html__( 'Header Menu Bar', 'ubik' ),
			'header_content_nav'       	=> esc_html__( 'Header Content', 'ubik' ),
			'vertical_bar_nav'       		=> esc_html__( 'Full Height Vertical Bar', 'ubik' ),
			'footer_nav'       					=> esc_html__( 'Footer', 'ubik' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'widgets',
		) );

		// Add theme support for Custom Logo
		add_theme_support( 'custom-logo', apply_filters( 'ubik_custom_logo_args', array(
			'height'      => 80,
			'width'       => 160,
			'flex-height' => true,
			'flex-width'  => true,
		) ) );

		// Enable support for header image
		add_theme_support( 'custom-header', apply_filters( 'ubik_custom_header_args', array(
			'width'              		=> 2000,
			'height'             		=> 1200,
			'flex-height'        		=> true,
			'video'              		=> false,
		) ) );
	
	 	// Declare support for selective refreshing of widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		 
		// Add editor style
		add_editor_style( 'assets/css/editor-style.min.css' );

		// Add support for default block styles in front end.
		add_theme_support( 'wp-block-styles' );

		// Add support for wide aligments.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

	}

	/**
	 * Register widget areas
	 *
	 * @since   1.0.0
	 */
	public static function widget_areas() {

		// Sidebar
		register_sidebar( array(
			'name'			=> esc_html__( 'Sidebar', 'ubik' ),
			'id'			=> 'sidebar',
			'description'	=> esc_html__( 'Widgets in this area appear in the sidebar region.', 'ubik' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		) );

		// Front page Sidebar
		register_sidebar( array(
			'name'			=> esc_html__( 'Specific Front Page Sidebar', 'ubik' ),
			'id'			=> 'frontpage_sidebar',
			'description'	=> esc_html__( 'Widgets in this area appear in the front page specific sidebar.', 'ubik' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		) );

		// Footer
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer', 'ubik' ),
			'id'			=> 'footer',
			'description'	=> esc_html__( 'Widgets in this area appear in the footer.', 'ubik' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		) );

	}

	/**
	 * Load theme css
	 *
	 * @since   1.0.0
	 */
	public static function theme_css() {

		// Load font awesome
		wp_enqueue_script('fontawesome-all','https://use.fontawesome.com/releases/v5.0.13/js/all.js',array(),UBIK_THEME_VERSION,false);

		// Foundation framework
		wp_enqueue_style( 'ubik-foundation', UBIK_CSS_DIR_URI .'foundation.min.css' );

		// Main style file
		wp_enqueue_style( 'ubik-theme-style', UBIK_CSS_DIR_URI .'style.min.css', false, UBIK_THEME_VERSION );

	}

	/**
	 * Returns all js needed for the front-end
	 *
	 * @since 1.0.0
	 */
	public static function theme_js() {

		// Comment reply
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Load foundation js and custom foundation js scripts
		wp_enqueue_script( 'foundation-js', UBIK_JS_DIR_URI .'foundation.min.js', array( 'jquery' ), '6.4.2', true );

		// Load js scripts
		wp_enqueue_script( 'ubik-all-js', UBIK_JS_DIR_URI .'all.min.js', array( 'jquery' ), UBIK_THEME_VERSION, true );

	}

	/**
	 * Adds the meta tag to the site header
	 *
	 * @since 1.0.0
	 */
	public static function pingback_header() {

		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}

	}

	/**
	 * Load the html5 shiv
	 *
	 * @since 1.0.0
	 */
	public static function html5_shiv() {
		wp_enqueue_script( 'html5shiv', UBIK_JS_DIR_URI . 'html5.min.js', array(), '3.7.3', false );
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	}

	/**
	 * Outputs custom CSS to the head
	 *
	 * @since 1.0.0
	 */
	public static function custom_css( $output = NULL ) {

		// Add filter for adding custom css
		$output = apply_filters( 'ubik_head_css', $output );

		// Minify and output CSS in the wp_head
		if ( ! empty( $output ) ) {
			echo "<!-- Ubik Custom CSS -->\n<style type=\"text/css\">\n" . wp_strip_all_tags( ubik_minify_css( $output ) ) . "\n</style>";
		}

	}

	/**
	 * Minify the WP custom CSS because WordPress doesn't do it by default.
	 *
	 * @since 1.0.0
	 */
	public static function minify_custom_css( $css ) {

		return ubik_minify_css( $css );

	}

	/**
	 * Modifies tag cloud widget arguments
	 *
	 * @since 1.0.0
	 */
	public static function widget_tag_cloud_args( $args ) {
		$args['largest']  = 1;
		$args['smallest'] = 1;
		$args['unit']     = 'em';
		$args['format']   = 'list';

		return $args;
	}

	/**
	 * Add schema markup to the authors post link
	 *
	 * @since 1.0.0
	 */
	public static function the_author_posts_link( $link ) {

		// Add schema markup
		$schema = ubik_get_schema_markup( 'author_link' );
		if ( $schema ) {
			$link = str_replace( 'rel="author"', 'rel="author" '. $schema, $link );
		}

		// Return link
		return $link;

	}

	/**
	 * Output special nav items classes
	 *
	 * @since 1.0.0
	 */
	public static function nav_menu_css_class( $classes ) {

		// Add is-active class
		if ( in_array( 'current-menu-item', $classes ) ) {
			$classes[] = 'is-active ';
		}

		return $classes;

	}

}
$ubik_init = new UBIK_Init;

