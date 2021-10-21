<?php /* Template Name: Home */ ?>

<?php

get_header();

?>

<!-- Slider -->

<main class="l-ctn" id="main-ctn">
  <div class="c-slider">
    <img src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_2')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>


  <!-- Nase Usluge -->

 
  <section class="l-section l-section--services">
    <h3 id="usluge" class="l-section__title">Naše usluge</h3>
    
    <?php
      $naseUsluge = New WP_Query(array(
        'posts_per_page' => 3,
        'category_name' => 'Services'
      ));
      
      while ($naseUsluge->have_posts()) {
        $naseUsluge->the_post(); ?>

    <div class="c-service">
      <div class="c-service__info">
        <h6 class="c-service__title"><span>&#8226;</span><?php the_title(); ?></h6>
        <?php echo the_content(); ?>
      </div>

      <?php if (has_post_thumbnail( $naseUsluge->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $naseUsluge->ID ), 'single-post-thumbnail' ); ?>
      <img class="c-service__img" src="<?php echo $image[0]; ?>" alt="">
      <?php endif; ?>
    </div>

    <?php }
    
    ?>

  </section>

  <!--Nasi projekti-->

  <section class="l-section l-section--projects">
    <h3 id="galerija" class="l-section__title">Naši projekti</h3>
    <div class="l-projects-grid">

      <?php
      $gallery = New WP_Query(array(
        'posts_per_page' => 6,
        'category_name' => 'gallery'
      ));
      
      while ($gallery->have_posts()) {
        $gallery->the_post(); ?>

      <div class="l-projects-grid__item">
        <div class="c-card">
          <a href="<?php echo get_permalink(); ?>">
            <div class="c-card__img-wrap">
              <?php if (has_post_thumbnail( $gallery->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $gallery->ID ), 'single-post-thumbnail' ); ?>
              <img class="c-card__img" src="<?php echo $image[0]; ?>" alt="">
              <?php endif; ?>
            </div>
          </a>
          <div class="c-card__description">
            <p><?php echo the_excerpt(); ?></p>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </section>

  <!--Zasto bas mi-->

  <section class="l-section l-section--about-us">
    <?php
    $zastoBasMi = New WP_Query(array(
      'category_name' => 'zasto_bas_mi'
    ));
    
    while ($zastoBasMi->have_posts()) {
      $zastoBasMi->the_post(); ?>
    <h3 class="l-section__title"><?php the_title(); ?></h3>
    <?php echo the_content() ?>
    <?php } ?>


    <div class="c-about-us-grid">

      <div class="c-about-us-grid__item">
        <div class="c-about-us__icon-wrap">
          <i class="c-about-us__icon fas fa-truck"></i>
        </div>
        <div class="c-about-us__description">
          <p>Brza Usluga</p>
        </div>
      </div>

      <div class="c-about-us-grid__item">
        <div class="c-about-us__icon-wrap">
          <i class="c-about-us__icon fas fa-thumbs-up"></i>
        </div>
        <div class="c-about-us__description">
          <p>Velik broj zadovoljnih klijenata</p>
        </div>
      </div>

      <div class="c-about-us-grid__item">
        <div class="c-about-us__icon-wrap">
          <i class="c-about-us__icon fas fa-check-square"></i>
        </div>
        <div class="c-about-us__description">
          <p>Kvalitet na prvom mestu</p>
        </div>
      </div>

    </div>

  </section>

  <!-- O nama -->

  <section class="l-section">
    <?php
    $oNama = New WP_Query(array(
      'category_name' => 'onama'
    ));
    
    while ($oNama->have_posts()) {
      $oNama->the_post(); ?>
    <h3 id="o-nama" class="l-section__title"><?php the_title(); ?></h3>
    <?php echo the_content() ?>
    <?php } ?>
  </section>

</main>

<?php
  wp_reset_query();
  get_footer();
?>
