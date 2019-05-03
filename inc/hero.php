<?php 
// 1. ----------------------------------------------------------------------------------- SECTION HERO
    $wp_customize->add_section('honu_section_hero', array(
        'title' => __('1. Hero section', 'honu'),
        'description' => __('Description', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        'priority' => 160,
    ));

    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_hero', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_hero', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_hero',
        'settings' => 'honu_id_hero',
    )));



    // ******** HEADLINE GENERAL HERO SECTION
    $wp_customize->add_setting('honu_headline_hero', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Title Hero Section', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_hero', array(
        'label' => __('Headline Hero Section', 'honu'),
        'section' => 'honu_section_hero',
        'settings' => 'honu_headline_hero',
    )));



    // ******** TEXT AREA HERO
    $wp_customize->add_setting('honu_text_hero', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Hero Section Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_stext_control_hero', array(
        'label' => __('Headline General Section', 'honu'),
        'section' => 'honu_section_hero',
        'settings' => 'honu_text_hero',
        'type' => 'textarea'
    )));


    // ******** BUTTON
    $wp_customize->add_setting('honu_button_hero', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_control_hero', array(
        'label' => __('Button text hero section', 'honu'),
        'section' => 'honu_section_hero',
        'settings' => 'honu_button_hero',
    )));


    // ******** BUTTON HASH
    $wp_customize->add_setting('honu_button_hash_hero', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_control_hash_hero', array(
        'label' => esc_html__('Insert the link internal or external', 'honu'),
        'section' => 'honu_section_hero',
        'settings' => 'honu_button_hash_hero',
    )));