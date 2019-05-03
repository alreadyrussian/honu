<?php get_header(); ?>

    <!-- ARCHIVE SECTION -->
    <div class="container archive">
        <div class="row">
            <div class="col">
                <span class="archive__head">
                    <?php
                    the_archive_title('<h3>','</h3>');
                    the_archive_description();
                    ?>
                </span>
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 archive__left">
                            <?php
                                $default_attr = array(
                                    'class'	=> "img-fluid",
                                );
                                echo get_the_post_thumbnail($post-> ID,'large', $default_attr); ?> 
                            </div>
                            <div class="col-lg-8 col-sm-12 archive__right">
                                <a href="<?php echo get_permalink(); ?>"><h2 class="archive__title"><?php echo get_the_title(); ?></h2></a>
                                <a class="archive__date" ><?php echo get_the_date(); ?></a>
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
            <?php get_sidebar('blog'); ?>
        </div>
    </div>

<?php get_footer(); ?>