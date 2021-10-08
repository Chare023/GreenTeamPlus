<?php /* Template Name: Home */ ?>

<?php
get_header();
?>

<!-- Slider -->

<main class="l-ctn">
  <div class="c-slider">
    <img src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_2')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>


  <!-- Nase Usluge -->

  <section class="l-section l-section--services">
    <h3 id="usluge" class="l-section__title">Nase usluge</h3>

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
        <p class="c-service__text"><?php echo the_content() ?></p>
      </div>

      <?php if (has_post_thumbnail( $naseUsluge->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $naseUsluge->ID ), 'single-post-thumbnail' ); ?>
      <img class="c-service__img" src="<?php echo $image[0]; ?>" alt="">
      <?php endif; ?>
    </div>

    <?php } ?>

  </section>

  <!--Nasi projekti-->

  <section class="l-section l-section--projects">
    <h3 id="galerija" class="l-section__title">Nasi projekti</h3>
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
          <div class="c-card__img-wrap">
            <?php if (has_post_thumbnail( $gallery->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $gallery->ID ), 'single-post-thumbnail' ); ?>
            <img class="c-card__img" src="<?php echo $image[0]; ?>" alt="">
            <?php endif; ?>
          </div>

          <div class="c-card__description">
            <p><?php echo the_content() ?></p>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </section>

  <!--Zasto bas mi-->

  <section class="l-section l-section--about-us">
    <h3 class="l-section__title">Zasto bas mi?</h3>
    <p class="c-section__info">Zbog velikog iskustva i stvarnog fokusa na zadovoljstvo korisnika, možete se osloniti na
      nas za kompletne poslove renoviranja i adaptacije,
      kao i za individualne radove (građevinske, gipsarsko-molerske, elektroinstalaterske, parketarske i ostalo).
      <br><br>Pružamo profesionalne usluge i za fizička i za pravna lica.
    </p>
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
    <h3 id="o-nama" class="l-section__title">O nama</h3>
    <p class="c-section__info">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
      necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
      combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
      generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    </p>
  </section>
</main>

<?php
get_footer();
?>