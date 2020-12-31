<?php
/**
 * This file includes helper functions used for the footer.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

#	ubik_footer_display()

# ubik_footer_full_width()
# ubik_footer_inner_classes()
# ubik_footer_elements()
# ubik_footer_text_device_visibility()
# ubik_footer_text_classes()
# ubik_footer_logo_device_visibility()
# ubik_footer_logo_classes()
# ubik_footer_nav_device_visibility()
# ubik_footer_nav_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display footer
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_display' ) ) {
	
	function ubik_footer_display() {

		// Return false by default
    $display = false;
    
    // Return true if footer is activated
		if ( get_theme_mod( 'ubik_footer_activate', true ) ) {

			$display = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_footer_display_filter', $display );

	}
	
}

/**
 * Footer full width
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_full_width' ) ) {
	
	function ubik_footer_full_width() {

	// Get setting from customizer
	$full_width = get_theme_mod( 'ubik_footer_full_width', false );
	
	// Sanitize style to make sure it isn't empty
	$full_width = $full_width ?  $full_width : false;

	// Apply filters and return
	return apply_filters( 'ubik_footer_full_width_filter', $full_width );

	}
	
}

/**
 * Add footer classes
 */
if ( ! function_exists( 'ubik_footer_inner_classes' ) ) {
	
	function ubik_footer_inner_classes() {

		// Full width setting
		$full_width = ubik_footer_full_width();

		// Setup classes array
		$classes = array();

		// Add class if top bar is full width
		if ( $full_width ) {
			$classes[] = 'fluid';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_footer_inner_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns footer elements
 */
if ( ! function_exists( 'ubik_footer_elements' ) ) {
	
	function ubik_footer_elements() {

		// Default array
		$array = array( 'text' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_footer_elements', 'text' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_footer_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Footer text device visibility
 */
if ( ! function_exists( 'ubik_footer_text_device_visibility' ) ) {
	
	function ubik_footer_text_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_footer_text_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_footer_text_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to footer custom text
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_text_classes' ) ) {
	
	function ubik_footer_text_classes() {

		// Device visibility
		$visibility = ubik_footer_text_device_visibility();

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
		$classes = apply_filters( 'ubik_footer_text_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Footer logo device visibility
 */
if ( ! function_exists( 'ubik_footer_logo_device_visibility' ) ) {
	
	function ubik_footer_logo_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_footer_logo_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_footer_logo_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to footer logo
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_logo_classes' ) ) {
	
	function ubik_footer_logo_classes() {

		// Device visibility
		$visibility = ubik_footer_logo_device_visibility();

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
		$classes = apply_filters( 'ubik_footer_logo_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Footer nav device visibility
 */
if ( ! function_exists( 'ubik_footer_nav_device_visibility' ) ) {
	
	function ubik_footer_nav_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_footer_nav_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_footer_nav_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to footer nav
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_nav_classes' ) ) {
	
	function ubik_footer_nav_classes() {

		// Device visibility
		$visibility = ubik_footer_nav_device_visibility();

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
		$classes = apply_filters( 'ubik_footer_nav_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

