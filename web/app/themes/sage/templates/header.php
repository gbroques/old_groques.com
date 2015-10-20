<?php include 'header/mobile-navigation.php' ?>

<!-- HEADER -->
<header>
  <div class="header-container">
    <a class="logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <ul class="nav">
    <?php if ( is_front_page() && is_home() ) { ?>
      <!-- Default homepage -->
      <li class="nav__item"><a href="#skills">Skills</a></li>
      <li class="nav__item"><a href="#work">Work</a></li>
      <li class="nav__item"><a href="#about">About</a></li>
      <li class="nav__item"><a href="#contact">Contact</a></li>
      <li class="nav__item"><a class="cta" href="<?= esc_url(home_url('/blog')); ?>">Blog</a></li>
    <?php } elseif ( is_front_page() ) { ?>
      <!-- Static homepage -->
      <li class="nav__item"><a href="#skills">Skills</a></li>
      <li class="nav__item"><a href="#work">Work</a></li>
      <li class="nav__item"><a href="#about">About</a></li>
      <li class="nav__item"><a href="#contact">Contact</a></li>
      <li class="nav__item"><a class="cta" href="<?= esc_url(home_url('/blog')); ?>">Blog</a></li>
    <?php } elseif ( is_home() ) { ?>
      <!-- Blog page -->
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>php">PHP</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>design">Design</a></li>
      <li class="nav__item"><a class="cta" href="<?= esc_url(home_url('/blog')); ?>">Recent</a></li>
    <?php } else { ?>
      <!-- Everything else -->
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>php">PHP</a></li>
      <li class="nav__item"><a href="<?= esc_url(home_url('/')); ?>design">Design</a></li>
      <li class="nav__item"><a class="cta" href="<?= esc_url(home_url('/blog')); ?>">Recent</a></li>
    <?php } ?>
    </ul>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>