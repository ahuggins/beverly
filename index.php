<?php get_header(); ?>
  <?php get_sidebar(); ?>
  	<div id="main">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
  
    </div> 
<?php get_footer(); ?>