<?php
// Enqueue styles and scripts

// Flag to distinguish development from production. Should be set to false for live site.
$is_dev = true;

// Enqueue styles and scripts
function havoc_enqueue_assets() {
    global $is_dev;
    
    if ($is_dev) {
        // Enqueue non-minified files for development
        wp_enqueue_style('havoc-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
        wp_enqueue_script('havoc-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
    } else {
        // Enqueue minified files for production
        wp_enqueue_style('havoc-style', get_template_directory_uri() . '/assets/css/min.styles.css', array(), '1.0', 'all');
        wp_enqueue_script('havoc-script', get_template_directory_uri() . '/assets/js/min.main.js', array('jquery'), '1.0', true);
    }

    // Enqueue Bootstrap stylesheet
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/bootstrap/bootstrap-css.min.css', array(), '5.3.3', 'all');

    // Enqueue Bootstrap script
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array(), '5.3.3', true);
}
add_action('wp_enqueue_scripts', 'havoc_enqueue_assets');


// functions.php
function is_mobile_device() {
    return preg_match('/(android|iphone|ipad|ipod|blackberry|iemobile|opera mini|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}
// Add theme support for custom logo
function havoc_theme_setup() {
    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'havoc'),
    ));
}
add_action('after_setup_theme', 'havoc_theme_setup');



// Include custom hooks and template functions
require get_template_directory() . '/inc/custom-hooks.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';