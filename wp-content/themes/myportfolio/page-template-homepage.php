<?php /* Template Name: Homepage */ 
get_header();
?>

<h1><?php get_field('name') ?></h1>
<h2><?php get_field('description') ?></h2>
<h3><?php get_field('content') ?> <span id="accroche1"><?php get_field('description_list') ?></span> <span id="accroche2"><?php get_field('description_list_2') ?></span></h3>

<?php get_footer() ?>