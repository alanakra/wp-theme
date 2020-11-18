<?php get_header(); ?>
  <h1 class="titre-page-projets">Mes projets</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="projet">
       <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
          <?php the_post_thumbnail(); ?>
       </a>  
		</article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>