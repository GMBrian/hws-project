<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<div class="container row">
	<div class="col-md-9 ondernemers-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article <?php post_class( 'row' ); ?>>
				<div class="ondernemers-post-section-left col-sm-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<img src="<?php the_post_thumbnail_url( 'medium' ); ?>"/>
					<?php endif; ?>
					<ul class="social-share turquoise">
						<?php
							echo get_field( 'facebook_url' ) ? '<li class="social-facebook"><a href="' .  get_field( 'facebook_url' ) . '" title="' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '">' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '</a></li>' : '';
							echo get_field( 'twitter_url' ) ? '<li class="social-twitter"><a href="' .  get_field( 'twitter_url' ) . '" title="' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '">' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '</a></li>' : '';
							echo get_field( 'linkedin_url' ) ? '<li class="social-linkedin"><a href="' .  get_field( 'linkedin_url' ) . '" title="' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '">' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '</a></li>' : '';
							echo get_field( 'instagram_url' ) ? '<li class="social-instagram"><a href="' .  get_field( 'instagram_url' ) . '" title="' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '">' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '</a></li>' : '';
						?>
					</ul>
				</div>
				<div class="ondernemers-post-section-right col-sm-9">
					<header class="ondernemers-header">
						<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
						<?= get_field( 'bedrijfsactiviteiten' ) ? '<h4>' . get_field( 'bedrijfsactiviteiten' ) . '</h4>' : ''; ?>
					</header>
					<?php the_content(); ?>
					<footer class="ondernemers-footer">
						<span class="ondernemers-info"><?= 'w: <a target="_blank" href="' . get_field( 'bedrijfswebsite' ) . '">' . Extras\get_display_url( get_field( 'bedrijfswebsite' ) ) . '</a>'; ?></span>
						<span class="ondernemers-info"><?= 't: ' . get_field( 'telefoonnummer' ); ?></span>
						<span class="ondernemers-info"><?= 'e: <a href="mailto:' . get_field( 'e-mailadres' ) . '">' . get_field( 'e-mailadres' ) . '</a>'; ?></span>
					</footer>
				</div>
			</article>

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

	<aside class="sidebar col-md-3">

		<?php if ( Setup\display_sidebar() ) : ?>
			<?php include Wrapper\sidebar_path(); ?>
		<?php endif; ?>

	</aside>

</div>
