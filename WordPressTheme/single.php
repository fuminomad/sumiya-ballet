<?php get_header(); ?>

<?php get_header(); ?>
<section class="l-page-class">
    <div class="l-page-class__inner">
   
    
   <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <h1 class="l-page-class__title">
        <?php bloginfo( 'name' ); ?>
        </h1>
       <h2 class="l-page-class__subtitle">
    <?php the_title(); ?>
    </h2> 
    <?php the_content(); ?>
   <div class="l-page-class__image">
     <figure class="l-page-class__figure">
  <?php the_post_thumbnail('large'); ?>
</figure>
   </div>
<div class="l-page-class__overview p-overview">
   <h2 class="p-overview__title"><?php the_title(); ?></h2>
    <div class="p-overview__wrapper">

        <dl>
            <dt>住所</dt><dd>〒252-0303 相模原市南区相模大野7-17-13 ラ・グラシューズB1</dd>
            <dt>TEL</dt><dd>042-743-7816</dd>
            <dt>アクセス</dt><dd>小田急線 相模大野駅南口から3分</dd>
        </dl>
        <div class="p-overview__maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51984.45842424455!2d139.43050541837633!3d35.47883492569334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018fecec61ed30d%3A0x86d2a6f7d13a3679!2z6KeS5bGL5rqA5p2O5a2Q44OQ44Os44Ko5Zuj!5e0!3m2!1sja!2sjp!4v1641563774064!5m2!1sja!2sjp" width="400" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
    </div>
</div>


    <?php endwhile; ?>
<?php endif; ?>



   
    </div>
</section>


<?php get_footer(); ?>

<?php get_footer(); ?>