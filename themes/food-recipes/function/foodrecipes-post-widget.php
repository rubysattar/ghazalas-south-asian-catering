<?php
/* 
 *	foodrecipe post widget	
 */
class foodrecipes_randompostwidget extends WP_Widget
{
	function __construct(){
		$foodrecipes_widget_ops = array(
									 'classname' => 'foodrecipes_randompostwidget',
									 'description' => __('Displays a random post with thumbnail','food-recipes'));
		parent::__construct('foodrecipes_randompostwidget', __('Random Post and Thumbnail','food-recipes'), $foodrecipes_widget_ops);
	}

	function form($foodrecipes_instance)
	{
	$foodrecipes_instance = wp_parse_args( (array) $foodrecipes_instance, array( 'title' => '' ) );
	$title = $foodrecipes_instance['title'];
	}

	function update($foodrecipes_new_instance, $foodrecipes_old_instance)
	{
	$foodrecipes_instance = $foodrecipes_old_instance;
	$foodrecipes_instance['title'] = $foodrecipes_new_instance['title'];
	return $foodrecipes_instance;
	}

	function widget($foodrecipes_args, $foodrecipes_instance)
	{
		extract($foodrecipes_args, EXTR_SKIP);

		echo esc_html($before_widget);
		$foodrecipes_title = empty($foodrecipes_instance['title']) ? ' ' : apply_filters('widget_title', $foodrecipes_instance['title']);

		if (!empty($foodrecipes_title))
		echo esc_html($before_title . $foodrecipes_title . $after_title);
		// WIDGET CODE GOES HERE	?>
		<div class="col-md-12  foodrecipes-side-menu-post">
		  <ul>
		    <?php
				  	$foodrecipes_args = array(
						'posts_per_page'   => 4,
						'orderby'          => 'rand',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'post_status'      => 'publish'
					);
					$foodrecipes_single_post = new WP_Query( $foodrecipes_args );
					
					while ( $foodrecipes_single_post->have_posts() ) {
						$foodrecipes_single_post->the_post();
				?>
		    <li>
		      <?php 
					$foodrecipes_feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
					if($foodrecipes_feat_image!="")
						echo'<a href="'.esc_url(get_the_permalink()).'" title="Post Page"> <img src="'.esc_url($foodrecipes_feat_image).'" /></a>';
					else			
						echo'<a href="'.esc_url(get_the_permalink()).'" title="Post Page"> <img src="'.esc_url(get_template_directory_uri()).'/images/no-image.jpg" /> </a>';
					?>
		      <h2><a href="<?php the_permalink();?>" title="Post Page">
		        <?php the_title(); ?>
		        </a></h2>
		      <span><?php echo get_the_date("j F, Y "); ?></span> </li>
		    <?php  } 
				  wp_reset_query();
				  ?>
		  </ul>
		</div>
	<?php
	echo esc_html($after_widget);
  }
}
function foodrecipes_register_custom_randompost_widget() {
    register_widget( 'foodrecipes_randompostwidget' );
}
add_action( 'widgets_init', 'foodrecipes_register_custom_randompost_widget' );