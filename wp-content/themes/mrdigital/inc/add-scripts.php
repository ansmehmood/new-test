<?php

// Register Styles and Scripts

function register_scripts() {
    wp_register_style( 'mystyle', get_stylesheet_directory_uri(). '/assets/css/mystyle.css' );
    wp_register_script( 'myscript', get_template_directory_uri(). '/assets/js/myscript.js' );
}

add_action( 'wp_enqueue_scripts', 'register_scripts' );

// Enqueue Styles and Scripts

function add_my_scripts() {
    wp_enqueue_style( 'mystyle' );
    wp_enqueue_script( 'myscript' );
}

add_action( 'wp_enqueue_scripts', 'add_my_scripts' );