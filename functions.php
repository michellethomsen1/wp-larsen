<?php
/* ==========================================
	Register Sidebars and Widgets.
============================================= */

function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Headline',
		'id'            => 'footer_headline',
		'before_widget' => NULL,
		'after_widget'  => NULL,
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Call',
		'id'            => 'footer_call',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );

	register_sidebar( array(
		'name'          => 'Footer Adress',
		'id'            => 'footer_adress',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );

	register_sidebar( array(
		'name'          => 'Footer Email',
		'id'            => 'footer_email',
		'before_widget' => NULL,
		'after_widget'  => NULL,
	) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );



/* ==========================================
	Activate Menus
============================================= */

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'init', 'register_my_menu' );



/* ==========================================
	Add Scripts and Stylesheets
============================================= */

function larsenwordpress_scripts() {
	/* Stylesheets */
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'larsen', get_template_directory_uri() . '/css/larsen.css' );

	/* Scripts */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'larsen-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'larsenwordpress_scripts' );



/* ==========================================
	Theme Support
============================================= */

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'post-thumbnails' );



/* ==========================================
	Add Custom Post Types
============================================= */

/* Medarbejdere - Menu Item */
function post_type_employee() {
	$labels = array(
		'name'          	 => _x( 'Medarbejdere', 'post type general name' ),
		'singular_name'      => _x( 'Medarbejder', 'post type singular name' ),
		'add_new'            => _x( 'Tilføj ny', 'Medarbejder' ),
		'add_new_item'       => __( 'Tilføj ny Medarbejder' ),
		'edit_item'          => __( 'Rediger Medarbejder' ),
		'new_item'           => __( 'Ny Medarbejder' ),
		'all_items'          => __( 'Alle Medarbejdere' ),
		'view_item'          => __( 'Se Medarbejdere' ),
		'search_items'       => __( 'Søg Medarbejdere' ),
		'not_found'          => __( 'Ingen Medarbejdere fundet' ),
		'not_found_in_trash' => __( 'Ingen Medarbejdere funder i skraldespanden' ),
		'parent_item_colon'  => '',

		'menu_name'          => 'Medarbejdere'
	);

	$args = array(
		'labels'        	=> $labels,
		'description'   	=> 'Medarbejder',
		'public'        	=> true,
		'hierarchical'		=> true,
		'show_ui'       	=> true,
		'show_in_nav_menus' => true,
		'menu_icon'			=> 'dashicons-businessman',
		'supports'      	=> array( 'title', 'page-attributes'),
		'has_archive'   	=> true,
	);

	register_post_type( 'Medarbejder', $args );
}

add_action('init', 'post_type_employee');


/* Juletræer - Menu Item */
function post_type_tree() {
	$labels = array(
		'name'          	 => _x( 'Juletræer', 'post type general name' ),
		'singular_name'      => _x( 'Juletræ', 'post type singular name' ),
		'add_new'            => _x( 'Tilføj ny', 'Juletræ' ),
		'add_new_item'       => __( 'Tilføj ny Juletræ' ),
		'edit_item'          => __( 'Rediger Juletræ' ),
		'new_item'           => __( 'Ny Juletræ' ),
		'all_items'          => __( 'Alle Juletræer' ),
		'view_item'          => __( 'Se Juletræer' ),
		'search_items'       => __( 'Søg Juletræer' ),
		'not_found'          => __( 'Ingen Juletræer fundet' ),
		'not_found_in_trash' => __( 'Ingen Juletræer funder i skraldespanden' ),
		'parent_item_colon'  => '',

		'menu_name'          => 'Juletræer'
	);

	$args = array(
		'labels'        	=> $labels,
		'description'   	=> 'Juletræ',
		'public'        	=> true,
		'hierarchical'		=> true,
		'show_ui'       	=> true,
		'show_in_nav_menus' => true,
		'menu_icon'			=> 'dashicons-palmtree',
		'supports'      	=> array( 'title', 'editor', 'thumbnail', 'page-attributes'),
		'has_archive'   	=> true,
	);

	register_post_type( 'Juletræ', $args );
}

add_action('init', 'post_type_tree');


/* Dekoration - Menu Item */
function post_type_decoration() {
	$labels = array(
		'name'          	 => _x( 'Dekoration', 'post type general name' ),
		'singular_name'      => _x( 'Dekoration', 'post type singular name' ),
		'add_new'            => _x( 'Tilføj ny', 'Dekoration' ),
		'add_new_item'       => __( 'Tilføj ny Dekoration' ),
		'edit_item'          => __( 'Rediger Dekoration' ),
		'new_item'           => __( 'Ny Dekoration' ),
		'all_items'          => __( 'Alle Dekorationsmaterialer' ),
		'view_item'          => __( 'Se Dekorationsmaterialer' ),
		'search_items'       => __( 'Søg Dekorationsmaterialer' ),
		'not_found'          => __( 'Ingen Dekorationsmaterialer fundet' ),
		'not_found_in_trash' => __( 'Ingen Dekorationsmaterialer funder i skraldespanden' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Dekoration'
	);

	$args = array(
		'labels'        	=> $labels,
		'description'   	=> 'Dekoration',
		'public'        	=> true,
		'hierarchical'		=> true,
		'show_ui'       	=> true,
		'show_in_nav_menus' => true,
		'menu_icon'			=> 'dashicons-carrot',
		'supports'      	=> array( 'title', 'editor', 'thumbnail', 'page-attributes'),
		'has_archive'   	=> true,
		'taxonomies'        => array( 'category' )
	);

	register_post_type( 'Dekoration', $args );
}

add_action('init', 'post_type_decoration');