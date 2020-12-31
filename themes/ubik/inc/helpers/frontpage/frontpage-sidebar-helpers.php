<?php
/**
 * This file includes helper functions used for frontpage sidebar.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_frontpage_sidebar_display()
# ubik_frontpage_specific_sidebar()
# ubik_frontpage_no_sidebar_display()

# ubik_frontpage_sidebar_position()
#	ubik_frontpage_sidebar_device_visibility()
# ubik_frontpage_sidebar_area_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display specific sidebar on the front page
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_sidebar_display' ) ) {
	
	function ubik_frontpage_sidebar_display() {

		// Return false by default
		$return = false;
		
		// Specific sidebar is activated on the front page
		if ( is_front_page() && ubik_frontpage_specific_sidebar() ) {

			$return = true;

		}

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_sidebar_activate_filter', $return );

	}
	
}

/**
 * Front page specific sidebar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_specific_sidebar' ) ) {
	
	function ubik_frontpage_specific_sidebar() {

	// Get setting from customizer
	$output = get_theme_mod( 'ubik_frontpage_sidebar_activate', false );
	
	// Sanitize style to make sure it isn't empty
	$output = $output ? $output : false;

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_specific_sidebar_filter', $output );

	}
	
}

/**
 * No sidebar on the frontpage only
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_no_sidebar_display' ) ) {
	
	function ubik_frontpage_no_sidebar_display() {

		// Return false by default
		$return = false;
		
		// return true if is front page and no sidebar on the front page only
		if ( true == get_theme_mod( 'ubik_frontpage_no_sidebar', false ) ) {

			$return = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_no_sidebar_display_filter', $return );

	}
	
}

/**
 * Front page sidebar position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_sidebar_position' ) ) {
	
	function ubik_frontpage_sidebar_position() {

		// Get front page sidebar position from customizer setting
		$position = get_theme_mod( 'ubik_frontpage_sidebar_position', 'right' );
		
		// Sanitize style to make sure it isn't empty
		$position = $position ? $position : 'right';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_sidebar_position_filter', $position );

	}
	
}

/**
 * Returns front page sidebar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_sidebar_device_visibility' ) ) {
	
	function ubik_frontpage_sidebar_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_sidebar_device_visibility', 'hide-mobile' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'hide-mobile';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_sidebar_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add frontpage-sidebar-area classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_sidebar_area_classes' ) ) {
	
	function ubik_frontpage_sidebar_area_classes() {

		// Vars
    $bar_position = ubik_frontpage_sidebar_position();
    $bar_visibility = ubik_frontpage_sidebar_device_visibility();

		// Setup classes array
		$classes = array();

		// Add position classes to sidebar-area
		if ( 'left' == $bar_position ) {

			$classes[] = 'small-order-1';

		} else {

      $classes[] = 'small-order-3';

    }

    // Add visibility classes
		if ( 'hide-tablet-mobile' == $bar_visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_sidebar_area_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}