<?php 
//The style of the search form
?>

<form role="search" method="get" class="search-form search-custom" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'honu' ); ?></span>
	</label>
	
	<input type="search" id="<?php $unique_id = esc_attr(uniqid('search-form-')); echo $unique_id ?>" class="search-field search-custom__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'honu' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<i class="fa fa-search search-custom__icon"></i>
	<button type="submit" class="search-submit search-custom__submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'honu' ); ?></span></button>
</form>
