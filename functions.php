<?php
function add_style()
{
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/src/styles/reset.css', false);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('switzer-style', get_template_directory_uri() . '/src/fonts/Switzer/WEB/css/switzer.css', false);
    wp_enqueue_style('flikity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false);
    wp_enqueue_style('Fontawasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', false);

    if (is_page('Accueil')) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/src/styles/home.css', false);
    }

    if (is_page('NOS BIÈRES')) {
        wp_enqueue_style('select_beer-style', get_template_directory_uri() . '/src/styles/select_beer.css', false);
    }

    if (is_page('NOS BIÈRES')) {
        wp_enqueue_style('select_beer-style', get_template_directory_uri() . '/src/styles/select_beer.css', false);
    }

    if (is_page() && wp_get_post_parent_id(get_the_ID()) === 14) {
        wp_enqueue_style('beer-style', get_template_directory_uri() . '/src/styles/beer.css');
    }

    if (is_page('a propos')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/src/styles/about.css', false);
    }

    if (is_page('contact')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/src/styles/contact.css', false);
    }

    if (is_page('fabrication')) {
        wp_enqueue_style('manufactoring-style', get_template_directory_uri() . '/src/styles/manufactoring.css', false);
    }

    if (is_page('pour les pros')) {
        wp_enqueue_style('pro-style', get_template_directory_uri() . '/src/styles/pro.css', false);
    }

    if (is_404()) { 
        wp_enqueue_style('404-style', get_template_directory_uri() . '/src/styles/404.css', false);
    }
}
add_action('wp_enqueue_scripts', 'add_style');

function add_script()
{
    wp_enqueue_script('header-js', get_template_directory_uri() . '/src/js/main-header.js', array(), false, true);

    if (is_page('fabrication')) {
        wp_enqueue_script('fab-js', get_template_directory_uri() . '/src/js/main-fabrication.js', array(), false, true);
    }

    if (is_page('Nouvelle Biere')) {
        wp_enqueue_script('new_beer-js', get_template_directory_uri() . '/src/js/main-new-beer.js', array(), false, true);
    }

    if (is_page('a propos')) {
        wp_enqueue_script('a_propos-js', get_template_directory_uri() . '/src/js/main-apropos.js', array(), false, true);
    }

    if (is_front_page()) {
        wp_enqueue_script('index-js', get_template_directory_uri() . '/src/js/main-index.js', array(), false, true);
        wp_enqueue_script('lotties-js', "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js", array(), false, true);
        wp_enqueue_script('flikity-js', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'add_script');
