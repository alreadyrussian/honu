<?php if (get_theme_mod('honu_display_reviews') == "Yes") {?>
<p class="title"><?php echo get_theme_mod('honu_headline_reviews') ?></p>
<hr>
<div class="container">
    <div class="row reviews">
        <div class="reviews_box reviews_box--1 col-sm-12 col-md-12 col-lg-4">
        <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_image_review_1'));?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_image_review_1'); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_review_1') ?></h3>
        
            <p><?php echo get_theme_mod('honu_text_review_1') ?></p>
            <div class="social">
                <a href="<?php echo get_theme_mod('honu_url_firstsocial_1'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_firstsocial_1'); ?>"></i></a>
                <a href="<?php echo get_theme_mod('honu_url_secondsocial_1'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_secondsocial_1'); ?>"></i></a>
            </div>
        </div>
        <div class="reviews_box reviews_box--2 col-sm-12 col-md-12 col-lg-4">
        <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_image_review_2'));?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_image_review_2'); ?>" alt=" <?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_review_2') ?></h3>
        
            <p><?php echo get_theme_mod('honu_text_review_2') ?></p>
            <div class="social">
                <a href="<?php echo get_theme_mod('honu_url_firstsocial_2'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_firstsocial_2'); ?>"></i></a>
                <a href="<?php echo get_theme_mod('honu_url_secondsocial_2'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_secondsocial_2'); ?>"></i></a>
            </div>
        </div>
        <div class="reviews_box reviews_box--3  col-sm-12 col-md-12 col-lg-4">
        <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_image_review_3'));?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_image_review_3'); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_review_3') ?></h3>
                        
            <p><?php echo get_theme_mod('honu_text_review_3') ?></p>
            <div class="social">
                <a href="<?php echo get_theme_mod('honu_url_firstsocial_3'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_firstsocial_3'); ?>"></i></a>
                <a href="<?php echo get_theme_mod('honu_url_secondsocial_3'); ?>" target="_blank" class="social__icon"><i class="<?php echo get_theme_mod('honu_text_icon_secondsocial_3'); ?>"></i></a>
            </div>
        </div>  
    </div>
</div>

<img class="box-surf" 
    smooth-parallax=""
    base-size="elementSize"
    start-movement="-0.1"
    start-position-y ="-0.1"
    end-position-y="-1.9"
    src="<?php echo get_theme_mod('honu_image_scroll_reviews'); ?>"
    >
<?php }; ?>
