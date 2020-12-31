<?php
/**
 * This file includes helper functions used for frontpage footer.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_frontpage_footer_display()
# ubik_frontpage_specific_footer()
# ubik_frontpage_no_footer_display()

# ubik_frontpage_footer_full_width()
# ubik_frontpage_footer_inner_classes()
# ubik_frontpage_footer_elements()
# ubik_frontpage_footer_text_device_visibility()
# ubik_frontpage_footer_text_classes()
# ubik_frontpage_footer_logo_device_visibility()
# ubik_frontpage_footer_logo_classes()
# ubik_frontpage_footer_nav_device_visibility()
# ubik_frontpage_footer_nav_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/


/**
 * Display specific footer on the front page
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_footer_display' ) ) {
	
	function ubik_frontpage_footer_display() {

		// Return false by default
		$return = false;
		
		// Specific top bar is activated on the front page
		if ( is_front_page() && ubik_frontpage_specific_footer() ) {

			$return = true;

		}

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_footer_display_filter', $return );

	}
	
}

/**
 * Front page specific footer
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_specific_footer' ) ) {
	
	function ubik_frontpage_specific_footer() {

	// Get setting from customizer
	$output = get_theme_mod( 'ubik_frontpage_footer_activate', false );
	
	// Sanitize style to make sure it isn't empty
	$output = $output ? $output : false;

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_specific_footer_filter', $output );

	}
	
}

/**
 * No footer on the frontpage only
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_no_footer_display' ) ) {
	
	function ubik_frontpage_no_footer_display() {

		// Return false by default
		$return = false;
		
		// return true if is front page and no footer on the front page only
		if ( true == get_theme_mod( 'ubik_frontpage_no_footer', false ) ) {

			$return = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_no_footer_display_filter', $return );

	}
	
}

/**
 * Front page footer full width
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_footer_full_width' ) ) {
	
	function ubik_frontpage_footer_full_width() {

	// Get setting from customizer
	$full_width = get_theme_mod( 'ubik_frontpage_footer_full_width', false );
	
	// Sanitize style to make sure it isn't empty
	$full_width = $full_width ?  $full_width : false;

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_footer_full_width_filter', $full_width );

	}
	
}

/**
 * Add front page footer classes
 */
if ( ! function_exists( 'ubik_frontpage_footer_inner_classes' ) ) {
	
	function ubik_frontpage_footer_inner_classes() {

		// Full width setting
		$full_width = ubik_frontpage_footer_full_width();

		// Setup classes array
		$classes = array();

		// Add class if top bar is full width
		if ( $full_width ) {
			$classes[] = 'fluid';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_footer_inner_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page footer elements
 */
if ( ! function_exists( 'ubik_frontpage_footer_elements' ) ) {
	
	function ubik_frontpage_footer_elements() {

		// Default array
		$array = array( 'text' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_frontpage_footer_elements', 'text' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_frontpage_footer_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Front page footer text device visibility
 */
if ( ! function_exists( 'ubik_frontpage_footer_text_device_visibility' ) ) {
	
	function ubik_frontpage_footer_text_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_footer_text_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_footer_text_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page footer custom text
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_footer_text_classes' ) ) {
	
	function ubik_frontpage_footer_text_classes() {

		// Device visibility
		$visibility = ubik_frontpage_footer_text_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_footer_text_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page footer logo device visibility
 */
if ( ! function_exists( 'ubik_frontpage_footer_logo_device_visibility' ) ) {
	
	function ubik_frontpage_footer_logo_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_footer_logo_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_footer_logo_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page footer logo
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_footer_logo_classes' ) ) {
	
	function ubik_frontpage_footer_logo_classes() {

		// Device visibility
		$visibility = ubik_frontpage_footer_logo_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_footer_logo_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page footer nav device visibility
 */
if ( ! function_exists( 'ubik_frontpage_footer_nav_device_visibility' ) ) {
	
	function ubik_frontpage_footer_nav_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_footer_nav_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_footer_nav_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page footer nav
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_footer_nav_classes' ) ) {
	
	function ubik_frontpage_footer_nav_classes() {

		// Device visibility
		$visibility = ubik_frontpage_footer_nav_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_footer_nav_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}