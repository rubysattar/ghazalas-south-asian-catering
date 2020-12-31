<?php 
/*
* search page template
*/
get_header(); ?>
<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-sm-6 ">
        <p class="foodrecipes-post-title"><?php esc_html_e('Search Results for','food-recipes'); echo " : " .  get_search_query(); ?></p>
      </div>
      <div class="col-md-6  col-sm-6 ">
        <ol class="archive-breadcrumb  pull-right">
          <?php if (function_exists('foodrecipes_custom_breadcrumbs')) foodrecipes_custom_breadcrumbs(); ?>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="foodrecipes-container-recipes container">
    <div class="row">
      <div class="col-md-8 main no-padding-left">
        <div class="foodrecipes-inner-blog-bg">
          <?php if (have_posts() ) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <article class="post">
            <div class="foodrecipes-inner-blog-text" >
              <h6><?php echo get_the_date("j F, Y"); ?></h6>
              <h1><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h1>
              <figure class="feature-thumbnail-large">
                <?php $foodrecipes_feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); 
                  if($foodrecipes_feat_image!="") { ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($foodrecipes_feat_image); ?>" class="img-responsive" alt="<?php echo get_the_title();?>" /></a>
                <?php } ?>
              </figure>
              <?php foodrecipes_entry_meta(); ?>
              <div class="clear-fix"></div>
              <?php the_tags(); ?>
              <div class="post-content">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
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
      <!-- side-menu -->
        <?php get_sidebar(); ?>
      <!-- side-menu --> 
    </div>
  </div>
</div>
<?php get_footer(); ?>