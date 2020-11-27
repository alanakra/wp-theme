<?php get_header()

/*
Template Name: Project page
*/
?>

<?php
query_posts(array(
	'post_type' => 'Projects',
	'showposts' => 10
) );
?>

    <section class="container">
				  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		      <article class="projet">
		        <a href="<?php the_permalink(); ?>">
        	   <?php the_post_thumbnail(); ?>   
		   	      <h2><?php the_title(); ?></h2>
      		    <?php the_excerpt(); ?>	
          </a>            
		      </article>

	     <?php endwhile; endif; ?>
				</section>

<?php get_footer() ?>