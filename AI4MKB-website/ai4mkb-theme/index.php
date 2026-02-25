<?php get_header(); ?>

<main class="section">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('card'); ?>>
          <h1><?php the_title(); ?></h1>
          <div>
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Er zijn nog geen berichten om te tonen.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>

