<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<?php if ( is_singular( 'ondernemers' ) ) : ?>

	<div class="container row">
		<div class="col-md-9">
			<div class="ondernemers-container">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'templates/content-single', get_post_type() ); ?>
				<?php endwhile; ?>

				<p class="navigation-links">
					<?php
					$next_post = get_next_post();
					if ( ! empty( $next_post ) ) {
						echo '<a href="' . get_permalink( $next_post->ID ) . '"><i class="fa fa-chevron-left"></i> ' . __( 'vorige', TEXT_DOMAIN ) . '</a>';
					}
					?>
					<a href="<?= get_post_type_archive_link( 'ondernemers' ); ?>"><?= __( 'overzicht', TEXT_DOMAIN ); ?></a>
					<?php
					$previous_post = get_previous_post();
					if ( ! empty( $previous_post ) ) {
						echo '<a href="' . get_permalink( $previous_post->ID ) . '">' . __( 'volgende', TEXT_DOMAIN ) . ' <i class="fa fa-chevron-right"></i></a>';
					}
					?>
				</p>
			</div>

		</div>

		<aside class="sidebar col-md-3">

			<?php if ( Setup\display_sidebar() ) : ?>
				<?php include Wrapper\sidebar_path(); ?>
			<?php endif; ?>

		</aside>

	</div>

<?php else : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'templates/content-single', get_post_type() ); ?>
	<?php endwhile; ?>
<?php endif; ?>
