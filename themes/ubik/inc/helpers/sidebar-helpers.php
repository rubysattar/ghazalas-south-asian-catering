<?php
/**
 * This file includes helper functions used for the sidebar.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_sidebar_display()

# ubik_get_sidebar()
# ubik_sidebar_position()
#	ubik_sidebar_device_visibility()
# ubik_sidebar_area_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display the sidebar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_display' ) ) {
	
	function ubik_sidebar_display() {

		// Return false by default
		$return = false;
		
		// if the sidebar is activated
		if ( get_theme_mod( 'ubik_sidebar_activate', false ) ) {

			$return = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_sidebar_display_filter', $return );

	}
	
}

/**
 * Returns the correct sidebar ID
 *
 * @since  1.0.0
 */
if ( ! function_exists( 'ubik_get_sidebar' ) ) {

	function ubik_get_sidebar( $sidebar = 'sidebar' ) {
		
		// Add filter
		$sidebar = apply_filters( 'ubik_get_sidebar_filter', $sidebar );

		// Never show empty sidebar
		if ( ! is_active_sidebar( $sidebar ) ) {
			$sidebar = 'sidebar';
		} 

		// Return the correct sidebar
		return $sidebar;
		
	}

}

/**
 * Sidebar position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_position' ) ) {
	
	function ubik_sidebar_position() {

		// Get sidebar position from customizer setting
		$position = get_theme_mod( 'ubik_sidebar_position', 'right' );
		
		// Sanitize style to make sure it isn't empty
		$position = $position ? $position : 'right';

	// Apply filters and return
	return apply_filters( 'ubik_sidebar_position_filter', $position );

	}
	
}

/**
 * Returns sidebar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_device_visibility' ) ) {
	
	function ubik_sidebar_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_sidebar_device_visibility', 'hide-mobile' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'hide-mobile';

	// Apply filters and return
	return apply_filters( 'ubik_sidebar_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add sidebar-area classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_area_classes' ) ) {
	
	function ubik_sidebar_area_classes() {

		// Vars
    $bar_position = ubik_sidebar_position();
    $bar_visibility = ubik_sidebar_device_visibility();

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
		$classes = apply_filters( 'ubik_sidebar_area_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}



