<?php
/**
 * Front page top bar search replace template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$search_style = get_theme_mod( 'ubik_frontpage_top_bar_search_style', 'overlay' );
?>

<div id="frontpage-top-bar-search-replace-container" class="frontpage-top-bar-search-replace is-hidden" data-toggler=".is-hidden">

    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="frontpage-top-bar-search-replace__form">
      <input class="frontpage-top-bar-search-replace__form__input" type="search" name="s" autocomplete="off" value="" placeholder="<?php esc_attr_e( 'Type then hit enter to search...', 'ubik' ); ?>"/>
    </form>
    <span class="frontpage-top-bar-search-replace__close icon-close" aria-label="Close" data-toggle = "frontpage-top-bar-search-replace-container"></span>

</div>

