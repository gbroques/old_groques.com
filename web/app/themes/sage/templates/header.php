<a id="top"></a>

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
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <li class="nav__item"><a href="#skills">Skills</a></li>
      <li class="nav__item"><a href="#work">Work</a></li>
      <li class="nav__item"><a href="#about">About</a></li>
      <li class="nav__item"><a href="#contact">Contact</a></li>
    </ul>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>