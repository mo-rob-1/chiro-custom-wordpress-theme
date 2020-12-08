<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function chiro_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'chiro_features');


