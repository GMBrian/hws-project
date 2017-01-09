<?php
/*
* The Ondernemers CPT
*/

function cpt_ondernemers() {

	// Set UI labels for Custom Post Type
	$labels = [
		'name'               => _x( 'Ondernemers', 'Post Type General Name', TEXT_DOMAIN ),
		'singular_name'      => _x( 'Ondernemer', 'Post Type Singular Name', TEXT_DOMAIN ),
		'menu_name'          => __( 'Ondernemers', TEXT_DOMAIN ),
		'parent_item_colon'  => __( 'Parent ondernemer', TEXT_DOMAIN ),
		'all_items'          => __( 'Alle ondernemers', TEXT_DOMAIN ),
		'view_item'          => __( 'Bekijk ondernemer', TEXT_DOMAIN ),
		'add_new_item'       => __( 'Nieuwe ondernemer toevoegen', TEXT_DOMAIN ),
		'add_new'            => __( 'Nieuwe ondernemer', TEXT_DOMAIN ),
		'edit_item'          => __( 'Bewerk Ondernemer', TEXT_DOMAIN ),
		'update_item'        => __( 'Update Ondernemer', TEXT_DOMAIN ),
		'search_items'       => __( 'Zoek ondernemer', TEXT_DOMAIN ),
		'not_found'          => __( 'Niet gevonden', TEXT_DOMAIN ),
		'not_found_in_trash' => __( 'Niet gevonden in de prullenbak', TEXT_DOMAIN ),
	];

	// Set other options for our Custom Post Type
	$args = [
		'label'               => __( 'ondernemers', TEXT_DOMAIN ),
		'description'         => __( 'Ondernemer ', TEXT_DOMAIN ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-businessman',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	];

	// Registering our Custom Post Type
	register_post_type( 'ondernemers', $args );
}
add_action( 'init', 'cpt_ondernemers', 0 );
