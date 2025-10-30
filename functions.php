<?php
/**
 * Enqueue parent & child theme styles + GSAP + custom JS
 */
function hello_elementor_child_enqueue_assets() {
    // Parent + child CSS
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'), wp_get_theme()->get('Version'));

    // GSAP + ScrollTrigger
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

    // Your main script
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/main.js', array('gsap', 'scrolltrigger'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_assets');

// Register Primary Menu
function thynk_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hello-elementor-child')
    ));
}
add_action('after_setup_theme', 'thynk_register_menus');