<article class="post">
	<div class="post-header">
	<a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
	<div class="post-meta">
		<?php get_template_part('templates/entry-meta'); ?>
	</div>
	</div>
	<?php the_excerpt(); ?>
	<a href="<?php get_permalink() ?>" class="read-more">Continue Reading...</a>
</article>