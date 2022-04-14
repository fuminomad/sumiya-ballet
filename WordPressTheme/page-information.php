<?php get_header("information"); ?>
<section class="l-page-information p-page-information">
  <div class="l-page-information__inner p-page-information__inner">
    <h1 class="p-page-section__subtitle">
      <?php the_title(); ?>
      <br><span>
        お知らせ</span>
    </h1>
    <div class="p-page__breadcrumb">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
    <div class="p-page-information__wrapper">
      <div class="p-page-information__titles">
        <h2 class="p-page-information__title">
          2021年 受賞歴
        </h2>
        <div class="p-page-information__text">
          第19回 全国プレバレエコンクール in さがみはら多数上位入賞
        </div>
      </div>
      <div class="p-page-information__titles">
        <h2 class="p-page-information__title">
          2019年 受賞歴
        </h2>
        <div class="p-page-information__text">
          第22回 NBA全国バレエコンクールシニアの女子の部6 3位 五井野鮎美
          第5回キエフグランプリ国際バレエコンクール出場 石山蓮
          第17回 全国プレバレエコンクール in さがみはら多数上位入賞
        </div>
      </div>
      <div class="p-page-information__titles">
        <h2 class="p-page-information__title">
          2018年 受賞歴
        </h2>
        <div class="p-page-information__text">
          第16回 全国プレバレエコンクール in さがみはら 多数上位入賞
          第115回 NAMUEバレエコンクール神奈川大会シニアの部2位: 五井野鮎美
          高校生の部2位: 石山蓮
          第13回 エヴァ・エフドキモワ記念エデュケーショナルバレエコンペティション　
          シニアの部2位: 五井野鮎美
        </div>
      </div>
      <div class="p-page-information__titles">
        <h2 class="p-page-information__title">
          2017年 受賞歴
        </h2>
        <div class="p-page-information__text">
          第15回 全国プレバレエコンクール in さがみはら 相模原市長賞、審査員特別賞: 石山蓮 他多数上位入賞
          第12回 エヴァ・エフドキモワ記念エデュケーショナルバレエコンペティション
          シニアの部 2位: 五井野鮎美
          ユースアメリカグランプリ（YAGP New York Finalist）
          NYファイナル出場: 石山蓮 Ren Ishiyama
          東京サマー全国バレエコンクール 高校生部門一位: 石山蓮
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer("information"); ?>