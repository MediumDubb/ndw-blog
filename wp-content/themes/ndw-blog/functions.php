<?php


// enqueue styles
function ns_enqueue_styles()
{
    wp_enqueue_style( 'main-theme-styles', get_stylesheet_directory_uri() . '/frontend/scss/dist/styles.css' );
    wp_enqueue_style( 'overload-css', get_stylesheet_uri() );
}

// enqueue scripts
function ns_load_scripts()
{
    wp_enqueue_script('global', get_stylesheet_directory_uri() . '/frontend/js/global.js', array('jquery'), '1.0', true );
}

function ndwcodes_dequeue_scripts()
{

}

// enqueue admin styles and scripts
function load_admin_style()
{
    wp_enqueue_style('admin_css', get_stylesheet_directory_uri() . '/frontend/scss/dist/admin-styles.css', false, '1.0.0');
}

// hooks for adding scripts/styles to page
add_action('wp_print_scripts', 'ndwcodes_dequeue_scripts', 999);
add_action('wp_enqueue_scripts', 'ns_enqueue_styles');
add_action('wp_enqueue_scripts', 'ns_load_scripts');
add_action('admin_enqueue_scripts', 'load_admin_style');
