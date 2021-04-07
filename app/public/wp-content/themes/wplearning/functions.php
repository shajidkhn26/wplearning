<?php
/*
* Theme Functions File
*/
function htm2wp_theme_setup()
{
add_theme_support( 'custom-logo' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'home-featured', 680,400, array('center','center') );

add_theme_support( 'automatic-feed-links' );

register_nav_menus( array( 

	'primary' =>  __('Primary Menu', 'htm2wp') 
));


};

add_action('after_setup_theme','htm2wp_theme_setup');

function htm2wp_scripts()
{
wp_enqueue_style('style', get_stylesheet_uri() );
wp_enqueue_script('jquery');
wp_enqueue_script('html2wp-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
wp_enqueue_script('html2wp-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
wp_enqueue_script('html2wp-util', get_template_directory_uri(). '/assets/js/util.js');
wp_enqueue_script('html2wp-main', get_template_directory_uri(). '/assets/js/main.js.js');

}
add_action( 'wp_enqueue_scripts','htm2wp_scripts');




?>