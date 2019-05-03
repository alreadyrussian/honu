<?php

// require Customization API
require get_template_directory() . "/inc/customizer.php";

// require TGM Plugin Activation
require_once get_template_directory() . "/inc/tgm/class-tgm-plugin-activation.php";
require_once get_template_directory() . "/inc/tgm/required-plugins.php";


// Load JS and CSS files
function honu_load_scripts(){

    // JS FILES
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-popper-js',  get_template_directory_uri() . '/js/bootstrap.bundle.min.js', '4.3.1', 
    array('jquery'), true);
    wp_enqueue_script('smooth-parallax', get_template_directory_uri() . '/js/smooth-parallax.min.js', '1.1.2', 
    array(''), true);
    wp_enqueue_script('honu-JS', get_template_directory_uri() . '/js/honu.js', null, 
    array('jquery'), true);
    

    // HONU CSS THEME FILE
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
    array() , '4.3.1' , 'all');
    wp_enqueue_style('awesome-font', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css',
    array() , '5.8.1' , 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:700',
    array() , null , 'all');
    wp_enqueue_style('honu', get_template_directory_uri() . '/style.css', array() , null, 'all');
};

add_action('wp_enqueue_scripts', 'honu_load_scripts');


// Customizer CSS
function honu_enqueue_customizer_stylesheet() {
	wp_register_style( 'honu-customizer', get_template_directory_uri() . '/inc/customize.css', array() , '0.0.1' , 'all');
	wp_enqueue_style( 'honu-customizer' );
}
add_action( 'customize_controls_print_styles', 'honu_enqueue_customizer_stylesheet' );


// CONTENT WIDTH
if ( ! isset( $content_width ) ) $content_width = 1140;

// WP_BOOTSTRAP_NAVWALKER
require_once('class-wp-bootstrap-navwalker.php');

// FILTER VIDEO OUTPUT
add_filter('oembed_result','honu_oembed_result', 10, 3);
function honu_oembed_result($html, $url, $args) {

    // $args includes custom argument
	$newargs = $args;
	// get rid of discover=true argument
	array_pop( $newargs );

	$parameters = http_build_query( $newargs );

	// Modify video parameters
	$html = str_replace( '?feature=oembed', '?feature=oembed'.'&amp;'.$parameters, $html );

    return $html;
}


function honu_config(){

    // WP MENU
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'honu'),
            'footer_menu' => __('Footer Menu', 'honu'),
        )
    );

    // THEME SUPPORT
    $args = array(
        'height' => 225,
        'width' => 3840
    );

    add_theme_support('custom-logo');
    // add_theme_support('custom-header', $args );
    add_theme_support('post-thumbnails');
    // add_theme_support('post-formats', array ('video', 'image'));
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background');
    add_theme_support( 'automatic-feed-links' );


    // Setup translation
    load_theme_textdomain('honu', get_stylesheet_directory(). '/languages'); // return child-theme path if child-theme is active
    load_theme_textdomain('honu', get_template_directory(). '/languages');

}
add_action('after_setup_theme', 'honu_config', 0);


// COMMENT REPLY
function honu_enqueue_comments_reply() {
    if( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'honu_enqueue_comments_reply' );


// EXCERPT LENGTH
function honu_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'honu_excerpt_length', 999 );


// ADD EDITOR STYLE
function honu_custom_add_editor_styles() {
    add_editor_style( 'your-custom-styles.css' );
   }
add_action( 'init', 'honu_custom_add_editor_styles' );


// ADD SHORTCODE IN TEXT WIDGET
add_filter( 'widget_text', 'do_shortcode' );

// LOGO
add_filter( 'get_custom_logo', 'honu_logo_class' );

function honu_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo', $html );

    return $html;
}



// REGISTER SIDEBAR
function honu_sidebar(){
    register_sidebar(
        array(
            'name' => __('Blog Sidebar', 'honu'),
            'id' => 'sidebar-1',
            'description' => __('This is the Blog Sidebar. Put your widget here', 'honu'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<p class="widget-title">',
            'after_title' => '</p>'

        )
    );
    register_sidebar(
        array(
            'name' => __('Single post Sidebar', 'honu'),
            'id' => 'sidebar-2',
            'description' => __('This is the Single Post Sidebar. Put your widget here', 'honu'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<p class="widget-title">',
            'after_title' => '</p>'
        )
    );

}

add_action('widgets_init','honu_sidebar');



// SINGLE PAGE

function honu_get_post_navigation(){
    // COMMENT SECTION NAV
    if(get_comment_pages_count() > 1 && get_option('page_comments')):

        require(get_template_directory(). "/template-parts/inc/honu-comment-nav.php");

    endif;

}

function honu_reverse($comments){
    return array_reverse($comments);
}

add_filter('comments_array', 'honu_reverse' );




//SELECT SANITIZATION 
function honu_sanitize_select( $input ){
    $valid = array(
        'No' => 'No', 
        'Yes' =>'Yes'
    );

    if (array_key_exists( $input, $valid) ) {
        return $input;
    } else {
        return "";
    }
}

// SANITIZE FUNCTION IMAGE
function my_sanitize_image( $input ){

    /* default output */
    $output = '';
    
    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
    
    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }
    
    return $output;
};


