<?php
/**
 * Footer template part
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get footer elements
$elements = ubik_footer_elements();
?>

<footer id="footer" class="site-footer">

  <div class="site-footer-inner grid-container <?php echo esc_attr( ubik_footer_inner_classes() ); ?>">

    <?php
    // Loop through left area elements
    foreach ( $elements as $element ) : ?>

      <?php
      // Text
      if ( 'text' == $element ) {
        get_template_part( 'template-parts/footer/footer-text' ); 
      } ?>

      <?php
      // Logo
      if ( 'logo' == $element ) {
        get_template_part( 'template-parts/footer/footer-logo' );
      } ?>

      <?php
      // Navigation
      if ( 'nav' == $element ) {
        get_template_part( 'template-parts/footer/footer-nav' );
      } ?>

    <?php
    endforeach; ?>

  </div>

</footer>