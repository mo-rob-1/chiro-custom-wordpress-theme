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
}

add_action('wp_enqueue_scripts', 'chiro_child_theme_files');

