<?php

function ai4mkb_enqueue_assets() {
    wp_enqueue_style(
        'ai4mkb-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'ai4mkb-theme',
        get_template_directory_uri() . '/js/theme.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'ai4mkb_enqueue_assets');

function ai4mkb_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ai4mkb_theme_support');

