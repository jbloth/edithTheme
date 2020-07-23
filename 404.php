  <?php
  /**
   * The blog-archive template file
   *
   * @package Edith
   */

  get_header();?>
  <main>
    <section class="main-content-404">

      <div class="error-container">
        <h1 class="error__title"><?php _e( 'Page not found', 'edith'); ?></h1>
        <p class="error__msg"><?php _e( 'Sorry, the page you are looking for does not exist.', 'edith'); ?></p>

        <div class="error__widget-container">
            <p class="error__widget-msg"><?php _e('Looking for something specific?', 'edith'); ?></p>
            <div class="error__search-form-container">
                <?php get_search_form(); ?> 
			</div>
        </div>

        <div class="error__widget-container">
            <p class="error__widget-msg"><?php _e( 'Or maybe one of those...?', 'edith');?></p>
            <div class="error__recent-posts-container">
                <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' =>  __('Recent Posts', 'edith') , 'number' => 3)); ?> 
			</div>
        </div>
      </div>


    
    </section>
  </main>
</div> <!-- Closes site-row from header -->

<?php get_footer();?>
