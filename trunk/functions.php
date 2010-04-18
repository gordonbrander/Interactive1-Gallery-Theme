<?php
/*
 * functions.php allows you to create and run custom PHP functions you can use in your theme.
 * It's essentially a WordPress plugin that's loaded when this theme is active.
 * Like most theme files, it's completely optional.
 * Learn more: <http://codex.wordpress.org/Theme_Development#Theme_Functions_File>
 */

/* Include helpful function collections */
include_once(trailingslashit(TEMPLATEPATH) . 'functions/wp_head.php');
include_once(trailingslashit(TEMPLATEPATH) . 'functions/template.php');


/* Enable post thumbnail theme support */
add_theme_support('post-thumbnails', array('post', 'page'));

/*
Customize default post thumbnail size
See <http://markjaquith.wordpress.com/2009/12/23/new-in-wordpress-2-9-post-thumbnail-images/>
Parameters: width, height, crop.
*/
/* Sets size for post_thumbnail key */
set_post_thumbnail_size(75, 75, true);
/* Add additional sizes */
add_image_size('small', 250, 250, false);
add_image_size('medium', 500, 500, false);

/*
Register a dynamic sidebar.
This tells WordPress to create a dynamic sidebar for us.
We'll call this one in sidebar.php.
More here: <http://codex.wordpress.org/Function_Reference/register_sidebar>
*/
register_sidebar(
	array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="title">',
		'after_title' => '</h2>'
	)
);



?>