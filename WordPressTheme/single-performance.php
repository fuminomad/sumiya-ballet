<?php get_header("performance"); ?>
<section class="l-page-class">
    <div class="l-page-class__inner">
        <div class="p-page__breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="l-page-class__subtitle">
                    <?php the_title(); ?>
                    <!-- <br><span>
        タイムスケジュール</span> -->
                </h1>
                <?php the_content(); ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer("performance"); ?>