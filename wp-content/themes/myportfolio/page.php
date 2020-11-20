<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
<h1 class="titre-page">À propos</h1>
  
  <div class="container">
   <div class="partie-texte">
     <p class="texte-propos">
      <?php the_excerpt(); ?>
     </p>
   </div>
    
   <div class="photo">
   
   </div>

  </div>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>

