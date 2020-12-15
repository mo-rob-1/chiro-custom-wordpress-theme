<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function chiro_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'chiro_features');

function chiro_child_theme_files() {
    wp_enqueue_style('google-main-font', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Signika&display=swap');
    wp_enqueue_style('hamburgers', get_stylesheet_directory_uri() . '/node_modules/hamburgers/dist/hamburgers.css');
    wp_enqueue_style('flickity', get_stylesheet_directory_uri() . '/node_modules/flickity/dist/flickity.min.css');
    wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, null, true );
    wp_enqueue_script('jQuery');
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_script('script-flickity', get_theme_file_uri('/node_modules/flickity/dist/flickity.pkgd.min.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'chiro_child_theme_files');







