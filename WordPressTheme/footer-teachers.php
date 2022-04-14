<footer class="l-footer p-footer">
  <div class="p-footer__inner">
    <div class="p-footer__logo">
      <div class="p-footer__title"><a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sumiya-logo-white.png" alt="ロゴ" loading="lazy" width="135" height="71">
        </a></div>
    </div>
    <div class="p-footer-nav">
      <ul class="p-footer-nav__item">
        <li class="p-footer-nav__list p-footer-nav__list--1st"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
        <li class="p-footer-nav__list p-footer-nav__list--3rd"><a href="<?php echo esc_url(home_url('/category/archive/')); ?>">Classes</a></li>
        <li class="p-footer-nav__list p-footer-nav__list--4th"><a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a></li>
        <li class="p-footer-nav__list p-footer-nav__list--5th"><a href="<?php echo esc_url(home_url('/information/')); ?>">Info</a></li>
        <li class="p-footer-nav__list p-footer-nav__list--6th"><a href="<?php echo esc_url(home_url('/performance/')); ?>">Performance</a></li>
        <li class="p-footer-nav__list p-footer-nav__list--7th"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="p-footer__icon">
    <a class="" href="https://instagram.com/sumiya_ballet?utm_medium=copy_link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-instagam-gray.png" loading="lazy" width="40" height="40" alt="インスタグラムアイコン"></a>
  </div>
  <div class="p-footer__copylights">
    <p class="p-footer__copylight">&copy; 2022 Sumiya-ballet</p>
  </div>
  <div class="p-footer__btn">
    <a href="#" class="c-top-btn">
      <img class="c-top-btn__white" src="<?php echo get_template_directory_uri() ?>/assets/img/top-return.svg" alt="トップに戻るボタン">
      <img class="c-top-btn__black" src="<?php echo get_template_directory_uri() ?>/assets/img/top-return-hover.svg" alt="トップに戻るボタン">
    </a>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>