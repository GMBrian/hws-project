<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/header-archive' ); ?>

<div class="container row">
	<div class="col-md-9 col-sm-12 archive-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('templates/content-archive', get_post_type()); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	</div>

	<aside class="sidebar col-md-3 col-sm-12">

		<?php if ( Setup\display_sidebar() ) : ?>
			<?php include Wrapper\sidebar_path(); ?>
		<?php endif; ?>

	</aside>

</div>

