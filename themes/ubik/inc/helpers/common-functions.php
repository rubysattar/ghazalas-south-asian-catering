<?php
/**
 * This file includes helper functions used throughout the theme.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*

	# General
		 - ubik_body_classes()
		 - ubik_outer_wrap_classes()
		 - ubik_wrap_classes()
		 - ubik_post_id()
	   - ubik_get_sidebar()
		 - ubik_get_attachment_data_from_url()
		 - ubik_excerpt()
		 - ubik_page_title()
		 - ubik_time()
	# Other
		- ubik_minify_css()
		- ubik_minify_js()
		- ubik_get_schema_markup()
		- ubik_schema_markup()
		- ubik_spacing_css()

/*-------------------------------------------------------------------------------*/
/* [ General ]
/*-------------------------------------------------------------------------------*/

/**
 * Adds classes to the body
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_body_classes' ) ) {
	
	function ubik_body_classes( $classes ) {

		// Theme class
		$classes[] = 'ubik-theme';

		// RTL
		if ( is_rtl() ) {
			$classes[] = 'rtl';
		}

		// Get the colorscheme.
		$colors = get_theme_mod( 'ubik_colorscheme', 'light' );
		$classes[] = 'colors-' . $colors;

		// A top bar is activated
		if ( ubik_frontpage_top_bar_display() ) {
			$classes[] = 'has-frontpage-top-bar';
		} elseif ( ubik_top_bar_display() ) {
			$classes[] = 'has-top-bar';
		}

		// A classic vertical bar is activated
		if ( ubik_frontpage_classic_vertical_bar_display() || ubik_classic_vertical_bar_display() ) {
			$classes[] = 'has-classic-vertical-bar';
		}

		// A sidebar is activated
		if ( ubik_frontpage_sidebar_display() ) {
			$classes[] = 'has-sidebar';
			if ( 'left' == get_theme_mod( 'ubik_frontpage_sidebar_position', 'right' ) ) {
				$classes[] = 'left-sidebar';
			}
		} elseif ( ubik_sidebar_display() ) {
			$classes[] = 'has-sidebar';
			if ( 'left' == get_theme_mod( 'ubik_sidebar_position', 'right' ) ) {
				$classes[] = 'left-sidebar';
			}
		}
		
		// Return classes
		return $classes;

	}

	add_filter( 'body_class', 'ubik_body_classes' );

}

/**
 * Add classes to outer-wrap
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_outer_wrap_classes' ) ) {
	
	function ubik_outer_wrap_classes() {

		// Setup classes array
		$classes = array();

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_outer_wrap_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Add classes to wrap
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_wrap_classes' ) ) {
	
	function ubik_wrap_classes() {

		// Setup classes array
		$classes = array();

		// Set keys equal to vals
		$classes = array_combine( $classes, $classes );

		// Apply filters for child theming
		$classes = apply_filters( 'ubik_wrap_classes_filter', $classes );

		// Turn classes into space seperated string
		$classes = implode( ' ', $classes );

		// return classes
		return $classes;

	}

}

/**
 * Store current post ID
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_post_id' ) ) {
	
	function ubik_post_id() {

		// Default value
		$id = '';

		// If singular get_the_ID
		if ( is_singular() ) {
			$id = get_the_ID();
		}

		// Posts page
		elseif ( is_home() && $page_for_posts = get_option( 'page_for_posts' ) ) {
			$id = $page_for_posts;
		}

		// Apply filters
		$id = apply_filters( 'ubik_post_id_filter', $id );

		// Sanitize
		$id = $id ? $id : '';

		// Return ID
		return $id;

	}

}

/**
 * Returns the correct sidebar ID
 *
 * @since  1.0.0
 */
if ( ! function_exists( 'ubik_get_sidebar' ) ) {

	function ubik_get_sidebar( $sidebar = 'sidebar' ) {

		// Search
		if ( is_search() ) {
			$sidebar = 'search_sidebar';
		}

		// Add filter for tweaking the sidebar display
		$sidebar = apply_filters( 'ubik_get_sidebar', $sidebar );

		// Never show empty sidebar
		if ( ! is_active_sidebar( $sidebar ) ) {
			$sidebar = 'sidebar';
		}

		// Return the correct sidebar
		return $sidebar;

	}

}

