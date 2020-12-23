<?php /*Template Name: About*/
get_header();
?>

  <?php $title = get_field('title');
    if ($title): ?>
      <h1 class="titre-page"><?php the_field('title') ?></h1>
   <?php endif;?>
  
  <div class="container">
   <div class="partie-texte">

     <?php $description = get_field('description');
      if ($title): ?>
        <p class="texte-propos"><?php the_field('description') ?></p>
     <?php endif;?>
     
   </div>
    
   <div class="photo">
    <?php 
      $image = get_field('picture');
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
   </div>

  </div>

<?php get_footer(); ?>