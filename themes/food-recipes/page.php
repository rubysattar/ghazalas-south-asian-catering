<?php 
/*
* page template
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
      <div class="col-md-8 main no-padding-left">
        <div class="foodrecipes-inner-blog-bg">
          <article class="post ">
            <div class="foodrecipes-inner-blog-text" >
              <h1 class="blog-title"><?php echo get_the_title(); ?></h1>
              <p class="blog-text">
                <?php the_content(); ?>
              </p>
              <div class="blog-hr"></div>
            </div>
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
          </article>
        </div>
      </div>
      <?php endwhile; ?>
      <!-- right sidebar --> 
      <!-- side-menu -->
        <?php get_sidebar() ?>
      <!-- side-menu -->
    </div>
  </div>
</div>
<?php get_footer(); ?>
