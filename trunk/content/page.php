<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<h2 class="entry-title">
		<?php the_title(); ?>
	</h2>

	<?php the_post_thumbnail('medium'); ?>

	<div class="entry-content">
		<?php
		the_content('Continued&hellip;');
		wp_link_pages();
		edit_post_link('Edit');
		?>
	</div>

</div>