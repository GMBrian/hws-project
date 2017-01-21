<article <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 contact-left-section">
				<?= get_field( 'linkerkolom_tekst' ); ?>

				<?php if ( get_field( 'social_media_icons' ) ) : ?>
					<p>
					<ul class="social-share turquoise text-left">
						<?= get_field( 'facebook_url', 'options' ) ? '<li class="social-facebook"><a href="' . get_field( 'facebook_url', 'options' ) . '" title="' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '">' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '</a></li>' : ''; ?>
						<?= get_field( 'twitter_url', 'options' ) ? '<li class="social-twitter"><a href="' . get_field( 'twitter_url', 'options' ) . '" title="' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '">' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '</a></li>' : ''; ?>
						<?= get_field( 'linkedin_url', 'options' ) ? '<li class="social-linkedin"><a href="' . get_field( 'linkedin_url', 'options' ) . '" title="' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '">' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '</a></li>' : ''; ?>
						<?= get_field( 'instagram_url', 'options' ) ? '<li class="social-instagram"><a href="' . get_field( 'instagram_url', 'options' ) . '" title="' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '">' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '</a></li>' : ''; ?>
					</ul>
					</p>
				<?php endif; ?>

				<?php

				$location = get_field( 'google_maps_locatie' );

				if ( ! empty( $location ) ):
					?>
					<h3><?= __( 'Plan je route', TEXT_DOMAIN ); ?></h3>
					<div class="acf-map">
						<?= $location; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 contact-right-section">
				<?= get_field( 'rechterkolom_tekst' ); ?>

				<?= do_shortcode( get_field( 'contactformulier' ) ); ?>
			</div>
		</div>
	</div>
</article>