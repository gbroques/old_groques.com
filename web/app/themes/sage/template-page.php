<?php
/**
 * Template Name: Page Template
 */
?>


<h2 class="section-title center"><?php the_title(); ?></h2>

<div class="row">

	<?php if ( is_page( 'work' ) ) { ?>

		<!-- WORK -->
		<div class="large-12 columns">
	    <div class="frame">
	      <a href="<?= esc_url(home_url('/work/vending-ur-way')); ?>">
	        <img src="<?= get_template_directory_uri(); ?>/dist/images/vuw-thumbnail.svg" alt="Vending Ur Way">
	        <p class="caption center">Vending Ur Way</p>
	      </a>
	    </div>
		</div>

  <?php } elseif ( is_page ( 'about' ) ) { ?>

  <div class="about-container">
    <div class="portrait">
      <img class="headshot" src="<?= get_template_directory_uri(); ?>/dist/images/headshot.jpeg" alt="G Roques">
    </div>
    <p class="about-text">I'm a self-taught web designer and developer based in St. Louis. When I'm not coding you can find me surfing the web for new music.</p>

	  <div class="about-social-icons-container center">
	    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-github"></a>
	    <a target="blank" href="https://www.linkedin.com/in/gbroques" class="social-icon icon icon-linkedin"></a>
	    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-google-plus"></a>
	    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-twitter"></a>
	  </div>
  </div>

	<?php } elseif ( is_page ( 'contact' ) ) { ?> 

		<!-- CONTACT -->

		<!-- Column 1 -->
		<div class="contact-container">
			<div class="large-6 columns">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
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

	<?php } ?>

</div>