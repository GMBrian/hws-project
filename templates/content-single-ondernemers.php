<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php //get_template_part( 'templates/header-archive' ); ?>

<div class="container row">
	<div class="col-md-9 ondernemers-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article <?php post_class( 'row' ); ?>>
				<div class="ondernemers-post-section-left col-sm-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<img src="<?php the_post_thumbnail_url( 'medium' ); ?>"/>
					<?php endif; ?>
					<ul class="social-share turqouis">
						<li class="social-facebook"><a href="https://www.facebook.com/" title="Deel op Facebook"
						                               deluminate_imagetype="png">Deel op Facebook</a></li>
						<li class="social-twitter"><a href="https://twitter.com/" title="Deel op Twitter"
						                              deluminate_imagetype="png">Deel op Twitter</a></li>
						<li class="social-linkedin"><a href="https://www.linkedin.com/" title="Deel op LinkedIn"
						                               deluminate_imagetype="png">Deel op LinkedIn</a></li>
						<li class="social-instagram"><a href="https://www.instagram.com/" title="Deel op Instagram"
						                                deluminate_imagetype="png">Deel op Instagram</a></li>
					</ul>
				</div>
				<div class="ondernemers-post-section-right col-sm-9">
					<header class="ondernemers-header">
						<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
						<?= get_field( 'bedrijfsactiviteiten' ) ? '<h4>' . get_field( 'bedrijfsactiviteiten' ) . '</h4>' : ''; ?>
					</header>
					<?= get_the_content(); ?>
					<footer class="ondernemers-footer">
						<span class="ondernemers-info"><?= 'w: ' . Extras\get_display_url( get_field( 'bedrijfswebsite' ) ); ?></span>
						<span class="ondernemers-info"><?= 't: ' . get_field( 'telefoonnummer' ); ?></span>
						<span class="ondernemers-info"><?= 'e: ' . get_field( 'e-mailadres' ); ?></span>
					</footer>
				</div>
			</article>

		<?php endwhile; ?>

		<p class="navigation-links row">
			<?php
			$next_post = get_next_post();
			if ( ! empty( $next_post ) ) {
				echo '<a href="' . get_permalink( $next_post->ID ) . '">' . $next_post->post_title . '</a>';
			}
			?>
			<a href="#"><?= __( 'overzicht', TEXT_DOMAIN ); ?></a>
			<?php
			$previous_post = get_previous_post();
			if ( ! empty( $previous_post ) ) {
				echo '<a href="' . get_permalink( $previous_post->ID ) . '">' . $previous_post->post_title . '</a>';
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
