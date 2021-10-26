<?php 
    wp_footer();
?>
<footer id="kontakt" class="l-footer">
  <div class="l-footer-container">

    <div class="l-footer__logo-wrap">
      <img class="l-footer__logo" src="<?php echo get_template_directory_uri().'/FooterLogo.png'; ?>">
    </div>

    <div class="l-footer__section">
      <p class="c-footer-title">Usluge</p>
      <ul class="c-footer-list">
        <li class="c-footer-list__item">Gipsarski radovi</li>
        <li class="c-footer-list__item">Molerski i fasaderski radovi</li>
        <li class="c-footer-list__item">Elektroinstalaterske usluge</li>
        <li class="c-footer-list__item">Keramičarske usluge</li>
        <li class="c-footer-list__item">Parketarske usluge</li>
        <li class="c-footer-list__item">Zamena stolarije</li>
        <li class="c-footer-list__item">Rušenje i odvoz šuta</li>
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
      <a target="_blank" href="<?php echo get_option('instagram_url')['url']; ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fab fa-instagram"></i></span>
        <span><?php echo get_option('instagram'); ?></span>
      </a>
      <a target="_blank" href="<?php echo get_option('facebook_url')['url']; ?>" class="c-link u-mb-16">
        <span class="c-link__icon"><i class="fab fa-facebook-square"></i></span>
        <span><?php echo get_option('facebook'); ?></span>
      </a>
    </div>
  </div>
  <p class="c-footer-copyright">Copyright © 2021 greenteamplus.rs - sva prava zadržana.</p>
</footer>
</body>
</html>