<?php get_header("classes"); ?>
<section class="l-page-class">
    <div class="l-page-class__inner">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="l-page-class__subtitle">
                    <?php the_title(); ?>
                    <br><span>
                        タイムスケジュール</span>
                </h1>
                <div class="p-page__breadcrumb">
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                </div>
                <?php the_content(); ?>
                <?php if (has_tag('schedule')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>
                <?php else : ?>
                <?php endif; ?>
                <div class="l-page__wrapper">
                    <div class="l-page-class__image">
                        <figure class="l-page-class__figure">
                            <?php if (get_post_meta($post->ID, 'class_image', true)) : ?>
                                <?php
                                $class_image = scf::get('class_image');
                                echo wp_get_attachment_image($class_image, 'large');
                                ?>
                            <?php endif; ?>
                        </figure>
                    </div>
                    <?php if (has_tag('ayase')) : ?>
                        <div class="l-page-class__overview p-overview">
                            <h2 class="p-overview__title"><?php the_title(); ?></h2>
                            <div class="p-overview__wrapper-2nd">
                                <dl>
                                    <dt>住所</dt>
                                    <dd><?php $address = scf::get('address');
                                        echo nl2br($address); ?></dd>
                                </dl>
                            </div>
                        </div>
                </div>
            <?php else : ?>
                <div class="l-page-class__overview p-overview">
                    <h2 class="p-overview__title"><?php the_title(); ?></h2>
                    <div class="p-overview__wrapper">
                        <dl>
                            <dt>住所</dt>
                            <dd><?php $address = scf::get('address');
                                echo nl2br($address); ?></dd>
                            <dt>TEL</dt>
                            <dd><?php $tel2nd = scf::get('tel-2nd');
                                echo nl2br($tel2nd); ?></dd>
                            <dt>アクセス</dt>
                            <dd><?php $access = scf::get('access');
                                echo nl2br($access); ?></dd>
                        </dl>
                        <div class="p-overview__maps">
                            <iframe src="<?php $google_maps = scf::get('google_maps');
                                            echo sanitize_text_field($google_maps); ?>" width="400" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
    </div>
<?php endif; ?>
<?php if (has_tag('studio')) : ?>
    <div class="l-page-class__contact">
        <div class="l-page-class__text">
            <p>体験レッスン <br class="is-sp">お問い合わせはこちらまで</p>
        </div>
        <div class="l-page-class__btns p-class__btn">
            <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('minami')) : ?>
    <div class="l-page-class__contacts" id="minami">
        <div class="l-page-class__contact">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み</p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは南林間カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <h3 class="p-btn__title--2nd">月曜日</h3>
            <div class="p-btn_wrapper--2nd">
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001005.html">園児</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001006.html">小学生低学年</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001007.html">小学生高学年</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29000701.html">中学生以上</a>
                </div>
            </div>
            <h3 class="p-btn__title--3rd">火曜日</h3>
            <div class="p-btn_wrapper--2nd">
                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040163.html">園児</a>
                </div>
                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040164.html">小学生低学年</a>
                </div>
                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040165.html">小学生高学年</a>
                </div>
                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903026398.html">中学生以上</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>
            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>
    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('honatsugi')) : ?>
    <div class="l-page-class__contacts" id="honatsugi">
        <div class="l-page-class__contact">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み</p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは本厚木カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/atugi/itemview_1_1001006.html">本厚木カルチャー</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>
            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>
    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('totsuka')) : ?>
    <div class="l-page-class__contacts" id="totsuka">
        <div class="l-page-class__contact">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み
                </p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは戸塚カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.ms-yurindo.jp/shop_classroom/totsuka_cc/childcourse1-2/">幼児〜小学生</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.ms-yurindo.jp/shop_classroom/totsuka_cc/dance_health1/">成人</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>
            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('ebina')) : ?>
    <div class="l-page-class__contacts" id="ebina">
        <div class="l-page-class__contact">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み
                </p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは海老名カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1233">3歳</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1234">1年生~3年生</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1232">4年生~</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>
            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</section>
<?php get_footer("classes"); ?>