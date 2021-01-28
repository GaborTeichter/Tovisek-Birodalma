<?php 

// Dynamic theme supports
function cactusbasic_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cactusbasic_theme_support');

// Menus
function cactusbasic_menus(){
    
    $locations = array(
        'primary' => "Primary Menu",
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

// Widgets
function cactusbasic_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '<h4>',
            'after_title' => '</h4>',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'desc' => 'Sidebar Widget Area'
        )

    );

}

add_action( 'widgets_init', 'cactusbasic_widget_areas' );



// FontAwesome
add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}

?>