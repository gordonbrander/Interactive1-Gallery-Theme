<?php
/**
 * Get files from your theme and pass in local variables.
 *
 * @param $file string - path to your theme file, not including TEMPLATEPATH.
 * @param $data string | array - optional. Additional data to pass to file.
 */
function gbl_template_file($file, $data = '') {
	$data = wp_parse_args($data);
	extract($data);
	
	$filepath = trailingslashit(TEMPLATEPATH) . $file;
	
	include($filepath);
}
	
/**
 * Ultra-simple way to loop over a file.
 * Keep post templates nicely organized in their own directory/file.
 *
 * @param $file string - path to file (not including template path)
 * @param $args array | string - a collection of additional arguments:
 * query: array | string - custom wp_query string
 * no_results: string - customize the no-results response
 * data: string | array - pass in data to the theme file
 */
function gbl_the_loop($file, $args = '') {

	$default_args = array(
		'query' => '',
		'no_results' => __('No results found', 'pocketknife'),
		'data' => ''
	);
	// Combine args
	$args = wp_parse_args($args, $default_args);
	
	extract($args);
	
	if (!empty($query)) {
		query_posts($query);
	}
	
	/*
	 * This is The Loop.
	 * It loops over all the posts and displays them (that's why its called the loop)
	 * The way a post displays is based on the markup you put inside of the Loop. 
	 * More: <http://codex.wordpress.org/The_Loop>
	 */
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			
			/* Pull in template file */
			gbl_template_file($file, $data);
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
	} else {
		echo $no_results;
	}
}

?>