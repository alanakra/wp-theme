<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
<h1 class="titre-page"><?php the_title() ?></h1>
  
  <div class="container">
   <div class="partie-texte">
     <p class="texte-propos">
      <?php the_excerpt(); ?>
     </p>
   </div>
    
   <div class="photo">
     <?php the_post_thumbnail(); ?>
   </div>

  </div>
  <?php endwhile; endif; ?>

<!-- Only for ACF test page -->
  <?php 
$images = get_field('gallery');
if( $images ): ?>
    <ul style="list-style: none; display:flex">
        <?php foreach( $images as $image ): ?>
            <li>
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- For contact -->

<?php 
$contact_subtitle = get_field('subtitle');
if ($contact_subtitle):?>
  <p class="titre-page"><?php the_field('subtitle'); ?><p>
<?php endif; ?>


<?php $contact = get_field('link-group');
 if($contact):?>
    <?php while( have_rows('link-group') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('image_link');
        $link = get_sub_field('text_link');

        ?>
        <div id="hero">
            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <div class="content">
                <?php the_sub_field('caption'); ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>

