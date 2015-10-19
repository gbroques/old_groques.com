<?php
/**
 * Template Name: Category Archive
 */
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php endwhile; else: endif; ?>

<?php query_posts('category_name='.get_permalink().'&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
	<?php endwhile; else: endif; ?>