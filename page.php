<?php
/**
 * The main template file
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edith
 */

get_header();?>
    <main>
        <section class="main-content">
          <?php 
          if( have_posts() ):
            while ( have_posts() ): the_post(); 
            ?>

              <article class="post-preview">
                <h1 class="post-preview__title"> <?php the_title(); ?> </h1>
                <div class="post-preview__content"> <?php the_content(); ?> </div>
              </article>
              
            <?php 
            endwhile;
          else: 
          ?>

        <p><?php _e( 'Nothing to see here.', 'edith'); ?></p>

          <?php endif; ?>
        </section>
      </main>
          </div>

<?php get_footer();?>
