<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<h2 class="entry-title">
		<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<?php the_post_thumbnail('medium'); ?>

	<div class="entry-content">
		<?php
		the_content('Continued&hellip;');
		wp_link_pages();
		?>
	</div>

	<p>
		Published
		<abbr class="published" title="<?php the_time('Y-m-d\TH:i'); ?>">
			<?php the_time('F jS, Y') ?>
		</abbr>
		<?php edit_post_link('Edit'); ?>
	</p>
	
</div>