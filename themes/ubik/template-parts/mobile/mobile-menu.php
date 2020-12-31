<?php
/**
 * Full screen mobile menu style template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get mobile menu elements
$elements = ubik_mobile_menu_elements();
?>

<div id="mobile-menu-container" class="mobile-menu off-canvas <?php echo esc_attr( ubik_mobile_menu_classes() ); ?>" data-off-canvas <?php echo esc_attr( ubik_mobile_menu_attr() ); ?>>

  <div class="mobile-menu-inner">

    <?php
    // Loop through elements
    foreach ( $elements as $element ) : ?>

      <?php
      // Close button
      if ( 'close' == $element ) {
        get_template_part( 'template-parts/mobile/mobile-menu-close' );
      } ?>

      <?php
      // Navigation
      if ( 'nav' == $element ) {
        get_template_part( 'template-parts/mobile/mobile-menu-nav' );
      } ?>

      <?php
      // Search form
      if ( 'search' == $element ) {
        get_template_part( 'template-parts/mobile/mobile-menu-search' );
      } ?>

    <?php
    endforeach; ?>

  </div>

</div>
