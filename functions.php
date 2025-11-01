<?php
/**
 * Enqueue parent & child theme styles + GSAP + custom JS
 */
function hello_elementor_child_enqueue_assets() {

    // Parent style
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('Hello Elementor')->get('Version')
    );

    // Child style (depends on parent)
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('hello-elementor-style'),
        wp_get_theme()->get('Version')
    );

    // Load GSAP + ScrollTrigger from CDN (only once)
    $gsap_cdn = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/';
    wp_enqueue_script(
        'gsap',
        $gsap_cdn . 'gsap.min.js',
        array(),
        '3.12.2',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        $gsap_cdn . 'ScrollTrigger.min.js',
        array('gsap'),
        '3.12.2',
        true
    );

    // Main JS (defer loading till end, versioned)
    wp_enqueue_script(
        'child-main-js',
        get_stylesheet_directory_uri() . '/assets/main.js',
        array('gsap', 'gsap-scrolltrigger'),
        filemtime(get_stylesheet_directory() . '/assets/main.js'), // cache busting
        true
    );
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_assets');