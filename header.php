<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/23930a8e62.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--Header-->
  <header class="l-header">
    <div class="l-header__left">
      <div class="l-header__logo-wrap">
        <img class="l-header__logo" src="<?php echo get_template_directory_uri().'/screenshot.png'; ?>">
      </div>
      <nav class="l-nav">
        <a class="l-nav__link" href="#">Usluge</a>
        <a class="l-nav__link" href="#">Galerija</a>
        <a class="l-nav__link" href="#">O nama</a>
        <a class="l-nav__link" href="#">Kontakt</a>
      </nav>
    </div>
    <div class="l-header__right">
      <a href="" class="c-link c-link--dark">
        <span class="c-link__icon"><i class="fas fa-phone-alt"></i></span>
        <span>0651231233</span>
      </a>
      <a href="" class="c-link c-link--dark u-ml-40">
        <span class="c-link__icon"><i class="fas fa-clock"></i></span>
        <span>Pon-Sub 08.00 - 16.00</span>
      </a>
    </div>
  </header>