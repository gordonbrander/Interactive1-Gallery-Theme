<?php
/*
 * single.php displays the content for the "single", aka "permalinked" view of posts.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

<div id="content">

	<?php
	gbl_the_loop('content/post-single.php');
	comments_template();
	?>

</div>

<?php
get_sidebar();
get_footer();
?>