<?php
/**
 * Template Name: Home Template
 */
?>

<!-- INTRO -->
<section id="intro"> 
  <div class="shadow">
    <span class="intro-text-1">Hello! </span>
    <span class="intro-text-2">My name's G</span>
  </div>
  <div class="and-block">
    <div class="shadow intro-text-3">and I'm a</div> 
  </div>
  <div class="shadow">
    <span class="intro-text-4">Designer &amp; </span>
    <span class="intro-text-5">Developer</span>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <h2 class="section-title">My skills</h2>

  <div class="row">
    <div class="large-4 columns">

      <span class="skill-badge icon icon-brush"></span>
      <h3>Design</h3>
      <ul class="skill-list">
        <li>Adobe Illustrator</li>
        <li>Clean &amp; Modern</li>
        <li>Logo Design</li>
        <li>UI / UX</li>
      </ul>

    </div>
    <div class="large-4 columns">

      <span class="skill-badge icon icon-code"></span>
      <h3>Development</h3>
      <ul class="skill-list">
        <li>HTML / CSS</li>
        <li>JavaScript</li>
        <li>PHP / MySQL</li>
        <li>WordPress</li>
      </ul>

    </div>
    <div class="large-4 columns">

      <span class="skill-badge icon icon-light-bulb"></span>
      <h3>And...</h3>
      <ul class="skill-list">
        <li>Creative</li>
        <li>Problem Solver</li>
        <li>Team Player</li>
        <li>Self Starter</li>
      </ul>

    </div>
  </div>
</section>

<!-- WORK -->
<section id="work">
  <a name="work"></a>
  <h2 class="section-title">My work</h2>

  <div class="row">
    <div class="large-12 columns">

      <div class="frame">
        <a href="<?= esc_url(home_url('/work/vending-ur-way')); ?>">
          <img src="<?= get_template_directory_uri(); ?>/dist/images/vuw-thumbnail.svg" alt="Vending Ur Way">
          <p class="caption">Vending Ur Way</p>
        </a>
      </div>
    
    </div>

</section>

<!-- ABOUT -->
<section id="about">
  <a name="about"></a>
  <div class="about-container">
    <div class="portrait">
      <img class="headshot" src="<?= get_template_directory_uri(); ?>/dist/images/headshot.jpeg" alt="G Roques">
    </div>
    <div>
      <p class="about-text">I'm a self-taught web designer and developer based in St. Louis. When I'm not coding you can find me surfing the web for new music.</p>
    </div>
  </div>
  <div class="about-social-icons-container">
    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-github"></a>
    <a target="blank" href="https://www.linkedin.com/in/gbroques" class="social-icon icon icon-linkedin"></a>
    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-google-plus"></a>
    <a target="blank" href="https://github.com/gbroques" class="social-icon icon icon-twitter"></a>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <a name="contact"></a>
  <h2 class="section-title">Let&rsquo;s Work Together</h2>
  <form action="//formspree.io/groques360@gmail.com"
    method="POST">
    <input class="name" placeholder="Name" type="text" name="name">
    <input class="email" placeholder="E-Mail" type="email" name="_replyto">
    <textarea class="message" name="message" rows="6" placeholder="A brief message"></textarea>
    <input class="btn" type="submit" value="Send">
  </form>
</section>