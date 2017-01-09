<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class( $classes ) {
	// Add page slug if it doesn't exist
	if ( is_single() || is_page() && ! is_front_page() ) {
		if ( ! in_array( basename( get_permalink() ), $classes ) ) {
			$classes[] = basename( get_permalink() );
		}
	}

	// Add class if sidebar is active
	if ( Setup\display_sidebar() ) {
		$classes[] = 'sidebar-primary';
	}

	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\\body_class' );

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
	return '<p><a class="btn" href="' . get_permalink() . '">' . __( 'Artikel lezen', TEXT_DOMAIN ) . '</a></p>';
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_more' );

/**
 * Maak van een complete URL een nette leesbare voor op de frontend
 *
 * @param $full_url
 *
 * @return $display_url
 */
function get_display_url( $full_url ) {

	$display_url = '';

	if (filter_var($full_url, FILTER_VALIDATE_URL)) {

		preg_match('^(.*:)//([A-Za-z0-9\-\.]+)(:[0-9]+)?(.*)$^', $full_url, $matches, PREG_OFFSET_CAPTURE);

		return $matches[2][0];
	}

	return $display_url;
}

/**
 * Disable all comments
 */
// Disable support for comments and trackbacks in post types
function gm_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ( $post_types as $post_type ) {
		if ( post_type_supports( $post_type, 'comments' ) ) {
			remove_post_type_support( $post_type, 'comments' );
			remove_post_type_support( $post_type, 'trackbacks' );
		}
	}
}
add_action( 'admin_init', __NAMESPACE__ . '\\gm_disable_comments_post_types_support' );

/**
 * Haal een afbeelding op voor de banner
 */
function get_banner_image() {
	if ( has_post_thumbnail() ) {
		return ' style="background-image:url(' . get_the_post_thumbnail_url() . ')"' ;
	}

	return '';
}


// Close comments on the front-end
function gm_disable_comments_status() {
	return false;
}
add_filter( 'comments_open', __NAMESPACE__ . '\\gm_disable_comments_status', 20, 2 );
add_filter( 'pings_open', __NAMESPACE__ . '\\gm_disable_comments_status', 20, 2 );

// Hide existing comments
function gm_disable_comments_hide_existing_comments( $comments ) {
	$comments = array();

	return $comments;
}
add_filter( 'comments_array', __NAMESPACE__ . '\\gm_disable_comments_hide_existing_comments', 10, 2 );

// Remove comments page in menu
function gm_disable_comments_admin_menu() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\gm_disable_comments_admin_menu' );

// Redirect any user trying to access comments page
function gm_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ( $pagenow === 'edit-comments.php' ) {
		wp_redirect( admin_url() );
		exit;
	}
}
add_action( 'admin_init', __NAMESPACE__ . '\\gm_disable_comments_admin_menu_redirect' );

// Remove comments metabox from dashboard
function gm_disable_comments_dashboard() {
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
}
add_action( 'admin_init', __NAMESPACE__ . '\\gm_disable_comments_dashboard' );

// Remove comments links from admin bar
function gm_disable_comments_admin_bar() {
	if ( is_admin_bar_showing() ) {
		remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
	}
}
add_action( 'init', __NAMESPACE__ . '\\gm_disable_comments_admin_bar' );