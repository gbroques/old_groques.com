<!-- MOBILE NAV -->
<nav class="mobile-nav">
  <ul class="mobile-nav-list">
	<?php if ( is_front_page() && is_home() ) { ?>
	  <!-- Default homepage -->
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#skills">Skills</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#work">Work</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#about">About</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#contact">Contact</a></li>
	  <li class="mobile-nav-list__item"><a class="standout" href="<?= esc_url(home_url('/blog')); ?>">Blog</a></li>
	<?php } elseif ( is_front_page() ) { ?>
	  <!-- Static homepage -->
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#skills">Skills</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#work">Work</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#about">About</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#contact">Contact</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link standout" href="<?= esc_url(home_url('/blog')); ?>">Blog</a></li>
	<?php } elseif ( is_home() ) { ?>
	  <!-- Blog page -->
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>php">PHP</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>design">Design</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link standout" href="<?= esc_url(home_url('/blog')); ?>">Recent</a></li>
	<?php } else { ?>
	  <!-- Everything else -->
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>php">PHP</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="<?= esc_url(home_url('/')); ?>design">Design</a></li>
	  <li class="mobile-nav-list__item"><a class="mobile-nav-link standout" href="<?= esc_url(home_url('/blog')); ?>">Recent</a></li>
	<?php } ?>
  </ul>
</nav>