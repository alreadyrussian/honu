<?php if (get_theme_mod('honu_display_services') == "Yes") {?>
<span class="surf-title"><?php echo get_theme_mod('honu_big_text_services'); ?></span>
<p class="title"><?php echo get_theme_mod('honu_main_headline_services') ?></p>
<hr>
<div class="container">
    <div class="row service">
        <div class="service_box service_box--1  col-lg-4">
            <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_new_image_service_1'));?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_new_image_service_1'); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_service_1') ?></h3>
            <p><?php echo get_theme_mod('honu_text_service_1') ?></p>
        </div>
        <div class="service_box service_box--2  col-lg-4">
            <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_new_image_service_2'));?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_new_image_service_2'); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_service_2') ?></h3>
            <p><?php echo get_theme_mod('honu_text_service_2') ?></p>
        </div>
        <div class="service_box service_box--3  col-lg-4">
            <?php $attachment_id = attachment_url_to_postid( get_theme_mod('honu_new_image_service_3'));            ?>
            <img class="img-fluid" src="<?php echo get_theme_mod('honu_new_image_service_3'); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
            <h3><?php echo get_theme_mod('honu_headline_service_3') ?></h3>
            <p><?php echo get_theme_mod('honu_text_service_3') ?></p>
        </div>
    </div>
</div>
<?php }; ?>