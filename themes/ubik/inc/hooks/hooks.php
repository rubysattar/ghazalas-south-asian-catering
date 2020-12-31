<?php
/**
 * This file includes helper functions used for header.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_mobile_bar_template()
# ubik_header_template()
# ubik_top_bar_template()
# ubik_classic_vertical_bar_template()
# ubik_sidebar_template()
# ubik_footer_template()

# ubik_general_css()
# ubik_header_css()
# ubik_top_bar_css()
# ubik_classic_vertical_bar_css()
# ubik_sidebar_css()
# ubik_footer_css()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Mobile bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_bar_template' ) ) {
	
	function ubik_mobile_bar_template() {

		if ( ubik_mobile_bar_display() ) {

			get_template_part( 'template-parts/mobile/mobile-bar' );

		}

  }
  
  add_action( 'ubik_mobile_bar', 'ubik_mobile_bar_template' );
	
}

/**
* Header template
*
* @since 1.0.0
*/

if ( ! function_exists( 'ubik_header_template' ) ) {

	function ubik_header_template() {

		if ( ubik_frontpage_header_display() ) {

      if ( 'no-header' == ubik_frontpage_header_format() ) {

				return;

			} else {

				get_template_part( 'template-parts/header/frontpage/frontpage-layout' );

			}

		} elseif ( ubik_header_display() ) {

			get_template_part( 'template-parts/header/layout' );

		}

	}

	add_action( 'ubik_header', 'ubik_header_template' );

}

