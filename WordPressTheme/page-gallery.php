<?php get_header("gallery"); ?>
<section class="l-page-gallery p-page-gallery">
  <div class="l-page-gallery__inner p-page-gallery__inner">
    <div class="p-page-gallery__titles">
      <h1 class="p-page-section__subtitle p-page-gallery__title">
        <?php the_title(); ?>
        <br>
        <span>
          ギャラリー</span>
      </h1>
    </div>
    <div class="p-page__breadcrumb">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
    <div class="slide-wrapper">
      <div class="slide-box">
        <ul class="slide">
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/101.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/02.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/03.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/04.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/05.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/06.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/07.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/108.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/109.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/10.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
          <li class="item">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/111.jpg" loading="lazy" width="1400" height="960" alt="舞台写真"></a>
          </li>
        </ul>
        <div class="slide-navigation">
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/101.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/02.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/03.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/04.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/05.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/06.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/07.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/108.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/109.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/10.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
          <div class="item">
            <figure class="image">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/111.jpg" loading="lazy" width="1400" height="960" alt="舞台写真">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer("gallery"); ?>