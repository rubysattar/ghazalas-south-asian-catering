<?php
/**
 * Front page image Header Style
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
} ?>

<?php
// If header video
if ( function_exists( 'has_header_video' ) && has_header_video() ) : ?>

  <div class="custom-header-media">

    <?php the_custom_header_markup(); ?>
    
  </div>

<?php endif; ?>

<?php
// If the menu is not deactivate
if ( ! ubik_frontpage_image_header_menubar_deactivate() ) : ?>

  <div class="frontpage-image-header__menu-bar-wrap <?php echo esc_attr( ubik_frontpage_image_header_menubar_position_classes() ); ?>">

    <?php get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar' ); ?>

  </div>

<?php endif; ?>

<div id="frontpage-image-header-content-wrap" class="frontpage-image-header__content-wrap">

  <?php get_template_part( 'template-parts/header/frontpage/frontpage-header-content' ); ?>

</div>
