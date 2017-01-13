<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="main-sections">

			<?php get_template_part( 'templates/page-sections' ); ?>

		</div>
	</article>
<?php endwhile; ?>
