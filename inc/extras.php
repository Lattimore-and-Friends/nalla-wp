<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Ben_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function rre_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'rre_theme_pingback_header' );


 // Remove the default gutenberg block
  // https://rudrastyh.com/gutenberg/remove-default-blocks.html

  add_filter('allowed_block_types', 'nassa_allowed_block_types');

  function nassa_allowed_block_types($allowed_blocks)
  {

     return array(

        'acf/all-projects',
        'acf/awards',
        'acf/client-logos',
        'acf/contact',
        'acf/credits',
        'acf/extended-footer',
        'acf/flexible-content',
        'acf/hero-section',
        'acf/image-and-content',
        'acf/image-side-content',
		'acf/launch-graph',
		'acf/one-column-content',
		'acf/quote',
		'acf/recent-projects',
		'acf/related-content',
		'acf/services',
		'acf/stats',
		'acf/team',
		'acf/three-column-content',
		'acf/three-column-text-content',
		'acf/title-and-content',
		'acf/top-post-content',
		'acf/two-column-content'

     );
  }