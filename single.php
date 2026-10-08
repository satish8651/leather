<?php get_header(); ?>
<main>
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <p>By <?php the_author(); ?> | <?php echo get_the_date(); ?></p>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>