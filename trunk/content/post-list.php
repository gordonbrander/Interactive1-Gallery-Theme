<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink() ?>">
		<?php the_post_thumbnail(); ?>
	</a>
	<h2 class="entry-title">
		<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</div>