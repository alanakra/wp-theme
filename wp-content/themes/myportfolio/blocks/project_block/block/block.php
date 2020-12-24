<?php
/**
* Block Name: project_block
*
*/
// Création d’un ID unique
$id = 'project_block-' . $block['id'];

if( !empty($block['anchor']) ) {
 $id = $block['anchor'];
}
?>

