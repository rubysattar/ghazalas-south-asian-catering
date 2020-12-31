<?php
/**
 * Front Page Menu Bar
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// Get menu bar elements
$left_elements = ubik_frontpage_menubar_left_area_elements();
$center_elements = ubik_frontpage_menubar_center_area_elements();
$right_elements = ubik_frontpage_menubar_right_area_elements();

// Search style
$search_style = get_theme_mod( 'ubik_frontpage_menubar_search_style', 'overlay' );
?>

<div class="frontpage-menu-bar <?php echo esc_attr( ubik_frontpage_menu_bar_classes() ); ?>" <?php echo esc_attr( ubik_frontpage_sticky_menubar_attr() ); ?>>

  <?php
  // Search header replace
  if ( 'replace' == $search_style ) {
    get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-search-replace' );
  } ?>

  <div class="frontpage-menu-bar-inner grid-x <?php echo esc_attr( ubik_frontpage_menu_bar_container_classes() ); ?>">

    <div id="frontpage-menu-bar-left" class="frontpage-menu-bar-left cell <?php echo esc_attr( ubik_frontpage_menu_bar_left_width_classes() ); ?>">
      <div id="frontpage-menu-bar-left-inner" class="frontpage-menu-bar-left-inner <?php echo esc_attr( ubik_frontpage_menu_bar_left_inner_classes() ); ?>">

        <?php
        if ( $left_elements ) :

          // Loop through left area elements
          foreach ( $left_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-logo' );
            } ?>

            <?php
            // Site-title
            if ( 'title' == $element ) {
              get_template_part( 'template-parts/site/site-title' );
            } ?>

            <?php
            // Main navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-search' );
            } ?>

          <?php
          endforeach; 
          
        endif; ?>

      </div>
    </div>

    <div id="frontpage-menu-bar-center" class="frontpage-menu-bar-center cell <?php echo esc_attr( ubik_frontpage_menu_bar_center_width_classes() ); ?>">
      <div id="frontpage-menu-bar-center-inner" class="frontpage-menu-bar-center-inner <?php echo esc_attr( ubik_frontpage_menu_bar_center_inner_classes() ); ?>">

        <?php
        if ( $center_elements ) :

          // Loop through center area elements
          foreach ( $center_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-logo' );
            } ?>

            <?php
            // Main navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-search' );
            } ?>

          <?php
          endforeach; 
          
        endif; ?>

      </div>
    </div>

    <div id="frontpage-menu-bar-right" class="frontpage-menu-bar-right cell <?php echo esc_attr( ubik_frontpage_menu_bar_right_width_classes() ); ?>">
      <div id="frontpage-menu-bar-right-inner" class="frontpage-menu-bar-right-inner <?php echo esc_attr( ubik_frontpage_menu_bar_right_inner_classes() ); ?>">

      <?php
      if ( $right_elements ) :

        // Loop through center area elements
        foreach ( $right_elements as $element ) : ?>

          <?php
          // Site-logo
          if ( 'site-logo' == $element ) {
            get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-logo' );
          } ?>

          <?php
          // Site-title
          if ( 'title' == $element ) {
            get_template_part( 'template-parts/site/site-title' );
          } ?>

          <?php
          // Main navigation
          if ( 'nav' == $element ) {
            get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-nav' );
          } ?>

          <?php
          // Text
          if ( 'text' == $element ) {
            get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-text' );
          } ?>

          <?php
          // Search
          if ( 'search' == $element ) {
            get_template_part( 'template-parts/header/frontpage/frontpage-menu-bar-search' );
          } ?>

        <?php
        endforeach; 
        
      endif; ?>

      </div>
    </div>

  </div><!-- #frontpage-menu-bar-inner -->


</div><!-- .frontpage-menu-bar -->