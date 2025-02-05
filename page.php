<?php 
get_header();
?>

<div <?php post_class('container'); ?>>
    <div class="row s-post">
        <div class="col">
        <?php
            while (have_posts()): the_post();
                $default_attr = array(
                    'class' => "img-fluid s-post__img",
                );
                echo get_the_post_thumbnail($post->ID, 'large', $default_attr);
                ?>
                <h1 class="s-post__title"><?php the_title(); ?></h1> 
                <?php 
                the_content();
                wp_link_pages();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php
if (comments_open()):
    comments_template();
endif;
?>
<?php
get_footer();
?>