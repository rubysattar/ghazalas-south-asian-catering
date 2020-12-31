<?php
/**
 * Mobile bar search replace template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div id="mobile-bar-search-replace-container" class="mobile-bar-search-replace is-hidden" data-toggler=".is-hidden">

    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-bar-search-replace__form">
      <input class="mobile-bar-search-replace__form__input" type="search" name="s" autocomplete="off" value="" placeholder="<?php esc_attr_e( 'Search...', 'ubik' ); ?>"/>
    </form>
    <span class="mobile-bar-search-replace__close icon-close" aria-label="Close" data-toggle = "mobile-bar-search-replace-container"></span>

</div>
