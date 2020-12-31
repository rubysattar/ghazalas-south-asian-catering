<?php
/**
 * Menu Bar
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// Get menu bar elements
$left_elements = ubik_menubar_left_area_elements();
$center_elements = ubik_menubar_center_area_elements();
$right_elements = ubik_menubar_right_area_elements();

// Search style
$search_style = get_theme_mod( 'ubik_menubar_search_style', 'overlay' );
?>

<div class="menu-bar <?php echo esc_attr( ubik_menu_bar_classes() ); ?>" <?php echo esc_attr( ubik_sticky_menubar_attr() ); ?>>

  <?php
  // Search menu-bar replace
  if ( 'replace' == $search_style ) {
    get_template_part( 'template-parts/header/menu-bar-search-replace' );
  } ?>

  <div class="menu-bar-inner grid-x <?php echo esc_attr( ubik_menu_bar_container_classes() ); ?>"> <!-- align-middle -->

    <div id="menu-bar-left" class="menu-bar-left cell <?php echo esc_attr( ubik_menu_bar_left_width_classes() ); ?>">
      <div id="menu-bar-left-inner" class="menu-bar-left-inner <?php echo esc_attr( ubik_menu_bar_left_inner_classes() ); ?>">

        <?php
        if ( $left_elements ) :

          // Loop through left area elements
          foreach ( $left_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-logo' );
            } ?>

            <?php
            // Navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-search' );
            } ?>

          <?php
          endforeach;

        endif; ?>

      </div>
    </div>

    <div id="menu-bar-center" class="menu-bar-center cell <?php echo esc_attr( ubik_menu_bar_center_width_classes() ); ?>">
      <div id="menu-bar-center-inner" class="menu-bar-center-inner <?php echo esc_attr( ubik_menu_bar_center_inner_classes() ); ?>">

        <?php
        if ( $center_elements ) :

          // Loop through center area elements
          foreach ( $center_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-logo' );
            } ?>

            <?php
            // Navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/header/menu-bar-search' );
            } ?>

          <?php
          endforeach;

        endif; ?>

      </div>
    </div>

    <div id="menu-bar-right" class="menu-bar-right cell <?php echo esc_attr( ubik_menu_bar_right_width_classes() ); ?>">
      <div id="menu-bar-right-inner" class="menu-bar-right-inner <?php echo esc_attr( ubik_menu_bar_right_inner_classes() ); ?>">

      <?php
      if ( $right_elements ) :

        // Loop through center area elements
        foreach ( $right_elements as $element ) : ?>

          <?php
          // Site-logo
          if ( 'site-logo' == $element ) {
            get_template_part( 'template-parts/header/menu-bar-logo' );
          } ?>

          <?php
          // Navigation
          if ( 'nav' == $element ) {
            get_template_part( 'template-parts/header/menu-bar-nav' );
          } ?>

          <?php
          // Text
          if ( 'text' == $element ) {
            get_template_part( 'template-parts/header/menu-bar-text' );
          } ?>

          <?php
          // Search
          if ( 'search' == $element ) {
            get_template_part( 'template-parts/header/menu-bar-search' );
          } ?>

        <?php
        endforeach; 
        
      endif; ?>

      </div>
    </div>

  </div><!-- .menu-bar-inner -->

</div><!-- .menu-bar -->