<?php /* Template Name: Homepage */ 
get_header();
?>


<?php

function showSkill( $list_name ){
  $skill = array();

  if( have_rows( $list_name ) ):

    while( have_rows( $list_name ) ) : the_row();

      $sub_value = get_sub_field( 'quality' );
      array_push( $skill, $sub_value ); 

    endwhile;

    print_r( $skill );

  endif;

  // You need to return the array
  return $skill;
}

$description_list = json_encode( showSkill( 'description_list' ) , JSON_UNESCAPED_UNICODE);
$description_list_2 = json_encode( showSkill( 'description_list_2' ) , JSON_UNESCAPED_UNICODE);
?>

<div class="supertitre">
<?php if(get_field('name')): ?>
  <h1 class="titre-page"><?php the_field('name') ?></h1>
<?php endif; ?>

<?php if(get_field('description')): ?>
  <h2 class="accroche-first"><?php the_field('description') ?></h2>
<?php endif; ?>

<?php if(get_field('content')): ?>
  <h2 class="accroche"><?php the_field('content') ?></h2>
<?php endif; ?>


<?php if(get_field('know_more')): ?>
  <a class="know-more" href="<?php the_field('know_more') ?>">En savoir plus</a>
<?php endif; ?>
</div>


<script>

let description_list = <?php echo $description_list; ?>;

// 1. Parse JSON String to Object
description_list = JSON.parse(description_list);
console.log(typeof(description_list));

// 2. Convert Object to Array
description_list = Object.values(description_list);

// 3. Do the same for description_list_2, or convert this process into a function
let description_list_2 = Object.values(JSON.parse(<?php echo $description_list_2?>));

</script>

<?php get_footer() ?>