/**
 * Top bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_template' ) ) {
	
	function ubik_top_bar_template() {

		// return if no specific front page top bar and no global top bar
		if ( ! ubik_frontpage_top_bar_display() && ! ubik_top_bar_display() ) {
			return;
		}

		if ( ubik_frontpage_top_bar_display() ) {

      if ( ubik_frontpage_no_top_bar_display() ) {

				return;

			} else {

				get_template_part( 'template-parts/top-bar/frontpage/frontpage-top-bar' );

			}

		} elseif ( ubik_top_bar_display() ) {

			get_template_part( 'template-parts/top-bar/top-bar' );
		
		}

  }
  
  add_action( 'ubik_top_bar', 'ubik_top_bar_template' );
	
}

/**
 * Classic vertical bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_template' ) ) {
	
	function ubik_classic_vertical_bar_template() {

		// return if no specific front page classic vertical bar and no global classic vertical bar
		if ( ! ubik_frontpage_classic_vertical_bar_display() && ! ubik_classic_vertical_bar_display() ) {
			return;
		}

		if ( ubik_frontpage_classic_vertical_bar_display() ) {

      if ( ubik_frontpage_no_vertical_bar_display() ) {

        return;

      } else {

        get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar' );

      }

		} elseif ( ubik_classic_vertical_bar_display() ) {

			get_template_part( 'template-parts/vertical-bar/classic/classic-vertical-bar' );
		
		}

  }
  
  add_action( 'ubik_classic_vertical_bar', 'ubik_classic_vertical_bar_template' );
	
}

/**
 * Sidebar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_template' ) ) {
	
	function ubik_sidebar_template() {

		// return if no specific front page sidebar and no global sidebar
		if ( ! ubik_frontpage_sidebar_display() && ! ubik_sidebar_display() ) {
			return;
		}

		if ( ubik_frontpage_sidebar_display() ) {

      if ( ubik_frontpage_no_sidebar_display() ) {

				return;

			} else {

				get_sidebar( 'frontpage' );

			}

		} elseif ( ubik_sidebar_display() ) {

			get_sidebar();
		
		}

  }
  
  add_action( 'ubik_sidebar', 'ubik_sidebar_template' );
	
}

/**
 * Footer template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_template' ) ) {
	
	function ubik_footer_template() {

		// return if no specific front page footer and no global footer
		if ( ! ubik_frontpage_footer_display() && ! ubik_footer_display() ) {
			return;
		}

		if ( ubik_frontpage_footer_display() ) {

      if ( ubik_frontpage_no_footer_display() ) {

				return;

			} else {

				get_template_part( 'template-parts/footer/frontpage/frontpage-layout' );

			}

		} elseif ( ubik_footer_display() ) {

			get_template_part( 'template-parts/footer/layout' );
		
		}

  }
  
  add_action( 'ubik_footer', 'ubik_footer_template' );
	
}


/**
 * Outputs general custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_general_css' ) ) {
  
  function ubik_general_css( $output ) {

		// Vars
		$blog_style	= ubik_blog_style();
		
		$css = '';

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* General CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_general_css' );

}


/**
 * Outputs header CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_header_css' ) ) {
  
  function ubik_header_css( $output ) {

    // Return output if no header
    if ( ! ubik_header_display() && ! ubik_frontpage_header_display() ) {
      return $output;
		}

		// Vars
		$header_format	= ubik_header_format();
		$specific_frontpage_header = ubik_frontpage_specific_header();
		$frontpage_header_format	= ubik_frontpage_header_format();
		
		$css = '';

		// Add header classes on the front page if specific front page header is enabled
		if ( ubik_frontpage_header_display() ) {
				
			// Add image-header classes
			if ( 'image' == $frontpage_header_format ) {

				// Front page image-header vars
				$frontpage_bg_img = get_header_image();
				$frontpage_bg_img_position = get_theme_mod( 'ubik_frontpage_image_header_bg_img_position', 'center center' );
				$frontpage_bg_img_attachment = get_theme_mod( 'ubik_frontpage_image_header_bg_img_attachment', 'scroll' );
				$frontpage_bg_img_repeat = get_theme_mod( 'ubik_frontpage_image_header_bg_img_repeat', 'no-repeat' );
				$frontpage_bg_img_size = get_theme_mod( 'ubik_frontpage_image_header_bg_img_size', 'cover' );

				// Front page image-header background image
				if ( ! empty( $frontpage_bg_img ) ) {

					$css .= '.frontpage-image-header{background-image: url( '. esc_url( $frontpage_bg_img ) .' );}';

					if ( ! empty( $frontpage_bg_img_position ) ) {
						$css .= '.frontpage-image-header{background-position:'. esc_attr( $frontpage_bg_img_position ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_attachment ) ) {
						$css .= '.frontpage-image-header{background-attachment:'. esc_attr( $frontpage_bg_img_attachment ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_repeat ) ) {
						$css .= '.frontpage-image-header{background-repeat:'. esc_attr( $frontpage_bg_img_repeat ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_size ) ) {
						$css .= '.frontpage-image-header{background-size:'. esc_attr( $frontpage_bg_img_size ) .';}';
					}

				}
				
			}

			// Add front page menu-bar classes
			if ( 'no-header' != $frontpage_header_format ) {

				// vars
				$frontpage_menubar_min_height	= get_theme_mod( 'ubik_frontpage_menubar_min_height', '50' );
				$frontpage_menubar_bg_color	= get_theme_mod( 'ubik_frontpage_menubar_bg_color', '#fefefe' );
				$frontpage_menubar_borders_color	= get_theme_mod( 'ubik_frontpage_menubar_borders_color', '#e9e9e9' );

				// Front page menu-bar min height
				if ( ! empty( $frontpage_menubar_min_height ) && '50' != $frontpage_menubar_min_height ) {
					$css .= '.frontpage-menu-bar-inner{min-height:'. esc_attr( $frontpage_menubar_min_height ) .'px;}';
				}

				// Front page menu-bar background color
				if ( ! empty( $frontpage_menubar_bg_color ) && ! ubik_frontpage_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) {
					$css .= '#header .frontpage-menu-bar{background-color:'. esc_attr( $frontpage_menubar_bg_color ) .';}';
				}

				// Front page menu-bar border top color
				if ( ! empty( $frontpage_menubar_borders_color ) && ! ubik_frontpage_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) {
					$css .= '#header .frontpage-menu-bar-inner{border-color:'. esc_attr( $frontpage_menubar_borders_color ) .';}';
				}

			}


		// Add header classes on all other pages
		} else {

			// Add image-header classes
			if ( 'image' == $header_format ) {

				// vars
				if ( ( is_singular( 'page' ) || ( is_home() && ! is_front_page() ) )
						 && has_post_thumbnail( get_queried_object_id() ) 
						 && true == get_theme_mod( 'ubik_image_header_page_featured_img_bg', false ) ) {

					$bg_img = get_the_post_thumbnail_url( get_queried_object_id() );

				} elseif ( is_singular( 'post' ) 
									 && has_post_thumbnail( get_queried_object_id() ) 
									 && true == get_theme_mod( 'ubik_image_header_single_featured_img_bg', false ) ) {

					$bg_img = get_the_post_thumbnail_url( get_queried_object_id() );

				} else {

					$bg_img = get_theme_mod( 'ubik_image_header_bg_img' );

				}
				$bg_img_position = get_theme_mod( 'ubik_image_header_bg_img_position', 'center center' );
				$bg_img_attachment = get_theme_mod( 'ubik_image_header_bg_img_attachment', 'scroll' );
				$bg_img_repeat = get_theme_mod( 'ubik_image_header_bg_img_repeat', 'no-repeat' );
				$bg_img_size = get_theme_mod( 'ubik_image_header_bg_img_size', 'cover' );

				// Image-header border width
				if ( ! empty( $image_header_border_width ) ) {
					$css .= '.image-header{border-bottom-width:'. esc_attr( $image_header_border_width ) .';}';
				}

				// Image-header background image
				if ( ! empty( $bg_img ) ) {

					$css .= '.image-header{background-image: url( '. esc_url( $bg_img ) .' );}';

					if ( ! empty( $bg_img_position ) ) {
						$css .= '.image-header{background-position:'. esc_attr( $bg_img_position ) .';}';
					}

					if ( ! empty( $bg_img_attachment ) ) {
						$css .= '.image-header{background-attachment:'. esc_attr( $bg_img_attachment ) .';}';
					}

					if ( ! empty( $bg_img_repeat ) ) {
						$css .= '.image-header{background-repeat:'. esc_attr( $bg_img_repeat ) .';}';
					}

					if ( ! empty( $bg_img_size ) ) {
						$css .= '.image-header{background-size:'. esc_attr( $bg_img_size ) .';}';
					}

				}
				
			}

			// Add menu-bar classes
			if ( 'no-header' != $header_format ) {

				// vars
				$menubar_min_height	= get_theme_mod( 'ubik_menubar_min_height', '50' );
				$menubar_bg_color	= get_theme_mod( 'ubik_menubar_bg_color', '#fefefe' );
				$menubar_borders_color	= get_theme_mod( 'ubik_menubar_borders_color', '#e9e9e9' );

				// Menu-bar min height
				if ( ! empty( $menubar_min_height ) && '50' != $menubar_min_height ) {
					$css .= '.menu-bar-inner{min-height:'. esc_attr( $menubar_min_height ) .'px;}';
				}

				// Menu-bar background color
				if ( ! empty( $menubar_bg_color ) && ! ubik_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_menubar_color_heading', '0') ) {
					$css .= '#header .menu-bar{background-color:'. esc_attr( $menubar_bg_color ) .';}';
				}

				// Menu-bar borders color
				if ( ! empty( $menubar_borders_color ) && ! ubik_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_menubar_color_heading', '0') ) {
					$css .= '#header .menu-bar-inner{border-color:'. esc_attr( $menubar_borders_color ) .';}';
				}

			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
      $output .= '/* Header CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_header_css' );

}

/**
 * Outputs top bar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_css' ) ) {
  
  function ubik_top_bar_css( $output ) {

		// Return output if no top bar
		if ( ! ubik_frontpage_top_bar_display() && ! ubik_top_bar_display() ) {
			return $output;
		}

		// Vars
		$top_bar_height = get_theme_mod( 'ubik_top_bar_height', '2' );
		$frontpage_top_bar_height = get_theme_mod( 'ubik_frontpage_top_bar_height', '2' );
		
    $css = '';

		// Specific front page top bar custom style
		if ( ubik_frontpage_top_bar_display() ) {

			// Front page top bar height
			if ( ! empty( $frontpage_top_bar_height ) && '2' != $frontpage_top_bar_height ) {
				$css .= '.frontpage-top-bar-inner{height:'. esc_attr( $frontpage_top_bar_height ) .'em;}';

				// Ajust frontpage classic vertical bar footer padding bottom
				$css .= '.has-classic-vertical-bar.has-frontpage-top-bar .classic-vertical-bar-footer, .has-classic-vertical-bar.has-frontpage-top-bar .frontpage-classic-vertical-bar-footer{padding-bottom:'. esc_attr( $frontpage_top_bar_height ) .'em;}';
			}

		// Top bar custom style
		} elseif ( ubik_top_bar_display() ) {
				
			// Top bar height
			if ( ! empty( $top_bar_height ) && '2' != $top_bar_height ) {
				$css .= '.top-bar-inner{height:'. esc_attr( $top_bar_height ) .'em;}';

				// Ajust classic vertical bar footer padding bottom
				$css .= '.has-classic-vertical-bar.has-top-bar .classic-vertical-bar-footer, .has-classic-vertical-bar.has-top-bar .frontpage-classic-vertical-bar-footer{padding-bottom:'. esc_attr( $top_bar_height ) .'em;}';
			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Top Bar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_top_bar_css' );

}

/**
 * Outputs classic vertical bar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_css' ) ) {
  
  function ubik_classic_vertical_bar_css( $output ) {

		// Return output if no classic vertical bar is activated
		if ( ! ubik_frontpage_classic_vertical_bar_display() && ! ubik_classic_vertical_bar_display() ) {
			return $output;
		}

    $css = '';

		// Front page classic vertical bar custom style
		if ( ubik_frontpage_classic_vertical_bar_display() ) {


		// Classic vertical bar custom style
		} elseif ( ubik_classic_vertical_bar_display() ) {



		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Classic Vertical Bar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_classic_vertical_bar_css' );

}

/**
 * Outputs sidebar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_css' ) ) {
  
  function ubik_sidebar_css( $output ) {

		// Return output if no top bar
		if ( ! ubik_frontpage_sidebar_display() && ! ubik_sidebar_display() ) {
			return $output;
		}

		// Vars
		$widgets_border = get_theme_mod( 'ubik_sidebar_widgets_border_heading', false );
		$frontpage_widgets_border = get_theme_mod( 'ubik_frontpage_sidebar_widgets_border_heading', false );
		
		$css = '';

		// Specific front page sidebar custom style
		if ( ubik_frontpage_sidebar_display() ) {

			if ( $frontpage_widgets_border ) {
				$css .= '#frontpage-sidebar .widget{border-style: solid;}';
			}

		// Sidebar custom style
		} elseif ( ubik_sidebar_display() ) {

			if ( $widgets_border ) {
				$css .= '#sidebar .widget{border-style: solid;}';
			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Sidebar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_sidebar_css' );

}

/**
 * Outputs footer custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_css' ) ) {
  
  function ubik_footer_css( $output ) {

		// Return output if no footer
		if ( ! ubik_frontpage_footer_display() && ! ubik_footer_display() ) {
			return $output;
		}    
		
		$css = '';

		if ( ubik_frontpage_footer_display() ) {

			// vars

			// Front page footer logo max height

		} elseif ( ubik_footer_display() ) {

			// vars
			
			// footer logo max height
      
    }

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Footer CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_footer_css' );

}

