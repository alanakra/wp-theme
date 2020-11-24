<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// wp_enqueue_style( 'wp_enqueue_style', '/assets/css/style.css' );
// wp_enqueue_style( 'accueil', '/assets/css/accueil.css');

add_action( 'wp_enqueue_style', 'add_global_style' );

function add_global_style() {
    wp_enqueue_style( 'wp_enqueue_style', '/assets/css/style.css' );
}

add_action( 'wp_enqueue_style', 'add_accueil' );

function add_accueil() {
    wp_enqueue_style( 'wp_enqueue_style', '/assets/css/accueil.css');
}