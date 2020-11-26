<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action('wp_enqueue_scripts','add_global_style');
add_action('wp_enqueue_scripts','add_specific_style');
add_action('wp_enqueue_scripts','add_script');
add_action( 'init', 'create_custom_post_type' );

function add_global_style(){
    $stylesheet_url = get_theme_file_uri('assets/css/style.css');
    wp_enqueue_style('global_style', esc_url( $stylesheet_url), array(), null, 'all');
}

function add_specific_style(){
    if(is_front_page()){
        $stylesheet_url = get_theme_file_uri('assets/css/accueil.css');
        wp_enqueue_style('home_style', esc_url( $stylesheet_url), array(), null, 'all');
    }

    if(is_single()){
        $stylesheet_url = get_theme_file_uri('assets/css/travaux.css');
        wp_enqueue_style('travaux_style', esc_url( $stylesheet_url), array(), null, 'all');
    }

    if(is_archive()){
        $stylesheet_url = get_theme_file_uri('assets/css/projets.css');
        wp_enqueue_style('projets_style', esc_url( $stylesheet_url), array(), null, 'all');
    }

    if(is_page('a-propos')){
        $stylesheet_url = get_theme_file_uri('assets/css/apropos.css');
        wp_enqueue_style('projets_style', esc_url( $stylesheet_url), array(), null, 'all');
    }

    $stylesheetFont_url = get_theme_file_uri('assets/css/fonts-family.css');
    wp_enqueue_style('fonts_style', esc_url( $stylesheetFont_url ), array(), null, 'all');
}

function add_script(){
    if(is_front_page()){
        $script_url = get_theme_file_uri('assets/script/home.js');
        wp_enqueue_script('home_script', esc_url( $script_url), array(), null, 'all');
    }
    
    if(is_archive()){
        $script_url1 = get_theme_file_uri('assets/script/scrollReveal.js');
        wp_enqueue_script('project_scripts', esc_url( $script_url1), array(), null, 'all');

        $script_url2 = get_theme_file_uri('assets/script/scriptProjets.js');
        wp_enqueue_script('project_script', esc_url( $script_url2), array(), null, 'all');
    }
}

function create_custom_post_type() {

    register_post_type( 'projects',
    array(
    'labels' => array(
    'name' => __( 'Projects' ),
    'singular_name' => __( 'Project' ),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'projects'),
    'menu_icon' => 'dashicons-edit', 
    'menu_position' => 6,
    )
    );
}