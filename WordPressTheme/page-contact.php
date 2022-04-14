<?php get_header("contact"); ?>
<div class="l-page-contact">
  <div class="l-page-contact__inner">
    <section class="p-contact-top">
      <h1 class="p-page-section__subtitle">
        <?php the_title(); ?>
        <br><span>
          お問い合わせ</span>
      </h1>
      <div class="p-page__breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
      <div class="p-contact-top__texts">
        <h2 class="p-contact-top__title">
          <span>スタジオ(相模大野、鶴間、西三田、綾瀬)</span><span>の体験レッスン、お問い合わせは</span><span>メールまたはお電話で</span><span>受け付けております</span>
        </h2>
        <div class="p-contact-top__tel-box">
          <ul class="p-contact-top__tels">
            <li class="p-contact-top__tel">tel:</li>
            <li class="p-contact-top__tel">
              <a href="tel:042-743-7816">042-743-7816</a>
            </li>
          </ul>
        </div>
        <h2 class="p-contact-top__title--bottom" id="link">
          <span>カルチャー(南林間、戸塚、本厚木、海老名)</span><span>での体験レッスンは各カルチャーに直接</span><span>お問い合わせください</span>
        </h2>
        <div class="p-contact-top__buttons">
          <div class="c-btn-contact p-contact-top__button">
            <a href="<?php echo home_url('/minamirinkan/#minami'); ?>">南林間</a>
          </div>
          <div class="c-btn-contact p-contact-top__button">
            <a href="<?php echo home_url('/totuka/#totsuka'); ?>">戸塚</a>
          </div>
          <div class="c-btn-contact p-contact-top__button">
            <a href="<?php echo home_url('/honatsugi/#honatsugi'); ?>">本厚木</a>
          </div>
          <div class="c-btn-contact p-contact-top__button">
            <a href="<?php echo home_url('/ebina/#ebina'); ?>">海老名</a>
          </div>
        </div>
      </div>
    </section>
    <section class="p-contact l-contact" id="contact">
      <div class="p-contact__inner">
        <div class="p-contact__forms">
          <div class="passing">
            <div class="passing-box">
              <div class="passing-bar">
                <!-- <h2 class="passing-txt">角屋満李子バレエ団</h2> -->
              </div>
            </div>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="27" title="お問い合わせフォーム"]'); ?>
          <div class="p-contact__texts--top">
            <p class="p-contact__text--top">
              <span>カルチャーでの体験レッスンは</span><span>各カルチャーに直接お問い合わせください</span>
            </p>
            <div class="p-contact__button c-btn">
              <a href="#link">各カルチャー<br>お問い合わせ</a>
            </div>
          </div>
          <div class="p-contact__texts">
            <p class="p-contact__text">
              <span>当バレエ団からのメールが迷惑メールフォルダに</span><span>振り分けられる可能性もございますので</span><span>ご確認頂けると幸いでございます。</span><br><span>また、迅速な対応を心がけておりますが、</span><span>休業日その他の関係でお返事に</span><span>数日かかる場合がございます。</span><br><span>お問い合わせをいただきましてから</span><span>5日以上、当バレエ団より連絡がない場合は、</span><span>メール送信のトラブルも考えられますので、</span><span>お電話でご確認いただければ幸いでございます。</span>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer("contact"); ?>