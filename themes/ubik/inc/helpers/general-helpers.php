<?php
/**
 * This file includes helper functions used for general.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

 # ubik_blog_style()
 # ubik_blog_classes()
 # ubik_blog_cell_classes()
 # ubik_blog_entry_classes()

 # ubik_classic_entry_elements()
 # ubik_classic_entry_meta_elements()
 # ubik_classic_entry_meta_icon_visibility()
 # ubik_classic_entry_meta_classes()
 # ubik_classic_entry_meta_menu_position()
 # ubik_classic_entry_meta_menu_classes()

 # ubik_card_entry_elements()
 # ubik_card_entry_meta_elements()
 # ubik_card_entry_meta_device_visibility
 # ubik_card_entry_meta_icon_visibility()
 # ubik_card_entry_meta_classes()
 # ubik_card_entry_meta_menu_position()
 # ubik_card_entry_meta_menu_classes()
 # ubik_card_entry_content_device_visibility
 # ubik_card_entry_content_classes()
 # ubik_card_entry_read_more_device_visibility
 # ubik_card_entry_read_more_classes()

 # ubik_h_card_entry_elements()
 # ubik_h_card_entry_title_device_visibility()
 # ubik_h_card_entry_title_classes()
 # ubik_h_card_entry_meta_elements()
 # ubik_h_card_entry_meta_device_visibility()
 # ubik_h_card_entry_meta_icon_visibility()
 # ubik_h_card_entry_meta_menu_position()
 # ubik_h_card_entry_meta_classes()
 # ubik_h_card_entry_meta_menu_direction()
 # ubik_h_card_entry_meta_menu_classes()
 # ubik_h_card_entry_content_device_visibility()
 # ubik_h_card_entry_content_classes()
 # ubik_h_card_entry_read_more_device_visibility()
 # ubik_h_card_entry_read_more_classes()
 # ubik_h_card_entry_image_title_device_visibility()
 # ubik_h_card_entry_image_title_position()
 # ubik_h_card_entry_image_inner_content_classes()
 
 # ubik_single_elements()
 # ubik_single_meta_elements()
 # ubik_single_meta_icon_visibility()
 # ubik_single_meta_classes()
 # ubik_single_meta_menu_position()
 # ubik_single_meta_menu_classes()
 # ubik_single_related_posts_grid_classes()

 # ubik_scroll_top_deactivate()

 /*-------------------------------------------------------------------------------*/
 /* [ Fonctions ]
 /*-------------------------------------------------------------------------------*/

