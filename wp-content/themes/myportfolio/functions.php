<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action('wp_enqueue_scripts','add_global_style');
add_action('wp_enqueue_scripts','add_specific_style');
add_action('wp_enqueue_scripts','add_script');
add_action( 'init', 'create_custom_post_type' );

function add_global_style(){
    $stylesheet_url = get_theme_file_uri('./style.css');
    wp_enqueue_style('global_style', esc_url( $stylesheet_url), array(), null, 'all');
}

function add_specific_style(){
    if(is_front_page() || is_404()){
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

    if(is_page('about')){
        $stylesheet_url = get_theme_file_uri('assets/css/about.css');
        wp_enqueue_style('page_style', esc_url( $stylesheet_url), array(), null, 'all');
    }

    if(is_page('contact')){
        $stylesheet_url = get_theme_file_uri('assets/css/contact.css');
        wp_enqueue_style('contact_style', esc_url( $stylesheet_url), array(), null, 'all');
    }
    $stylesheetFont_url = get_theme_file_uri('assets/css/fonts-family.css');
    wp_enqueue_style('fonts_style', esc_url( $stylesheetFont_url ), array(), null, 'all');
}

function add_script(){
    
    if(is_archive()){
        $script_url1 = get_theme_file_uri('assets/script/scrollReveal.js');
        wp_enqueue_script('project_scripts', esc_url( $script_url1), array(), null, 'all');
        
        $script_url2 = get_theme_file_uri('assets/script/scriptProjets.js');
        wp_enqueue_script('project_script', esc_url( $script_url2), array(), null, 'all');
    }

    if(is_page('contact')){
        $script_url = get_theme_file_uri('assets/script/timeContact.js');
        wp_enqueue_script('contact_script', esc_url( $script_url), array(), null, true);
    }
}

// Create Custom Post Type
function create_custom_post_type() {

	$labels = array(
		'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' ),
        'description' => __('My projects'),
        'singular_name' => __( 'Project' ),

		'all_items'           => __( 'All my projects'),
		'view_item'           => __( 'See this project'),
		'add_new_item'        => __( 'Add new project'),
		'add_new'             => __( 'Add new'),
		'edit_item'           => __( 'Edit this project'),
		'update_item'         => __( 'Modify the project'),
		'search_items'        => __( 'Search project'),
		'not_found'           => __( 'Project not found'),
		'not_found_in_trash'  => __( 'Project not found in the bin'),
        'menu_position' => 6,
	);
	
	
	$args = array(
		'label'               => __( 'Projects'),
		'description'         => __( 'All about projects'),
        'labels'              => $labels,
        
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        
        'taxonomies' => array('post_tag'),
        'menu_icon' => 'dashicons-edit', 
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projects'),

	);
	
	register_post_type( 'projects', $args );

}


// Create option page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => __('Header'),
    ));

	acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => __('Footer'),
    ));

	acf_add_options_page(array(
        'page_title' => 'Post Settings',
        'menu_title' => __('Post Settings'),
        'menu_slug' => 'post-settings',
        'capability' => 'edit_posts',
        'parent' => 'edit.php',
        'position' => false,
        'icon_url' => false
    ));
}

// Add Gutenberg blocks with ACF

if(function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){
    acf_register_block_type( array(
        'name' => 'project_block',
        'title' => __('project block'),
        'render_template' => 'blocks/project_block/project_block.php',
        'description' => __('Un custom block project'),
        'post_types' => array('post', 'page','Projects'),
    ));

    $stylesheet_url = get_theme_file_uri('blocks/project_block/project_block.css');
    wp_enqueue_style('bloc_style', esc_url( $stylesheet_url), array(), null, 'all');
}