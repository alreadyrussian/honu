<?php 
// 5. ----------------------------------------------------------------------------------- SECTION REVIEWS
    $wp_customize->add_section('honu_section_reviews', array(
        'title' => __('5. Reviews section', 'honu'),
        'description' => __('Insert the reviews of your customers', 'honu'),
        'panel' => 'Customize_your_landing_page', 
        
    ));



    // ******** SWITCH DISPLAY
    $wp_customize->add_setting('honu_display_reviews', array(
        'type' => 'theme_mod',
        'default' => 'No',
        'sanitize_callback' => 'honu_sanitize_select'
    ));



    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_display_control_reviews', array(
        'label' => __('Display', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_display_reviews',
        'type' => 'select',
        'choices'=> array('No' => 'No', 'Yes' => 'Yes')
    )));


    // ID SERVICES SECTION
    $wp_customize->add_setting('honu_id_reviews', array(
        'type' => 'theme_mod',
        'default' => "",
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_id_control_reviews', array(
        'label' => __('Insert ID for the section','honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_id_reviews',
    )));

    // ******** HEADLINE GENERAL REVIEW
    $wp_customize->add_setting('honu_headline_reviews', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Title General Section Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_reviews', array(
        'label' => __('Headline Reviews Section', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_headline_reviews',
    )));






    // ******** HEADLINE REVIEW 1
    $wp_customize->add_setting('honu_headline_review_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Service Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_review_1', array(
        'label' => __('1.Headline for the first section review', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_headline_review_1',
    )));





    // ******** IMAGE REVIEW 1
    $wp_customize->add_setting('honu_image_review_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image'
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_review_1', array(
        'label' => __('Image review 1','honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_image_review_1',
        
    )));

    // ******** TEXT REVIEW 1
    $wp_customize->add_setting('honu_text_review_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_review_1', array(
        'label' => __('Paragraph Review 1', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_review_1',
        'type' => 'textarea'
    )));

    // ******** ICON REVIEW 1
    $wp_customize->add_setting('honu_text_icon_firstsocial_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-instagram', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_firstsocial_1', array(
        'label' => __('Social Icon Review 1', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_firstsocial_1',
    )));


    // ******** ICON REVIEW 2
    $wp_customize->add_setting('honu_text_icon_secondsocial_1', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-linkedin', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_secondsocial_1', array(
        'label' => __('Social Icon Review 1', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_secondsocial_1',
    )));


    // ********* URL ICON 1
    $wp_customize->add_setting( 'honu_url_firstsocial_1', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_firstsocial_1', array(
        'label' => __('Place url for your first social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_firstsocial_1',
    )));

    // ********* URL ICON 2
    $wp_customize->add_setting( 'honu_url_secondsocial_1', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_secondsocial_1', array(
        'label' => __('Place url for your second social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_secondsocial_1',
    )));




//-------------------------------------------------------------------------------------------------------------------------

    // ******** HEADLINE REVIEW 2
    $wp_customize->add_setting('honu_headline_review_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Review Text 2', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_review_2', array(
        'label' => __('2. Headline for the second section review', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_headline_review_2',
    )));


    // ******** IMAGE REVIEW 2
    $wp_customize->add_setting('honu_image_review_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image'
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_review_2', array(
        'label' => __('Image review 2', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_image_review_2',
        
    )));



    // ******** TEXT REVIEW 2
    $wp_customize->add_setting('honu_text_review_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_review_2', array(
        'label' => __('Paragraph Review 2','honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_review_2',
        'type' => 'textarea'
    )));



    
    // ******** ICON REVIEW 1
    $wp_customize->add_setting('honu_text_icon_firstsocial_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-instagram', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_firstsocial_2', array(
        'label' => __('Social Icon Review 2', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_firstsocial_2',
    )));


    // ******** ICON REVIEW 2
    $wp_customize->add_setting('honu_text_icon_secondsocial_2', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-linkedin', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_secondsocial_2', array(
        'label' => __('Social Icon Review 2', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_secondsocial_2',
    )));


    // ********* URL ICON 1
    $wp_customize->add_setting( 'honu_url_firstsocial_2', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_firstsocial_2', array(
        'label' => __('Place url for your first social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_firstsocial_2',
    )));

    // ********* URL ICON 2
    $wp_customize->add_setting( 'honu_url_secondsocial_2', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_secondsocial_2', array(
        'label' => __('Place url for your second social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_secondsocial_2',
    )));




//-------------------------------------------------------------------------------------------------------------------------

    // ******** HEADLINE REVIEW 3
    $wp_customize->add_setting('honu_headline_review_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Headline Service Text', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_headline_control_review_3', array(
        'label' => __('3. Headline for the third section service', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_headline_review_3',
    )));




    // ******** IMAGE REVIEW 3
    $wp_customize->add_setting('honu_image_review_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image'
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_image_control_review_3', array(
        'label' => __('Image review 3', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_image_review_3',
        
    )));


    // ******** TEXT REVIEW 3
    $wp_customize->add_setting('honu_text_review_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('Example Paragraph Service', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_control_review_3', array(
        'label' => __('Paragraph Service 3', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_review_3',
        'type' => 'textarea'
    )));



    // ******** ICON REVIEW 1
    $wp_customize->add_setting('honu_text_icon_firstsocial_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-instagram', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_firstsocial_3', array(
        'label' => __('Social Icon Review 3', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_firstsocial_3',
    )));


    // ******** ICON REVIEW 2
    $wp_customize->add_setting('honu_text_icon_secondsocial_3', array(
        'type' => 'theme_mod',
        'default' => esc_html__('fab fa-linkedin', 'honu'),
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_text_icon_review_secondsocial_3', array(
        'label' => __('Social Icon Review 3', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_text_icon_secondsocial_3',
    )));

    // ********* URL ICON 1
    $wp_customize->add_setting( 'honu_url_firstsocial_3', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_firstsocial_3', array(
        'label' => __('Place url for your first social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_firstsocial_3',
    )));

    // ********* URL ICON 2
    $wp_customize->add_setting( 'honu_url_secondsocial_3', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw' 
    ));
        
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'honu_section_control_url_secondsocial_3', array(
        'label' => __('Place url for your second social icon with https protocol', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_url_secondsocial_3',
    )));


    // ********* IMAGE SCROLL EFFECT
      $wp_customize->add_setting('honu_image_scroll_reviews', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_sanitize_image'
    ));


    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'honu_control_image_scroll_reviews', array(
        'label' => __('Image Scroll Effect', 'honu'),
        'section' => 'honu_section_reviews',
        'settings' => 'honu_image_scroll_reviews'
    )));