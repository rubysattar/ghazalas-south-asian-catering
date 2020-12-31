var $j = jQuery.noConflict();
    $window = $j( window );

$j( document ).on( 'ready', function() {
	"use strict";
	// Scroll to top
	ubikScrollToTop();
} );

/**
 * Scroll to top
 */
function ubikScrollToTop() {
	"use strict"
	
	$window.on( 'scroll', function() {
		if ( $j( this ).scrollTop() > 100 ) {
			$j( '#scrollToTop' ).fadeIn();
		} else {
			$j( '#scrollToTop' ).fadeOut();
		}
	});

}