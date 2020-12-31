<?php $foodrecipes_options = get_option( 'foodrecipes_theme_options' ); ?>

<!-- footer -->

<footer>
  <div class="col-md-12 footer">
    <h2>
      <?php  if(get_theme_mod('footerCopyright',isset($foodrecipes_options['footertext'])?$foodrecipes_options['footertext']:'')!='') 
          { 
            echo wp_kses_post(get_theme_mod('footerCopyright',isset($foodrecipes_options['footertext'])?$foodrecipes_options['footertext']:'')); 
          }
          printf(/* translators: %1$s is theme url*/ esc_html__( 'Powered by %1$s', 'food-recipes' ), '<a href="'.esc_url("https://fasterthemes.com/wordpress-themes/foodrecipes").'" target="_blank">'.esc_html__('Food Recipes WordPress Theme','food-recipes').'</a>');    ?>
    </h2>
  </div>
</footer>
<!-- footer End-->
<?php wp_footer(); ?>
</body>
</html>
