<?php if (get_theme_mod('honu_display_cta') == "Yes") {?>
<div style="
                background-image: linear-gradient(0deg,rgba(70, 17, 243, 0.61),rgba(36, 14, 44, 0.58)),
                url('<?php echo get_theme_mod('honu_cta_image_bg'); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: top;
                background-attachment: fixed;
                "  class="container-fluid cta">
    <div class="row">
        <div class="col-12 inner">
            <h2 class="cta__headline"><?php echo get_theme_mod('honu_cta_headline'); ?></h2>
            <p class="cta_paragraph"><?php echo get_theme_mod('honu_text_cta'); ?></p>
            <?php 
                $check_link_cta = get_theme_mod('honu_button_cta');
                if($check_link_cta){ ?>
                    <a class="btn-outline btn-outline--medium" href="<?php echo get_theme_mod('honu_button_hash_cta') ?>"><?php echo $check_link_cta ?></a>
                <?php } ?>
        </div>
    </div>
</div>
<?php }?>