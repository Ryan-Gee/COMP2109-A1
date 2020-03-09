<?php
/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if ( ! function_exists( 'blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		register_nav_menus(array(
			'primary' => __('Primary Menu', 'Subsurface')
		));

		// This theme allows users to set a custom background.
		add_theme_support( 'custom-background', apply_filters( 'intentionally_blank_custom_background_args', array(
			'default-color' => 'f5f5f5',
		) ) );

		add_theme_support( 'custom-logo' );
		add_theme_support( 'custom-logo', array(
			'height'      => 256,
			'width'       => 256,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		/**
		 * Sets up theme defaults and registers the various WordPress features that
		 * this theme supports.
		 */
		function blank_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		}
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'blank_setup' );

add_action( 'customize_register', function( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
} );

add_theme_support( 'post-thumbnails' );

add_action('wp_footer', 'add_footer');
function add_footer() {
	echo "<div class='footer'>";
	echo "<p>Created for COMP2019 Assignment 2</p>";
	echo "</div>";
}

//Custom post type - music album 

function album_init(){
	$args = array(
		'label' => 'Albums',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'album'),
		'query_var' => true,
		'menu_icon' => 'dashicons-album',
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'trackbacks',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		)
	);
	register_post_type('album', $args);
}

add_action('init', 'album_init');

//Add a shortcode
function album() {
	the_post();
	echo "<a href=";
	the_permalink();
	echo "><div class='album-card'><h2>";
	the_title();
	echo "</h2>";
	the_post_thumbnail();
	the_content();
	echo "</div></a>";
}

function album_shortcode() {
	add_shortcode('album_shortcode', 'album');
}

add_action('init','album_shortcode');