/**
 * Gets the most important attachment data from the url
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_get_attachment_data_from_url' ) ) {

	function ubik_get_attachment_data_from_url( $attachment_url = '' ) {

		if ( '' == $attachment_url ) {
			return false;
		}

		$attachment_data['url'] = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
		$attachment_data['id'] = ubik_get_attachment_id_from_url( $attachment_data['url'] );

		if ( ! $attachment_data['id'] ) {
			return false;
		}

		preg_match( '/\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', $attachment_url, $matches );
		if ( count( $matches ) > 0 ) {
			$dimensions 				= explode( 'x', $matches[0] );
			$attachment_data['width'] 	= $dimensions[0];
			$attachment_data['height'] 	= $dimensions[1];
		} else {
			$attachment_src 			= wp_get_attachment_image_src( $attachment_data['id'], 'full' );
			$attachment_data['width'] 	= $attachment_src[1];
			$attachment_data['height'] 	= $attachment_src[2];
		}

		$attachment_data['alt'] 	= get_post_field( '_wp_attachment_image_alt', $attachment_data['id'] );
		$attachment_data['caption'] = get_post_field( 'post_excerpt', $attachment_data['id'] );
		$attachment_data['title'] 	= get_post_field( 'post_title', $attachment_data['id'] );

		return $attachment_data;
	}

}

	/**
	 * Custom excerpts based on wp_trim_words
	 *
	 * @since	1.0.0
	 * @link	http://codex.wordpress.org/Function_Reference/wp_trim_words
	 */
	if ( ! function_exists( 'ubik_excerpt' ) ) {
		
		function ubik_excerpt( $length = 30 ) {
	
			// Get global post
			global $post;
	
			// Get post data
			$id			= $post->ID;
			$excerpt	= $post->post_excerpt;
			$content 	= $post->post_content;
	
			// Display custom excerpt
			if ( $excerpt ) {
				$output = $excerpt;
			}
	
			// Check for more tag
			elseif ( strpos( $content, '<!--more-->' ) ) {
				$output = get_the_content( $excerpt );
			}
	
			// Generate auto excerpt
			else {
				$output = wp_trim_words( strip_shortcodes( get_the_content( $id ) ), $length );
			}
	
			// Echo output
			echo wp_kses_post( $output );
	
		}
	
	}

/**
 * Return the page title
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_page_title' ) ) {
  
  function ubik_page_title() {

    // Default title is null
    $title = NULL;
    
    // Get post ID
    $post_id = ubik_post_id();
    
    // Homepage - display blog description if not a static page
    if ( is_front_page() && is_home() ) {
      
			
			if ( get_bloginfo( 'name' ) ) {
        $title = get_bloginfo( 'name' );
      } elseif ( get_bloginfo( 'description' ) ) {
        $title = get_bloginfo( 'description' );
      } else {
        return esc_html__( 'Recent Posts', 'ubik' );
      }

    // Posts page
    } elseif ( is_home() && ! is_front_page() ) {

      $title = get_the_title( get_option( 'page_for_posts', true ) );

    }

    // Search needs to go before archives
    elseif ( is_search() ) {
      global $wp_query;
      $title = '<span id="search-results-count">'. $wp_query->found_posts .'</span> '. esc_html__( 'Search Results Found', 'ubik' );
    }
      
    // Archives
    elseif ( is_archive() ) {

      // Author
      if ( is_author() ) {
        $title = get_the_archive_title();
      }

      // Post Type archive title
      elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
      }

      // Daily archive title
      elseif ( is_day() ) {
        $title = sprintf( esc_html__( 'Daily Archives: %s', 'ubik' ), get_the_date() );
      }

      // Monthly archive title
      elseif ( is_month() ) {
        $title = sprintf( esc_html__( 'Monthly Archives: %s', 'ubik' ), get_the_date( esc_html_x( 'F Y', 'Page title monthly archives date format', 'ubik' ) ) );
      }

      // Yearly archive title
      elseif ( is_year() ) {
        $title = sprintf( esc_html__( 'Yearly Archives: %s', 'ubik' ), get_the_date( esc_html_x( 'Y', 'Page title yearly archives date format', 'ubik' ) ) );
      }

      // Categories/Tags/Other
      else {

        // Get term title
        $title = single_term_title( '', false );

        // Fix for plugins that are archives but use pages
        if ( ! $title ) {
          global $post;
          $title = get_the_title( $post_id );
        }

      }

    } // End is archive check

    // 404 Page
    elseif ( is_404() ) {

      $title = esc_html__( '404: Page Not Found', 'ubik' );

    }
    
    // Anything else with a post_id defined
    elseif ( $post_id ) {

      // Single Pages
      if ( is_singular( 'page' ) || is_singular( 'attachment' ) ) {
        $title = get_the_title( $post_id );
      }

      // Single blog posts
      elseif ( is_singular( 'post' ) ) {

        $title = get_the_title();

      }

      // Other posts
      else {

        $title = get_the_title( $post_id );
        
      }

    }

    // Last check if title is empty
    $title = $title ? $title : get_the_title();

    // Apply filters and return title
    return apply_filters( 'ubik_page_title_filter', $title );
    
  }

}

/**
 * String for the published date
 *
 * @since	1.0.0
 */

