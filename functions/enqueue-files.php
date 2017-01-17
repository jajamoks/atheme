<?php
/*
 * atheme Enqueue css and js files
 */

function atheme_enqueue_new() {
	
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap'.$suffix.'.css', array());

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome'.$suffix.'.css', array());
	
	wp_enqueue_style('atheme-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800', array());
	wp_enqueue_style('atheme-default', get_template_directory_uri() . '/css/default.css', array());
	
	wp_enqueue_style('atheme-style', get_stylesheet_uri(), array());
	
	wp_enqueue_script( 'atheme-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );

	wp_script_add_data( 'plugins', 'conditional', 'lt IE 9' );

	if (is_singular()) {
    	wp_enqueue_script("comment-reply");
    }
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap'.$suffix.'.js', array('jquery'));
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'));
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel'.$suffix.'.js', array('jquery'));
	wp_enqueue_script('atheme-script', get_template_directory_uri() . '/js/script.js', array('jquery'));
	wp_enqueue_script('atheme-menu-script', get_template_directory_uri() . '/js/menuscript.js', array('jquery'));
	wp_enqueue_script('custom-css', get_template_directory_uri() . '/js/customizer-custom-css.js', array('jquery', 'atheme_enqueue_new'));
}
add_action( 'wp_enqueue_scripts', 'atheme_enqueue_new' );

//admin style sheet
add_action( 'admin_enqueue_scripts', 'atheme_register_admin_style' );
function atheme_register_admin_style() {
	wp_register_style('atheme_custom_admin',get_template_directory_uri().'/css/custom_admin.css');
	wp_enqueue_style('atheme_custom_admin');
}
?>