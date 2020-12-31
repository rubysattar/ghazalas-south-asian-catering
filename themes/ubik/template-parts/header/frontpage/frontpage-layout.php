<?php
/**
 * Main Header Layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Front page header style
$frontpage_header_format = ubik_frontpage_header_format(); ?>

<header id="header" class="<?php echo esc_attr( ubik_frontpage_header_classes() ); ?>" <?php ubik_schema_markup( 'header' ); ?>>

  <?php
  // If simple bar header
  if ( 'simple' == $frontpage_header_format ) {

    get_template_part( 'template-parts/header/frontpage/formats/frontpage-simple-header' );

  // Default header style : image-header
  } else {

    get_template_part( 'template-parts/header/frontpage/frontpage-image-header' ); ?>

    <div class="frontpage-image-header__overlay"></div>

  <?php
  } ?>

</header><!-- #header -->
