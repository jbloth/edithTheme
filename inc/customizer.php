<?php  

/* ---- register customizer controls and settings ---- */
function edith_customizer ( $wp_customize){

    // Copyright 
    $wp_customize-> add_section( 'sec_copyright', array(
        'title' => __( 'Copyright', 'edith'),
        'description' => 'Type your copyright text here.'
    ));

    $wp_customize-> add_setting( 'set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright X - All rights reserved.',
        'sanitize_callback' => 'esc_attr'
    ));

    $wp_customize-> add_control( 'ctrl_copyright', array(
        'label' => __( 'Copyright Information', 'edith'),
        'description' => 'Type your copyright text here',
        'section' => 'sec_copyright', 
        'settings' => 'set_copyright',
        'type' => 'text'
    ));

    /* ======== Colors ======== */
    $wp_customize->add_section( 'cd_colors' , array(
        'title'      => __( 'Colors', 'edith'),
        'priority'   => 30,
    ));

    // background color
    $wp_customize->add_setting( 'main_background_color' , array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
        //'transport'   => 'postMessage', // call function from customizer.js setting is changed
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'main_background_color', array(
            'label'      => __( 'Background Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'main_background_color',
        ) 
    ));

    // archive/blog background color
    $wp_customize->add_setting( 'archive_background_color' , array(
        'default'     => '#f5f5ed',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'archive_background_color', array(
            'label'      => __( 'Archive/Blog Background Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'archive_background_color',
        ) 
    ));

    // main text color
    $wp_customize->add_setting( 'main_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
        // 'transport'   => 'postMessage'
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'main_text_color', array(
            'label'      => __( 'Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'main_text_color',
        ) 
    ));

    // archive titles text color
    $wp_customize->add_setting( 'archive_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'archive_text_color', array(
            'label'      => __( 'Archive Headings Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'archive_text_color',
        ) 
    ));

    // secondary text color
    $wp_customize->add_setting( 'secondary_text_color' , array(
        'default'     => '#6f6f6f',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'secondary_text_color', array(
            'label'      => __( 'Secondary (Lighter) Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'secondary_text_color',
        ) 
    ));

    // link text color
    $wp_customize->add_setting( 'link_text_color' , array(
        'default'     => '#6f6f6f',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'link_text_color', array(
            'label'      => __( 'Link Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'link_text_color',
        ) 
    ));

    // link hover color
    $wp_customize->add_setting( 'link_hover_color' , array(
        'default'     => '#c47156',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
            'label'      => __( 'Link Hover Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'link_hover_color',
        ) 
    ));

    // active menu item text color
    $wp_customize->add_setting( 'highlight_color' , array(
        'default'     => '#f58e6d',
        'sanitize_callback' => 'sanitize_hex_color', // Use sanitizer bc sometimes the hash is omitted from the color
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'highlight_color', array(
            'label'      => __( 'Highlight Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'highlight_color',
        ) 
    ));

    // header background color
    $wp_customize->add_setting( 'header_background_color' , array(
        'default'     => '#f5f5ed',
        'sanitize_callback' => 'sanitize_hex_color',
       // 'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
            'label'      => __( 'Header Background Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'header_background_color',
        ) 
    ));

    // header text color
    $wp_customize->add_setting( 'header_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color',
        // 'transport'   => 'postMessage'
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
            'label'      => __( 'Header Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'header_text_color',
        ) 
    ));

    // header menu hover color
    $wp_customize->add_setting( 'header_menu_hover_color' , array(
        'default'     => '#c47156',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'header_menu_hover_color', array(
            'label'      => __( 'Header Menu and Link Hover Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'header_menu_hover_color',
        ) 
    ));

    // footer background color
    $wp_customize->add_setting( 'footer_background_color' , array(
        'default'     => '#f5f5ed',
        'sanitize_callback' => 'sanitize_hex_color',
        // 'transport'   => 'postMessage', 
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
            'label'      => __( 'Footer Background Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'footer_background_color',
        ) 
    ));

    // footer text color
    $wp_customize->add_setting( 'footer_text_color' , array(
        'default'     => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color',
        // 'transport'   => 'postMessage'
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
            'label'      => __( 'Footer Text Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'footer_text_color',
        ) 
    ));

    // footer menu hover color
    $wp_customize->add_setting( 'footer_menu_hover_color' , array(
        'default'     => '#c47156',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'footer_menu_hover_color', array(
            'label'      => __( 'Footer Menu and Link Hover Color', 'edith'),
            'section'    => 'cd_colors',
            'settings'   => 'footer_menu_hover_color',
        ) 
    ));
}

add_action( 'customize_register', 'edith_customizer');

