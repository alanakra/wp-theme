<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="projet">
       <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          <h2><?php the_title(); ?></h2>
          <h3><?php the_excerpt(); ?></h3>
       </a>  
		</article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>