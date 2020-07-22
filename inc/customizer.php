<?php  

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
}

add_action( 'customize_register', 'edith_customizer');