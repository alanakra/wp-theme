<!-- Article -->
<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<h1 class="titre-projet titre-projet-work"><?php the_title() ?></h1>


<div class="container">
  <div class="partie-texte">
    <p class="texte-projet"><?php the_content(); ?></p>
  </div>

  <div class="photo">
    <?php the_post_thumbnail(); ?>
  </div>

</div>
    

  <?php endwhile; endif; ?>
<?php get_footer(); ?>