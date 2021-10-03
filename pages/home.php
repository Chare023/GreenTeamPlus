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

  <section class="l-section l-section--services">
    <h3 id="usluge" class="l-section__title">Nase usluge</h3>

    <div class="c-service">
      <div class="c-service__info">
        <h6 class="c-service__title"><span>&#8226;</span> Gipsarski radovi</h6>
        <p class="c-service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <img class="c-service__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
    </div>

    <div class="c-service">
      <div class="c-service__info">
        <h6 class="c-service__title"><span>&#8226;</span>Elektroinstalaterske usluge</h6>
        <p class="c-service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <img class="c-service__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
    </div>

    <div class="c-service">
      <div class="c-service__info">
        <h6 class="c-service__title"><span>&#8226;</span> Vodoinstalaterski radovi</h6>
        <p class="c-service__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <img class="c-service__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
    </div>

  </section>

  <!--Nasi projekti-->

  <section class="l-section l-section--projects">
    <h3 id="galerija" class="l-section__title">Nasi projekti</h3>
    <div class="l-projects-grid">

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

      <div class="l-projects-grid__item">
        <div class="c-card">
        <div class="c-card__img-wrap">  
          <img class="c-card__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        </div>
          <div class="c-card__description">
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--Zasto bas mi-->

  <section class="l-section l-section--about-us">
    <h3 class="l-section__title">Zasto bas mi?</h3>
    <p class="c-section__info">Zbog velikog iskustva i stvarnog fokusa na zadovoljstvo korisnika, možete se osloniti na nas za kompletne poslove renoviranja i adaptacije,
      kao i za individualne radove (građevinske, gipsarsko-molerske, elektroinstalaterske, parketarske i ostalo).
      <br><br>Pružamo profesionalne usluge i za fizička i za pravna lica.</p>
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
    <p class="c-section__info">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
  </section>
</main>

<!-- Nase usluge -->



<?php
get_footer();
?>