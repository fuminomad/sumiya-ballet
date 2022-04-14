<footer class="l-footer p-footer">
  <div class="p-footer__inner">
    <div class="p-footer__logo">
      <div class="p-footer__title"><a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sumiya-logo-white.png" alt="ロゴ" loading="lazy" width="135" height="71">
        </a></div>
    </div>
    <?php
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'footer_nav', //フッターナブをここに表示すると指定
        'container' => 'nav',
        'container_class' => 'p-footer_nav',
        'menu_class' => 'p-footer_nav_inner',
      )
    );
    ?>
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