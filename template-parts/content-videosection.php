<?php if (get_theme_mod('honu_display_video') == "Yes") {?>
<p class="title"><?php echo get_theme_mod('honu_headline_video') ?></p>
<hr>
<div class="no-margin container-fluid">
    <div class="row videosection">
        <div class="videosection_box videosection_box--1 col-sm-12 col-lg-6">
            <div class="iframe-container">
            <?php 
            $video_link = get_theme_mod('honu_video_insert');
            echo wp_oembed_get($video_link, array());
            ?>
            </div>
        </div>
        <div style="
                background-image: url('<?php echo get_theme_mod('honu_video_image_bg'); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                " 
                class="videosection_box videosection_box--2 col-sm-12 col-lg-6">
                <p class="sub-title"><?php echo get_theme_mod('honu_subheadline_video') ?></p>
                <span class="separate-line"></span>
                <p><?php echo get_theme_mod('honu_text_video') ?></p>
                <?php 
                $check_link = get_theme_mod('honu_button_video');
                if($check_link){ ?>
                    <a class="btn-custom btn-custom--medium" href="<?php echo get_theme_mod('honu_button_hash_video') ?>"><?php echo $check_link ?></a>
                <?php } ?>
        </div>
        
        
    </div>
</div>
<?php } ?>