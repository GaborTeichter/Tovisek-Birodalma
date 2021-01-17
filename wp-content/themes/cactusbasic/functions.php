<?php 

function cactusbasic_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'cactusbasic_theme_support');

// Menus
function cactusbasic_menus(){
    
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);

}

add_action('init', 'cactusbasic_menus');

// Styles
function cactusbasic_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'cactusbasic-style', get_template_directory_uri() . "/style.css", array('cactusbasic-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'cactusbasic-bootstrap', get_template_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.min.css", array(), '4.5.3.', 'all' );
    wp_enqueue_style( 'cactusbasic-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'cactusbasic_register_styles' );

// Scripts
function cactusbasic_register_scripts(){

    wp_enqueue_script( 'cactusbasic-jquery', get_template_directory_uri() . "/node_modules/jquery/dist/jquery.slim.min.js", array(), '3.5.1', true );
    // wp_enqueue_script( 'cactusbasic-popper', get_template_directory_uri() . "/node_modules/popper/dist/popper.min.js", array(), '1.16.1', true );
    wp_enqueue_script( 'cactusbasic-bundle', get_template_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true );
    wp_enqueue_script( 'cactusbasic-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
    
}

add_action( 'wp_enqueue_scripts', 'cactusbasic_register_scripts' );

?>