/**
 * Blog style
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_blog_style' ) ) {
	
	function ubik_blog_style() {

	// Get blog style from customizer setting
	$format = get_theme_mod( 'ubik_blog_style', 'classic' );
	
	// Sanitize style to make sure it isn't empty
	$format = $format ?  $format : 'classic';

	// Apply filters and return
	return apply_filters( 'ubik_blog_style_filter', $format );

	}
	
}

/**
 * Add classes to the blog
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_blog_classes' ) ) {
	
	function ubik_blog_classes() {

		// Blog style
		$blog_style = ubik_blog_style();

		// Setup classes array
		$classes = array('grid-x');

		// Add blog style class
		$classes[] = $blog_style . '-blog';

		// Card blog style
		if ( 'card' == $blog_style ) {

			// cards padding
			$classes[] .= 'grid-padding-x';
			$classes[] .= 'grid-padding-y';

			// mobile device columns
			$mobile_col = get_theme_mod( 'ubik_card_entry_columns_mobile','1' );
			$classes[] = 'small-up-' . $mobile_col;

			// tablet device columns
			$tablet_col = get_theme_mod( 'ubik_card_entry_columns_tablet','2' );
			$classes[] = 'medium-up-' . $tablet_col;

			// desktop device columns
			$desktop_col = get_theme_mod( 'ubik_card_entry_columns_desktop','3' );
			$classes[] = 'large-up-' . $desktop_col;

		}

		if ( 'h-card' == $blog_style ) {

			// cards padding
			$classes[] .= 'grid-padding-x';
			$classes[] .= 'grid-padding-y';
			
			// mobile device columns
			$h_mobile_col = get_theme_mod( 'ubik_h_card_entry_columns_mobile','1' );
			$classes[] = 'small-up-' . $h_mobile_col;

			// tablet device columns
			$h_tablet_col = get_theme_mod( 'ubik_h_card_entry_columns_tablet','1' );
			$classes[] = 'medium-up-' . $h_tablet_col;

			// desktop device columns
			$h_desktop_col = get_theme_mod( 'ubik_h_card_entry_columns_desktop','1' );
			$classes[] = 'large-up-' . $h_desktop_col;

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_blog_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add classes to the blog cells
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_blog_cell_classes' ) ) {
	
	function ubik_blog_cell_classes() {

		// Blog style
		$blog_style = ubik_blog_style();

		// Setup classes array
		$classes = array('cell');

		// Columns number classes
		if ( 'card' == $blog_style ) {

			if ( true == get_theme_mod('ubik_card_entry_equal_height', false ) ) {
				$classes[] = 'flex-container';
			}

		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_blog_cell_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add classes to the blog entry post class
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_blog_entry_classes' ) ) {
	
		function ubik_blog_entry_classes() {

			// Blog style
			$blog_style = ubik_blog_style();
	
			// Define classes array
			$classes = array();
	
			// Add entry style class
			$classes[] = $blog_style . '-entry';

			// Add classes if card style
			if ( 'classic' == $blog_style ) {

				if ( true == get_theme_mod( 'ubik_classic_entry_featured_image_zoom', true ) ) {
					$classes[] = 'zoom-img';
				}

				if ( true == get_theme_mod( 'ubik_classic_entry_featured_image_overlay', true ) ) {
					$classes[] = 'overlay-img';
				}

			}

			// Add classes if card style
			if ( 'card' == $blog_style ) {

				if ( true == get_theme_mod( 'ubik_card_entry_featured_image_zoom', true ) ) {
					$classes[] = 'zoom-img';
				}

				if ( true == get_theme_mod( 'ubik_card_entry_featured_image_overlay', true ) ) {
					$classes[] = 'overlay-img';
				}

			}

			// Add classes if horizontal card style
			if ( 'h-card' == $blog_style ) {

				if ( 'right' == get_theme_mod( 'ubik_h_card_entry_image_position', 'left' ) ) {
					$classes[] = 'right-img';
				}

				if ( true == get_theme_mod( 'ubik_h_card_entry_image_zoom', true ) ) {
					$classes[] = 'zoom-img';
				}

				if ( true == get_theme_mod( 'ubik_h_card_entry_image_overlay', true ) ) {
					$classes[] = 'overlay-img';
				}

			}
	
			// Apply filters to entry post class for child theming
			$classes = apply_filters( 'ubik_blog_entry_classes_filter', $classes );
	
			// Rturn classes array
			return $classes;
			
		}
	
	}

/**
 * Returns classic entries elements
 */
