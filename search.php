<?php
/**
 * The template for displaying search results
 *
 * @package Edith
 */

get_header();?>
    <main class="search-resaults__main">
        <section class="main-content">
          <div class="search-results__search-input-row">
              <div class="search-results__search-form-container">
                <?php get_search_form(); ?> 
							</div>
          </div>

					<h2 class="search-results__title"><?php _e( 'Search results for: ', 'edith'); ?><?php echo get_search_query(); ?></h2>

          <?php if( have_posts() ): ?>
            <div class="masy-grid">
              <div class="masy-grid__grid-sizer"></div>
              <div class="masy-grid__gutter-sizer"></div>
              <?php
                while ( have_posts() ):
                  the_post(); 
                  get_template_part( 'template-parts/content', 'search');
                endwhile;
              ?>
            </div>

            <div class="pagination-links">
              <?php the_posts_pagination( array(
                  'mid_size'  => 2,
                  'prev_text' => __( '<< Previous', 'edith' ),
                  'next_text' => __( 'Next >>', 'edith' )
              ) ); ?>
            </div> 

          <?php else: ?>
            <p><?php _e( 'Nothing found, sorry.', 'edith'); ?></p>
          <?php endif; ?>
        </section>
    </main>
  </div> <!-- Closes site-row from header -->


<?php get_footer();?>
