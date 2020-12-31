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
let descriptionList = <?php echo $description_list; ?>;
let descriptionList_2 = <?php echo $description_list_2; ?>;


function showQualities(firstList, secondList) {
  var randHook1 = firstList[Math.floor(Math.random() * firstList.length)];
  var randHook2 = secondList[Math.floor(Math.random() * secondList.length)];
  console.log(randHook1);
  console.log(randHook2);
}

setInterval(showQualities(descriptionList, descriptionList_2), 2000);

</script>

<?php get_footer() ?>