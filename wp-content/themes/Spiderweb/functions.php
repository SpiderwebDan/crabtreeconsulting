<?php

function init_theme () {

	// Theme dependencies
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
	register_nav_menus( array(
		'primary-navigation' => __( 'Primary Navigation' )
	) );

	// Initialize AJAX dependencies
	wp_localize_script( 'jquery', 'AJAX', array(
		'url' => admin_url( 'admin-ajax.php' ),
		'template_directory' => get_bloginfo( 'template_directory' )
	) );

}
add_action( 'init', 'init_theme' );

function init_scripts () {

	// Script dependencies. jQuery and jQuery UI/Effects cores by default.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core', '', array( 'jquery' ) );
	wp_enqueue_script( 'jquery-effects-core', '', array( 'jquery-ui-core', 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'init_scripts', 10, 0 );

// Basic breadcrumb functionality
function the_breadcrumbs () {

	echo get_the_breadcrumbs();

}

function get_the_breadcrumbs () {

	global $post;

	// Initialize return <ul> and add homepage by default
	$output = '<ul>';
	$output = '<li><a href="' . home_url() . '">Home</a></li>';

	// Prepare array to store all posts in current tree
	$posts = array( $post->post_name => $post );

	if( !is_front_page() ) {

		do {
			$post = wp_get_single_post( $post->post_parent );
			$posts[$post->post_name] = $post;
		}
		while( $post->post_parent );

	}

	foreach( array_reverse( $posts ) as $single )
		$output .= sprintf( '<li><a href="%s">%s</a></li>', get_permalink( $single->ID ), $single->post_title );

	$output .= '</ul>';

	return $output;

}

// WordPress login form styling
function login_logo () {

	?>
    <style type="text/css">
        body.login div#login h1 a {
            	display: block;
            	width: 100%;
		background-image: url( '<?php echo get_bloginfo( 'template_directory' ) ?>/assets/art/login-logo.png' ) !important;
		background-size: auto !important;
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'login_logo' );

function login_logo_url () {

    return get_bloginfo( 'url' );

}
add_filter( 'login_headerurl', 'login_logo_url' );

function login_logo_url_title () {

    return 'Spiderweb Solutions';

}
add_filter( 'login_headertitle', 'login_logo_url_title' );


?>
