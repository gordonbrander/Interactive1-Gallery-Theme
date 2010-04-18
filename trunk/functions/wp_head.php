<?php
/**
 * Automatic enhancements to your theme's <head> tag.
 */

/* Automatically output feed autodiscovery links at wp_head() in the <head>. */
automatic_feed_links();

/*
 * Say hello to a WordPress hook.
 * These guys are a really important part of WordPress, because they allow you to add things to the theme without changing the actual theme code.
 * We're going to add a pingback discovery link for pingback servers.
 * First, we create a function:
 */
function gbl_render_pingback_link() {
	echo '<link rel="pingback" href="' . get_bloginfo('pingback_url') . '" />';
}
/*
 * Here's where the magic happens.
 * add_action is a WordPress function that lets you "hook" into different named areas.
 * We'll hook into wp_head, which means this function will get run where the wp_head() tag is (in the <head> tag in header.php).
 * Learn more: <http://codex.wordpress.org/Plugin_API/Action_Reference/wp_head>
 * ...and <http://codex.wordpress.org/Plugin_API>
 */
add_action('wp_head','gbl_render_pingback_link');

/*
 * Here's another hook
 * This one will add a javascript for threaded comments
 */
function gbl_enqueue_script_comment_reply() {
	/* If we're on a single page and comments are open and threading is enabled */
	if ( is_singular() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp', 'gbl_enqueue_script_comment_reply');

?>