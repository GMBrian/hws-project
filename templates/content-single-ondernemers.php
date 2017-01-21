<?php

use Roots\Sage\Extras;

?>

<article <?php post_class( 'row row-nogap' ); ?>>
	<div class="ondernemers-post-section-left col-lg-3">
		<?php if ( has_post_thumbnail() ) : ?>
			<img src="<?php the_post_thumbnail_url( 'medium' ); ?>"/>
		<?php endif; ?>
		<ul class="social-share turquoise row">
			<?php
			echo get_field( 'facebook_url' ) ? '<li class="col-lg-4 col-md-12 social-facebook"><a href="' . get_field( 'facebook_url' ) . '" title="' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '">' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '</a></li>' : '';
			echo get_field( 'twitter_url' ) ? '<li class="col-lg-4 col-md-12 social-twitter"><a href="' . get_field( 'twitter_url' ) . '" title="' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '">' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '</a></li>' : '';
			echo get_field( 'linkedin_url' ) ? '<li class="col-lg-4 col-md-12 social-linkedin"><a href="' . get_field( 'linkedin_url' ) . '" title="' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '">' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '</a></li>' : '';
			?>
		</ul>
	</div>
	<div class="ondernemers-post-section-right col-lg-9">
		<header class="ondernemers-header">
			<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<?= get_field( 'bedrijfsactiviteiten' ) ? '<h4>' . get_field( 'bedrijfsactiviteiten' ) . '</h4>' : ''; ?>
		</header>
		<?php the_content(); ?>
		<footer class="ondernemers-footer row">
							<span
								class="col-sm-12 ondernemers-info"><?= 'w: <a target="_blank" href="' . get_field( 'bedrijfswebsite' ) . '">' . Extras\get_display_url( get_field( 'bedrijfswebsite' ) ) . '</a>'; ?></span>
			<span class="col-md-12 ondernemers-info"><?= 't: ' . get_field( 'telefoonnummer' ); ?></span>
							<span
								class="col-sm-12 ondernemers-info"><?= 'e: <a href="mailto:' . get_field( 'e-mailadres' ) . '">' . get_field( 'e-mailadres' ) . '</a>'; ?></span>
		</footer>
	</div>
</article>