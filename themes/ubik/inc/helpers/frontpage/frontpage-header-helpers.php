<?php
/**
 * This file includes helper functions used for frontpage header.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_frontpage_header_display()
# ubik_frontpage_specific_header()
# ubik_frontpage_header_format()

# ubik_frontpage_header_classes()

# ubik_frontpage_image_header_menubar_deactivate()
# ubik_frontpage_image_header_menubar_position()
#	ubik_frontpage_image_header_menubar_position_classes()
# ubik_frontpage_menu_bar_device_visibility()
# ubik_frontpage_menu_bar_classes()
# ubik_frontpage_menu_bar_full_width()
# ubik_frontpage_menu_bar_container_classes()
# ubik_frontpage_sticky_menubar_attr()
#	ubik_frontpage_menu_bar_left_width_classes()
# ubik_frontpage_menubar_left_area_alignment()
# ubik_frontpage_menu_bar_left_inner_classes()
# ubik_frontpage_menubar_left_area_elements()
#	ubik_frontpage_menu_bar_center_width_classes()
# ubik_frontpage_menubar_center_area_alignment()
# ubik_frontpage_menu_bar_center_inner_classes()
# ubik_frontpage_menubar_center_area_elements()
#	ubik_frontpage_menu_bar_right_width_classes()
# ubik_frontpage_menubar_right_area_alignment()
# ubik_frontpage_menu_bar_right_inner_classes()
# ubik_frontpage_menubar_right_area_elements()
#	ubik_frontpage_menubar_logo_device_visibility()
#	ubik_frontpage_menubar_logo_classes()
#	ubik_frontpage_menubar_text_device_visibility()
#	ubik_frontpage_menubar_text_classes()
#	ubik_frontpage_menubar_search_style()
#	ubik_frontpage_menubar_search_toggle_attr()
#	ubik_frontpage_menubar_search_device_visibility()
#	ubik_frontpage_menubar_search_classes()
#	ubik_frontpage_menubar_nav_device_visibility()
#	ubik_frontpage_menubar_nav_classes()

#	ubik_frontpage_header_content_elements()
# ubik_frontpage_header_content_elements_direction()
# ubik_frontpage_header_content_elements_vertical_alignment()
# ubik_frontpage_header_content_classes()
# ubik_frontpage_header_content_site_tagline_horizontal_alignment()
#	ubik_frontpage_header_content_site_tagline_device_visibility()
#	ubik_frontpage_header_content_site_tagline_classes()
# ubik_frontpage_header_content_page_title_horizontal_alignment()
#	ubik_frontpage_header_content_page_title_device_visibility()
#	ubik_frontpage_header_content_page_title_classes()
# ubik_frontpage_header_content_nav_horizontal_alignment()
#	ubik_frontpage_header_content_nav_device_visibility()
#	ubik_frontpage_header_content_nav_classes()
# ubik_frontpage_header_content_search_form_horizontal_alignment()
#	ubik_frontpage_header_content_search_form_device_visibility()
#	ubik_frontpage_header_content_search_form_classes()
# ubik_frontpage_header_content_site_logo_horizontal_alignment()
#	ubik_frontpage_header_content_site_logo_device_visibility()
#	ubik_frontpage_header_content_site_logo_classes()
# ubik_frontpage_header_content_text_horizontal_alignment()
#	ubik_frontpage_header_content_text_device_visibility()
#	ubik_frontpage_header_content_text_classes()
# ubik_frontpage_header_content_links_horizontal_alignment()
#	ubik_frontpage_header_content_links_device_visibility()
# ubik_frontpage_header_content_links_direction()
#	ubik_frontpage_header_content_links_classes()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Display specific header on the front page
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_display' ) ) {
	
	function ubik_frontpage_header_display() {

		// Return false by default
		$return = false;
		
		// Specific header is activated on the front page
		if ( is_front_page() && ubik_frontpage_specific_header() ) {

			$return = true;

		}

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_display_filter', $return );

	}
	
}

/**
 * Front page specific header
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_specific_header' ) ) {
	
	function ubik_frontpage_specific_header() {

	// Get setting from customizer
	$output = get_theme_mod( 'ubik_frontpage_specific_header', false );
	
	// Sanitize style to make sure it isn't empty
	$output = $output ? $output : false;

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_specific_header_filter', $output );

	}
	
}

/**
 * Front page header format
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_format' ) ) {
	
	function ubik_frontpage_header_format() {

	// Get setting from customizer
	$format = get_theme_mod( 'ubik_frontpage_header_format', 'image' );
	
	// Sanitize style to make sure it isn't empty
	$format = $format ? $format : 'image';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_header_format_filter', $format );

	}
	
}

/**
 * Add classes to the front page site header
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_classes' ) ) {
	
	function ubik_frontpage_header_classes() {

		// Header style
		$header_format = ubik_frontpage_header_format();

		// Setup classes array
		$classes = array();

		// Add header style class
		$classes[] = 'frontpage-' . $header_format . '-header';

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Deactivate image header menu-bar on the front page
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_image_header_menubar_deactivate' ) ) {
	
	function ubik_frontpage_image_header_menubar_deactivate() {

	// Get setting from customizer
	$deactivated = get_theme_mod( 'ubik_frontpage_image_header_menubar_deactivate', false );
	
	// Sanitize style to make sure it isn't empty
	$deactivated = $deactivated ?  $deactivated : false;

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_image_header_menubar_deactivate_filter', $deactivated );

	}
	
}

/**
 * Front page image header menu-bar position
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_image_header_menubar_position' ) ) {
	
	function ubik_frontpage_image_header_menubar_position() {

	// Get front page menubar position from customizer setting
	$position = get_theme_mod( 'ubik_frontpage_image_header_menubar_position', 'top' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ? $position : 'top';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_image_header_menubar_position_filter', $position );

	}
	
}

/**
 * Add front page image header menu-bar position classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_image_header_menubar_position_classes' ) ) {
	
	function ubik_frontpage_image_header_menubar_position_classes() {

		// menu bar position
		$menubar_position = ubik_frontpage_image_header_menubar_position();

		// Setup classes array
		$classes = array();

		// Add position classes to menu-bar 
		if ( 'bottom' == $menubar_position ) {

			$classes[] = 'small-order-1';

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_image_header_menubar_position_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_device_visibility' ) ) {
	
	function ubik_frontpage_menu_bar_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_menubar_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menu_bar_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add front page menu-bar classes
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_classes' ) ) {
	
	function ubik_frontpage_menu_bar_classes() {

		// Vars
		$visibility = ubik_frontpage_menu_bar_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Full width front page menu-bar
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_full_width' ) ) {
	
	function ubik_frontpage_menu_bar_full_width() {

	// Get setting from customizer
	$full_width = get_theme_mod( 'ubik_frontpage_menubar_full_width', false );

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menu_bar_full_width', $full_width );

	}
	
}

/**
 * Add front page menu-bar container classes
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_container_classes' ) ) {
	
	function ubik_frontpage_menu_bar_container_classes() {

		// Full width setting
		$full_width = ubik_frontpage_menu_bar_full_width();

		// Setup classes array
		$classes = array( 'grid-container' );

		// Add class if menu-bar is full width
		if ( $full_width ) {
			$classes[] = 'fluid';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_container_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page sticky menu bar attributes
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_sticky_menubar_attr' ) ) {
	
	function ubik_frontpage_sticky_menubar_attr() {

		// Menu bar sticky
		$is_sticky = get_theme_mod( 'ubik_frontpage_menubar_sticky', false );;

		// Header bar position
		$bar_position = ubik_frontpage_image_header_menubar_position();

		// Top bar settings
		$top_bar_is_sticky = get_theme_mod( 'ubik_top_bar_sticky', false );
		$top_bar_height = get_theme_mod( 'ubik_top_bar_height', '2' );
		$frontpage_top_bar_is_sticky = get_theme_mod( 'ubik_frontpage_top_bar_sticky', false );
		$frontpage_top_bar_height = get_theme_mod( 'ubik_frontpage_top_bar_height', '2' );

		// Setup attributes array
		$attr = array();

		if ( $is_sticky ) {
			
			$attr[] = 'data-sticky-container';
			$attr[] = 'data-sticky';

			// if admin bar
			if ( is_admin_bar_showing() ) {			
				
				if ( ubik_frontpage_top_bar_display() ) {

					if ( $frontpage_top_bar_is_sticky ) {
						
						$margin = floatval( $frontpage_top_bar_height ) + 2;		// add admin-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						}

					} else {

						$attr[] = 'data-margin-top=2';
						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						} else {
							$attr[] = 'data-top-anchor=frontpage-topbar:bottom';
						}

					}

				} elseif ( ubik_top_bar_display() ) {

					if ( $top_bar_is_sticky ) {
						
						$margin = floatval( $top_bar_height ) + 2;		// add top-bar height and admin-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage-header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						}

					} else {

						$attr[] = 'data-margin-top=2';
						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						} else {
							$attr[] = 'data-top-anchor=topbar:bottom';
						}

					}

				} else {
					
					$attr[] = 'data-margin-top=2';
					if ( 'bottom' == $bar_position ) {
						$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
					}
				
				}

			// No admin bar
			} else {

				if ( ubik_frontpage_top_bar_display() ) {

					if ( $frontpage_top_bar_is_sticky ) {
						
						$margin = floatval( $frontpage_top_bar_height );		// add frontpage-top-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						}

					} else {

						$attr[] = 'data-margin-top=0';
						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						} else {
							$attr[] = 'data-top-anchor=frontpage-topbar:bottom';
						}

					}

				} elseif ( ubik_top_bar_display() ) {

					if ( $top_bar_is_sticky ) {
						
						$margin = floatval( $top_bar_height );		// add top-bar height (em)
						$attr[] = 'data-margin-top=' . $margin ;

						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						}

					} else {

						$attr[] = 'data-margin-top=0';
						if ( 'bottom' == $bar_position && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) {
							$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
						} else {
							$attr[] = 'data-top-anchor=topbar:bottom';
						}

					}

				} else {

					$attr[] = 'data-margin-top=0';
					if ( 'bottom' == $bar_position ) {
						$attr[] = 'data-top-anchor=frontpage-image-header-content-wrap:bottom';
					}

				}

			}
 
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );
		
		// Apply filters for child theming
		$attr = apply_filters( 'ubik_frontpage_sticky_menubar_attr_filter', $attr );

		// Turn classes into space seperated string
		$attr = implode( ' ', $attr );

		// Return attributes
		return $attr;

	}
	
}

/**
 * Add width class to front page menu-bar left area
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_left_width_classes' ) ) {
	
	function ubik_frontpage_menu_bar_left_width_classes() {

		// Menu-bar left width
		$menubar_left_width = get_theme_mod( 'ubik_frontpage_menubar_left_area_width', 'shrink' );

		// Setup classes array
		$classes = array();

		// Add header style class
		$classes[] = $menubar_left_width;

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_left_width_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar elements alignment in the left area
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_left_area_alignment' ) ) {
	
	function ubik_frontpage_menubar_left_area_alignment() {

		// Get the customizer setting
		$alignment = get_theme_mod( 'ubik_frontpage_menubar_left_area_alignment', 'horizontal' );
		
		// Sanitize
		$alignment = $alignment ? $alignment : 'horizontal';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_menubar_left_area_alignment_filter', $alignment );

	}
	
}

/**
 * Add classes to the front page menu-bar-left-inner
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_menu_bar_left_inner_classes' ) ) {
	
	function ubik_frontpage_menu_bar_left_inner_classes() {

		// Header bar position
		$menu_bar_left_alignment = ubik_frontpage_menubar_left_area_alignment();

		// Setup classes array
		$classes = array();

		// menu-bar-left-inner classes
		if ( 'vertical' == $menu_bar_left_alignment ) {

			$classes[] = 'grid-y align-middle';

		} else {

			$classes[] = 'grid-x align-left';

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_left_inner_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}
	
}

/**
 * Returns menu bar elements in the left area
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_left_area_elements' ) ) {
	
	function ubik_frontpage_menubar_left_area_elements() {

		// Default array
		$array = array();

		// Get array from Customizer
		$array = get_theme_mod( 'ubik_frontpage_menubar_left_area_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_frontpage_menubar_left_area_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Add width class to front page menu-bar center area
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_center_width_classes' ) ) {
	
	function ubik_frontpage_menu_bar_center_width_classes() {

		// Menu-bar center width
		$menubar_center_width = get_theme_mod( 'ubik_frontpage_menubar_center_area_width', 'shrink' );

		// Setup classes array
		$classes = array();

		// Add header style class
		$classes[] = $menubar_center_width;

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_center_width_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar elements alignment in the center area
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_center_area_alignment' ) ) {
	
	function ubik_frontpage_menubar_center_area_alignment() {

	// Get the customizer setting
	$alignment = get_theme_mod( 'ubik_frontpage_menubar_center_area_alignment', 'horizontal' );
	
	// Sanitize
	$alignment = $alignment ? $alignment : 'horizontal';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_center_area_alignment_filter', $alignment );

	}
	
}

/**
 * Add classes to the front page menu-bar-center-inner
 *
 * @since 1.0.0
 */
 if ( ! function_exists( 'ubik_frontpage_menu_bar_center_inner_classes' ) ) {
	
	function ubik_frontpage_menu_bar_center_inner_classes() {

		// Header bar position
		$menu_bar_left_alignment = ubik_frontpage_menubar_center_area_alignment();

		// Setup classes array
		$classes = array();

		// Header-inner classes when image header
		if ( 'vertical' == $menu_bar_left_alignment ) {

			$classes[] = 'grid-y align-middle';

		} else {

			$classes[] = 'grid-x align-center';

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_menu_bar_center_inner_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}
	
}

/**
 * Returns front page menu bar elements in the center area
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_center_area_elements' ) ) {
	
	function ubik_frontpage_menubar_center_area_elements() {

		// Get array from Customizer
		$array = get_theme_mod( 'ubik_frontpage_menubar_center_area_elements' );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_frontpage_menubar_center_area_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Add width class to front page menu-bar right area
 */
if ( ! function_exists( 'ubik_frontpage_menu_bar_right_width_classes' ) ) {
	
	function ubik_frontpage_menu_bar_right_width_classes() {

		// Menu-bar right width
		$menubar_right_width = get_theme_mod( 'ubik_frontpage_menubar_right_area_width', 'auto' );

		// Setup classes array
		$classes = array();

		// Add header style class
		$classes[] = $menubar_right_width;

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_right_width_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar elements alignment in the right area
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_right_area_alignment' ) ) {
	
	function ubik_frontpage_menubar_right_area_alignment() {

	// Get the customizer setting
	$alignment = get_theme_mod( 'ubik_frontpage_menubar_right_area_alignment', 'horizontal' );
	
	// Sanitize
	$alignment = $alignment ? $alignment : 'horizontal';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_right_area_alignment_filter', $alignment );

	}
	
}

/**
 * Add classes to the front page menu-bar-right-inner
 */
 if ( ! function_exists( 'ubik_frontpage_menu_bar_right_inner_classes' ) ) {
	
	function ubik_frontpage_menu_bar_right_inner_classes() {

		// Header bar position
		$menu_bar_right_alignment = ubik_frontpage_menubar_right_area_alignment();

		// Setup classes array
		$classes = array();

		// Header-inner classes when image header
		if ( 'vertical' == $menu_bar_right_alignment ) {

			$classes[] = 'grid-y align-middle';

		} else {

			$classes[] = 'grid-x align-right';

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_menu_bar_right_inner_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}
	
}

/**
 * Returns front page menu bar elements in the right area
 */
 if ( ! function_exists( 'ubik_frontpage_menubar_right_area_elements' ) ) {
	
	function ubik_frontpage_menubar_right_area_elements() {

		// Default array
		$array = array( 'nav' );

		// Get array from Customizer
		$array = get_theme_mod( 'ubik_frontpage_menubar_right_area_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_frontpage_menubar_right_area_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns front page menu bar logo device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_logo_device_visibility' ) ) {
	
	function ubik_frontpage_menubar_logo_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_menubar_logo_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_logo_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add front page menu bar logo classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_logo_classes' ) ) {
	
	function ubik_frontpage_menubar_logo_classes() {

		// Vars
		$visibility = ubik_frontpage_menubar_logo_device_visibility();

		// Setup classes array
		$classes = array();

		// Add hover effect class
		if ( true == get_theme_mod('ubik_frontpage_menubar_logo_hover_effect', true) ) {
			$classes[] = 'hover-effect';
		}

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_menubar_logo_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar text device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_text_device_visibility' ) ) {
	
	function ubik_frontpage_menubar_text_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_menubar_text_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_text_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add front page menu bar text classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_text_classes' ) ) {
	
	function ubik_frontpage_menubar_text_classes() {

		// Vars
		$visibility = ubik_frontpage_menubar_text_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_menubar_text_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menubar search style
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_search_style' ) ) {
	
	function ubik_frontpage_menubar_search_style() {

		// Get setting from customizer
		$frontpage_search_style = get_theme_mod( 'ubik_frontpage_menubar_search_style', 'overlay' );
		
		// Sanitize style to make sure it isn't empty
		$frontpage_search_style = $frontpage_search_style ? $frontpage_search_style : 'overlay';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_search_style_filter', $frontpage_search_style );

	}
	
}

/**
 * Add front page menubar search toggle attributes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_search_toggle_attr' ) ) {
	
	function ubik_frontpage_menubar_search_toggle_attr() {

		// Vars
		$frontpage_search_style = ubik_frontpage_menubar_search_style();

		// Setup attributes array
		$attr = array();

		// Add visibility classes
		if ( 'overlay' == $frontpage_search_style ) {
			$attr[] = 'data-open = search-overlay-container';
		} elseif ( 'replace' == $frontpage_search_style ) {
			$attr[] = 'data-toggle = frontpage-menu-bar-search-replace-container';
		}

		// Set keys equal to vals
		$attr = array_combine( $attr, $attr );

		// Apply filters
		$attr = apply_filters( 'ubik_frontpage_menubar_search_toggle_attr_filter', $attr );

		// Turn attributes into space seperated string
		$attr = implode( ' ', $attr );

		// return classes
		return $attr;

	}

}

/**
 * Returns front page menu bar search device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_search_device_visibility' ) ) {
	
	function ubik_frontpage_menubar_search_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_menubar_search_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_search_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add front page menu bar search classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_search_classes' ) ) {
	
	function ubik_frontpage_menubar_search_classes() {

		// Vars
		$visibility = ubik_frontpage_menubar_search_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_menubar_search_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns front page menu bar navigation device visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_nav_device_visibility' ) ) {
	
	function ubik_frontpage_menubar_nav_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_menubar_nav_device_visibility', 'show-desktop-tablet' );
		
		// Sanitize style to make sure it isn't empty
		$visibility = $visibility ? $visibility : 'show-desktop-tablet';

	// Apply filters and return
	return apply_filters( 'ubik_frontpage_menubar_nav_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add front page menu bar navigation classes
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_menubar_nav_classes' ) ) {
	
	function ubik_frontpage_menubar_nav_classes() {

		// Vars
		$visibility = ubik_frontpage_menubar_nav_device_visibility();

		// Setup classes array
		$classes = array();

		// Add visibility classes
		if ( 'show-desktop' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} else {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_frontpage_menubar_nav_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}


/**
 * Returns front page header-content elements
 */
if ( ! function_exists( 'ubik_frontpage_header_content_elements' ) ) {
	
	function ubik_frontpage_header_content_elements() {

		// Default array
		$array = array( 'site-logo' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_frontpage_header_content_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Front page header content elements direction
 */
if ( ! function_exists( 'ubik_frontpage_header_content_elements_direction' ) ) {
	
	function ubik_frontpage_header_content_elements_direction() {

		// Get setting from customizer
		$direction = get_theme_mod( 'ubik_frontpage_header_content_elements_direction', 'column' );
		
		// Sanitize to make sure it isn't empty
		$direction = $direction ?  $direction : 'column';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_elements_direction_filter', $direction );

	}
	
}

/**
 * Front page header content elements vertical alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_elements_vertical_alignment' ) ) {
	
	function ubik_frontpage_header_content_elements_vertical_alignment() {

		// Get setting from customizer
		$vertical_alignment = get_theme_mod( 'ubik_frontpage_header_content_elements_vertical_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$vertical_alignment = $vertical_alignment ?  $vertical_alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_elements_vertical_alignment_filter', $vertical_alignment );

	}
	
}

/**
 * Add classes to front page header content
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_classes' ) ) {

	function ubik_frontpage_header_content_classes() {

		// Direction of header content elements
		$direction = ubik_frontpage_header_content_elements_direction();
		
		// Vertical alignment of header content elements
		$vertical_alignment = ubik_frontpage_header_content_elements_vertical_alignment();

		// Setup classes array
		$classes = array();

		// Add direction classes
		if ( 'column' == $direction ) {
			$classes[] = 'dir-col';
		}

		// Add vertical alignment classes
		if ( 'top' == $vertical_alignment ) {
			$classes[] = 'align-left';
		} elseif ( 'bottom' == $vertical_alignment ) {
			$classes[] = 'align-right';
		} elseif ( 'spaced' == $vertical_alignment ) {
			$classes[] = 'align-justify';
		} else {
			$classes[] = 'align-center';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page header content site-tagline horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_tagline_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_site_tagline_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_site_tagline_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_site_tagline_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page header content site-tagline device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_tagline_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_site_tagline_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_site_tagline_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_site_tagline_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page header content site-tagline
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_tagline_classes' ) ) {
	
	function ubik_frontpage_header_content_site_tagline_classes() {

		// Horizontal alignment of site-tagline
		$horizontal_alignment = ubik_frontpage_header_content_site_tagline_horizontal_alignment();

		// Device visibility of site-tagline
		$visibility = ubik_frontpage_header_content_site_tagline_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_site_tagline_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page header content page-title horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_page_title_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_page_title_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_page_title_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_page_title_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page header content page-title device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_page_title_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_page_title_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_page_title_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_page_title_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page header content page-title
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_page_title_classes' ) ) {
	
	function ubik_frontpage_header_content_page_title_classes() {

		// Horizontal alignment of page-title
		$horizontal_alignment = ubik_frontpage_header_content_page_title_horizontal_alignment();

		// Device visibility of page-title
		$visibility = ubik_frontpage_header_content_page_title_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_page_title_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page header content main navigation horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_nav_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_nav_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_nav_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_nav_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page header content main navigation device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_nav_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_nav_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_nav_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_nav_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page header content main navigation
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_nav_classes' ) ) {
	
	function ubik_frontpage_header_content_nav_classes() {

		// Horizontal alignment of nav
		$horizontal_alignment = ubik_frontpage_header_content_nav_horizontal_alignment();

		// Device visibility of nav
		$visibility = ubik_frontpage_header_content_nav_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_nav_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page header content search form horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_search_form_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_search_form_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_search_form_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_search_form_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page header content search form device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_search_form_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_search_form_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_search_form_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_search_form_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the front page header content search form
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_search_form_classes' ) ) {
	
	function ubik_frontpage_header_content_search_form_classes() {

		// Horizontal alignment
		$horizontal_alignment = ubik_frontpage_header_content_search_form_horizontal_alignment();

		// Device visibility
		$visibility = ubik_frontpage_header_content_search_form_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_search_form_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page header content site-logo horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_logo_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_site_logo_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_site_logo_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_site_logo_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page header content site-logo device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_logo_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_site_logo_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_site_logo_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_site_logo_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page header content site-logo
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_site_logo_classes' ) ) {
	
	function ubik_frontpage_header_content_site_logo_classes() {

		// Horizontal alignment of site-title
		$horizontal_alignment = ubik_frontpage_header_content_site_logo_horizontal_alignment();

		// Device visibility of site-title
		$visibility = ubik_frontpage_header_content_site_logo_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_site_logo_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Front page Header content custom text horizontal alignment
 */
if ( ! function_exists( 'ubik_frontpage_header_content_text_horizontal_alignment' ) ) {
	
	function ubik_frontpage_header_content_text_horizontal_alignment() {

		// Get setting from customizer
		$alignment = get_theme_mod( 'ubik_frontpage_header_content_text_horizontal_alignment', 'center' );
		
		// Sanitize to make sure it isn't empty
		$alignment = $alignment ?  $alignment : 'center';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_text_horizontal_alignment_filter', $alignment );

	}
	
}

/**
 * Front page Header content custom text device visibility
 */
if ( ! function_exists( 'ubik_frontpage_header_content_text_device_visibility' ) ) {
	
	function ubik_frontpage_header_content_text_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_frontpage_header_content_text_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_frontpage_header_content_text_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to front page header content custom text
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_frontpage_header_content_text_classes' ) ) {
	
	function ubik_frontpage_header_content_text_classes() {

		// Horizontal alignment
		$horizontal_alignment = ubik_frontpage_header_content_text_horizontal_alignment();

		// Device visibility
		$visibility = ubik_frontpage_header_content_text_device_visibility();

		// Setup classes array
		$classes = array();

		// Add horizontal alignment classes
		if ( 'left' == $horizontal_alignment ) {
			$classes[] = 'align-self-top';
		} elseif ( 'right' == $horizontal_alignment ) {
			$classes[] = 'align-self-bottom';
		} else {
			$classes[] = 'align-self-middle';
		}

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'show-tablet' == $visibility ) {
			$classes[] = 'show-for-medium-only';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_frontpage_header_content_text_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

