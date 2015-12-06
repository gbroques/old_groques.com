<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <a id="top"></a>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php if ( is_front_page() && is_home() ) { ?>
      <!-- Default homepage -->

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
      <?php include Wrapper\template_path(); ?>
    <?php } elseif ( is_front_page() ) { ?>
      <!-- Static homepage -->

      <!-- INTRO -->
      <section id="intro"> 
        <div class="intro-text-container">
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
        </div>
      </section>
      <?php include Wrapper\template_path(); ?>
    <?php } elseif ( is_home() ) { ?>
      <!-- BLOG -->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="wrap">
        <div class="content-container max-width-container">
          <?php include Wrapper\template_path(); ?>
        </div>
      </div>
    <?php } else { ?>
      <!-- Everything else -->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="wrap">
        <?php include Wrapper\template_path(); ?>
      </div>
    <?php } ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
