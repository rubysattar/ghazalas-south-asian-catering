<?php
/**
 * Image Header Style
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
} ?>

<?php
// If the menu is not deactivate
if ( ! ubik_image_header_menubar_deactivate() ) : ?>

  <div class="image-header__menu-bar-wrap <?php echo esc_attr( ubik_image_header_menubar_position_classes() ); ?>">

    <?php get_template_part( 'template-parts/header/menu-bar' ); ?>

  </div>

<?php endif; ?>

<div id="image-header-content-wrap" class="image-header__content-wrap">

  <?php get_template_part( 'template-parts/header/header-content' ); ?>

</div>
