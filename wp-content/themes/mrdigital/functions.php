<?php

// Register Style and Script

require get_template_directory(). '/inc/add-scripts.php';

add_theme_support( 'menus' );

register_nav_menus(
    array(
        'top_menu' => 'Header Menu'
    )
);