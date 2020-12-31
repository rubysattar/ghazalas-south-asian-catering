/**
 * Js template
 *
 * @package ClubFood
 */

jQuery( document ).ready(function( $ ) {
	$( '.btn-sidebar' ).click(function(){
		$( '.sidebar-button' ).toggleClass( 'active' );
		$( '.sidebar' ).toggleClass( 'active' );
	});

	$( window ).bind( 'scroll load' , function() {
		var $nav  = $( '.navbar' );
		var $cart = $( '.woocommerce-cart-contents' );
		if (150 <= $( window ).scrollTop() ) {
			$nav.addClass( 'navbar-scroll' );
			$cart.addClass( 'woocommerce-cart-contents-scroll' );
		} else {
			$nav.removeClass( 'navbar-scroll' );
			$cart.removeClass( 'woocommerce-cart-contents-scroll' );
		}
	});
});
