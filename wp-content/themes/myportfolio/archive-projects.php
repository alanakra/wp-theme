<?php get_header(); ?>
<h1 class="titre-page">Mes archives de projets</h1>
<p class="definition">Portfolio (nom masculin) \pɔʁt.fo.ljo\ :<br>
	Dossier personnel dans lequel les acquis de formation et d'expérience d'une personne sont définis et démontrés.</p>

<section class="container">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<article class="projet">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
			<h2 class="project-link"><?php the_title(); ?></h2>
		</a>
	</article>

	<?php endwhile; endif; ?>
</section>

<div class="copyright">
	<footer>
		<p>Créé avec ❤️ par Alan Akra - 2020</p>
	</footer>
</div>

<?php get_footer(); ?>