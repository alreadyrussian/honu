<?php 
// 4. ----------------------------------------------------------------------------------- CTA SECTION
    $wp_customize->add_section('honu_section_cta', array(
        'title' => __('4. CTA section', 'honu'),
        'description' => __('Description', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        
    ));


    // SWITCH DISPLAY
    $wp_customize->add_setting('honu_display_cta', array(
        'type' => 'theme_mod',
        'default' => 'No',
        'sanitize_callback' => 'honu_sanitize_select'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_display_control_cta', array(
        'label' => __('Display' , 'honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_display_cta',
        'type' => 'select',
        'choices'=> array('No' => __('No', 'honu'), 'Yes' => __('Yes', 'honu'))
    )));

    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_cta', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_cta', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_id_cta',
    )));


    //CTA BACKGROUND 
    $wp_customize->add_setting('honu_cta_image_bg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_cta_control_image_bg', array(
        'label' => __('Image Background','honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_cta_image_bg'
    )));


    //CTA HEADLINE
    $wp_customize->add_setting('honu_cta_headline', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Title CTA Section','honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_cta_control_headline', array(
        'label' => __('Headline','honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_cta_headline'
    )));

    
    // TEXT AREA
    $wp_customize->add_setting('honu_text_cta', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph CTA','honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_cta', array(
        'label' => __('Paragraph','honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_text_cta',
        'type' => 'textarea'
    )));


    //BUTTON
    $wp_customize->add_setting('honu_button_cta', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_control_cta', array(
        'label' => __('Button cta section', 'honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_button_cta',
    )));


    // ******** BUTTON HASH
    $wp_customize->add_setting('honu_button_hash_cta', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_button_hash_control_cta', array(
        'label' => esc_html__('Insert the link internal or external', 'honu'),
        'section' => 'honu_section_cta',
        'settings' => 'honu_button_hash_cta',
    )));