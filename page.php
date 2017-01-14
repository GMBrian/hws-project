<?php get_template_part( 'templates/navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="main-sections">

			<?php get_template_part('templates/content', 'page'); ?>

		</div>
	</article>
<?php endwhile; ?>

