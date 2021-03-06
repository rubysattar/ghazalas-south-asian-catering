<?php
/**
 * Front page classic vertical bar template part
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get vertical bar elements
$elements = ubik_frontpage_classic_vertical_bar_elements();
$footer_elements = ubik_frontpage_classic_vertical_bar_footer_elements();
?>


<div id="frontpage-vertical-bar" class="frontpage-classic-vertical-bar cell shrink <?php echo esc_attr( ubik_frontpage_classic_vertical_bar_classes() ); ?>" data-sticky-container>

  <div class="frontpage-classic-vertical-bar-inner" <?php echo esc_attr( ubik_frontpage_classic_vertical_bar_inner_attr() ); ?>>

    <div class="frontpage-classic-vertical-bar-body">

      <?php
      if ( $elements ) :

        // Loop through elements
        foreach ($elements as $element) : ?>

          <?php
          // Site-logo
          if ( 'logo' == $element ) { ?>

            <div class="frontpage-classic-vertical-bar-logo <?php echo esc_attr( ubik_frontpage_classic_vertical_bar_logo_classes() ); ?>">

              <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

            </div>

          <?php
          } ?>

          <?php
          // Navigation
          if ( 'nav' == $element ) {

            get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar-nav' );

          } ?>

          <?php
          // Search
          if ( 'search' == $element ) {

            get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar-search' );

          } ?>

          <?php
          // Text
          if ( 'text' == $element ) {

            get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar-text' );

          } ?>
          
        <?php
        endforeach; 
        
      endif; ?>

    </div>

    <?php
    // Footer if fixed bar
    if ( "sticky" == get_theme_mod( 'ubik_frontpage_classic_vertical_bar_scroll_behavior', 'sticky') ) { ?>

    <div class="frontpage-classic-vertical-bar-footer">
      
      <?php
      if ( $footer_elements ) :

        // Loop through elements
        foreach ($footer_elements as $footer_element) : ?>

          <?php
          // Site-logo
          if ( 'logo' == $footer_element ) { ?>

            <div class="frontpage-classic-vertical-bar-logo <?php echo esc_attr( ubik_frontpage_classic_vertical_bar_logo_classes() ); ?>">

              <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

            </div>

          <?php
          } ?>

          <?php
          // Search
          if ( 'search' == $footer_element ) {

            get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar-search' );

          } ?>

          <?php
          // Text
          if ( 'text' == $footer_element ) {

            get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar-footer-text' );

          } ?>
          
        <?php
        endforeach; 
        
      endif; ?>

    </div>

    <?php
    } ?>

  </div>

</div>