<?php

function learn_wp_styles()
{
    wp_enqueue_style('learnwp-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/output.css', [], time());
}

add_action('wp_enqueue_scripts', 'learn_wp_styles');


add_theme_support('post-thumbnails');



/* ==================================
            Project Post Type
======================================
*/
function register_project_post_type()
{


    $args = array(
        'labels' => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
            'add_new'       => 'Add New Project',
            'add_new_item'  => 'Add New Project',
            'new_item'      => 'New Project',
            'edit_item'     => 'Edit Project',
            'view_item'     => 'View Project',
            'all_items'     => 'All Project',

        ),

        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-menu-alt3',
    );

    register_post_type('project', $args);
}

add_action('init', 'register_project_post_type');



/*
======================================
            Gallery Post Type
======================================
*/


function register_gallery_post_type()
{


    $args = array(
        'labels' => array(
            'name'          => 'Gallery',
            'singular_name' => 'Gallery',
            'add_new'       => 'Add New Gallery',
            'add_new_item'  => 'Add New Gallery',
            'new_item'      => 'New Gallery',
            'edit_item'     => 'Edit Gallery',
            'view_item'     => 'View Gallery',
            'all_items'     => 'All Gallery',

        ),

        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery',
    );

    register_post_type('gallery', $args);
}

add_action('init', 'register_gallery_post_type');




function learnwp_register_nav_menu()
{
    register_nav_menus(array(
        'main_menu' => __('Main Menu'),
    ));
}
add_action('after_setup_theme', 'learnwp_register_nav_menu');









// themes -> 'learnwp-theme'

// -index.php
// -style.php
// -functiions.php

// header.php 
// footer.php 

// post type 
//     -code 
//     -SCF 

