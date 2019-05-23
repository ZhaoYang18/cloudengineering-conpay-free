<?php


function themepark_init_css() {

if ( !is_admin()) {
	   wp_deregister_script('jquery');
	   wp_register_script( 'jquery', get_template_directory_uri() ."/js/jquery-2.1.1.min.js"  );
	   wp_enqueue_script('jquery');
	     wp_deregister_script('swiper2');
	   wp_register_script( 'swiper2',get_template_directory_uri() ."/js/swiper4.min.js");
	   wp_enqueue_script('swiper2');
	
	    wp_deregister_script('script');
	   wp_register_script( 'script',get_template_directory_uri() ."/js/script.js",false, '', true );
	   wp_enqueue_script('script');
	
	    wp_deregister_script('jquery_form');
	   wp_register_script( 'jquery_form',get_template_directory_uri() ."/js/jquery.form.js",false, '', true );
	   wp_enqueue_script('jquery_form');
	   
	   

	
	
	
	

	   
	   
	   wp_deregister_style('swiper');
	   wp_register_style( 'swiper', get_template_directory_uri() .'/css/swiper.min.css');
	   wp_enqueue_style('swiper');
	   
	    wp_deregister_style('stylesheet');
	   wp_register_style( 'stylesheet', get_template_directory_uri() .'/style.css');
	   wp_enqueue_style('stylesheet');
	   
	   
	 
	   wp_deregister_style('animatio');
	   wp_register_style( 'animatio', get_template_directory_uri() .'/css/animatio.css');
	   wp_enqueue_style('animatio');
	   
	    
	     wp_deregister_style('modles');
	   wp_register_style( 'modles', get_template_directory_uri() .'/css/modles.css');
	   wp_enqueue_style('modles');
	   

	}}

add_action('wp_print_styles', 'themepark_init_css',0,10);


