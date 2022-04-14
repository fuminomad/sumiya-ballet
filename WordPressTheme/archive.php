<?php get_header("classes"); ?>
<section class="l-page-classes">
    <div class="l-page-classes__inner">
        <div class="l-page-classes__wrapper">
            <h1 class="p-page-section__subtitle">
                Classes
                <br><span>
                    教室一覧&タイムスケジュール</span>
            </h1>
            <div class="p-page__breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
            <div class="l-page-classes__cards">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="l-page-classes__card-item classes__cards">
                            <a href="<?php the_permalink(); ?>" class="classes__card">
                                <div class="classes__cards">
                                    <?php if (has_tag('culture', 'studio')) : ?>
                                        <div class="classes__card-info">
                                            <p class="classes__card-tag"><?php the_tags(''); ?></p>
                                        </div>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    <h4 class="classes__card-title">
                                        <?php the_title(); ?>
                                    </h4>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer("classes"); ?>