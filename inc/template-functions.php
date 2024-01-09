<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package No_Probs
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function no_probs_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'no_probs_body_classes' );

function generate_button($url, $class, $text) {
    echo '<a href="' . esc_url($url) . '" class="' . esc_attr($class) . '"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1_222)"><path d="M5.5 15L15.5 5" stroke="#161D25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.375 5H15.5V13.125" stroke="#161D25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><defs>
<clipPath id="clip0_1_222"><rect width="20" height="20" fill="white" transform="translate(0.5)"/></clipPath>
</defs></svg>' . esc_html($text) . '</a>';
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function no_probs_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'no_probs_pingback_header' );
