<?php get_header(); ?>
<section class="l-page__classes">
    <div class="l-page__classes__inner">
      <div class="l-page__classes__wrapper">
          <div class="l-page__classes__title">
           <h1>教室一覧</h1>
          </div>
          <div class="l-page__classes__cards">
              <?php if(have_posts()): ?>
               <?php while(have_posts()):the_post(); ?>
     
               <div class="l-page__classes__card-item classes__cards">

                 <a href="<?php the_permalink();?>" class="classes__card">
                   
                       <div class="classes__cards">

                         
                       <?php if ( has_tag('culture','studio') ): ?>
                        <div class="classes__card-info">
                        <p class="classes__card-tag"><?php the_tags('');?></p>
                       </div>
                        <?php else: ?>
                       <?php endif; ?>
                    <h4 class="classes__card-title">
                        <?php the_title();?>
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
<?php get_footer(); ?>