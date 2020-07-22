<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @package Edith
 */

?>

    <footer>
        <section class="footer-sidebars">
            <div class="footer-sidebar">
                <?php 
                if (is_active_sidebar('footer1')) {                    
                    dynamic_sidebar('footer1');
                }
                ?>
            </div>
            <div class="footer-sidebar">
                <?php 
                if (is_active_sidebar('footer2')) {
                    dynamic_sidebar('footer2');
                }
                ?>
            </div>
            <div class="footer-sidebar">
                <?php 
                if (is_active_sidebar('footer3')) {
                    dynamic_sidebar('footer3');
                }
                ?>
            </div>
        </section>
        <hr class="footer-separator"/>
        <section class="footer-nav">
            <?php wp_nav_menu(
                array('theme_location' => 'edith_footer_nav')
            );?>
        </section>

        <section class="footer-copyright">
            <p class="copyright-text"><?php echo get_theme_mod('set_copyright'); ?></p>
        </section>
        
      </footer>
      </div>
      <?php wp_footer();?>

  </body>
</html>
