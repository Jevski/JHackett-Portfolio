<?php
function add_simple_parallax_js() {
    wp_enqueue_script( 'simple-parallax-js', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'add_simple_parallax_js' );

// Function to register navigation menus
function add_nav_menus(){
    $locations= array(
        'header' => "Header Menu", // Header menu location
        'footer' => "Footer Menu"  // Footer menu location
    );
    register_nav_menus($locations);
}
add_action('init', 'add_nav_menus');


// Function to enqueue styles
function portfolio_enqueue_styles() {
    // Enqueue theme style
    wp_enqueue_style( 'theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        wp_get_theme()->get('1.0.0')
    );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );


// Function for scripts
function portfolio_enqueue_scripts(){
    wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', array('jquery'), '1.0');
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');


function wpdocs_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



?>