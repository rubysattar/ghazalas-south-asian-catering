<?php
/**
 * Menu bar search template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$search_style = get_theme_mod( 'ubik_menubar_search_style', 'overlay' );
?>

<div class="menu-bar-search <?php echo esc_attr( ubik_menubar_search_classes() ); ?>">

  <?php if ( 'overlay' == $search_style || 'replace' == $search_style ) : ?>

    <div class="menu-bar-search-icon">

      <a href="#" class="menu-bar-search-toggle" <?php echo esc_attr( ubik_menubar_search_toggle_attr() ); ?>><i class="fas fa-search"></i></a>

    </div>

  <?php elseif ( 'form' == $search_style ) : ?>

    <div class="menu-bar-search-form">

      <?php get_search_form(); ?>

    </div>

  <?php endif ?>

</div>




