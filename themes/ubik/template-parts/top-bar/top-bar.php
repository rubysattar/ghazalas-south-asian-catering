<?php
/**
 * Top bar template part
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} 

// Get top bar elements
$left_elements = ubik_top_bar_left_area_elements();
$right_elements = ubik_top_bar_right_area_elements();

// Search style
$search_style = get_theme_mod( 'ubik_top_bar_search_style', 'overlay' );
?>

<div id="topbar" class="top-bar <?php echo esc_attr( ubik_top_bar_classes() ); ?>" <?php echo esc_attr( ubik_top_bar_sticky_attr() ); ?>>

  <?php
  // Search top bar replace
  if ( 'replace' == $search_style ) {
    get_template_part( 'template-parts/top-bar/top-bar-search-replace' );
  } ?>

  <div class="<?php echo esc_attr( ubik_top_bar_container_classes() ); ?>">

    <div class="top-bar-inner grid-x align-middle">

      <div class="top-bar-inner__left cell shrink">

        <?php
        if ( $left_elements ) :

          // Loop through left area elements
          foreach ( $left_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-logo' );
            } ?>

            <?php
            // Navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-search' );
            } ?>

          <?php
          endforeach; 
          
        endif; ?>

      </div>

      <div class="top-bar-inner__right cell auto">

        <?php
        if ( $right_elements ) :

          // Loop through left area elements
          foreach ( $right_elements as $element ) : ?>

            <?php
            // Site-logo
            if ( 'site-logo' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-logo' );
            } ?>

            <?php
            // Navigation
            if ( 'nav' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-nav' );
            } ?>

            <?php
            // Text
            if ( 'text' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-text' );
            } ?>

            <?php
            // Search
            if ( 'search' == $element ) {
              get_template_part( 'template-parts/top-bar/top-bar-search' );
            } ?>        

          <?php
          endforeach; 
          
        endif; ?>

      </div>

    </div>

  </div>

</div>