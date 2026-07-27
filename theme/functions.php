<?php
/**
 * PawlogicTech theme setup, assets, menus, widgets and theme support.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

define( 'PWT_VERSION', '1.0.0' );

require_once get_template_directory() . '/inc/data.php';
require_once get_template_directory() . '/inc/seo-data.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/nav-walker.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/demo-content-data.php';
require_once get_template_directory() . '/inc/demo-content.php';
require_once get_template_directory() . '/inc/contact-form.php';

/**
 * Theme supports, menus and image sizes.
 */
function pwt_setup() {
	load_theme_textdomain( 'pawlogictech', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_editor_style( 'assets/css/theme.css' );

	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 36,
			'width'       => 36,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'pawlogictech' ),
			'footer_services' => __( 'Footer Services', 'pawlogictech' ),
			'footer_explore'  => __( 'Footer Explore', 'pawlogictech' ),
			'footer_legal'    => __( 'Footer Legal', 'pawlogictech' ),
		)
	);

	add_image_size( 'pwt-card', 1200, 750, true );
	add_image_size( 'pwt-wide', 1600, 900, true );
	add_image_size( 'pwt-portrait', 1280, 1600, true );

	set_post_thumbnail_size( 1200, 750, true );
}
add_action( 'after_setup_theme', 'pwt_setup' );

/**
 * Content width for embeds.
 */
function pwt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pwt_content_width', 1248 );
}
add_action( 'after_setup_theme', 'pwt_content_width', 0 );

/**
 * Front-end styles, fonts and scripts.
 */
function pwt_enqueue_assets() {
	$dir = get_template_directory_uri();

	wp_enqueue_style( 'pwt-fonts', 'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Manrope:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'pwt-theme', $dir . '/assets/css/theme.css', array( 'pwt-fonts' ), PWT_VERSION );
	wp_enqueue_style( 'pawlogictech', get_stylesheet_uri(), array( 'pwt-theme' ), PWT_VERSION );

	wp_enqueue_script( 'pwt-main', $dir . '/assets/js/main.js', array(), PWT_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pwt_enqueue_assets' );

/**
 * Preconnect hints for the webfont host, matching the original document head.
 *
 * @param array  $urls          URLs to print.
 * @param string $relation_type Relation type.
 * @return array
 */
function pwt_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'pwt_resource_hints', 10, 2 );

/**
 * Widget areas.
 */
function pwt_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'pawlogictech' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears beside blog archives and single posts.', 'pawlogictech' ),
			'before_widget' => '<section id="%1$s" class="pwt-widget-area %2$s rounded-3xl border border-border bg-card p-7">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="text-sm font-semibold uppercase tracking-widest text-muted-foreground">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pwt_widgets_init' );

/**
 * Body classes.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pwt_body_class( $classes ) {
	$classes[] = 'pwt-site';
	return $classes;
}
add_filter( 'body_class', 'pwt_body_class' );

/**
 * Lazy loading and decoding defaults on content images.
 *
 * @param array $attr Image attributes.
 * @return array
 */
function pwt_image_attributes( $attr ) {
	if ( empty( $attr['loading'] ) ) {
		$attr['loading'] = 'lazy';
	}
	if ( empty( $attr['decoding'] ) ) {
		$attr['decoding'] = 'async';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'pwt_image_attributes' );

/**
 * Excerpt length and more string kept close to the original card copy length.
 *
 * @return int
 */
function pwt_excerpt_length() {
	return 38;
}
add_filter( 'excerpt_length', 'pwt_excerpt_length' );

/**
 * Excerpt ellipsis.
 *
 * @return string
 */
function pwt_excerpt_more() {
	return '…';
}
add_filter( 'excerpt_more', 'pwt_excerpt_more' );
