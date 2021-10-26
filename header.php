<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Green team plus</title> 
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/23930a8e62.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
  <!--Header-->
  <header class="l-header" id="header">
    <div class="l-header__menu" id="header-menu">
      <i class="fas fa-bars"></i>
    </div>
    <div class="l-header__toggle-menu" id="toggle-header-menu">
      <i class="fas fa-times"></i>
    </div>
    <div class="l-header__left">
      <div class="l-header__logo-wrap">
        <a href="<?php echo get_home_url(); ?>"> 
          <img class="l-header__logo" src="<?php echo get_template_directory_uri().'/screenshot.png'; ?>">
        </a>
      </div>
      <?php
        if (function_exists(clean_custom_menus())) clean_custom_menus();
      ?>
    </div>
    <div class="l-header__right">
      <a href="tel:<?php echo get_option( 'phone_number' ); ?>" class="c-link c-link--dark">
        <span class="c-link__icon"><i class="fas fa-phone-alt"></i></span>
        <span><?php echo get_option('phone_number'); ?></span>
      </a>
      <a href="" class="c-link c-link--dark u-ml-40">
        <span class="c-link__icon"><i class="fas fa-clock"></i></span>
        <span><?php echo get_option('working_hours'); ?></span>
      </a>
    </div>

  </header>
