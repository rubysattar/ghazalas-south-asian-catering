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

// Header style
$header_format = ubik_header_format(); ?>

<header id="header" class="<?php echo esc_attr( ubik_header_classes() ); ?>" <?php ubik_schema_markup( 'header' ); ?>>
  
  <?php
  // If simple bar header
  if ( 'simple' == $header_format ) {

    get_template_part( 'template-parts/header/formats/simple-header' );

  // Default header style : image-header
  } else {

    get_template_part( 'template-parts/header/image-header' ); ?>

    <div class="image-header__overlay"></div>

  <?php
  } ?>

</header><!-- #header -->
