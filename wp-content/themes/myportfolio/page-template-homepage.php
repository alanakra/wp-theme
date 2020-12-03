<?php /* Template Name: Homepage */ 
get_header();
?>

<?php if(get_field('name')): ?>
  <h1><?php the_field('name') ?></h1>
<?php endif; ?>

<?php if(get_field('description')): ?>
  <h2><?php the_field('description') ?></h2>
<?php endif; ?>

<?php if(get_field('content')): ?>
  <h2><?php the_field('content') ?></h2>
<?php endif; ?>

<?php if(get_field('description_list')): ?>
  <h2><?php the_field('description_list') ?></h2>
<?php endif; ?>

<?php if(get_field('know_more')): ?>
  <a href="<?php the_field('know_more') ?>">En savoir plus</h2>
<?php endif; ?>

<?php 
$image = get_field('picture');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>


<?php get_footer() ?>