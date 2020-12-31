<?php 
/*
* single post template
*/
get_header(); ?>
<div class="page-title">
  <div class="foodrecipes-container-recipes container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12"> <span class="foodrecipes-page-breadcrumbs">
        <?php if (function_exists('foodrecipes_custom_breadcrumbs')) foodrecipes_custom_breadcrumbs(); ?>
        </span> </div>
    </div>
  </div>
</div>
<div class="main-container ">
  <div class="foodrecipes-container-recipes container">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-8 main no-padding-left">
          <div class="foodrecipes-inner-blog-bg">
            <article class="post">
              <div class="foodrecipes-inner-blog-text">
                <?php $foodrecipes_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>
                <!-- <div class="foodrecipes-inner-blog-text" > -->
                  <h6 class="blog-post-date"> <?php echo get_the_date("j F, Y"); ?></h6>
                  <h1 class="blog-title"><?php echo get_the_title(); ?></h1>
                  <?php if($foodrecipes_feature_img_url != "") { ?>
                  <div><img src="<?php echo esc_url($foodrecipes_feature_img_url); ?>"></div>
                  <?php } ?>
                  <?php foodrecipes_entry_meta(); ?>
                  <?php the_tags(); ?>
                  <p>
                    <?php the_content();
                        wp_link_pages( array(
                          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'food-recipes' ) . '</span>',
                          'after'       => '</div>',
                          'link_before' => '<span>',
                          'link_after'  => '</span>',
                        ) ); ?>
                  </p>
               <!--  </div> -->
                <?php if ( get_comments_number() > 0 ) : ?>
                <div class="foodrecipes-inner-blog-text" >
                  <h6 class="comment-title">
                    <?php /* translators: 1: comment count number */ 
                    comments_number( esc_html__('NO COMMENT','food-recipes'), esc_html__('1 COMMENT','food-recipes'),esc_html__('%s COMMENTS','food-recipes')  ); ?>
                  </h6>
                </div>
                <?php endif; ?>
                <div class="foodrecipes-comment-form">
                  <?php comments_template( '', true ); ?>
                </div>
              </div>
            </article>
          </div>
          <div class="clearfix"></div>
          <nav class="col-md-12 foodrecipes-box-paging clearfix foodrecipes-main-pagination foodrecipes-single-pagination"> <span class="foodrecipes-nav-previous">
            <?php previous_post_link(); ?>
            </span> <span class="foodrecipes-nav-next">
            <?php next_post_link(); ?>
            </span> </nav>
        </div>
        <?php endwhile; ?>
        <!-- side-menu -->
        <?php get_sidebar(); ?>
        <!-- side-menu --> 
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
