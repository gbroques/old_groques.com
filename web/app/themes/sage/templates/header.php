<!-- MOBILE NAV -->
<nav class="mobile-nav">
  <ul class="mobile-nav-list">
    <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#skills">Skills</a></li>
    <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#work">Work</a></li>
    <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#about">About</a></li>
    <li class="mobile-nav-list__item"><a class="mobile-nav-link" href="#contact">Contact</a></li>
  </ul>
</nav>

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
      <!-- Replace with Category Archive links -->
      <li class="nav__item"><a href="#skills">HTML &amp; CSS</a></li>
      <li class="nav__item"><a href="#work">Javascript</a></li>
      <li class="nav__item"><a href="#about">PHP</a></li>
      <li class="nav__item"><a href="#contact">Design</a></li>
      <li class="nav__item"><a class="cta" href="<?= esc_url(home_url('/blog')); ?>">Recent</a></li>
    <?php } else { ?>
      <!-- Everything else -->
      <!-- Replace with Category Archive links -->
      <li class="nav__item"><a href="#skills">HTML &amp; CSS</a></li>
      <li class="nav__item"><a href="#work">Javascript</a></li>
      <li class="nav__item"><a href="#about">PHP</a></li>
      <li class="nav__item"><a href="#contact">Design</a></li>
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