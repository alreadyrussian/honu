<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if (is_page_template ('landingpage-template.php')): ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <div class="container">
        <div class="navbar-brand" href="#">
            <?php the_custom_logo();?>
        </div>
        <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div class="animated-icon1"><span></span><span></span><span></span></div>
        </button>
       <?php
       if(has_nav_menu('primary')){
           wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse ',
            'container_id'    => 'navbarTogglerDemo02',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ));
       }
            
        ?>
        </div>
    </nav>
    <?php else: ?>
    <!-- NAVBAR -->
    <nav style="background:#1C1341!important" class="navbar navbar-expand-lg navbar-light bg-light"> 
        <div class="container">
        <div class="navbar-brand" href="#">
            <?php the_custom_logo();?>
        </div>
        <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
           <div class="animated-icon1"><span></span><span></span><span></span></div>
        </button>
       <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'	          =>  2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse ',
                'container_id'    => 'navbarTogglerDemo02',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        </div>
    </nav>
    <?php endif; ?>