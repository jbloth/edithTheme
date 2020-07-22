<?php
/**
 * Header file for the Edith WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edith
 */

?>

<!DOCTYPE html>
<!-- Set site language to wp-admin language setting -->
<html <?php language_attributes();?>
  >
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <!-- hook for enqueueing styles and scripts -->
    <?php wp_head();?>

  </head>

  <!-- body_class allows to conditionally define what classes are added to the body  -->
  <body <?php body_class();?>
    >
    <div class="site">
    <div class="site-row">
      <header class="site-header">
      
        <section class="branding">
          <div class="logo-wrapper">
            <!-- Output custom logo if we have one, else output site title -->
            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
              <?php the_custom_logo(); ?>
            <?php else : ?>
              <a href="<?php echo home_url( '/' ); ?>" title="home"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>

            <!-- site description -->
            <?php if( !empty( get_bloginfo('description') )) : ?>
               <p class="branding__description"><?php bloginfo( 'description' ); ?></p>
            <?php endif; ?>
          </div>
        </section>

        <!-- main menu -->
        <section class="header-nav">
            <!-- Wrapper that becomes a modal on mobile -->
            <div class="mob-modal">
              <!-- Wrapper wt rel positioning (to abs. position modal-close trigger) -->
              <div class="mob-modal__position-relative">
                <!-- modal close trigger -->
                <span class="dashicons dashicons-no mob-modal__close-trigger"></span>
                <!-- The menu finally -->
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'edith_main_nav',
                    )
                );?>

                <!-- mobile sidebar -->
                <aside class="sidebar-mobile"> 
                  <?php get_template_part( 'sidebar', 'header' ); ?>
                </aside>  
              </div>

            </div>

        </section>

         <!-- mobile menu trigger -->
         <section class="mob-nav-and-search">
          <div class="mob-nav-trigger">   
              <a class="toggle-mob-nav" href="#">&#9776;</a>  
          </div>
          <!-- <div class="search-trigger">   
            
              <a class="toggle-search" href="#">&#9776;</a>  
          </div>
          <div class="search-container">
            <?php get_search_form(); ?>
          </div> -->
         </section>


          <!-- sidebar -->
         <section class="header-sidebar-section">   
             <aside class="sidebar"><?php get_template_part( 'sidebar', 'header' ); ?></aside> 
         </section>
         
        <!-- <section class="search"></section> -->
      </header>
