<?php
/*
 * search.php displays the content for the search results view.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

<div id="content">
	
	<h2>Search Results</h2>
	
	<?php get_search_form(); ?>
	<?php gbl_the_loop('content/post-list.php'); ?>
	
</div>

<?php
get_sidebar();
get_footer();
?>