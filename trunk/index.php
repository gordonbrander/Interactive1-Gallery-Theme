<?php
/*
 * index.php is the core of your WordPress theme.
 * WordPress uses index.php to display the content of the page.
 * You can add special template files that will override it, like search.php, 404.php, archive.php and more: <http://codex.wordpress.org/Template_Hierarchy#Examples>
 * index.php and style.css are the only required files for a theme. <http://codex.wordpress.org/Theme_Development#Basic_Templates>
 */
?>

<?php get_header(); ?>

<div id="content">

<?php pk_the_loop('content/post-list.php'); ?>

</div>

<?php
get_sidebar();
get_footer();
?>