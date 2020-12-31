<?php
/**
 * Specific front page sidebar containing the main widget area.
 *
 * @package Ubik WordPress theme
 */ ?>

 <aside id="frontpage-sidebar" class="frontpage-sidebar-area cell shrink <?php echo esc_attr( ubik_frontpage_sidebar_area_classes() ); ?>">

 	<div class="frontpage-sidebar-inner">

    <?php
    // Front page sidebar
    dynamic_sidebar( 'frontpage_sidebar' ); ?>

 	</div><!-- #frontpage-sidebar-inner -->

 </aside><!-- #frontpage-sidebar -->
