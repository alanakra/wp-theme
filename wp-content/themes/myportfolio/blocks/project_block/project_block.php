<?php
/**
* Block Name: project_block
*
*/
// Création d’un ID unique
$id = 'banner-' . $block['id'];
$title = get_field('project_block');
?>

<div id="<?php echo $id; ?>" class="wp-block-acf-banner-wrapper">
 <?php if ( ! empty ( $title ) ) : ?>
 <div class="wp-block-acf-banner-inner">
  <h1 class="wp-block-acf-banner-title">
   <?php echo esc_html( $title ); ?>
  </h1>
 </div>
 <?php endif; ?>
</div>