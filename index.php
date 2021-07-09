<?php
/**
 * Main Template
 *
 * @package WordPress
 * @subpackage Pure_Theme
 */

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		the_content();
	}

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/no-posts' );

}

get_footer();