if ( ! function_exists( 'ubik_time' ) ) {
	
	function ubik_time() {

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
	
		$time_string = sprintf( $time_string,
			get_the_date( DATE_W3C ),
			get_the_date(),
			get_the_modified_date( DATE_W3C ),
			get_the_modified_date()
		);
	
		return sprintf(
			__( '<span class="screen-reader-text">Posted on</span> %s', 'ubik' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

	}

}


/*-------------------------------------------------------------------------------*/
/* [ Other ]
/*-------------------------------------------------------------------------------*/

/**
 * Minify CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_minify_css' ) ) {

	function ubik_minify_css( $css = '' ) {

		// Return if no CSS
		if ( ! $css ) return;

		// Normalize whitespace
		$css = preg_replace( '/\s+/', ' ', $css );

		// Remove ; before }
		$css = preg_replace( '/;(?=\s*})/', '', $css );

		// Remove space after , : ; { } */ >
		$css = preg_replace( '/(,|:|;|\{|}|\*\/|>) /', '$1', $css );

		// Remove space before , ; { }
		$css = preg_replace( '/ (,|;|\{|})/', '$1', $css );

		// Strips leading 0 on decimal values (converts 0.5px into .5px)
		$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );

		// Strips units if value is 0 (converts 0px to 0)
		$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );

		// Trim
		$css = trim( $css );

		// Return minified CSS
		return $css;

	}

}

/**
 * Minify JS
 *
 * @since 1.1.0
 */
if ( ! function_exists( 'ubik_minify_js' ) ) {

	function ubik_minify_js( $js = '' ) {

		// Return if no JS
		if ( ! $js ) return;

		if ( UBIK_EXTRA_ACTIVE
			&& class_exists( 'UBIK_Extra_JSMin' ) ) {

			$script = UBIK_Extra_JSMin::minify( $js );

		} else {

			$replace = array(
				'#\'([^\n\']*?)/\*([^\n\']*)\'#' 	=> "'\1/'+\'\'+'*\2'", 	// remove comments from ' strings
				'#\"([^\n\"]*?)/\*([^\n\"]*)\"#' 	=> '"\1/"+\'\'+"*\2"', 	// remove comments from " strings
				'#/\*.*?\*/#s'            			=> "",      			// strip C style comments
				'#[\r\n]+#'               			=> "\n",    			// remove blank lines and \r's
				'#\n([ \t]*//.*?\n)*#s'   			=> "\n",    			// strip line comments (whole line only)
				'#([^\\])//([^\'"\n]*)\n#s' 		=> "\\1\n", 			// strip line comments
				'#\n\s+#'                 			=> "\n",    			// strip excess whitespace
				'#\s+\n#'                 			=> "\n",    			// strip excess whitespace
				'#(//[^\n]*\n)#s'         			=> "\\1\n", 			// extra line feed after any comments left
				'#/([\'"])\+\'\'\+([\'"])\*#' 		=> "/*" 				// restore comments in strings
			);

			$search = array_keys( $replace );
			$script = preg_replace( $search, $replace, $js );

			$replace = array(
				"&&\n" => "&&",
				"||\n" => "||",
				"(\n"  => "(",
				")\n"  => ")",
				"[\n"  => "[",
				"]\n"  => "]",
				"+\n"  => "+",
				",\n"  => ",",
				"?\n"  => "?",
				":\n"  => ":",
				";\n"  => ";",
				"{\n"  => "{",
				"\n]"  => "]",
				"\n)"  => ")",
				"\n}"  => "}",
				"\n\n" => "\n"
			);

			$search = array_keys( $replace );
			$script = str_replace( $search, $replace, $script );

		}

		// Return minified JS
		return trim( $script );

	}

}

