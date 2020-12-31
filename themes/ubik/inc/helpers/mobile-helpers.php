<?php
/**
 * This file includes helper functions used for the mobile bar.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_mobile_bar_display()
# ubik_mobile_bar_template()
# ubik_mobile_bar_attr()
#	ubik_mobile_menu_direction()
# ubik_mobile_menu_classes()
# ubik_mobile_menu_attr()
#	ubik_mobile_menu_elements()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display the mobile bar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_bar_display' ) ) {
	
	function ubik_mobile_bar_display() {

		// Return true by default
		$return = true;

		// Apply filters and return
		return apply_filters( 'ubik_mobile_bar_display_filter', $return );

	}
	
}

/**
 * Returns top bar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_menu_direction' ) ) {
	
	function ubik_mobile_menu_direction() {

		// Get setting from customizer
		$direction = get_theme_mod( 'ubik_mobile_menu_direction', 'left' );
		
		// Sanitize style to make sure it isn't empty
		$direction = $direction ? $direction : 'left';

	// Apply filters and return
	return apply_filters( 'ubik_mobile_menu_direction_filter', $direction );

	}
	
}

/**
 * Returns mobile bar attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_bar_attr' ) ) {
	
	function ubik_mobile_bar_attr() {

		// Setup attributes array
		$attr = array();

		$attr[] = 'data-sticky-container';
		$attr[] = 'data-sticky';
		$attr[] = 'data-sticky-on=small';
		$attr[] = 'data-margin-top=0';

		if ( is_admin_bar_showing() ) {
			$attr[] = 'data-top-anchor=wpadminbar:bottom';
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );
		
		// Apply filters
		$attr = apply_filters( 'ubik_sticky_menubar_attr_filter', $attr );

		// Turn classes into space seperated string
		$attr = implode( ' ', $attr );

		// Return attributes
		return $attr;

	}
	
}

/**
 * Add mobile menu classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_menu_classes' ) ) {
	
	function ubik_mobile_menu_classes() {

		// Vars
		$direction = ubik_mobile_menu_direction();

		// Setup classes array
		$classes = array();

		// Add
		if ( 'right' == $direction ) {
			$classes[] = 'position-right';
		} elseif ( 'bottom' == $direction ) {
			$classes[] = 'position-bottom';
		} else {
			$classes[] = 'position-left';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_mobile_menu_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add mobile menu attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_menu_attr' ) ) {
	
	function ubik_mobile_menu_attr() {

		// Vars
		$overlay = get_theme_mod( 'ubik_mobile_menu_overlay', true );
		$push = get_theme_mod( 'ubik_mobile_menu_push_content', false );

		// Setup attributes array
		$attr = array();

		// overlay
		if ( ! $overlay ) {
			$attr[] = 'data-content-overlay=false';
		} else {
			$attr[] = 'data-content-overlay=true';
		}

		// Push the content
		if ( $push ) {
			$attr[] = 'data-transition=push';
		} else {
			$attr[] = 'data-transition=overlay';
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );

		// Apply filters
		$attr = apply_filters( 'ubik_mobile_menu_attr_filter', $attr );

		// Turn classes into space seperated string
		$attr = implode( ' ', $attr );

		// return classes
		return $attr;

	}

}

/**
 * Returns mobile manu elements
 */
if ( ! function_exists( 'ubik_mobile_menu_elements' ) ) {
	
	function ubik_mobile_menu_elements() {

		// Default array
		$array = array( 'close', 'nav' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_mobile_menu_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_mobile_menu_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

