<?php
/**
 * Evoke by Ayush - Theme Functions
 *
 * @package Evoke_By_Ayush
 * @author  Ayush Acharya
 * @link    https://ayushacharya.info.np
 * @support contact@ayushacharya.info.np
 *
 * Copyright (c) 2026 Ayush Acharya. All rights reserved.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'EVOKE_VERSION', '1.0.0' );
define( 'EVOKE_THEME_AUTHOR', 'Ayush Acharya' );
define( 'EVOKE_SUPPORT_EMAIL', 'contact@ayushacharya.info.np' );
define( 'EVOKE_THEME_WEBSITE', 'https://evoke.ayushacharya5.com.np/' );

/* -----------------------------------------------------------
 * 1.0 Theme Setup
 * --------------------------------------------------------- */
if ( ! function_exists( 'evoke_setup' ) ) {
	function evoke_setup() {

		load_theme_textdomain( 'evoke-by-ayush', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'post-formats',
			array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' )
		);

		set_post_thumbnail_size( 1200, 750, true );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'evoke-by-ayush' ),
				'footer'  => esc_html__( 'Footer Menu', 'evoke-by-ayush' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'evoke_setup' );

/* -----------------------------------------------------------
 * 2.0 Enqueue Styles & Scripts
 * --------------------------------------------------------- */
function evoke_scripts() {
	wp_enqueue_style(
		'evoke-google-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'evoke-style', get_stylesheet_uri(), array(), EVOKE_VERSION );

	wp_enqueue_script( 'evoke-navigation', get_template_directory_uri() . '/js/navigation.js', array(), EVOKE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'evoke_scripts' );

/* -----------------------------------------------------------
 * 3.0 Widget Areas
 * --------------------------------------------------------- */
function evoke_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main Sidebar', 'evoke-by-ayush' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Appears on blog and single post pages.', 'evoke-by-ayush' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'evoke-by-ayush' ),
			'id'            => 'footer-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'evoke-by-ayush' ),
			'id'            => 'footer-2',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'evoke_widgets_init' );

/* -----------------------------------------------------------
 * 4.0 Custom Excerpt Length & Ellipsis
 * --------------------------------------------------------- */
function evoke_excerpt_length( $length ) {
	return 26;
}
add_filter( 'excerpt_length', 'evoke_excerpt_length' );

function evoke_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'evoke_excerpt_more' );

/* -----------------------------------------------------------
 * 5.0 Helper: Reading Time
 * --------------------------------------------------------- */
function evoke_reading_time() {
	$content    = get_post_field( 'post_content', get_the_ID() );
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$minutes    = ceil( $word_count / 200 );
	return sprintf( _n( '%d min read', '%d min read', $minutes, 'evoke-by-ayush' ), $minutes );
}

/* -----------------------------------------------------------
 * 6.0 Custom Walker for Pagination (Twenty-style helper)
 * --------------------------------------------------------- */
function evoke_pagination() {
	the_posts_pagination(
		array(
			'mid_size'  => 2,
			'prev_text' => __( '&larr; Previous', 'evoke-by-ayush' ),
			'next_text' => __( 'Next &rarr;', 'evoke-by-ayush' ),
			'class'     => 'evk-pagination',
		)
	);
}

/* -----------------------------------------------------------
 * 7.0 Body & Post Classes
 * --------------------------------------------------------- */
function evoke_body_classes( $classes ) {
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page_template( 'template-full-width.php' ) ) {
		$classes[] = 'evk-has-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'evoke_body_classes' );

/* -----------------------------------------------------------
 * 8.0 Customizer: Support & Footer Info
 * --------------------------------------------------------- */
function evoke_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'evoke_theme_info',
		array(
			'title'    => __( 'Evoke Theme Info', 'evoke-by-ayush' ),
			'priority' => 200,
		)
	);

	$wp_customize->add_setting(
		'evoke_footer_text',
		array(
			'default'           => sprintf(
				/* translators: %d = current year */
				__( '&copy; %d Evoke by Ayush. All rights reserved.', 'evoke-by-ayush' ),
				date( 'Y' )
			),
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		'evoke_footer_text',
		array(
			'label'   => __( 'Footer Copyright Text', 'evoke-by-ayush' ),
			'section' => 'evoke_theme_info',
			'type'    => 'textarea',
		)
	);
}
add_action( 'customize_register', 'evoke_customize_register' );

/* -----------------------------------------------------------
 * 9.0 Theme Support Info (shown in Customizer / About)
 * --------------------------------------------------------- */
function evoke_admin_support_notice() {
	$screen = get_current_screen();
	if ( $screen && 'themes' === $screen->id ) {
		echo '<div class="notice notice-info is-dismissible"><p>';
		printf(
			/* translators: 1: theme name 2: support email 3: website */
			esc_html__( '%1$s — Need help? Contact support at %2$s or visit %3$s', 'evoke-by-ayush' ),
			'<strong>Evoke by Ayush</strong>',
			'<a href="mailto:' . esc_attr( EVOKE_SUPPORT_EMAIL ) . '">' . esc_html( EVOKE_SUPPORT_EMAIL ) . '</a>',
			'<a href="' . esc_url( EVOKE_THEME_WEBSITE ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( EVOKE_THEME_WEBSITE ) . '</a>'
		);
		echo '</p></div>';
	}
}
add_action( 'admin_notices', 'evoke_admin_support_notice' );

/* -----------------------------------------------------------
 * 10.0 Security & Cleanup
 * --------------------------------------------------------- */
remove_action( 'wp_head', 'wp_generator' );

function evoke_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'evoke_content_width', 900 );
}
add_action( 'after_setup_theme', 'evoke_content_width', 0 );
