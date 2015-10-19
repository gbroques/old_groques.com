<div class="post-container">
	<article>
		<div class="post-header">
		<a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
		<p class="post-meta">
			<?php get_template_part('templates/entry-meta'); ?>
		</p>
		</div>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="read-more">Continue Reading...</a>
	</article>
</div>