<?php get_header("performance"); ?>
<section class="l-page-performance-classes">
    <div class="l-page-performance-classes__inner">
        <div class="l-page-performance-classes__wrapper">
            <h1 class="p-page-section__subtitle">
                Performance
                <br><span>
                    公演一覧</span>
            </h1>
            <div class="p-page__breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
            <div class="l-page-performance-classes__cards performance-classes">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="l-page-performance-classes__card-item performance-classes__cards">
                            <a href="<?php the_permalink(); ?>" class="performance-classes__card">
                                <div class="performance-classes__card">
                                    <h4 class="performance-classes__card-title">
                                        <?php the_title(); ?>
                                    </h4>
                                    <div class="performance-classes__img">
                                        <figure class="performance-classes__figure">
                                            <?php the_post_thumbnail('full'); ?>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php
        $args = array(
            'mid_size' => 2,
            'prev_text' => '',
            'next_text' => '',
            'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);
        ?>
    </div>
</section>
<?php get_footer("performance"); ?>