<?php 
// 3. ----------------------------------------------------------------------------------- SECTION VIDEO
    $wp_customize->add_section('honu_section_video', array(
        'title' => __('3. Video section', 'honu'),
        'description' => __('Description', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        'priority' => 160,
    ));



    // ******** SWITCH DISPLAY

    $wp_customize->add_setting('honu_display_video', array(
        'type' => 'theme_mod',
        'default' => 'No',
        'sanitize_callback' => 'honu_sanitize_select'
    ));


    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_display_control_video', array(
        'label' => __('Display', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_display_video',
        'type' => 'select',
        'choices'=> array('No' => __('No', 'honu'), 'Yes' => __('Yes', 'honu'))
    )));

    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_video', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_video', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_id_video',
    )));


    // *********  HEADLINE GENERAL VIDEO SECTION
    $wp_customize->add_setting('honu_headline_video', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Title General Section Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_video', array(
        'label' => __('Headline General Section', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_headline_video',
    )));




    // ********* VIDEO
    $wp_customize->add_setting( 'honu_video_insert', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_video', array(
        'label' => __('Place url youtube video', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_video_insert',
    )));



    // ********* IMAGE BACKGROUND

    $wp_customize->add_setting('honu_video_image_bg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));




    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_video_control_image_bg', array(
        'label' => __('Image Background', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_video_image_bg'
    )));



    // ********* SUB TITLE
    $wp_customize->add_setting('honu_subheadline_video', array(
        'type' => 'theme_mod',
        'default' => esc_html__('SubTitle General Section Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_subheadline_control_video', array(
        'label' => __('Headline General Section', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_subheadline_video',
    )));


    // ********* TEXT AREA
    $wp_customize->add_setting('honu_text_video', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_video', array(
        'label' => __('Paragraph','honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_text_video',
        'type' => 'textarea'
    )));


    // ********* BUTTON
    $wp_customize->add_setting('honu_button_video', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_control_video', array(
        'label' => __('Button video section', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_button_video',
    )));

    
    // ******** BUTTON HASH
    $wp_customize->add_setting('honu_button_hash_video', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_hash_control_video', array(
        'label' => esc_html__('Insert the link internal or external', 'honu'),
        'section' => 'honu_section_video',
        'settings' => 'honu_button_hash_video',
    )));