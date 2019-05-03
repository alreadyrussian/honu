<?php get_header(); ?>
<img src="<?php header_image(); ?>" class="img-fluid" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">


    <!-- INDEX SECTION -->
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="index">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 index__left">
                            <?php
                                $default_attr = array(
                                    'class'	=> "img-fluid",
                                );
                                echo get_the_post_thumbnail($post-> ID,'large', $default_attr); ?> 
                            </div>
                            <div class="col-lg-8 col-sm-12 index__right">
                                <a href="<?php get_permalink(); ?>"><h2 class="index__title"><?php echo get_the_title(); ?></h2></a>
                                <a class="index__date" ><?php echo get_the_date(); ?></a>
                                <a class="index__category"><?php the_category(' '); ?></a>
                                <?php the_excerpt(); ?>
                                <a class="btn-outline btn-outline--medium" href="<?php the_permalink(); ?>" role="button">Learn more</a>
                            </div>
                        </div>
                    </article> 
                    <?php  
                    endwhile;
                    ?>
                    <div class="row pag">
                        <div class="pag__left col-md-6 text-left"><?php previous_posts_link("<< Newer"); ?></div>
                        <div class="pag__right col-md-6 text-right"><?php next_posts_link("Older >>"); ?></div>
                    </div>
                    <?php
                    endif; 
                    ?>

            </div>
            
            <?php get_sidebar('blog'); ?>
        </div>
    </div>

<?php get_footer(); ?>