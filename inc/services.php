<?php 
// 2. ----------------------------------------------------------------------------------- SECTION SERVICES
    $wp_customize->add_section('honu_section_services', array(
        'title' => __('2. Services section', 'honu'),
        'description' => __('Description', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        'priority' => 160,
    ));



    // SWITCH DISPLAY
    $wp_customize->add_setting('honu_display_services', array(
        'type' => 'theme_mod',
        'default' => 'No',
        'sanitize_callback' => 'honu_sanitize_select'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_display_control_services', array(
        'label' => __('Display', 'honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_display_services',
        'type' => 'select',
        'choices'=> array('No' => __('No', 'honu'), 'Yes' => __('Yes','honu'))
    )));


    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_services', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_services', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_id_services',
    )));
    

    // TEXT BELOW SERVICES SECTION
    $wp_customize->add_setting('honu_big_text_services', array(
        'type' => 'theme_mod',
        'default' => esc_html__('SURF', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_big_text_control_services', array(
        'label' => __('Text below Service Section','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_big_text_services',
    )));


    // TEXT BELOW SERVICES SECTION
    $wp_customize->add_setting('honu_main_headline_services', array(
        'type' => 'theme_mod',
        'default' => esc_html__('OUR SERVICES', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_main_headline_control_services', array(
        'label' => __('Main Headline Service Section','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_main_headline_services',
    )));


    // HEADLINE SERVICES 1
    $wp_customize->add_setting('honu_headline_service_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Service Text','honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_service_1', array(
        'label' => __('Headline for the first section service','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_headline_service_1',
    )));


    // IMAGE SERVICE 1
    $wp_customize->add_setting('honu_new_image_service_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_services', array(
        'label' => __('Image service 1', 'honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_new_image_service_1',
    )));

    // TEXT SERVICE 1
    $wp_customize->add_setting('honu_text_service_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_services_1', array(
        'label' => __('Paragraph Service 1','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_text_service_1',
        'type' => 'textarea'
    )));




    // HEADLINE SERVICES 2
    $wp_customize->add_setting('honu_headline_service_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Service Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_service_2', array(
        'label' => __('Headline for the second section service','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_headline_service_2',
    )));


    // IMAGE SERVICE 2
    $wp_customize->add_setting('honu_new_image_service_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_services_2', array(
        'label' => __('Image service 2','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_new_image_service_2',
        
    )));



    // TEXT SERVICE 2
    $wp_customize->add_setting('honu_text_service_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_services_2', array(
        'label' => __('Paragraph Service 2','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_text_service_2',
        'type' => 'textarea'
    )));




    // HEADLINE SERVICES 3
    $wp_customize->add_setting('honu_headline_service_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Service Text','honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_service_3', array(
        'label' => __('Headline for the third section service','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_headline_service_3',
    )));




    // IMAGE SERVICE 3
    $wp_customize->add_setting('honu_new_image_service_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_services_3', array(
        'label' => __('Image service 3','honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_new_image_service_3',
        
    )));


    // TEXT SERVICE 3
    $wp_customize->add_setting('honu_text_service_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_services_3', array(
        'label' => __('Paragraph Service 3', 'honu'),
        'section' => 'honu_section_services',
        'settings' => 'honu_text_service_3',
        'type' => 'textarea'
    )));




