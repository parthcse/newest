<?php
// Enqueue the parent theme's styles
function twentytwentyfive_child_enqueue_styles() {
    wp_enqueue_style(
        'twentytwentyfive-parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-parent-style')
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles');

//this is function file change by parth