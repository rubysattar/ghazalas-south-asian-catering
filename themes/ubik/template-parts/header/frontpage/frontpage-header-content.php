<?php
/**
 * Front page header content
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// Get front page header content elements
$elements = ubik_frontpage_header_content_elements(); ?>

<div class="frontpage-header-content <?php echo esc_attr( ubik_frontpage_header_content_classes() ); ?>">

  <?php
  // Loop through header content elements
  foreach ( $elements as $element ) :

    // Site-title
		if ( 'site-logo' == $element ) { ?>

      <div class="frontpage-header-content__site-logo <?php echo esc_attr( ubik_frontpage_header_content_site_logo_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

      </div>

    <?php }

    // Page-title
		if ( 'page-title' == $element ) { ?>

      <div class="frontpage-header-content__page-title <?php echo esc_attr( ubik_frontpage_header_content_page_title_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-page-title' ); ?>

      </div>

    <?php }

    // Tagline
		if ( 'tagline' == $element ) { ?>

      <div class="frontpage-header-content__tagline <?php echo esc_attr( ubik_frontpage_header_content_site_tagline_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-tagline' ); ?>

      </div>

    <?php }

    // Navigation
		if ( 'nav' == $element ) { ?>

      <div class="frontpage-header-content__nav <?php echo esc_attr( ubik_frontpage_header_content_nav_classes() ); ?>">

        <?php get_template_part( 'template-parts/header/header-content-nav' ); ?>

      </div>

    <?php }

    // Search Form
		if ( 'search-form' == $element ) { ?>
      
      <div class="frontpage-header-content__search-form <?php echo esc_attr( ubik_frontpage_header_content_search_form_classes() ); ?>">

        <?php get_search_form(); ?>

      </div>

    <?php }

    // Custom text
		if ( 'text' == $element ) { ?>
      
      <div class="frontpage-header-content__text <?php echo esc_attr( ubik_frontpage_header_content_text_classes() ); ?>">

        <?php get_template_part( 'template-parts/header/frontpage/frontpage-header-content-text' ); ?>

      </div>

    <?php }

  endforeach; ?>

</div>