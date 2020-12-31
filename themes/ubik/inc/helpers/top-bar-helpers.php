<?php
/**
 * This file includes helper functions used for the top bar.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_top_bar_display()

#	ubik_top_bar_device_visibility()
# ubik_top_bar_classes()
# ubik_top_bar_sticky_attr()
# ubik_top_bar_full_width()
# ubik_top_bar_container_classes()
# ubik_top_bar_left_area_elements()
# ubik_top_bar_right_area_elements()
#	ubik_top_bar_logo_device_visibility()
#	ubik_top_bar_logo_classes()
#	ubik_top_bar_text_device_visibility()
#	ubik_top_bar_text_classes()
#	ubik_top_bar_search_style()
#	ubik_top_bar_search_toggle_attr()
#	ubik_top_bar_search_device_visibility()
#	ubik_top_bar_search_classes()
#	ubik_top_bar_nav_device_visibility()
#	ubik_top_bar_nav_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display the top bar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_display' ) ) {
	
	function ubik_top_bar_display() {

		// Return false by default
		$return = false;
		
		// if the top bar is activated
		if ( get_theme_mod( 'ubik_top_bar_activate', false ) ) {

			$return = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_top_bar_display_filter', $return );

	}
	
}

/**
 * Returns top bar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_device_visibility' ) ) {
	
	function ubik_top_bar_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_top_bar_device_visibility', 'hide-mobile' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'hide-mobile';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add top-bar classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_classes' ) ) {
	
	function ubik_top_bar_classes() {

		// Vars
		$bar_visibility = ubik_top_bar_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'hide-tablet-mobile' == $bar_visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_top_bar_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns top bar sticky attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_sticky_attr' ) ) {
	
	function ubik_top_bar_sticky_attr() {

		// Top bar sticky
		$is_sticky = get_theme_mod( 'ubik_top_bar_sticky', false );

		// Setup attributes array
		$attr = array();

		if ( $is_sticky ) {
			
			$attr[] = 'data-sticky-container';
			$attr[] = 'data-sticky';

			// if admin bar
			if ( is_admin_bar_showing() ) {
				
				$attr[] = 'data-margin-top=2';  // admin-bar height (em)

			// No admin bar
			} else {

				$attr[] = 'data-margin-top=0';

			}
 
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );
		
		// Apply filters
		$attr = apply_filters( 'ubik_top_bar_sticky_attr_filter', $attr );

		// Turn classes into space seperated string
		$attr = implode( ' ', $attr );

		// Return attributes
		return $attr;

	}
	
}

/**
 * Full width top bar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_full_width' ) ) {
	
	function ubik_top_bar_full_width() {

	// Get setting from customizer
	$full_width = get_theme_mod( 'ubik_top_bar_full_width', true );
	
	// Sanitize style to make sure it isn't empty
	$full_width = $full_width ?  $full_width : true;

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_full_width_filter', $full_width );

	}
	
}

/**
 * Add top bar container classes
 */
if ( ! function_exists( 'ubik_top_bar_container_classes' ) ) {
	
	function ubik_top_bar_container_classes() {

		// Full width setting
		$full_width = ubik_top_bar_full_width();

		// Setup classes array
		$classes = array( 'grid-container' );

		// Add class if top bar is full width
		if ( $full_width ) {
			$classes[] = 'fluid';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_top_bar_container_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns top bar elements in the left area
 */
if ( ! function_exists( 'ubik_top_bar_left_area_elements' ) ) {
	
	function ubik_top_bar_left_area_elements() {
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_top_bar_left_area_elements' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_top_bar_left_area_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns top bar elements in the right area
 */
if ( ! function_exists( 'ubik_top_bar_right_area_elements' ) ) {
	
	function ubik_top_bar_right_area_elements() {

		// Default array
		$array = array( 'text' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_top_bar_right_area_elements', 'text' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_top_bar_right_area_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns top-bar logo device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_logo_device_visibility' ) ) {
	
	function ubik_top_bar_logo_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_top_bar_logo_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_logo_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add top-bar logo classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_logo_classes' ) ) {
	
	function ubik_top_bar_logo_classes() {

		// Vars
		$visibility = ubik_top_bar_logo_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_top_bar_logo_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns top-bar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_text_device_visibility' ) ) {
	
	function ubik_top_bar_text_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_top_bar_text_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_text_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add top-bar classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_text_classes' ) ) {
	
	function ubik_top_bar_text_classes() {

		// Vars
		$visibility = ubik_top_bar_text_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_top_bar_text_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns top bar search style
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_search_style' ) ) {
	
	function ubik_top_bar_search_style() {

		// Get setting from customizer
		$search_style = get_theme_mod( 'ubik_top_bar_search_style', 'overlay' );
		
		// Sanitize style to make sure it isn't empty
		$search_style = $search_style ? $search_style : 'overlay';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_search_style_filter', $search_style );

	}
	
}

/**
 * Add top bar search toggle attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_search_toggle_attr' ) ) {
	
	function ubik_top_bar_search_toggle_attr() {

		// Vars
		$search_style = ubik_top_bar_search_style();

		// Setup attributes array
		$attr = array();

		// Add visibility classes
		if ( 'overlay' == $search_style ) {
			$attr[] = 'data-open = search-overlay-container';
		} elseif ( 'replace' == $search_style ) {
			$attr[] = 'data-toggle = top-bar-search-replace-container';
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );

		// Apply filters
		$attr = apply_filters( 'ubik_top_bar_search_toggle_attr_filter', $attr );

		// Turn attributes into space seperated string
		$attr = implode( ' ', $attr );

		// return classes
		return $attr;

	}

}

/**
 * Returns top-bar search device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_search_device_visibility' ) ) {
	
	function ubik_top_bar_search_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_top_bar_search_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_search_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add top-bar search classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_search_classes' ) ) {
	
	function ubik_top_bar_search_classes() {

		// Vars
		$visibility = ubik_top_bar_search_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_top_bar_search_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns top-bar nav device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_nav_device_visibility' ) ) {
	
	function ubik_top_bar_nav_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_top_bar_nav_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_top_bar_nav_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add top-bar nav classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_nav_classes' ) ) {
	
	function ubik_top_bar_nav_classes() {

		// Vars
		$visibility = ubik_top_bar_nav_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_top_bar_nav_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}


