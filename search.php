<?php get_header(); ?>
<img src="<?php header_image(); ?>" class="img-fluid" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">


    <!-- SEARCH SECTION -->
    <div class="container">
        <div class="row">
            <div class="col s">
                <h2 class="s__heading">Search results for: <span class="s__result"> <?php echo get_search_query(); ?> </span> </h2>
                <?php get_search_form(); ?>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="index">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 index__full">
                                <a href="<?php echo get_permalink(); ?>"><h2 class="index__title"><?php echo get_the_title(); ?></h2></a>
                                <a class="index__date" ><?php echo get_the_date(); ?></a>
                                <span class="index__category"><?php the_category(', '); ?></span>
                                <?php the_excerpt(); ?>
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
        </div>
    </div>

<?php get_footer(); ?>