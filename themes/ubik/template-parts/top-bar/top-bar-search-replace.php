<?php
/**
 * Top bar search replace template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$search_style = get_theme_mod( 'ubik_top_bar_search_style', 'overlay' );
?>

<div id="top-bar-search-replace-container" class="top-bar-search-replace is-hidden" data-toggler=".is-hidden">

  <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="top-bar-search-replace__form">
    <input class="top-bar-search-replace__form__input" type="search" name="s" autocomplete="off" value="" placeholder="<?php esc_attr_e( 'search...', 'ubik' ); ?>"/>
  </form>

  <span class="top-bar-search-replace__close icon-close" aria-label="Close" data-toggle="top-bar-search-replace-container"></span>

</div>

