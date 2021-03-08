<?php

function enqueueScripts(){
  
  wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/style.css');  
  // wp_dequeue_style( 'wp-block-library' );
	
	wp_register_script( 'mainJS', get_template_directory_uri() . '/assets/bundle.js', array( 'jquery' ));  
	wp_enqueue_script('mainJS');
}

add_action('wp_enqueue_scripts', 'enqueueScripts'); 
 
 // Register Custom Post Type
function productsFunctions() {

	$labels = array(
		'name'                  => _x( 'Produkty', 'Post Type General Name', 'bielinscy' ),
		'singular_name'         => _x( 'Produkt', 'Post Type Singular Name', 'bielinscy' ),
		'menu_name'             => __( 'Produkty', 'bielinscy' ),
		'name_admin_bar'        => __( 'Produkty', 'bielinscy' ),
		'archives'              => __( 'Archiwum produktów', 'bielinscy' ),
		'attributes'            => __( 'Atrybuty produktów', 'bielinscy' ),
		'parent_item_colon'     => __( 'Produkt nadrzędny', 'bielinscy' ),
		'all_items'             => __( 'Wszystkie produkty', 'bielinscy' ),
		'add_new_item'          => __( 'Dodaj nowy produkt', 'bielinscy' ),
		'add_new'               => __( 'Dodaj nowy', 'bielinscy' ),
		'new_item'              => __( 'Nowy produkt', 'bielinscy' ),
		'edit_item'             => __( 'Edytuj produkt', 'bielinscy' ),
		'update_item'           => __( 'Zaktualizuj produkt', 'bielinscy' ),
		'view_item'             => __( 'Zobacz produkt', 'bielinscy' ),
		'view_items'            => __( 'Zobacz produkty', 'bielinscy' ),
		'search_items'          => __( 'Wyszukaj produkty', 'bielinscy' ),
		'not_found'             => __( 'Nie znaleziono', 'bielinscy' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'bielinscy' ),
		'featured_image'        => __( 'Wyróżniony obraz', 'bielinscy' ),
		'set_featured_image'    => __( 'Ustaw wyróżniony obraz', 'bielinscy' ),
		'remove_featured_image' => __( 'Usuń wyróżniony obraz', 'bielinscy' ),
		'use_featured_image'    => __( 'Ustaw jako wyróżniony obraz', 'bielinscy' ),
		'insert_into_item'      => __( 'Wstaw do produktu', 'bielinscy' ),
		'uploaded_to_this_item' => __( 'Wgrane do tego produktu', 'bielinscy' ),
		'items_list'            => __( 'Lista produktów', 'bielinscy' ),
		'items_list_navigation' => __( 'Nawigacja listy produktów', 'bielinscy' ),
		'filter_items_list'     => __( 'Filtruj listę produktów', 'bielinscy' ),
	);
	$args = array(
		'label'                 => __( 'Produkt', 'bielinscy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'produkt', $args );

}
add_action( 'init', 'productsFunctions', 0 );

 add_theme_support( 'post-thumbnails', array( 'produkt' ));

function registerMainMenu() {
    register_nav_menu( 'main-menu', __( 'Menu główne', 'bielinscy' ) );
}
add_action( 'after_setup_theme', 'registerMainMenu' );