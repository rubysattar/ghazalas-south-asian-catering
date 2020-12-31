<?php
/**
 * This file includes helper functions used for the vertical bar.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_classic_vertical_bar_display()

# ubik_classic_vertical_bar_position()
#	ubik_classic_vertical_bar_device_visibility()
# ubik_classic_vertical_bar_scroll_behavior()
# ubik_classic_vertical_bar_classes()
# ubik_classic_vertical_bar_inner_attr()
#	ubik_classic_vertical_bar_elements()
# ubik_classic_vertical_bar_footer_elements()
#	ubik_classic_vertical_bar_logo_classes()
#	ubik_classic_vertical_bar_nav_classes()
#	ubik_classic_vertical_bar_search_classes()
#	ubik_classic_vertical_bar_text_classes()
# ubik_classic_vertical_bar_footer_text_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display classic vertical bar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_display' ) ) {
	
	function ubik_classic_vertical_bar_display() {

		// Return false by default
		$return = false;
		
		// if  vertical bar is activated and is classic
		if ( get_theme_mod( 'ubik_vertical_bar_activate', false ) && 'classic' == get_theme_mod( 'ubik_vertical_bar_style', 'classic' ) ) {

			$return = true;
			
		}

		// Apply filters and return
		return apply_filters( 'ubik_classic_vertical_bar_display_filter', $return );

	}
	
}

/**
 * Returns cLassic vertical bar position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_position' ) ) {
	
	function ubik_classic_vertical_bar_position() {

		// Get classic vertical bar position from customizer setting
		$position = get_theme_mod( 'ubik_classic_vertical_bar_position', 'left' );
		
		// Sanitize style to make sure it isn't empty
		$position = $position ? $position : 'left';

	// Apply filters and return
	return apply_filters( 'ubik_classic_vertical_bar_position_filter', $position );

	}
	
}

/**
 * Returns cLassic vertical bar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_device_visibility' ) ) {
	
	function ubik_classic_vertical_bar_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_classic_vertical_bar_device_visibility', 'show-desktop' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop';

	// Apply filters and return
	return apply_filters( 'ubik_classic_vertical_bar_device_visibility_filter', $visibility );

	}
	
}

/**
 * Returns cLassic vertical bar scroll behavior
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_scroll_behavior' ) ) {
	
	function ubik_classic_vertical_bar_scroll_behavior() {

		// Get setting from customizer
		$setting = get_theme_mod( 'ubik_classic_vertical_bar_scroll_behavior', 'sticky' );
		
		// Sanitize style to make sure it isn't empty
		$setting = $setting ? $setting : 'sticky';

	// Apply filters and return
	return apply_filters( 'ubik_classic_vertical_bar_scroll_behavior_filter', $setting );

	}
	
}

/**
 * Add classic-vertical-bar classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_classes' ) ) {
	
	function ubik_classic_vertical_bar_classes() {

		// classic vertical bar position
		$bar_position = ubik_classic_vertical_bar_position();

		// classic vertical bar visibility
		$bar_visibility = ubik_classic_vertical_bar_device_visibility();

		// Setup classes array
		$classes = array();

		// Add position classes to classic-vertical-bar
		if ( 'right' == $bar_position ) {
			// $classes[] = 'small-order-1';
			$classes[] = 'right-bar';
		} else {
			$classes[] = 'left-bar';
		}

		// Add visibility classes
		if ( 'show-desktop-tablet' == $bar_visibility ) {

			$classes[] = 'show-for-medium';

		} else {

			$classes[] = 'show-for-large';

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_classic_vertical_bar_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add classic-vertical-bar-inner attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_inner_attr' ) ) {
	
	function ubik_classic_vertical_bar_inner_attr() {

		// classic vertical bar scroll behavior
		$scroll = ubik_classic_vertical_bar_scroll_behavior();

		// Top bar settings
		$top_bar_is_sticky = get_theme_mod( 'ubik_top_bar_sticky', false );
		$top_bar_height = get_theme_mod( 'ubik_top_bar_height', '2' );
		$frontpage_top_bar_is_sticky = get_theme_mod( 'ubik_frontpage_top_bar_sticky', false );
		$frontpage_top_bar_height = get_theme_mod( 'ubik_frontpage_top_bar_height', '2' );

		// Setup attributes array
		$attr = array();

		// Add scroll behavior attributes to classic-vertical-bar
		if ( 'sticky' == $scroll ) {

			$attr[] = 'data-sticky';

			// if admin-bar
			if ( is_admin_bar_showing() ) {			

				if ( ubik_frontpage_top_bar_display() ) {

					if ( $frontpage_top_bar_is_sticky ) {
						
						$margin = floatval( $frontpage_top_bar_height ) + 2;		// add admin-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

					} else {

						$attr[] = 'data-margin-top=2';    // admin-bar height (em)
						$attr[] = 'data-top-anchor=frontpage-topbar:bottom';

					}

				} elseif ( ubik_top_bar_display() ) {

					if ( $top_bar_is_sticky ) {
						
						$margin = floatval( $top_bar_height ) + 2;		// add admin-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

					} else {

						$attr[] = 'data-margin-top=2';    // admin-bar height (em)
						$attr[] = 'data-top-anchor=topbar:bottom';

					}

				} else {

					$attr[] = 'data-margin-top=2';    // admin-bar height (em)

				}

			// no admin-bar
			} else {

				if ( ubik_frontpage_top_bar_display() ) {

					if ( $frontpage_top_bar_is_sticky ) {
						
						$attr[] = 'data-margin-top=' . $frontpage_top_bar_height ;

					} else {

						$attr[] = 'data-margin-top=0';
						$attr[] = 'data-top-anchor=frontpage-topbar:bottom';

					}

				} elseif ( ubik_top_bar_display() ) {

					if ( $top_bar_is_sticky ) {
						
						$attr[] = 'data-margin-top=' . $top_bar_height ;

					} else {

						$attr[] = 'data-margin-top=0';
						$attr[] = 'data-top-anchor=topbar:bottom';

					}

				} else {

					$attr[] = 'data-margin-top=0';

				}

			}

		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );

		// Apply filters
		$attr = apply_filters( 'ubik_classic_vertical_bar_inner_attr_filter', $attr );

		// Turn attributes into space seperated string
		$attr = implode( ' ', $attr );

		// return classes
		return $attr;

	}

}

/**
 * Returns classic vertical bar elements
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_elements' ) ) {
	
	function ubik_classic_vertical_bar_elements() {

		// Default array
		$array = array( 'logo', 'nav', 'search' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_classic_vertical_bar_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_classic_vertical_bar_elements', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns classic vertical bar footer elements
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_footer_elements' ) ) {
	
	function ubik_classic_vertical_bar_footer_elements() {
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_classic_vertical_bar_footer_elements' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_classic_vertical_bar_footer_elements', $array );

		// Return array
		return $array;

	}
	
}


/**
 * Add classic-vertical-bar-logo classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_logo_classes' ) ) {
  
  function ubik_classic_vertical_bar_logo_classes() {

		// Vars
		$hide_tablet = get_theme_mod( 'ubik_classic_vertical_bar_logo_hide_tablet', '0' );

    // Setup classes array
    $classes = array();

    // Add visibility classes
		if ( '1' == $hide_tablet ) {
			$classes[] = 'show-for-large';
		}

    // Set keys equal to vals
    $classes = array_combine( $classes, $classes );

    // Apply filters
    $classes = apply_filters( 'ubik_classic_vertical_bar_logo_classes_filter', $classes );

    // Turn classes into space seperated string
    $classes = implode( ' ', $classes );

    // return classes
    return $classes;

  }

}

/**
 * Add classic-vertical-bar-nav classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_nav_classes' ) ) {
  
  function ubik_classic_vertical_bar_nav_classes() {

		// Vars
		$hide_tablet = get_theme_mod( 'ubik_classic_vertical_bar_nav_hide_tablet', '0' );

    // Setup classes array
    $classes = array();

    // Add visibility classes
		if ( '1' == $hide_tablet ) {
			$classes[] = 'show-for-large';
		}

    // Set keys equal to vals
    $classes = array_combine( $classes, $classes );

    // Apply filters
    $classes = apply_filters( 'ubik_classic_vertical_bar_nav_classes_filter', $classes );

    // Turn classes into space seperated string
    $classes = implode( ' ', $classes );

    // return classes
    return $classes;

  }

}

/**
 * Add classic-vertical-bar-search classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_search_classes' ) ) {
  
  function ubik_classic_vertical_bar_search_classes() {

		// Vars
		$hide_tablet = get_theme_mod( 'ubik_classic_vertical_bar_search_hide_tablet', '0' );

    // Setup classes array
    $classes = array();

    // Add visibility classes
		if ( '1' == $hide_tablet ) {
			$classes[] = 'show-for-large';
		}

    // Set keys equal to vals
    $classes = array_combine( $classes, $classes );

    // Apply filters
    $classes = apply_filters( 'ubik_classic_vertical_bar_search_classes_filter', $classes );

    // Turn classes into space seperated string
    $classes = implode( ' ', $classes );

    // return classes
    return $classes;

	}
	
}

/**
 * Add classic-vertical-bar-text classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_text_classes' ) ) {
  
  function ubik_classic_vertical_bar_text_classes() {

		// Vars
		$hide_tablet = get_theme_mod( 'ubik_classic_vertical_bar_text_hide_tablet', '0' );

    // Setup classes array
    $classes = array();

    // Add visibility classes
		if ( '1' == $hide_tablet ) {
			$classes[] = 'show-for-large';
		}

    // Set keys equal to vals
    $classes = array_combine( $classes, $classes );

    // Apply filters
    $classes = apply_filters( 'ubik_classic_vertical_bar_text_classes_filter', $classes );

    // Turn classes into space seperated string
    $classes = implode( ' ', $classes );

    // return classes
    return $classes;

	}
	
}

/**
 * Add classic-vertical-bar-footer-text classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_footer_text_classes' ) ) {
  
  function ubik_classic_vertical_bar_footer_text_classes() {

		// Vars
		$hide_tablet = get_theme_mod( 'ubik_classic_vertical_bar_footer_text_hide_tablet', '0' );

    // Setup classes array
    $classes = array();

    // Add visibility classes
		if ( '1' == $hide_tablet ) {
			$classes[] = 'show-for-large';
		}

    // Set keys equal to vals
    $classes = array_combine( $classes, $classes );

    // Apply filters
    $classes = apply_filters( 'ubik_classic_vertical_bar_footer_text_classes_filter', $classes );

    // Turn classes into space seperated string
    $classes = implode( ' ', $classes );

    // return classes
    return $classes;

	}
	
}


