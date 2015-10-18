<?php while (have_posts()) : the_post(); ?>
  <div class="post-container">
    <article>
      <div class="post-header">
      <a href="" class="post-title"><?php the_title(); ?></a>
      <p class="post-meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </p>
      </div>
      <div class="post-content">
      <?php the_content(); ?>
      </div>
    </article>
  </div>
<?php endwhile; ?>
