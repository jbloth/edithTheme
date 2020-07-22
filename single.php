<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edith
 */

get_header();?>
    <main>
        <section class="post-main-content">
          <?php 
            while ( have_posts() ): 
              the_post(); 
              get_template_part( 'template-parts/content', 'single');

              ?>
                <div class="post-pagination-links">
                  <div class="pagination-link pagination-link--prev"><?php next_post_link( '&laquo; %link' ); ?></div>
                  <div class="pagination-link pagination-link--next"><?php previous_post_link( '%link &raquo;' ); ?></div>

                  <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<< Previous',
                    'next_text' => 'Next >>'
                  ) ); ?>
                </div> 
              <?php

              if ( comments_open() || get_comments_number() ) :
                comments_template('/comments.php');
              endif;

            endwhile;
          ?>

        </section>
      </main>
          </div>

<?php get_footer();?>