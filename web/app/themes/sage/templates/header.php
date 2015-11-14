<?php include 'header/mobile-navigation.php' ?>

<!-- HEADER -->
<header>
  <div class="wrapper">
    <a class="logo header-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <div class="header-nav nav">
    <?php if ( is_front_page() && is_home() ) { ?>
      <!-- Default homepage -->
      <a class="header-nav-link" href="#skills">Skills</a>
      <a class="header-nav-link" href="#work">Work</a>
      <a class="header-nav-link" href="#about">About</a>
      <a class="header-nav-link" href="#contact">Contact</a>
      <a class="header-nav-link cta" href="<?= esc_url(home_url('/blog')); ?>">Blog</a>
    <?php } elseif ( is_front_page() ) { ?>
      <!-- Static homepage -->
      <a class="header-nav-link" href="#skills">Skills</a>
      <a class="header-nav-link" href="#work">Work</a>
      <a class="header-nav-link" href="#about">About</a>
      <a class="header-nav-link" href="#contact">Contact</a>
      <a class="header-nav-link cta" href="<?= esc_url(home_url('/blog')); ?>">Blog</a>
    <?php } elseif ( is_page_template( 'template-work.php' ) ) { ?>
    <!-- Portfolio pages -->
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>work">Work</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>about">About</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>">Contact</a>
      <a class="header-nav-link cta" href="<?= esc_url(home_url('/blog')); ?>">Blog</a>
    <?php } elseif ( is_home() ) { ?>
      <!-- Blog page -->
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>php">PHP</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>design">Design</a>
      <a class="header-nav-link cta" href="<?= esc_url(home_url('/blog')); ?>">Recent</a>
    <?php } else { ?>
      <!-- Everything else -->
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>html-css">HTML &amp; CSS</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>javascript">Javascript</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>php">PHP</a>
      <a class="header-nav-link" href="<?= esc_url(home_url('/')); ?>design">Design</a>
      <a class="header-nav-link cta" href="<?= esc_url(home_url('/blog')); ?>">Recent</a>
    <?php } ?>
    </div>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>