/**
 * Return correct schema markup
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_get_schema_markup' ) ) {

	function ubik_get_schema_markup( $location ) {

		// Return if disable
		if ( ! get_theme_mod( 'ubik_schema_markup', true ) ) {
			return null;
		}

		// Default
		$schema = $itemprop = $itemtype = '';

		// HTML
		if ( 'html' == $location ) {
			if ( is_singular() ) {
				$schema = 'itemscope itemtype="http://schema.org/WebPage"';
			} else {
				$schema = 'itemscope itemtype="http://schema.org/Article"';
			}
		}

		// Header
		elseif ( 'header' == $location ) {
			$schema = 'itemscope="itemscope" itemtype="http://schema.org/WPHeader"';
		}

		// Logo
		elseif ( 'logo' == $location ) {
			$schema = 'itemscope itemtype="http://schema.org/Brand"';
		}

		// Navigation
		elseif ( 'site_navigation' == $location ) {
			$schema = 'itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"';
		}

		// Main
		elseif ( 'main' == $location ) {
			$itemtype = 'http://schema.org/WebPageElement';
			$itemprop = 'mainContentOfPage';
			if ( is_singular( 'post' ) ) {
				$itemprop = '';
				$itemtype = 'http://schema.org/Blog';
			}
		}

		// Breadcrumb
		elseif ( 'breadcrumb' == $location ) {
			$schema = 'itemscope itemtype="http://schema.org/BreadcrumbList"';
		}

		// Breadcrumb list
		elseif ( 'breadcrumb_list' == $location ) {
			$schema = 'itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
		}

		// Breadcrumb itemprop
		elseif ( 'breadcrumb_itemprop' == $location ) {
			$schema = 'itemprop="breadcrumb"';
		}

		// Sidebar
		elseif ( 'sidebar' == $location ) {
			$schema = 'itemscope="itemscope" itemtype="http://schema.org/WPSideBar"';
		}

		// Footer widgets
		elseif ( 'footer' == $location ) {
			$schema = 'itemscope="itemscope" itemtype="http://schema.org/WPFooter"';
		}

		// Headings
		elseif ( 'headline' == $location ) {
			$schema = 'itemprop="headline"';
		}

		// Posts
		elseif ( 'entry_content' == $location ) {
			$schema = 'itemprop="text"';
		}

		// Publish date
		elseif ( 'publish_date' == $location ) {
			$schema = 'itemprop="datePublished" pubdate';
		}

		// Author name
		elseif ( 'author_name' == $location ) {
			$schema = 'itemprop="name"';
		}

		// Author link
		elseif ( 'author_link' == $location ) {
			$schema = 'itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"';
		}

		// Url
		elseif ( 'url' == $location ) {
			$schema = 'itemprop="url"';
		}

		// Position
		elseif ( 'position' == $location ) {
			$schema = 'itemprop="position"';
		}

		// Image
		elseif ( 'image' == $location ) {
			$schema = 'itemprop="image"';
		}

		return ' ' . apply_filters( 'ubik_schema_markup', $schema );

	}

}

/**
 * Outputs correct schema markup
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_schema_markup' ) ) {

	function ubik_schema_markup( $location ) {

		echo ubik_get_schema_markup( $location );

	}

}

/**
 * Return spacing values for customizer
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_spacing_css' ) ) {

	function ubik_spacing_css( $top, $right, $bottom, $left ) {

		// Add px and 0 if no value
		$s_top 		= ( isset( $top ) && '' !== $top ) ? absint( $top ) . 'px ' : '0px ';
		$s_right	= ( isset( $right ) && '' !== $right ) ? absint( $right ) . 'px ' : '0px ';
		$s_bottom 	= ( isset( $bottom ) && '' !== $bottom ) ? absint( $bottom ) . 'px ' : '0px ';
		$s_left 	= ( isset( $left ) && '' !== $left ) ? absint( $left ) . 'px' : '0px';
		
		// Return one value if it is the same on every inputs
		if ( ( absint( $s_top ) === absint( $s_right ) )
			&& ( absint( $s_right ) === absint( $s_bottom ) )
			&& ( absint( $s_bottom ) === absint( $s_left ) ) ) {
			return $s_left;
		}
		
		// Return
		return $s_top . $s_right . $s_bottom . $s_left;
	}

}
