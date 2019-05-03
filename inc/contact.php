<?php 
// 6. ----------------------------------------------------------------------------------- CONTACT SECTION
    $wp_customize->add_section('honu_section_contact', array(
        'title' => __('6. Contact section', 'honu'),
        'description' => __('Description', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        
    ));


    // SWITCH DISPLAY
    $wp_customize->add_setting('honu_display_contact', array(
        'type' => 'theme_mod',
        'default' => 'No',
        'sanitize_callback' => 'honu_sanitize_select'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_display_control_contact', array(
        'label' => __('Display', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_display_contact',
        'type' => 'select',
        'choices'=> array('No' => __('No', 'honu'), 'Yes' => __('Yes', 'honu'))
    )));

    
    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_contact', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_contact', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_id_contact',
    )));


    //CONTACT BACKGROUND 
    $wp_customize->add_setting('honu_contact_image_bg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_contact_control_image_bg', array(
        'label' => __('Image Background', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_image_bg'
    )));
    

    //CONTACT SHORTCODE
    $wp_customize->add_setting('honu_contact_shortcode', array(
        'type' => 'theme_mod',
        'default' => __('Shortcode', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
        
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_shortcode', array(
        'label' => __('Insert contact form 7 shortcode without quotes around id and title', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_shortcode'
    )));

    //CONTACT HEADLINE
    $wp_customize->add_setting('honu_contact_headline', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Title Contact Section', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_headline', array(
        'label' => __('Headline', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_headline'
    )));

    
    // CONTACT HEADLINE RIGHT SECTION
    $wp_customize->add_setting('honu_contact_headline2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline contact right side', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_headline2', array(
        'label' => __('Information', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_headline2',
        
    )));

    // CONTACT SUBHEADLINE RIGHT SECTION
    $wp_customize->add_setting('honu_contact_subheadline', array(
        'type' => 'theme_mod',
        'default' => esc_html__('SubHeadline contact right side', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_subheadline', array(
        'label' => __('How to reach us', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_subheadline',
        
    )));


    // ******** ICON CONTACT 1
    $wp_customize->add_setting('honu_icon_contact_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fas fa-map-marked-alt', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_icon_control_contact_1', array(
        'label' => __('Social Icon Contact 1', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_icon_contact_1',
    )));


    // TEXT ICON CONTACT 1
    $wp_customize->add_setting('honu_contact_social_text1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Arched Rock Beach, California', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_text1', array(
        'label' => __('Put your text here', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_social_text1',
        
    )));


    // ******** ICON CONTACT 2
    $wp_customize->add_setting('honu_icon_contact_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fas fa-phone', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_icon_control_contact_2', array(
        'label' => __('Social Icon Contact 2', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_icon_contact_2',
    )));

    // TEXT ICON CONTACT 2
    $wp_customize->add_setting('honu_contact_social_text2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('+1-202-555-0179', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_text2', array(
        'label' => __('Put your text here', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_social_text2',
        
    )));


    // ******** ICON CONTACT 3
    $wp_customize->add_setting('honu_icon_contact_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fas fa-envelope', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_icon_control_contact_3', array(
        'label' => __('Social Icon Contact 3', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_icon_contact_3',
    )));
    

    // TEXT ICON CONTACT 3
    $wp_customize->add_setting('honu_contact_social_text3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('info@honu.com', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_contact_control_text3', array(
        'label' => __('Put your text here', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_social_text3',
        
    )));


    // IMAGE BACGROUND
    $wp_customize->add_setting('honu_contact_image_bg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image' 
    ));




    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_contact_control_image_bg', array(
        'label' => __('Image Background', 'honu'),
        'section' => 'honu_section_contact',
        'settings' => 'honu_contact_image_bg'
    )));