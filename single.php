<?php 

get_header();

// if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="l-single-post">
  <h3 class="l-single-post__title"><?php the_title(); ?></h3>

  <div class="l-single-post__description-wrap">
    <p class="c-single-post__description"><?php the_excerpt(); ?></p>
  </div>

  <div id="img-wrap" class="l-single-post__img-wrap">
    <?php the_post_thumbnail(); ?>
  </div>

  <div class="l-single-post__gallery-wrap">

    <?php the_content(); ?>
  </div>


</section>

<?php
 get_footer();
?>