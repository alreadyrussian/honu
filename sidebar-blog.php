<?php // SIDEBAR BLOG PAGE
if(is_active_sidebar('sidebar-1')){?> 

    <div class="col-lg-3 col-md-12">
    <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
    
<?php }; ?>