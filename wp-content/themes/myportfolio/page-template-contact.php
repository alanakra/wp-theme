<?php /* Template Name: Contact */
get_header();
?>

<h1 class="titre-page"><?php the_field('subtitle') ?></h1>
<p class="discuss">Il est actuellement <span id="heureLocal"></span>:<span id="minutesLocal"></span> <span id="finPhrase"></span>  </p>

<div class="container-contact">

   <?php
          if( have_rows('link-group') ):
          print_r($sub_value['link']);
            while( have_rows('link-group') ) : the_row();
              $sub_value = get_sub_field('link');?>

                <div class="container block">
                  <a href="<?php echo($sub_value['link']['url']) ?>">
                    <img src="<?php echo($sub_value['image-link']['url']) ?>" alt="">
                    <p><?php echo($sub_value['text_link']) ?></p>
                  </a>
                </div>

<?php
            endwhile;

           else :

          endif;
   ?>

</div>