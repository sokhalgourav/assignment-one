<?php
function assignment_one_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'assignment-one'),
    ));
}

add_action('after_setup_theme', 'assignment_one_setup');

function assignment_one_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'assignment_one_scripts');
?>
