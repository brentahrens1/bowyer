<?php 

// STYLE SHEETS AND JS SCRIPTS

function scripts() 
{   
    wp_register_style('style-font', get_template_directory_uri() . '/fonts.css', [], 1, 'all');
    wp_enqueue_style('style-font');
    
    wp_register_style('style', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');

// PROJECTS POSTS CUSTOM POSTS TYPE

function project_post_types() {
    register_post_type( 'project', array(
        'has_archive' => true,
        'public' => true,
        'taxonomies'  => array( 
            'category' 
        ),
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Project Posts'
        ),
        'menu_icon' => 'dashicons-text-page'
    ));
}

add_action('init', 'project_post_types');

function bowyer_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
}

add_action('after_setup_theme', 'bowyer_features');