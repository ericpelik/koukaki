<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/sass/css/index.css' );

}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function enqueue_swiper(){
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', array(), '10.3.1');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array('jquery'), '10.3.1', true);
}

add_action('wp_enqueue_scripts', 'enqueue_swiper');

function loadScriptChild(){
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array('jquery'), '1.2.14', true);
    wp_enqueue_script('cloud', get_stylesheet_directory_uri() . '/js/cloud.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('menuList', get_stylesheet_directory_uri() . '/js/menuList.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'loadScriptChild');
?>