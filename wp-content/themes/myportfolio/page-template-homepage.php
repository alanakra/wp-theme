<?php /* Template Name: Homepage */ 
get_header();
?>

<script>
  // I call my JS function once the page is fully loaded
  window.addEventListener('load', hook(description_list, description_list_2));

  // Variable declaration
  let description_list = [];
  let description_list_2 = [];
  console.log(typeof(description_list))
  console.log(typeof(description_list_2))
</script>

<?php

// The list_name param contains the name of the repeater field
 function showSkill($list_name){
          if( have_rows($list_name) ):
            $skill = array();
  
            while( have_rows($list_name) ) : the_row();
              $sub_value = get_sub_field('quality');
              echo($list_name);
              echo($sub_value);
              array_push($skill,$sub_value); ?>

<script>
    <?php echo($list_name)?>.push("<?php echo($sub_value) ?>");
</script>

    <?php
            endwhile;

              print_r($skill);
           else :

          endif;
 }

  showSkill('description_list');
  showSkill('description_list_2');
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