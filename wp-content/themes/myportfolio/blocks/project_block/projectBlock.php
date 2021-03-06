<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'projectBlock-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'projectBlock';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$category = get_field('category') ?: 'Project category';
$date = get_field('date') ?: 'Project date';
$projectText = get_field('project_text') ?: 'Text of the project';
$link = get_field('link');
$image = get_field('image') ?: 295;

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container">
    <div class="partie-texte">
        <p class="date-projet"><?php echo $date; ?> - <?php echo $category; ?></p><br>
        <p class="texte-projet"><?php echo $projectText; ?></p><br>
        
        <?php if($link): ?>
            <a class="consulter" href="<?php echo $link['url'] ?>">Consulter ce projet</a>
        <?php endif;?> 

    </div>
    <div class="photo">
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
</div>