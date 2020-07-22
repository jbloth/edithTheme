<article <?php post_class('masonry-item post-preview image-post'); ?>>
  <?php 
      if ( has_post_thumbnail() ) {
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
    ?>
         <a href="<?php the_permalink(); ?>">
            <div class='post-preview__img' >
             <div class="background-image" style='background-image: url("<?php echo($featured_img_url); ?>")'></div>
              <div class="post-preview__title-container">
                <h2 class="post-preview__title"><?php the_title(); ?></h2>
            </div>
          </div>
          </a>
    <?php 
      } 
    ?>
</article>