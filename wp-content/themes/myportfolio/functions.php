<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action('wp_enqueue_scripts','add_global_style');
add_action('wp_enqueue_scripts','add_home_style');
add_action('wp_enqueue_scripts','add_home_script');

function add_global_style(){
    $stylesheet_url = get_theme_file_uri('assets/css/style.css');
    wp_enqueue_style('global_style', esc_url( $stylesheet_url), array(), null, 'all');
}

function add_home_style(){
    $stylesheet_url = get_theme_file_uri('assets/css/accueil.css');
    wp_enqueue_style('home_style', esc_url( $stylesheet_url), array(), null, 'all');
}

function add_home_script(){
    $script_url = get_theme_file_uri('assets/script/home.js');
    wp_enqueue_script('home_script', esc_url( $script_url), array(), null, 'all');
}