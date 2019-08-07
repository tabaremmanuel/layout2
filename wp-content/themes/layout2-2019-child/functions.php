<?php
add_action( 'wp_enqueue_scripts', 'custom_scripts_and_styles' );

function custom_scripts_and_styles() {
   wp_enqueue_style( 'fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
   wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Lora:400,700&display=swap' );
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
   wp_enqueue_style( 'layout2', get_stylesheet_directory_uri().'/css/layout2.css' );

   wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '', true );
   wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
   wp_enqueue_script( 'global', get_stylesheet_directory_uri().'/js/global.js', array(), '', true );
}
