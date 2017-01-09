<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php get_template_part( 'templates/header-archive' ); ?>

<div class="container row">
	<div class="col-md-9 archive-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article <?php post_class( 'row' ); ?>>
				<div class="archive-post-section-left col-sm-<?= has_post_thumbnail() ? '3' : '0'; ?>">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?= get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php the_post_thumbnail_url( 'medium' ); ?>"/>
						</a>
					<?php endif; ?>
				</div>
				<div class="archive-post-section-right col-sm-<?= has_post_thumbnail() ? '9' : '12'; ?>">
					<header>
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					</header>
					<?php get_template_part( 'templates/entry-meta' ); ?>
					<?= get_the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>

	</div>

	<aside class="sidebar col-md-3">

		<?php if ( Setup\display_sidebar() ) : ?>
			<?php include Wrapper\sidebar_path(); ?>
		<?php endif; ?>

	</aside>

</div>
