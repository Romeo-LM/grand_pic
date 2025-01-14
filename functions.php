<?php
function add_style()
{
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/src/styles/reset.css', false);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('switzer-style', get_template_directory_uri() . '/src/fonts/Switzer/WEB/css/switzer.css', false);
}
add_action('wp_enqueue_scripts', 'add_style');

function add_script()
{
    wp_enqueue_script('header-js', get_template_directory_uri() . '/src/js/main-header.js', array(), false, true);

    if (is_page('Nouvelle Biere')) {
        wp_enqueue_script('new_beer-js', get_template_directory_uri() . '/src/js/main-new-beer.js', array(), false, true);
    }

    if ( is_front_page()) {
        wp_enqueue_script('index-js', get_template_directory_uri() . '/src/js/main-index.js', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'add_script');
