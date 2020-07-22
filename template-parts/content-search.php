<article <?php post_class('masonry-item post-preview'); ?>>
  <div class="post-preview__text-container">
      
    <a href="<?php the_permalink(); ?>">
        <?php if ('post' == get_post_type() ) : ?>
            <p class="post-preview__date"> <?php echo get_the_date(); ?> </p>
        <?php endif; ?>
        <h3 class="post-preview__title"> <?php the_title(); ?>  </h3>
        <div class="post-preview__content"> <?php the_excerpt(); ?> </div>
    </a>
  </div>
</article>