<?php
function enqueue_media_styles() {
    wp_enqueue_style('media', get_template_directory_uri() . '/media.css' );
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('contact', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_media_styles' );