<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Ubik WordPress theme
 */ ?>

 <aside id="sidebar" class="sidebar-area cell shrink <?php echo esc_attr( ubik_sidebar_area_classes() ); ?>">

 	<div class="sidebar-inner">

	 	<?php
		if ( $sidebar = ubik_get_sidebar() ) {
			dynamic_sidebar( $sidebar );
		} ?>

 	</div><!-- #sidebar-inner -->

 </aside><!-- #sidebar -->
