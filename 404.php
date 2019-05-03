<?php 
/*
@package honu
*/
?>
<?php
get_header();
?>

	
<section class="container error">
    <div class="error-height">
        <header class="error__header">
            <h1 class="error__title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'honu' ); ?></h1>
        </header>
        <div class="error__message">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'honu' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
	

<?php
get_footer();