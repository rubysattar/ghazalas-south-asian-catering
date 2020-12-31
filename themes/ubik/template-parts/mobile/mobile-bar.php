<?php
/**
 * Mobile Bar
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

// Menu toggle position
$toggle_position = get_theme_mod( 'ubik_mobile_bar_toggle_position', 'right' );

// Display logo
$logo_display = get_theme_mod( 'ubik_mobile_bar_logo_display', true );

// Display search
$search_display = get_theme_mod( 'ubik_mobile_bar_search_display', true );
?>

<div class="mobile-bar hide-for-medium" <?php echo esc_attr( ubik_mobile_bar_attr() ); ?>>

  <?php
  // Search menu-bar replace
  get_template_part( 'template-parts/mobile/mobile-bar-search-replace' );
  ?>

  <div class="grid-container">

    <div class="mobile-bar-inner">

      <div class="mobile-bar-left">

        <?php
        // Logo or menu toggle icon
        if ( 'left' == $toggle_position ) {
          get_template_part( 'template-parts/mobile/mobile-bar-toggle' );
        } else {

          if ( $logo_display ) {
            get_template_part( 'template-parts/site/site-logo-title' );
          }

        }
        ?>

      </div><!-- .mobile-bar-left -->

      <div class="mobile-bar-right">

        <?php
        // display search icon
        if ( $search_display ) {
          get_template_part( 'template-parts/mobile/mobile-bar-search-icon' );
        } ?>

        <?php
        // Logo or menu toggle icon
        if ( 'left' == $toggle_position ) {

          if ( $logo_display ) {
            get_template_part( 'template-parts/site/site-logo-title' );
          }

        } else {
          get_template_part( 'template-parts/mobile/mobile-bar-toggle' );
        }
        ?>

      </div><!-- .mobile-bar-right -->

    </div><!-- .mobile-bar-inner -->

  </div><!-- .grid-container -->
  
</div><!-- .mobile-bar -->