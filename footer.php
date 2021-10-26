<?php 
    wp_footer();
    $serviceItems = explode(',', get_option('service_item'));
?>
<footer id="kontakt" class="l-footer">
  <div class="l-footer-container">

    <div class="l-footer__logo-wrap">
      <img class="l-footer__logo" src="<?php echo get_template_directory_uri().'/FooterLogo.png'; ?>" alt="<?php the_title()?>" title="<?php the_title()?>">
    </div>

    <div class="l-footer__section">
      <p class="c-footer-title">Usluge</p>
      <ul class="c-footer-list">
        <?php foreach($serviceItems as $key=>$value): ?>
          <li class="c-footer-list__item"><?php echo $value ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="l-footer__section u-shrink-0">
      <p class="c-footer-title">Kontakt</p>
      <a href="tel:<?php echo get_option('phone_number'); ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fas fa-phone-alt"></i></span>
        <span><?php echo get_option('phone_number'); ?></span>
      </a>
      <a href="mailto:<?php echo get_option('email'); ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fas fa-envelope"></i></span>
        <span><?php echo get_option('email'); ?></span>
      </a>
      <a target="_blank" href="<?php echo get_option('instagram_url'); ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fab fa-instagram"></i></span>
        <span><?php echo get_option('instagram'); ?></span>
      </a>
      <a target="_blank" href="<?php echo get_option('facebook_url'); ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fab fa-facebook-square"></i></span>
        <span><?php echo get_option('facebook'); ?></span>
      </a>
    </div>
  </div>
  <p class="c-footer-copyright">Copyright © 2021 greenteamplus.rs - sva prava zadržana.</p>
</footer>
</body>
</html>