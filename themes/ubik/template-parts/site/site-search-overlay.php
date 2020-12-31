<?php
/**
 * Search overlay
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div id="search-overlay-container" class="search-overlay reveal" data-reveal data-animation-in="fade-in fast" data-animation-out="fade-out fast">

  <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form-overlay">

    <input class="search-overlay-input" type="search" name="s" autocomplete="off" placeholder="<?php esc_attr_e( 'Search', 'ubik' ); ?>">

  </form>

</div>
