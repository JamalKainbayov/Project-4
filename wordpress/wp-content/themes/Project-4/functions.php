<?php
function enqueue_page_styles() {
    if (is_page('main')) {
        wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    }
    if (is_page('media')) {
        wp_enqueue_style('media-style', get_template_directory_uri() . '/media.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_page_styles');