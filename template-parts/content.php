<article <?php post_class('masonry-item post-preview'); ?>>
  <?php 
    if ( has_post_thumbnail() ) {
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
  ?>
         <a href="<?php the_permalink(); ?>">
            <div class='post-preview__img' role='img' style='background-image: url("<?php echo($featured_img_url); ?>")'>
          </div>
          </a>
  <?php 
    } 
  ?>
  <div class="post-preview__text-container">
      
    <a href="<?php the_permalink(); ?>">
      <p class="post-preview__date"> <?php echo get_the_date(); ?> </p>
      <h2 class="post-preview__title"> <?php the_title(); ?>  </h2>
      <div class="post-preview__content"> <?php the_excerpt(); ?> </div>
    </a>
  </div>
</article>