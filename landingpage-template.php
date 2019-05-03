<?php
/*
Template Name: Landing Page
*/ 
?>

<?php get_header(); ?>

<!------------------------------------------------ HERO SECTION -------------------------------------------------------------------->
<section <?php post_class('jumbotron hero'); ?> style='background-image:
                                linear-gradient(rgba(110, 75, 254, 0.5), rgba(28, 19, 65, 0.8)), 
                                url("<?php the_post_thumbnail_url(); ?>");
                                background-position: center; 
                                background-repeat: no-repeat; 
                                background-size: cover;'>
    <div class="container">
        <h1 class="display-4"><?php echo get_theme_mod('honu_headline_hero'); ?> </h1>
        <span class="separate-line"></span>
        <p class="lead"><?php echo get_theme_mod('honu_text_hero'); ?></p>
        <p class="lead">
            <?php 
            $check_link = get_theme_mod('honu_button_hero');
            if($check_link){ ?>
            <a class="btn btn-primary btn-lg btn-custom btn-custom--large" href="<?php echo get_theme_mod('honu_button_hash_hero') ?>" role="button"><?php echo get_theme_mod('honu_button_hero'); ?></a>
            <?php }; ?>
        </p>
        <span class="arrow"><i class="fas fa-angle-double-down"></i></span>
    </div>
<!-- / END HERO SECTION -->
</section>



<!------------------------------------------------------- SERVICES SECTION ------------------------------------------------------------>
<section id="<?php echo get_theme_mod('honu_id_services') ?>" >
    <?php get_template_part('template-parts/content', 'services')?>
<!-- / END SERVICES SECTION -->
</section>



<!---------------------------------------------------------- VIDEO SECTION ------------------------------------------------------>
<section id="<?php echo get_theme_mod('honu_id_video') ?>" >
    <?php get_template_part('template-parts/content', 'videosection')?>
<!-- / END MAIN SECTION -->
</section>



<!------------------------------------------------------------ CTA SECTION --------------------------------------------------------->
<section id="<?php echo get_theme_mod('honu_id_cta') ?>">
    <?php get_template_part('template-parts/content', 'cta')?>
<!-- / END CTA SECTION -->
</section>


<!------------------------------------------------------------ REVIEWS SECTION --------------------------------------------------------->
<section id="<?php echo get_theme_mod('honu_id_reviews') ?>">
    <?php get_template_part('template-parts/content', 'reviews')?>
<!-- / END REVIEWS SECTION -->
</section>

<!------------------------------------------------------------ NEWS SECTION --------------------------------------------------------->
<section id="<?php echo get_theme_mod('honu_id_news') ?>">
    <?php get_template_part('template-parts/content', 'news')?>
<!-- / END NEWS SECTION -->
</section>

<!------------------------------------------------------------ CONTACT SECTION --------------------------------------------------------->
<section id="<?php echo get_theme_mod('honu_id_contact') ?>">
    <?php get_template_part('template-parts/content', 'contact')?>
<!-- / END NEWS SECTION -->
</section>



<?php get_footer(); ?>

