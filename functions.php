<?php
/*
 * Set up the content width value based on the theme's design.
 */

if (!function_exists('atheme_setup')) :
    function atheme_setup() {
        global $content_width;
        if (!isset($content_width)) { $content_width = 870; }
        // Make atheme theme available for translation.
        load_theme_textdomain('atheme', get_template_directory() . '/languages');

        // Add RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');
        add_theme_support( 'custom-logo', array(
          'height'      => 240,
          'width'       => 240,
          'flex-height' => true,
        ) );
        // register menu 
        register_nav_menus(array(
            'primary' => __('Top Header Menu', 'atheme'),
            'secondary' => __('Top Secondary Menu', 'atheme'),
        ));
        
        // Featured image support
        add_theme_support('post-thumbnails');
        add_image_size('atheme-thumbnail-image', 600, 250, true);
        
        // Switch default core markup for search form, comment form, and commen, to output valid HTML5.
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));

        add_theme_support('custom-background', array('default-color' => 'f5f5f5'));
        add_theme_support('custom-header', array('default-color' => '019779'));

        /* slug setup */
        add_theme_support('title-tag');

       
    }
endif; // atheme_setup
add_action('after_setup_theme', 'atheme_setup');

/*
* Sanitize call-back fnction
*/ 
function atheme_sanitize_text($input)
{
    return wp_kses_post( force_balance_tags( $input ) );
}

function atheme_sanitize_radio($input)
{
    return sanitize_text_field( $input );
}

/*
* Change excerpt legth
*/
add_filter( 'excerpt_length', 'atheme_excerpt_length', 999 );

function atheme_excerpt_length( $length ) {
    return 15;
}


/* * * Load TGM Library classes ** */
// require_once (dirname(__FILE__) . '/functions/class-tgm-activation.php');

/* * * Theme Default Setup ** */
require get_template_directory() . '/functions/theme-default-setup.php';

/* * * Enqueue css and js files ** */
require get_template_directory() . '/functions/enqueue-files.php';

/* * * Theme Customization ** */
require get_template_directory() . '/functions/theme-customization.php';



// Changing the_excerpt() default functionality
function atheme_allowedtags() {
  // Add custom tags to this string
  return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>'; 
}
