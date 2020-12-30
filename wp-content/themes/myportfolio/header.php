<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php wp_head() ?>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <title><?php wp_title( 'Alan Akra', '|' ); ?></title>
</head>
<body <?php body_class(); ?>>
 
  <nav>
    <div class="nav-name">
      <?php if(!is_front_page()): ?>
        <a href="<?php echo get_home_url() ?>">Alan Akra</a>
      <?php endif;?>
    </div>

    <?php wp_nav_menu(array(
      'menu' => 'portfolio-menu',
      'container_class' => 'nav-menu',
      'menu_class' => 'link-menu',
    )) ?>
  
  </nav>


<div class="cursor" id="cursor"></div>
