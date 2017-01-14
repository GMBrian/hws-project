<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<article <?php post_class(); ?>>
	<header class="post-banner inverse" <?= Extras\get_banner_image(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php get_template_part( 'templates/entry-meta' ); ?>
		<?php get_template_part( 'templates/entry-social-share' ); ?>
	</header>
	<div class="main">
		<div class="container">
			<div class="row entry-content">
				<div class="col-md-9">
					<?php the_content(); ?>
				</div>

				<?php if ( Setup\display_sidebar() ) : ?>
					<aside class="sidebar col-md-3">
						<?php include Wrapper\sidebar_path(); ?>
					</aside><!-- /.sidebar -->
				<?php endif; ?>
			</div>
		</div>
	</div>
	<footer>
		<?php wp_link_pages( [
			'before' => '<nav class="page-nav"><p>' . __( 'Pagina\'s:', TEXT_DOMAIN ),
			'after'  => '</p></nav>'
		] ); ?>
	</footer>
</article>