    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <!-- featured image -->
        <?php if ( has_post_thumbnail() ) { ?>
            <figure class="post-img">
                <div >
                    <?php
                    the_post_thumbnail('medium_large');
                    $caption = get_the_post_thumbnail_caption();

                    if ( $caption ) {
                        ?>

                        <figcaption class="post-img__caption"><?php echo esc_html( $caption ); ?></figcaption>

                        <?php
                    }
                    ?>
                </div>
            </figure>
        <?php } ?>

        <!-- titles and meta -->
        <div class="post__title-area">
        <p class="post__date"><?php echo get_the_date(); ?></p>
        <h1 class="post__title"> <?php the_title(); ?> </h1>
        <div class="post__category"><?php echo get_the_category_list(', '); ?></div>
        </div>
        
        <!-- contents -->
        <div class="post__content"> <?php the_content(); ?> </div>

        <!-- tags -->
        <div class="post__tags"> <?php the_tags() ?> </div>
    </article>
