<?php
/**
* Block Name: project_block
*
*/
// Création d’un ID unique
$id = 'banner-' . $block['id'];
$attribute = get_field('project_block');
?>


<div id="<?php echo $id; ?>" class="wp-block-acf-banner-wrapper">
   <?php if ( ! empty ( $attribute ) ) : ?>
     <div class="wp-block-acf-banner-inner">
       <h1><?php echo esc_html( $attribute['project']['name'] ); ?></h1>
       <h1><?php echo esc_html( $attribute['project']['category'] ); ?></h1>
       <h1><?php echo esc_html( $attribute['project']['content'] ); ?></h1>
     </div>
   <?php endif; ?>
</div>