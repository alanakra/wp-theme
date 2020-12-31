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


    <div class="container-button">
      <?php 
        $fields = have_rows('link');
        if($fields):
          while(have_rows('link')):the_row();
            $nameIcon = get_sub_field('text');
            $imageIcon = get_sub_field('image');
            $linkIcon = get_sub_field('link');?>

      <a href="<?php echo($linkIcon) ?>" title="<?php echo($nameIcon) ?>">
        <img src="<?php echo($imageIcon['url']) ?>" alt="<?php echo($nameIcon) ?>">
      </a>

      <?php
          endwhile;
        endif;
      ?>

    </div>

  </div>

  <div class="photo">
    <?php 
      $image = get_field('picture');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="moi" />
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>