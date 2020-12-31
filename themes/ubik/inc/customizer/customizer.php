<?php
/**
 * Ubik Customizer Class
 *
 * @package Ubik WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Ubik_Customizer' ) ) :

	/**
	 * The Ubik Customizer class
	 */
	class Ubik_Customizer {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {

			add_filter( 'kirki/config', 											array( $this, 'kirki_config' ) );
			add_action( 'customize_register',									array( $this, 'sanitization_callbacks' ) );
			add_action( 'after_setup_theme',									array( $this, 'register_options' ) );
			add_action( 'customize_register',									array( $this, 'custom_controls' ) );
			add_action( 'customize_register',									array( $this, 'core_modules' ), 11 );
			add_action( 'customize_preview_init', 						array( $this, 'customize_preview_init' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'custom_customize_enqueue' ), 7 );
			add_action( 'enqueue_block_editor_assets',				array( $this, 'editor_dynamic_styles' ) );

		}

		/**
		 * Configure Kirki
		 *
		 * @since 1.0.0
		 */

		public function kirki_config() {

			return array( 
				'url_path' => UBIK_INC_DIR_URI . 'customizer/kirki/',
				'disable_loader' => true,
			);

		}

		/**
		 * Adds custom controls
		 *
		 * @since 1.0.0
		 */
		public function custom_controls( $wp_customize ) {

			// Path
			$dir = UBIK_INC_DIR . 'customizer/controls/';

			// Load customize control classes
			require_once( $dir . 'toggle-control-heading/class-control-toggle-control-heading.php' );
			require_once( $dir . 'heading/class-control-heading.php' );
			require_once( $dir . 'heading-tabs/class-control-heading-tabs.php' );
			require_once( $dir . 'subheading-tabs/class-control-subheading-tabs.php' );
			require_once( $dir . 'responsive-slider/class-control-responsive-slider.php' );
			require_once( $dir . 'responsive-dimensions/class-control-responsive-dimensions.php' );
			
			// Register JS control types
			$wp_customize->register_control_type( 'Ubik_Customizer_Heading_Control' );
			$wp_customize->register_control_type( 'Ubik_Customizer_Heading_Tabs_Control'	);
			$wp_customize->register_control_type( 'Ubik_Customizer_Subheading_Tabs_Control' 		);
			$wp_customize->register_control_type( 'Ubik_Customizer_Responsive_Slider_Control'	);
			$wp_customize->register_control_type( 'Ubik_Customizer_Responsive_Dimensions_Control'	);

		}

		/**
		 * Adds sanitization callbacks
		 *
		 * @since 1.0.0
		 */
		public function sanitization_callbacks() {
			require_once( UBIK_INC_DIR .'customizer/sanitization-callbacks.php' );
		}

		/**
		 * Core modules
		 *
		 * @since 1.0.0
		 */
		public static function core_modules( $wp_customize ) {

			// Move Site Identity section to ubik_general_panel
			$wp_customize->get_section( 'title_tagline' )->panel = 'ubik_general_panel';

			// Move Colors section to ubik_general_panel and remove core header textcolor control
			$wp_customize->get_section( 'colors' )->panel = 'ubik_general_panel';
			$wp_customize->get_section( 'colors' )->title = 'Colors & Background Image';
			$wp_customize->remove_control( 'header_textcolor' );

			// Tweak default controls
			$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

			// remove partial refresh to display the site name properly in customizer
			$wp_customize->selective_refresh->remove_partial('custom_logo');
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';

		}

		/**
		 * Adds customizer options
		 *
		 * @since 1.0.0
		 */
		public function register_options() {

			if ( ! class_exists( 'Kirki' ) ) {
				return;
			}

			/** Ubik Kirki Config */
			Kirki::add_config( 'ubik_config', array(
				'capability'    => 'edit_theme_options',
				'option_type'   => 'theme_mod',
			) );

			// Var
			$dir = UBIK_INC_DIR .'customizer/settings/';
			
			// Customizer files array
			$files = array(
				'general',
				'mobile',
				'top-bar',
				'header',
				'vertical-bar',
				'sidebar',
				'footer',

				'frontpage/frontpage-panel',
				'frontpage/top-bar',
				'frontpage/header',
				'frontpage/vertical-bar',
				'frontpage/sidebar',
				'frontpage/footer',
			);
			
			foreach ( $files as $file ) {
				
				require_once( $dir . $file .'.php' );
			
			}

		}

		/**
		 * Loads js file for customizer preview
		 *
		 * @since 1.0.0
		 */
		public function customize_preview_init() {
			wp_enqueue_script( 'ubik-customize-preview', UBIK_INC_DIR_URI . 'customizer/assets/js/customize-preview.js', array( 'customize-preview' ), UBIK_THEME_VERSION, true );
		}

		/**
		 * Load scripts for customizer
		 *
		 * @since 1.0.0
		 */
		public function custom_customize_enqueue() {
			wp_enqueue_style( 'ubik-general', UBIK_INC_DIR_URI . 'customizer/controls/general.css' );
			wp_enqueue_script( 'ubik-general', UBIK_INC_DIR_URI . 'customizer/controls/general.js', array( 'jquery', 'customize-base' ), false, true );
		}

		/**
		 * Add dynamic styles to the editor
		 *
		 * @since 1.0.7
		 */
		public function editor_dynamic_styles() {

			// Used to inline add dynamic block styles in the block editor.
			wp_enqueue_style( 'ubik-editor-styles-additions', UBIK_CSS_DIR_URI . '/editor-styles-additions.css' , false, UBIK_THEME_VERSION, 'all' );

			// Include styles.
			require_once UBIK_INC_DIR . 'customizer/editor-dynamic-styles.php';
			wp_add_inline_style( 'ubik-editor-styles-additions', ubik_custom_editor_css() );

		}

	}

endif;

return new Ubik_Customizer();
