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
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php if ( is_front_page() && is_home() ) { ?>
      <!-- Default homepage -->
      <?php include Wrapper\template_path(); ?>
    <?php } elseif ( is_front_page() ) { ?>
      <!-- Static homepage -->
      <?php include Wrapper\template_path(); ?>
    <?php } elseif ( is_home() ) { ?>
      <!-- BLOG -->
      <div class="wrap">
        <div class="content-container max-width-container">
          <?php include Wrapper\template_path(); ?>
        </div>
      </div>
    <?php } else { ?>
      <!-- Everything else -->
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
