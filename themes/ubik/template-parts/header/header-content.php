<?php
/**
 * Header content
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
} 

// Get header content elements
$elements = ubik_header_content_elements(); 

// Breadcrumb args
$breadcrumb_args = array(
	'container'       => 'nav',
	'before'          => '',
	'after'           => '',
	'browse_tag'      => 'h2',
	'list_tag'        => 'ul',
	'item_tag'        => 'li',
	'show_on_front'   => false,
	'network'         => false,
	'show_title'      => true,
	'show_browse'     => false,
	'labels' => array(
		'browse'              => esc_html__( 'Browse:',                               'ubik' ),
		'aria_label'          => esc_attr_x( 'Breadcrumbs', 'breadcrumbs aria label', 'ubik' ),
		'home'                => esc_html__( 'Home',                                  'ubik' ),
		'error_404'           => esc_html__( '404 Not Found',                         'ubik' ),
		'archives'            => esc_html__( 'Archives',                              'ubik' ),
		// Translators: %s is the search query.
		'search'              => esc_html__( 'Search results for: %s',                'ubik' ),
		// Translators: %s is the page number.
		'paged'               => esc_html__( 'Page %s',                               'ubik' ),
		// Translators: %s is the page number.
		'paged_comments'      => esc_html__( 'Comment Page %s',                       'ubik' ),
		// Translators: Minute archive title. %s is the minute time format.
		'archive_minute'      => esc_html__( 'Minute %s',                             'ubik' ),
		// Translators: Weekly archive title. %s is the week date format.
		'archive_week'        => esc_html__( 'Week %s',                               'ubik' ),

		// "%s" is replaced with the translated date/time format.
		'archive_minute_hour' => '%s',
		'archive_hour'        => '%s',
		'archive_day'         => '%s',
		'archive_month'       => '%s',
		'archive_year'        => '%s',
	),
	'post_taxonomy' => array(
		// 'post'  => 'post_tag', // 'post' post type and 'post_tag' taxonomy
		// 'book'  => 'genre',    // 'book' post type and 'genre' taxonomy
	),
	'echo'            => true
);
?>

<div class="header-content <?php echo esc_attr( ubik_header_content_classes() ); ?>">


  <?php
  // Loop through header content elements
  foreach ( $elements as $element ) :

    // Site-logo
		if ( 'site-logo' == $element ) { ?>

      <div class="header-content__site-logo <?php echo esc_attr( ubik_header_content_site_logo_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

      </div>

    <?php }

    // Page-title
		if ( 'page-title' == $element ) { ?>

      <div class="header-content__page-title <?php echo esc_attr( ubik_header_content_page_title_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-page-title' ); ?>

      </div>

    <?php }

    //Tagline
		if ( 'tagline' == $element ) { ?>

      <div class="header-content__tagline <?php echo esc_attr( ubik_header_content_site_tagline_classes() ); ?>">

        <?php get_template_part( 'template-parts/site/site-tagline' ); ?>

      </div>

    <?php }

    //Breadcrumbs
		if ( 'breadcrumbs' == $element ) { ?>

      <div class="header-content__breadcrumbs <?php echo esc_attr( ubik_header_content_breadcrumbs_classes() ); ?>">

        <?php
        if ( function_exists( 'breadcrumb_trail' ) ) {
          breadcrumb_trail( $breadcrumb_args );
        } ?>

      </div>

    <?php }

    // Navigation
		if ( 'nav' == $element ) { ?>

      <div class="header-content__nav <?php echo esc_attr( ubik_header_content_nav_classes() ); ?>">

        <?php get_template_part( 'template-parts/header/header-content-nav' ); ?>

      </div>

    <?php }

    // Search Form
		if ( 'search-form' == $element ) { ?>
      
      <div class="header-content__search-form <?php echo esc_attr( ubik_header_content_search_form_classes() ); ?>">

        <?php get_search_form(); ?>

      </div>

    <?php }

    // Custom text
		if ( 'text' == $element ) { ?>
      
      <div class="header-content__text <?php echo esc_attr( ubik_header_content_text_classes() ); ?>">

        <?php get_template_part( 'template-parts/header/header-content-text' ); ?>

      </div>

    <?php }

  endforeach; ?>

</div>