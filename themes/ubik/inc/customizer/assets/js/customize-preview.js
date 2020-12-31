/**
 * Update Customizer settings live.
 *
 * @version 1.0.0
 */

( function( $ ) {

  // Declare vars
  var api = wp.customize,
      body = $( 'body' ),
      siteHeader = $( '#header' )

  /******** General *********/

  // Site title
  api('blogname', function( value ) {
    value.bind( function( newval ) {
      $( '.site-title' ).text( newval );
    });
  });

  // Site description
  api('blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '.site-tagline' ).text( newval );
    });
  });

  // Color scheme.
	wp.customize( 'ubik_colorscheme', function( value ) {
		value.bind( function( to ) {

			// Update color body class.
			$( 'body' )
				.removeClass( 'colors-light colors-custom colors-scheme' )
				.addClass( 'colors-' + to );
		});
  });

  
  /******** Header *********/

  // Menu-bar background color
  api( 'ubik_menubar_bg_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_bg_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_bg_color">#header .menu-bar{ background-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page menu-bar background color
  api( 'ubik_frontpage_menubar_bg_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_bg_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_bg_color">#header .frontpage-menu-bar{ background-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu-bar borders color
  api( 'ubik_menubar_borders_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_borders_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_borders_color">#header .menu-bar-inner{ border-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page menu-bar borders color
  api( 'ubik_frontpage_menubar_borders_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_borders_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_borders_color">#header .frontpage-menu-bar-inner{ border-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

} )( jQuery );