<?php
/**
 * Custom wp_nav_menu walker.
 *
 * @package Ubik WordPress theme
 */

if ( ! class_exists( 'Ubik_Custom_Nav_Walker' ) ) {

	class Ubik_Custom_Nav_Walker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = Array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"menu\">\n";
    }

  }

}
