<?php /* Template Name: Home */ ?>

<?php 
  get_header();
?>

<!-- Slider -->

<div class="l-ctn">
  <div class="c-slider">
    <img src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_2')['url']; ?>" alt="">
    <img src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>
</div>

<!-- Nase usluge -->

<div class="l-section">
  <span class="c-section__title">Nase usluge</span>

  <div class="c-section-nase-usluge">
    <div class="l-nase-usluge-content">
      <h1 class="c-nase-usluge-content__title"><span>&#8226;</span> Gipsarski radovi</h1>
      <p class="c-nase-usluge-content__info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <img class="c-nase-usluge-content__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>

  <div class="c-section-nase-usluge">
    <div class="l-nase-usluge-content">
      <h1 class="c-nase-usluge-content__title"><span>&#8226;</span>Elektroinstalaterske usluge</h1>
      <p class="c-nase-usluge-content__info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <img class="c-nase-usluge-content__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>

  <div class="c-section-nase-usluge">
    <div class="l-nase-usluge-content">
      <h1 class="c-nase-usluge-content__title"><span>&#8226;</span> Vodoinstalaterski radovi</h1>
      <p class="c-nase-usluge-content__info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <img class="c-nase-usluge-content__img" src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
  </div>
  
</div>

<!--Nasi projekti-->

<div class="l-section">
  <span class="c-section__title">Nasi projekti</span>
  <div class="l-nasi-projekti">

    <div class="c-nasi-projekti__card">
      <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>

    <div class="c-nasi-projekti__card">
      <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>

    <div class="c-nasi-projekti__card">
      <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>

    <div class="c-nasi-projekti__card">
      <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>

    <div class="c-nasi-projekti__card">
      <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>
  
    <div class="c-nasi-projekti__card">
        <img class="c-nasi-projekti__img" src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here as opposed to using lor a...</p>
    </div>

  </div>
</div>

<!--Zasto bas mi-->

<div class="l-section">
  <span class="c-section__title">Zasto bas mi?</span>
  <p class="c-section__info">Zbog velikog iskustva i stvarnog fokusa na zadovoljstvo korisnika, možete se osloniti na nas za kompletne poslove renoviranja i adaptacije,
   kao i za individualne radove (građevinske, gipsarsko-molerske, elektroinstalaterske, parketarske i ostalo).</p><br>
  <p class="c-section__info">Pružamo profesionalne usluge i za fizička i za pravna lica.</p>

  <div class="c-section__card">
    <i class="fas fa-truck"></i>
  </div>
  
</div>

<!-- O nama -->

<div class="l-section">
  <span class="c-section__title">O nama</span>
  <p class="c-section__info">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
</div>

<?php
  get_footer();
?>