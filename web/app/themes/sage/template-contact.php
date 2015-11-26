<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="content-container center-container">
	<div class="row">
		<!-- Column 1 -->
		<div class="large-6 columns">
			<?php get_template_part('templates/page', 'header'); ?>
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<!-- Column 2 -->
		<div class="large-6 columns">
			<form action="//formspree.io/groques360@gmail.com" method="POST">
				<input class="name" placeholder="Name" type="text" name="name">
				<input class="email" placeholder="E-Mail" type="email" name="_replyto">
				<textarea class="message" name="message" rows="6" placeholder="A brief message"></textarea>
				<input class="btn" type="submit" value="Send">
			</form>
		</div>
	</div>
</div>