if ( ! function_exists( 'ubik_classic_entry_elements' ) ) {
	
	function ubik_classic_entry_elements() {

		// Default array
		$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_classic_entry_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_classic_entry_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns classic entries meta elements
 */
if ( ! function_exists( 'ubik_classic_entry_meta_elements' ) ) {
	
	function ubik_classic_entry_meta_elements() {

		// Default array
		$array = array( 'author', 'date', 'categories', 'comments' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_classic_entry_meta_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_classic_entry_meta_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns classic entries icon visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_entry_meta_icon_visibility' ) ) {
	
	function ubik_classic_entry_meta_icon_visibility() {

	// Get setting from customizer
	$hide = get_theme_mod( 'ubik_classic_entry_meta_hide_icon', false );
	
	// Sanitize style to make sure it isn't empty
	$hide = $hide ?  $hide : false;

	// Apply filters and return
	return apply_filters( 'ubik_classic_entry_meta_icon_visibility_filter', $hide );

	}
	
}

/**
 * Add classes to the classic entries meta
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_entry_meta_classes' ) ) {
	
	function ubik_classic_entry_meta_classes() {

		// Icons visibility
		$hide_icons = ubik_classic_entry_meta_icon_visibility();

		// Setup classes array
		$classes = array();

		// Add class
		if ( $hide_icons ) {
			$classes[] .= 'hide-icons';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_classic_entry_meta_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns classic entries meta menu position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_entry_meta_menu_position' ) ) {
	
	function ubik_classic_entry_meta_menu_position() {

	// Get setting from customizer
	$position = get_theme_mod( 'ubik_classic_entry_meta_menu_position', 'center' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ?  $position : 'center';

	// Apply filters and return
	return apply_filters( 'ubik_classic_entry_meta_menu_position_filter', $position );

	}
	
}

/**
 * Add classes to the classic entries meta menu
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_entry_meta_menu_classes' ) ) {
	
	function ubik_classic_entry_meta_menu_classes() {

		// Meta menu position
		$meta_menu = ubik_classic_entry_meta_menu_position();

		// Setup classes array
		$classes = array();

		// Add class
		if ( 'left' == $meta_menu ) {
			$classes[] .= 'align-left';
		} elseif ( 'right' == $meta_menu ) {
			$classes[] .= 'align-right';
		} else {
			$classes[] .= 'align-center';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_classic_entry_meta_menu_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns card entries elements
 */
if ( ! function_exists( 'ubik_card_entry_elements' ) ) {
	
	function ubik_card_entry_elements() {

		// Default array
		$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_card_entry_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_card_entry_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns card entries meta elements
 */
if ( ! function_exists( 'ubik_card_entry_meta_elements' ) ) {
	
	function ubik_card_entry_meta_elements() {

		// Default array
		$array = array( 'author', 'date', 'categories', 'comments' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_card_entry_meta_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_card_entry_meta_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns horizontal card entries meta device visibility
 */
if ( ! function_exists( 'ubik_card_entry_meta_device_visibility' ) ) {
	
	function ubik_card_entry_meta_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_card_entry_meta_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_card_entry_meta_device_visibility_filter', $visibility );

	}
	
}

/**
 * Returns card entries icon visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_meta_icon_visibility' ) ) {
	
	function ubik_card_entry_meta_icon_visibility() {

	// Get setting from customizer
	$hide = get_theme_mod( 'ubik_card_entry_meta_hide_icon', false );
	
	// Sanitize style to make sure it isn't empty
	$hide = $hide ?  $hide : false;

	// Apply filters and return
	return apply_filters( 'ubik_card_entry_meta_icon_visibility_filter', $hide );

	}
	
}

/**
 * Add classes to the card entries meta
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_meta_classes' ) ) {
	
	function ubik_card_entry_meta_classes() {

		// Device visibility
		$visibility = ubik_card_entry_meta_device_visibility();

		// Icons visibility
		$hide_icons = ubik_card_entry_meta_icon_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility classes
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Add icons visibility class
		if ( $hide_icons ) {
			$classes[] .= 'hide-icons';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_card_entry_meta_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns card entries meta menu position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_meta_menu_position' ) ) {
	
	function ubik_card_entry_meta_menu_position() {

	// Get setting from customizer
	$position = get_theme_mod( 'ubik_card_entry_meta_menu_position', 'center' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ?  $position : 'center';

	// Apply filters and return
	return apply_filters( 'ubik_card_entry_meta_menu_position_filter', $position );

	}
	
}

/**
 * Add classes to the card entries meta menu
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_meta_menu_classes' ) ) {
	
	function ubik_card_entry_meta_menu_classes() {

		// Meta menu position
		$meta_menu = ubik_card_entry_meta_menu_position();

		// Setup classes array
		$classes = array();

		// Add class
		if ( 'left' == $meta_menu ) {
			$classes[] .= 'align-left';
		} elseif ( 'right' == $meta_menu ) {
			$classes[] .= 'align-right';
		} else {
			$classes[] .= 'align-center';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_card_entry_meta_menu_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns card entry content device visibility
 */
if ( ! function_exists( 'ubik_card_entry_content_device_visibility' ) ) {
	
	function ubik_card_entry_content_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_card_entry_content_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_card_entry_content_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the card entry content
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_content_classes' ) ) {
	
	function ubik_card_entry_content_classes() {

		// Device visibility
		$visibility = ubik_card_entry_content_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility classes
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_card_entry_content_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns card entry read more device visibility
 */
if ( ! function_exists( 'ubik_card_entry_read_more_device_visibility' ) ) {
	
	function ubik_card_entry_read_more_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_card_entry_read_more_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_card_entry_read_more_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the card entry read more
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_card_entry_read_more_classes' ) ) {
	
	function ubik_card_entry_read_more_classes() {

		// Device visibility
		$visibility = ubik_card_entry_read_more_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility classes
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_card_entry_read_more_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entries elements
 */
if ( ! function_exists( 'ubik_h_card_entry_elements' ) ) {
	
	function ubik_h_card_entry_elements() {

		// Default array
		$array = array( 'title', 'content', 'read_more' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_h_card_entry_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_h_card_entry_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns horizontal card entries title device visibility
 */
if ( ! function_exists( 'ubik_h_card_entry_title_device_visibility' ) ) {
	
	function ubik_h_card_entry_title_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_h_card_entry_title_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_h_card_entry_title_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the horizontal card entries title
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_title_classes' ) ) {
	
	function ubik_h_card_entry_title_classes() {

		// Device visibility
		$visibility = ubik_h_card_entry_title_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		} elseif ( 'show-tablet-mobile' == $visibility ) {
			$classes[] = 'hide-for-large';
		} elseif ( 'show-mobile' == $visibility ) {
			$classes[] = 'hide-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_title_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entries meta elements
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_elements' ) ) {
	
	function ubik_h_card_entry_meta_elements() {

		// Default array
		$array = array( 'author', 'date' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_h_card_entry_meta_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_h_card_entry_meta_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns horizontal card entries meta device visibility
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_device_visibility' ) ) {
	
	function ubik_h_card_entry_meta_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_h_card_entry_meta_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_h_card_entry_meta_device_visibility_filter', $visibility );

	}
	
}

/**
 * Returns horizontal card entries icon visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_icon_visibility' ) ) {
	
	function ubik_h_card_entry_meta_icon_visibility() {

	// Get setting from customizer
	$hide = get_theme_mod( 'ubik_h_card_entry_meta_hide_icon', false );
	
	// Sanitize style to make sure it isn't empty
	$hide = $hide ?  $hide : false;

	// Apply filters and return
	return apply_filters( 'ubik_h_card_entry_meta_icon_visibility_filter', $hide );

	}
	
}

/**
 * Returns horizontal card entries meta menu position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_menu_position' ) ) {
	
	function ubik_h_card_entry_meta_menu_position() {

	// Get setting from customizer
	$position = get_theme_mod( 'ubik_h_card_entry_meta_menu_position', 'center' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ?  $position : 'center';

	// Apply filters and return
	return apply_filters( 'ubik_h_card_entry_meta_menu_position_filter', $position );

	}
	
}

/**
 * Add classes to the horizontal card entries meta
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_classes' ) ) {
	
	function ubik_h_card_entry_meta_classes() {

		// Device visibility
		$visibility = ubik_h_card_entry_meta_device_visibility();

		// Icons visibility
		$hide_icons = ubik_h_card_entry_meta_icon_visibility();

		// Meta menu position
		$position = ubik_h_card_entry_meta_menu_position();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		} elseif ( 'show-tablet-mobile' == $visibility ) {
			$classes[] = 'hide-for-large';
		} elseif ( 'show-mobile' == $visibility ) {
			$classes[] = 'hide-for-medium';
		}

		// Add icon visibility class
		if ( $hide_icons ) {
			$classes[] .= 'hide-icons';
		}

		// Add position class
		if ( 'left' == $position ) {
			$classes[] .= 'align-left';
		} elseif ( 'right' == $position ) {
			$classes[] .= 'align-right';
		} else {
			$classes[] .= 'align-center';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_meta_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entries meta menu direction
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_menu_direction' ) ) {
	
	function ubik_h_card_entry_meta_menu_direction() {

	// Get setting from customizer
	$direction = get_theme_mod( 'ubik_h_card_entry_meta_menu_direction', 'horizontal' );
	
	// Sanitize style to make sure it isn't empty
	$direction = $direction ?  $direction : 'horizontal';

	// Apply filters and return
	return apply_filters( 'ubik_h_card_entry_meta_menu_direction_filter', $direction );

	}
	
}

/**
 * Add classes to the horizontal card entries meta menu
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_meta_menu_classes' ) ) {
	
	function ubik_h_card_entry_meta_menu_classes() {

		// // Meta menu position
		// $position = ubik_h_card_entry_meta_menu_position();

		// Meta menu direction
		$direction = ubik_h_card_entry_meta_menu_direction();

		// Setup classes array
		$classes = array();

		// // Add position class
		// if ( 'left' == $position ) {
		// 	$classes[] .= 'align-left';
		// } elseif ( 'right' == $position ) {
		// 	$classes[] .= 'align-right';
		// } else {
		// 	$classes[] .= 'align-center';
		// }

		// Add direction class
		if ( 'vertical' == $direction ) {
			$classes[] .= 'vertical';
		} 

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_meta_menu_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entry content device visibility
 */
if ( ! function_exists( 'ubik_h_card_entry_content_device_visibility' ) ) {
	
	function ubik_h_card_entry_content_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_h_card_entry_content_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_h_card_entry_content_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the horizontal card entry content
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_content_classes' ) ) {
	
	function ubik_h_card_entry_content_classes() {

		// Device visibility
		$visibility = ubik_h_card_entry_content_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		} elseif ( 'show-tablet-mobile' == $visibility ) {
			$classes[] = 'hide-for-large';
		} elseif ( 'show-mobile' == $visibility ) {
			$classes[] = 'hide-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_content_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entry read more device visibility
 */
if ( ! function_exists( 'ubik_h_card_entry_read_more_device_visibility' ) ) {
	
	function ubik_h_card_entry_read_more_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_h_card_entry_read_more_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_h_card_entry_read_more_device_visibility_filter', $visibility );

	}
	
}

/**
 * Add classes to the horizontal card entry read more
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_read_more_classes' ) ) {
	
	function ubik_h_card_entry_read_more_classes() {

		// Device visibility
		$visibility = ubik_h_card_entry_read_more_device_visibility();

		// Setup classes array
		$classes = array();

		// Add device visibility
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		} elseif ( 'show-tablet-mobile' == $visibility ) {
			$classes[] = 'hide-for-large';
		} elseif ( 'show-mobile' == $visibility ) {
			$classes[] = 'hide-for-medium';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_read_more_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns horizontal card entries image title device visibility
 */
if ( ! function_exists( 'ubik_h_card_entry_image_title_device_visibility' ) ) {
	
	function ubik_h_card_entry_image_title_device_visibility() {

		// Get setting from customizer
		$visibility = get_theme_mod( 'ubik_h_card_entry_image_title_device_visibility', 'all-devices' );
		
		// Sanitize to make sure it isn't empty
		$visibility = $visibility ?  $visibility : 'all-devices';

		// Apply filters and return
		return apply_filters( 'ubik_h_card_entry_image_title_device_visibility_filter', $visibility );

	}
	
}

/**
 * Returns horizontal card entries image title position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_image_title_position' ) ) {
	
	function ubik_h_card_entry_image_title_position() {

	// Get setting from customizer
	$position = get_theme_mod( 'ubik_h_card_entry_image_title_position', 'center' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ?  $position : 'center';

	// Apply filters and return
	return apply_filters( 'ubik_h_card_entry_image_title_position_filter', $position );

	}
	
}

/**
 * Add classes to the horizontal card entries image content inner
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_h_card_entry_image_inner_content_classes' ) ) {
	
	function ubik_h_card_entry_image_inner_content_classes() {

		// Device visibility
		$visibility = ubik_h_card_entry_image_title_device_visibility();

		// Title position
		$position = ubik_h_card_entry_image_title_position();

		// Setup classes array
		$classes = array();

		// Add device visibility class
		if ( 'hide-tablet-mobile' == $visibility ) {
			$classes[] = 'show-for-large';
		} elseif ( 'hide-mobile' == $visibility ) {
			$classes[] = 'show-for-medium';
		} elseif ( 'show-tablet-mobile' == $visibility ) {
			$classes[] = 'hide-for-large';
		} elseif ( 'show-mobile' == $visibility ) {
			$classes[] = 'hide-for-medium';
		}

		// Add position class
		if ( 'top' == $position ) {
			$classes[] .= 'align-left';
		} elseif ( 'bottom' == $position ) {
			$classes[] .= 'align-right';
		} else {
			$classes[] .= 'align-center';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_h_card_entry_image_inner_content_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}





/**
 * Returns blog single elements
 */
if ( ! function_exists( 'ubik_single_elements' ) ) {
	
	function ubik_single_elements() {

		// Default array
		$array = array( 'featured_image', 'meta', 'content', 'tags', 'single_comments', 'post_nav' );
			
		// Get array from Customizer
		$array = get_theme_mod( 'ubik_single_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_single_elements_filter', $array );

		// Return array
		return $array;

	}
	
}

/**
 * Returns blog single meta
 */
if ( ! function_exists( 'ubik_single_meta_elements' ) ) {

	function ubik_single_meta_elements() {

		// Default sections
		$array = array( 'author', 'date', 'categories', 'comments' );

		// Get elements from Customizer
		$array = get_theme_mod( 'ubik_single_meta_elements', $array );

		// Turn into array if string
		if ( $array && ! is_array( $array ) ) {
			$array = explode( ',', $array );
		}

		// Apply filters for easy modification
		$array = apply_filters( 'ubik_single_meta_elements_filter', $array );

		// Return sections
		return $array;

	}

}

/**
 * Returns blog single meta icons visibility
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_single_meta_icon_visibility' ) ) {
	
	function ubik_single_meta_icon_visibility() {

	// Get setting from customizer
	$hide = get_theme_mod( 'ubik_single_meta_hide_icon', false );
	
	// Sanitize style to make sure it isn't empty
	$hide = $hide ?  $hide : false;

	// Apply filters and return
	return apply_filters( 'ubik_single_meta_icon_visibility_filter', $hide );

	}
	
}

/**
 * Add classes to single meta
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_single_meta_classes' ) ) {
	
	function ubik_single_meta_classes() {

		// Icons visibility
		$hide_icons = ubik_single_meta_icon_visibility();

		// Setup classes array
		$classes = array();

		// Add class
		if ( $hide_icons ) {
			$classes[] .= 'hide-icons';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_single_meta_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Returns single meta menu position
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_single_meta_menu_position' ) ) {
	
	function ubik_single_meta_menu_position() {

	// Get setting from customizer
	$position = get_theme_mod( 'ubik_single_meta_menu_position', 'left' );
	
	// Sanitize style to make sure it isn't empty
	$position = $position ?  $position : 'left';

	// Apply filters and return
	return apply_filters( 'ubik_single_meta_menu_position_filter', $position );

	}
	
}

/**
 * Add classes to single meta menu
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_single_meta_menu_classes' ) ) {
	
	function ubik_single_meta_menu_classes() {

		// Meta menu position
		$meta_menu = ubik_single_meta_menu_position();

		// Setup classes array
		$classes = array();

		// Add class
		if ( 'center' == $meta_menu ) {
			$classes[] .= 'align-center';
		} elseif ( 'right' == $meta_menu ) {
			$classes[] .= 'align-right';
		} else {
			$classes[] .= 'align-left';
		}

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters
		$classes = apply_filters( 'ubik_single_meta_menu_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add classes to the single related posts grid
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_single_related_posts_grid_classes' ) ) {
	
	function ubik_single_related_posts_grid_classes() {

		// Setup classes array
		$classes = array('related-posts__grid', 'grid-x', 'grid-padding-x', 'grid-padding-y');

		// mobile device
		$mobile_col = get_theme_mod( 'ubik_single_related_columns_mobile','1' );
		$classes[] = 'small-up-' . $mobile_col;

		// tablet device
		$tablet_col = get_theme_mod( 'ubik_single_related_columns_tablet','2' );
		$classes[] = 'medium-up-' . $tablet_col;

		// desktop device
		$desktop_col = get_theme_mod( 'ubik_single_related_columns_desktop','3' );
		$classes[] = 'large-up-' . $desktop_col;

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_single_related_posts_grid_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Deactivate scroll top
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_scroll_top_deactivate' ) ) {
	
	function ubik_scroll_top_deactivate() {

		// Return false by default
		$return = false;
		
		// 
		if ( get_theme_mod( 'ubik_scroll_top_deactivate', false ) ) {

			$return = true;

		}

		// Apply filters and return
		return apply_filters( 'ubik_scroll_top_deactivate_filter', $return );

	}
	
}

