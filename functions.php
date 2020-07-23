<?php

/**
 * Edith functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Edith
 */

/**
 * Enqueue scripts and styles.
 */
function edith_scripts()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-effects-slide' );
    wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Arima+Madurai:wght@900&&family=Saira+Condensed:wght@400;700&display=swap' );
    wp_enqueue_style( 'edith-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_script( 'masonry', true );
    wp_enqueue_script( 'edith-main-js', get_theme_file_uri('/js/utils.js'), array( 'jquery' ), '1.0', true);
    wp_enqueue_style( 'dashicons' );
    wp_enqueue_script( 'edith_customizer',
        get_template_directory_uri(). '/js/customizer.js',
        array('jquery', 'customize-preview'), '', true);

    // mobile-menu
    wp_enqueue_script('mob-menu-script', get_theme_file_uri('/js/mobileMenu.js'), array( 'jquery' ) );

    // set colors to customizer values
    $change_colors_style = wp_strip_all_tags( edith_customizer_colors() );
    wp_add_inline_style( 'edith-style', $change_colors_style );
}
add_action('wp_enqueue_scripts', 'edith_scripts');

/**
 * Customizer configuration
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Change theme color support
 */
require get_template_directory() . '/inc/setColors.php';

/** ============= settings, supports, sidebars and nav ============= */

/**
 * Theme settings
 */
function edith_config()
{
    // Register menu positions
    register_nav_menus(
        array(
            'edith_main_nav' => __('Edith Main Menu', 'edith' ),
            'edith_footer_nav' => __('Edith Footer Menu', 'edith' )
        )
    );

    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'image' ) );
    add_theme_support( 'title-tag' );

    $textdomain = 'edith';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');

}
add_action('after_setup_theme', 'edith_config', 0); // last parameter: priority


/**
 * Sidebars
 */
function edith_sidebars() {
    register_sidebar(
        array(
            'name' => __( 'Header Sidebar', 'edith' ),
            'id' => 'header',
            'description' => __( 'Sidebar that appears under the header main menu', 'edith' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' =>  __( 'Footer Sidebar 1', 'edith' ),
            'id' => 'footer1',
            'description' => __( 'Sidebar that appears in the footer on the left', 'edith' ),
            'before_widget' => '<div class="footer-widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer-widget-title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => __( 'Footer Sidebar 2', 'edith' ),
            'id' => 'footer2',
            'description' => __( 'Sidebar that appears in the footer in the middle', 'edith' ),
            'before_widget' => '<div class="footer-widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer-widget-title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => __( 'Footer Sidebar 3', 'edith' ),
            'id' => 'footer3',
            'description' => __( 'Sidebar that appears in the footer on the right', 'edith' ),
            'before_widget' => '<div class="footer-widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer-widget-title">',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init', 'edith_sidebars');

/** ============= Filters ============= */

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function edith_custom_excerpt_length( $length ) {
    return 26;
}
add_filter( 'excerpt_length', 'edith_custom_excerpt_length', 999 );

/**
 * Remove archive label from archive title.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function edith_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'edith_archive_title' );
