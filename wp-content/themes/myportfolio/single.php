<!-- Article -->
<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<h1 class="titre-projet titre-projet-work"><?php the_title() ?></h1>


<div class="container">
    <p class="texte-projet"><?php the_content(); ?></p>
</div>
    
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
