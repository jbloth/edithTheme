  <?php
  /**
   * The blog-archive template file
   *
   * @package Edith
   */

  get_header();?>
  <main>
    <section class="main-content">
      <div class="archive-titles">
          <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
          <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
      </div>
      
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
