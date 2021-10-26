<?php 

get_header();

// if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="l-ctn l-ctn--single-post">
    <!-- TODO: PAGE TITLE -->
  <h3 class="c-page-title c-page-title--single "><?php the_title(); ?></h3>
  
  <section class="l-single-post">
    
    <main class="l-single-post__main">
      <div id="img-wrap" class="l-single-post__feature">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="l-single-post__ctn">
        <?php the_content(); ?>
      </div>
    </main>

    <aside class="l-single-post__aside">
      <?php
        $gallery = New WP_Query(array(
        'posts_per_page' => 6,
        'category_name' => 'gallery'
      ));
      
      while ($gallery->have_posts()) {
        $gallery->the_post(); ?>

        <a class="c-card c-card--single-post" href="<?php echo get_permalink(); ?>">
          <?php if (has_post_thumbnail( $gallery->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $gallery->ID ), 'single-post-thumbnail' ); ?>
          <div class="c-card__img-wrap">
            <img class="c-card__img" src="<?php echo $image[0]; ?>" alt="">
          </div>
          <?php endif; ?>


          <div class="c-card__title">
            <p><?php echo the_title(); ?></p>
          </div>
          <div class="c-card__description">
            <p><?php echo the_excerpt(); ?></p>
          </div>
          <div class="c-card__date">
            <p><?php echo get_the_date('F j, Y'); ?></p>
          </div>

        </a>
      <?php } ?>
    </aside>

  </section>
</div>
<?php
 get_footer();
 ?>