<?php /* Template Name: Homepage */ 
get_header();
?>

<?php
 function showSkill($list_name){
   //Check rows exists.
   if( have_rows($list_name) ):
        $skill = array();
   
       // Loop through rows.
       while( have_rows($list_name) ) : the_row();
           // Load sub field value.
           $sub_value = get_sub_field('quality');
           // Do something...
         
           array_push($skill,$sub_value);
       // End loop.
       endwhile;
       $randomInt = rand(0,4);
       echo($skill[$randomInt]);
   
   // No value.
   else :
       // Do something...
   endif;
 }
?>

<div class="supertitre">
<?php if(get_field('name')): ?>
  <h1 class="titre-page"><?php the_field('name') ?></h1>
<?php endif; ?>

<?php if(get_field('description')): ?>
  <h2 class="accroche-first"><?php the_field('description') ?></h2>
<?php endif; ?>

<?php if(get_field('content')): ?>
  <h2 class="accroche"><?php the_field('content') ?> <?php showSkill('description_list') ?> <?php showSkill('description_list_2') ?></h2>
<?php endif; ?>




<?php if(get_field('know_more')): ?>
  <a class="know-more" href="<?php the_field('know_more') ?>">En savoir plus</a>
<?php endif; ?>
</div>
<?php get_footer() ?>