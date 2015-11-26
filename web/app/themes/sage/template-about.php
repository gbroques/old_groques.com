<?php
/**
 * Template Name: About Template
 */
?>

<div class="content-container center-container max-width-container">
	<div class="about-portrait">
		<img class="headshot" src="<?= get_template_directory_uri(); ?>/dist/images/headshot.jpeg" alt="G Roques">
	</div>
	<?php get_template_part('templates/page', 'header'); ?>
	<?php get_template_part('templates/content', 'page'); ?>
</div>
