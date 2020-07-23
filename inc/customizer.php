<?php  

/* ---- register customizer controls and settings ---- */
function edith_customizer ( $wp_customize){

    // Copyright 
    $wp_customize-> add_section( 'sec_copyright', array(
        'title' => 'Copyright',
        'description' => 'Type your copyright text here.'
    ));

    $wp_customize-> add_setting( 'set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright X - All rights reserved.',
        'sanitize_callback' => 'esc_attr'
    ));

    $wp_customize-> add_control( 'ctrl_copyright', array(
        'label' => 'Copyright Information',
        'description' => 'Type your copyright text here',
        'section' => 'sec_copyright', 
        'settings' => 'set_copyright',
        'type' => 'text'
    ));

    /* ======== Colors ======== */
    $wp_customize->add_section( 'cd_colors' , array(
        'title'      => 'Colors',
        'priority'   => 30,
    ));

    // background color
    $wp_customize->add_setting( 'main_background_color' , array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
        'transport'   => 'postMessage', // call function from customizer.js setting is changed
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'main_background_color', array(
            'label'      => 'Background Color',
            'section'    => 'cd_colors',
            'settings'   => 'main_background_color',
        ) 
    ));

    // header background color
    $wp_customize->add_setting( 'header_background_color' , array(
        'default'     => '#f5f5ed',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
            'label'      => 'Header Background Color',
            'section'    => 'cd_colors',
            'settings'   => 'header_background_color',
        ) 
    ));

    // footer background color
    $wp_customize->add_setting( 'footer_background_color' , array(
        'default'     => '#f5f5ed',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
            'label'      => 'Footer Background Color',
            'section'    => 'cd_colors',
            'settings'   => 'footer_background_color',
        ) 
    ));

     // main text color
    $wp_customize->add_setting( 'main_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
        'transport'   => 'postMessage', // call function from customizer.js setting is changed
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'main_text_color', array(
            'label'      => 'Text Color',
            'section'    => 'cd_colors',
            'settings'   => 'main_text_color',
        ) 
    ));

    // header text color
    $wp_customize->add_setting( 'header_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
            'label'      => 'Header Text Color',
            'section'    => 'cd_colors',
            'settings'   => 'header_text_color',
        ) 
    ));

    // footer text color
    $wp_customize->add_setting( 'footer_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
            'label'      => 'Footer Text Color',
            'section'    => 'cd_colors',
            'settings'   => 'footer_text_color',
        ) 
    ));
}

add_action( 'customize_register', 'edith_customizer');


/* ---- change css according to settings ---- */
function edith_customizer_css()
{
    ?>
         <style type="text/css">
            /* body/main colors */
            body { 
                background-color: <?php echo get_theme_mod('main_background_color', '#ffffff'); ?>;
                color: <?php echo get_theme_mod('main_text_color', '#2f2f2f'); ?>;  
            }

            /* header colors */
            .site-header { 
                background-color: <?php echo get_theme_mod('header_background_color', '#f5f5ed'); ?>; 
                color: <?php echo get_theme_mod('header_text_color', '#2f2f2f'); ?>;  
            }

            /* footer colors */
            footer { 
                background-color: <?php echo get_theme_mod('footer_background_color', '#f5f5ed'); ?>;
                color: <?php echo get_theme_mod('header_text_color', '#2f2f2f'); ?>;   
            }
         </style>
    <?php
}
add_action( 'wp_head', 'cd_customizer_css');
