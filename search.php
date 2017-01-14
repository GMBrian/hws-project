<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/header-archive' ); ?>

<div class="container row">
	<div class="col-md-9 archive-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('templates/content', 'search'); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	</div>

	<aside class="sidebar col-md-3">

		<?php if ( Setup\display_sidebar() ) : ?>
			<?php include Wrapper\sidebar_path(); ?>
		<?php endif; ?>

	</aside>

</div>