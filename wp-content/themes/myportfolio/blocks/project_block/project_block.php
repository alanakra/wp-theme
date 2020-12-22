<?php

$className = 'project_block';

if (!empty($block['className'])){
 $className .= ''.$block['className'];
}

if (!empty($block['className'])){
 $className .= ''.$block['align'];
}

?>

<div class="<?php echo esc_attr($className) ?>"></div>