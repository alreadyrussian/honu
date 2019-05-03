<div class="wrapper-news">
    <p class="title-news">BLOG</p>
    <hr>
    <div class="container news">
        <div class="row ">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'ignore_sticky_posts' => true
                );
                $featured = new WP_Query($args);
                if($featured -> have_posts()):
                    while($featured -> have_posts()): $featured -> the_post();
            ?>
                <article class="col-lg-4">
                    <div class="card">
                    <?php echo the_post_thumbnail('large', array( 'class' => 'card-img-flex card-img-top')); ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_category(); ?>
                            <p class="card-text"><?php echo wp_strip_all_tags( get_the_excerpt() ); ?></p>
                            <a href="<?php echo get_permalink(); ?>" class="btn-outline btn-outline--medium">CHECK IT OUT</a>
                        </div>
                    </div>
                </article>
            <?php  
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
            
        </div>
    </div>
</div>
