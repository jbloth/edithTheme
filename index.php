<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edith
 */

get_header();?>
    <main>
      <section class="main-content">
        <?php if( have_posts() ): ?>

          <div class="masy-grid">
            <div class="masy-grid__grid-sizer"></div>
            <div class="masy-grid__gutter-sizer"></div>
            <?php          
              while ( have_posts() ):
                the_post(); 
                get_template_part('template-parts/content', get_post_format());

              endwhile;
            ?>
          </div>

         <div class="pagination-links">
            <?php the_posts_pagination( array(
              'mid_size'  => 2,
              'prev_text' => '<< Previous',
              'next_text' => 'Next >>'
            ) ); ?>
          </div> 

        <?php else: ?>

          <p>Nothing to see here.</p>

        <?php endif; ?>

      </section>
    </main>
  </div> <!-- Closes site-row from header -->

<?php get_footer();?>
