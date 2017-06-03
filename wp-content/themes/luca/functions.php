<?php

function register_styles ()
{
	wp_register_style('sintony-bold-webfont',get_template_directory_uri() . 
		'/fonts/sintony-bold-webfont.ttf.css');
		wp_enqueue_style( 'sintony-bold-webfont' );
		
	wp_register_style('sintony-regular-webfont',get_template_directory_uri() . 
		'/fonts/sintony-regular-webfont.ttf.css');
		wp_enqueue_style( 'sintony-regular-webfont' );	
		
	wp_register_style('style',get_template_directory_uri() . 
		'/style.css');
		wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'register_styles');

function load_my_script() 
{
	wp_deregister_script('jquery');
	wp_register_script('jquery',get_template_directory_uri() .
	'/js/jquery.modal.min.js');
	wp_enqueue_script( 'jquery' );
	
	wp_deregister_script('jquery1');
	wp_register_script('jquery1',get_template_directory_uri() .
	'/js/jquery-1.10.2.min.js');
	wp_enqueue_script( 'jquery1' );
	
	wp_deregister_script('jquery2');
	wp_register_script('jquery2',get_template_directory_uri() .
	'/js/jquery-ui-1.10.4.custom.min.js');
	wp_enqueue_script( 'jquery2' );
	
	wp_deregister_script('Sscript');
	wp_register_script('Sscript',get_template_directory_uri() .
	'/js/script.js');
	wp_enqueue_script( 'Sscript' );
	
	wp_deregister_script('jquery3');
	wp_register_script('jquery3',get_template_directory_uri() .
	'/js/threesixty.min.js');
	wp_enqueue_script( 'jquery3' );
	
	wp_deregister_script('jquery4');
	wp_register_script('jquery4',get_template_directory_uri() .
	'/js/unslider.min.js');
	wp_enqueue_script( 'jquery4' );
}
add_action('wp_enqueue_scripts', 'load_my_script');