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
 
<?php wp_nav_menu(array(
      'menu' => 'portfolio-menu',
      'menu_class' => 'nav-menu',
    )) ?>
