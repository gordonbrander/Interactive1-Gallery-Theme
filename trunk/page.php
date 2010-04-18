<?php
/*
 * page.php displays the content for the "single", aka permalinked view of pages.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

<div id="content">

<?php pk_the_loop('content/page.php'); ?>

</div>

<?php
get_sidebar();
get_footer();
?>