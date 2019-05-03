<?php

// ADD SECTIONS TO CUSTOMIZER 

function honu_setup_customize_register( $wp_customize ){


    
 //---------------------------------------------------------------------------------------- PANEL GROUP ----------------------------------
    $wp_customize->add_panel( 'Customize_your_landing_page',
        array(
            'title' => __( 'Customize your landing page', 'honu' ),
            'description' => __( 'Adjust your components as you wish.', 'honu' ), 
        )
        );

        require get_template_directory() . "/inc/hero.php";

        require get_template_directory() . "/inc/services.php";

        require get_template_directory() . "/inc/video.php";

        require get_template_directory() . "/inc/cta.php";

        require get_template_directory() . "/inc/reviews.php";

        require get_template_directory() . "/inc/contact.php";
    
    
 
};

add_action('customize_register', 'honu_setup_customize_register');
