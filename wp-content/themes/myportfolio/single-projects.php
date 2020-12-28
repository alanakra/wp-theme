<!-- Article -->
<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<h1 class="titre-projet titre-projet-work"><?php the_title() ?></h1>


<div class="container">
  <div class="partie-texte">
    <div class="texte-projet"><?php the_content(); ?></div>
  </div>

</div>
    

  <?php endwhile; endif; ?>
<?php get_footer(); ?>