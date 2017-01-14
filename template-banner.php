<?php
/**
 * Template Name: Uitgebreide Banner
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('templates/content-template', 'banner'); ?>
<?php endwhile; ?>
