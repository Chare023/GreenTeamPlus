<?php 

get_header();

// if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="l-ctn l-ctn-single-post">
  <h3 class="c-single-post__title"><?php the_title(); ?></h3>
  <div class="c-single-post__info"><?php the_excerpt(); ?></div>
  <section class="l-section--single-post">

    <div class="l-single-post-wrap">

      <section class="l-section__single-post">
        <div class="c-single-post__img-wrap">
          <div id="img-wrap" class="c-single-post__img">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <div class="c-single-post__thumb-wrap">
          <div class="c-single-post__thumb-img">
            <?php the_content(); ?>
          </div>
        </div>

      </section>

    </div>

    <section class="l-section--other-posts">
      <h3 id="galerija" class="l-section-other-posts__title">Ostali projekti</h3>
      <div class="l-projects-block">

        <?php
      $gallery = New WP_Query(array(
        'posts_per_page' => 6,
        'category_name' => 'gallery'
      ));
      
      while ($gallery->have_posts()) {
        $gallery->the_post(); ?>

        <div class="l-projects-block__item">
          <div class="c-card-single-post__img-wrap">
            <a href="<?php echo get_permalink(); ?>">
              <?php if (has_post_thumbnail( $gallery->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $gallery->ID ), 'single-post-thumbnail' ); ?>
              <img class="c-card__img" src="<?php echo $image[0]; ?>" alt="">
              <?php endif; ?>
            </a>
          </div>
          <div class="c-card-single-post">
            <div class="c-card-single-post__description-title">
              <p><?php echo the_title(); ?></p>
            </div>
            <div class="c-card-single-post__description">
              <p><?php echo the_excerpt(); ?></p>
            </div>
            <div class="c-card-single-post__description-date">
              <p><?php echo get_the_date('F j, Y'); ?></p>
            </div>
          </div>
        </div>

        <?php } ?>

      </div>
    </section>

  </section>

  <div class="c-single-post__info"><?php the_excerpt(); ?></div>

</main>

<!-- <div class="l-single-post__last-posts-wrap">
  <h4 class="c-single-post__post-title">Ostali projekti</h4>
  <div class="l-single-post__post-wrap">
    <div class="c-single-post__post-img"></div>
    <h5 class="c-single-post__post-title"></h5>
    <p class="c-single-post__post-info"></p>
    <p class="c-single-post__post-date"></p>
  </div>
</div>
<p class="l-single-post__info"></p> -->
<?php
 get_footer();
 ?>