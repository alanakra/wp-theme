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
  <h2 class="accroche"><?php the_field('content') ?> <span id="accroche1"></span> <span id="accroche2"></span></h2>
<?php endif; ?>


<?php if(get_field('know_more')): ?>
  <a class="know-more" href="<?php the_field('know_more') ?>">En savoir plus</a>
<?php endif; ?>
</div>


<script>
let descriptionList = <?php echo $description_list; ?>;
let descriptionList2 = <?php echo $description_list_2; ?>;
console.log(descriptionList);
console.log(descriptionList2);

setTimeout(showQualities(descriptionList, descriptionList2), 2000);

</script>

<?php get_footer() ?>