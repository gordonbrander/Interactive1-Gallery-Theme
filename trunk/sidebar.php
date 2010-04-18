<?php
/*
 * This file is usually used to hold a sidebar for your theme.
 * It's pulled into other files using the get_sidebar() function.
 * Like most files in your theme, it's optional.
 * If you decide to remove it, make sure to remove get_sidebar() from all the other templates.
 */
?>

<hr />

<div id="sidebar">
	<?php
	/*
	 * Call a dynamic sidebar
	 * Defined in functions.php
	 * Check out the widgets page of the wp_admin
	 * More: <http://codex.wordpress.org/Function_Reference/dynamic_sidebar>
	*/
	dynamic_sidebar('sidebar');
	?>
</div>