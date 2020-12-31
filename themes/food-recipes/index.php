<?php
/**
 * The main template file
 */
get_header(); ?>
<div class="container foodrecipes-container-recipes foodrecipes-main-template">
  <div class="col-md-12 foodrecipes-bg">
    <div class="col-md-8">
      <div class="masonry-container masonry">
        <?php     
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
  else { $paged = 1; }
              $foodrecipes_args = array(
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
					          'paged'			  => $paged
                );
            $foodrecipes_posts = new WP_Query( $foodrecipes_args );
           	
            while ( $foodrecipes_posts->have_posts() ) {
            $foodrecipes_posts->the_post();
            
            $foodrecipes_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>
        <div class="col-md-6 box masonry-brick foodrecipes-post-box-margin no-padding">
          <div class="article">
           <div class="foodrecipes-post-box">
            <div class="foodrecipes-post-box-img">
              <?php if($foodrecipes_feature_img_url == "") { ?>
              <img src="<?php echo esc_url(get_template_directory_uri().'/images/no-image.jpg'); ?>" class="img-responsive">
              <?php } else { ?>
              <img src="<?php echo esc_url($foodrecipes_feature_img_url); ?>">
              <?php } ?>
              <a href="<?php the_permalink(); ?>">
                <div class="foodrecipes-post-box-hover">
                  <div class="foodrecipes-post-box-hover-center">
                    <div class="foodrecipes-post-box-hover-center1"><i class="foodrecipes-zoom-icon"></i></div>
                  </div>
                </div>
              </a>
            </div>
            <div class="clearfix"></div>
            <div class="foodrecipes-box-name">
              <h6><?php echo get_the_date("j F, Y"); ?></h6>
              <div class="foodrecipes-title"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a> </div>
              <div class="foodrecipes-hr"><?php esc_html_e('Post By:','food-recipes') ?>  <span class="foodrecipes-postby-color"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))); ?>"> <?php echo get_the_author(); ?></a></span><?php if ( get_comments_number() > 0 ) : ?> <?php esc_html_e('Comments:','food-recipes') ?> <span class="foodrecipes-postby-color"><?php echo esc_html(get_comments_number()); ?></span><?php endif; ?> </div>
            </div>
          </div>
          </div>
        </div>
        <?php } ?>
      </div>
      
      <!-- next,prev,pages  -->
      <div class="clearfix"></div>
        
        <!--Pagination Start-->        
        <?php if(get_option('posts_per_page ') < $wp_query->found_posts) { ?>
        <nav class="col-md-12 foodrecipes-box-paging clearfix foodrecipes-main-pagination foodrecipes-nav"> 
        <span class="foodrecipes-nav-previous">
          <?php previous_posts_link(); ?>
          </span> 
          <span class="foodrecipes-nav-next">
          <?php next_posts_link(); ?>
          </span> </nav>
        <?php } ?>        
        <!--Pagination End-->
    </div>
      <?php get_sidebar() ?>
  </div>
</div>
<?php get_footer(); ?>
