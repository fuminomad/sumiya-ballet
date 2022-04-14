<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- adobe fonts -->
  <script>
    (function(d) {
      var config = {
          kitId: 'juo0nbo',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- webフォントチラつき防止（低速環境考慮） -->
  <script>
    setTimeout(function() {
      document.getElementsByTagName("html")[0].classList.add("loading-delay");
    }, 3000);
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header j-header">
    <div class="p-header-inner">
      <h1 class="p-header-logo"><a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sumiya-logo-3.png" alt="ロゴ" loading="lazy" width="135" height="71">
        </a></h1>
      <div class="p-header-nav">
        <div class="p-header-nav__items">
          <ul class="p-header-nav__item">
            <li class="p-header-nav__list p-header-nav__list--1st"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
            <li class="p-header-nav__list p-header-nav__list--2nd"><a href="<?php echo esc_url(home_url('/teachers/')); ?>">Teachers</a></li>
            <li class="p-header-nav__list p-header-nav__list--3rd"><a href="<?php echo esc_url(home_url('/category/archive/')); ?>">Classes</a></li>
            <li class="p-header-nav__list p-header-nav__list--4th"><a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a></li>
            <li class="p-header-nav__list p-header-nav__list--5th"><a href="<?php echo esc_url(home_url('/information/')); ?>">Info</a></li>
            <li class="p-header-nav__list p-header-nav__list--6th"><a href="<?php echo esc_url(home_url('/performance/')); ?>">Performance</a></li>
          </ul>
        </div>
      </div>
      <div class="p-header_btn j-header_btn">
        <button class="p-header_hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
    <?php
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
        'container' => 'nav',
        'container_class' => 'p-header_nav',
        'menu_class' => 'p-header_nav_list',
      )
    );
    ?>
    <div class="p-header_nav-background"></div>
  </header>