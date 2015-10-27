<?php while (have_posts()) : the_post(); ?>
  <article class="post">
    <div class="post-header">
    <a href="" class="post-title"><?php the_title(); ?></a>
    <div class="post-meta">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    </div>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
