<?php
/**
 * Front page footer template part
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get front page footer elements
$elements = ubik_frontpage_footer_elements();
?>

<footer id="footer" class="frontpage-footer">

  <div class="frontpage-footer-inner grid-container <?php echo esc_attr( ubik_frontpage_footer_inner_classes() ); ?>">

    <?php
    // Loop through left area elements
    foreach ( $elements as $element ) : ?>

      <?php
      // Text
      if ( 'text' == $element ) {
        get_template_part( 'template-parts/footer/frontpage/frontpage-footer-text' ); 
      } ?>

      <?php
      // Logo
      if ( 'logo' == $element ) {
        get_template_part( 'template-parts/footer/frontpage/frontpage-footer-logo' );
      } ?>

      <?php
      // Navigation
      if ( 'nav' == $element ) {
        get_template_part( 'template-parts/footer/frontpage/frontpage-footer-nav' );
      } ?>

    <?php
    endforeach; ?>

  </div>

</footer>