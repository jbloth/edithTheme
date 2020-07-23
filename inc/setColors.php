<?php
/**
 * Change colors regarding user choices in customizer
 *
 * @package Edith
 */


/* ---- change css according to settings ---- */
function edith_customizer_colors(){

    /**
     * Get color settings
     */

    /* body/main colors */
    $main_background_color = get_theme_mod('main_background_color', '#ffffff');
    $main_text_color = get_theme_mod('main_text_color', '#2f2f2f');
    $secondary_text_color = get_theme_mod('secondary_text_color', '#6f6f6f');
    $link_text_color = get_theme_mod('link_text_color', '#6f6f6f');
    $link_hover_color = get_theme_mod('link_text_color', '#c47156');
    $highlight_color = get_theme_mod('highlight_color', '#f58e6d');

    /* Archive colors */
    $archive_background_color = get_theme_mod('archive_background_color', '#f5f5ed');
    $archive_text_color = get_theme_mod('archive_text_color', '#2f2f2f');

    /* header colors */
    $header_background_color = get_theme_mod('header_background_color', '#f5f5ed');
    $header_text_color = get_theme_mod('header_text_color', '#2f2f2f');
    $header_menu_hover_color = get_theme_mod('header_menu_hover_color', '#c47156');

    /* footer colors */
    $footer_background_color = get_theme_mod('footer_background_color', '#f5f5ed');
    $footer_text_color = get_theme_mod('footer_text_color', '#2f2f2f');
    $footer_menu_hover_color = get_theme_mod('footer_menu_hover_color', '#c47156');

    /**
     * Generate CSS
     */
    $change_colors_style = '

        /* ------- main background color ------- */
        body,
        .post-preview__text-container,
        input,
        textarea { 
            background-color: '.esc_attr( $main_background_color ).'; 
        }

        .image-post:hover .post-preview__title-container .post-preview__title {
            color: '.esc_attr( $main_background_color ).';
            z-index: 10;
        }

        /* ------- main text color ------- */
        body,
        button, 
        input:not([type=submit]), 
        optgroup, 
        select, 
        textarea,
        .post-preview__title,
        .post-preview__content,
        .post-preview__text-container p,
        .post__category ul.post-categories li,
        .post__category ul.post-categories li a { 
            color: '.esc_attr( $main_text_color ).'; 
        }

        button, input, optgroup, select, textarea {
            border: 2px solid '.esc_attr( $main_text_color ).';
        } 

        /* ------- secondary text color ------- */
        input::placeholder,
        .post-preview__text-container .post-preview__date { 
            color: '.esc_attr( $secondary_text_color ).'; 
        }

        /* ------- link text color ------- */
        a {
            color: '.esc_attr( $link_text_color ).';
        }

        /* ------- link hover color ------- */
        a:hover {
            color: '.esc_attr( $link_hover_color ).';
        }

        /* ------- archive background color ------- */
        .blog main, 
        .archive main, 
        .search main {
            background-color: '.esc_attr( $archive_background_color ).'; 
        }

        /* ------- archive text color ------- */
        .search-resaults__main,
        .search-results__search-input-row,
        .search-results__title,
        .archive-titles,
        .blog .nav-links,
        .blog .nav-links a,
        .archive .nav-links,
        .archive .nav-links a,
        .search-results .nav-links,
        .search-results .nav-links a,
        .archive-title {
            color: '.esc_attr( $archive_text_color ).'; 
        }

        /* ------- header background color ------- */
        .site-header,
        .mob-modal { 
            background-color: '.esc_attr( $header_background_color ).'; 
        }

        button,
        input[type="submit" i] {
            background-color: '.esc_attr( $header_background_color).';
        }

        /* ------- header text color ------- */
        .site-header,
        .menu,
        .menu .menu-item,
        .menu .menu-item a,
        .sidebar a,
        .logo-wrapper a,
        .toggle-search,
        .toggle-mob-nav { 
            color: '.esc_attr( $header_text_color ).'; 
        }

        @media only screen and (max-width: 56.25em) {
          .sidebar-mobile .widget-wrapper {
                border-top: 1px solid '.esc_attr( $header_text_color ).'; 
            }
        }

        /* ------- header menu hover color ------- */
        .menu .menu-item:hover,
        .menu .menu-item a:hover { 
            color: '.esc_attr( $header_menu_hover_color ).'; 
        }

        /* ------- footer background color ------- */
        .site-footer { 
            background-color: '.esc_attr( $footer_background_color ).'; 
        }

        /* ------- footer text color ------- */
        .site-footer,
        #menu-footer .menu-item,
        #menu-footer .menu-item a,
        .footer-sidebar ul,
        .footer-sidebar ul a,
        .copyright-text { 
            color: '.esc_attr( $footer_text_color ).'; 
        }

        .footer-separator {
            border: 1px solid '.esc_attr( $footer_text_color ).'; ;
        }

        /* ------- footer menu and link hover color ------- */
        #menu-footer .menu-item a:hover,
        .footer-sidebar ul a:hover { 
            color: '.esc_attr( $footer_menu_hover_color ).'; 
        }

        /* ------- highlight color ------- */
        .menu .current_page_item a,
        .menu .current_page_parent a {
            color: '.esc_attr( $highlight_color ).'; 
        }

        .post-preview:hover {
            border: 2px solid '.esc_attr( $highlight_color ).';
        }
    ';

    return $change_colors_style;
}
?>