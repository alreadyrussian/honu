<?php if (get_theme_mod('honu_display_contact') == "Yes") {?>
<div class="outer-contact">
    <div class="container contact">
        <div class="row ">
            <div class="col-lg-6 col-sm-12 contact__section contact__section--1">
                <p class="title-contact"><?php echo get_theme_mod('honu_contact_headline'); ?></p>
                <hr>
                <?php echo  do_shortcode(get_theme_mod('honu_contact_shortcode')); ?>
            </div>
            <div
            style="
                    background-image: url('<?php echo get_theme_mod('honu_contact_image_bg') ?>');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: bottom right
                    " 
            class="col-lg-6 col-sm-12 contact__section contact__section--2">
                <p class="top-contact"><?php echo get_theme_mod('honu_contact_subheadline'); ?></p>
                <p class="info-contact"><?php echo get_theme_mod('honu_contact_headline2'); ?></p>
                <div class="contact__section-inner">
                    <div class="contact__section-inner-icon"><i class="<?php echo get_theme_mod('honu_icon_contact_1'); ?>"></i></div>
                    <div class="contact__section-inner-text"><?php echo get_theme_mod('honu_contact_social_text1'); ?></div>
                </div>
                <div class="contact__section-inner">
                    <div class="contact__section-inner-icon"><i class="<?php echo get_theme_mod('honu_icon_contact_2'); ?>"></i></div>
                    <div class="contact__section-inner-text"><?php echo get_theme_mod('honu_contact_social_text2'); ?></div>
                </div>
                <div class="contact__section-inner">
                    <div class="contact__section-inner-icon"><i class="<?php echo get_theme_mod('honu_icon_contact_3'); ?>"></i></div>
                    <div class="contact__section-inner-text"><?php echo get_theme_mod('honu_contact_social_text3'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }; ?>