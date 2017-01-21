<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<div class="full-width-banner"
     style="background-image: url(<?= get_field( 'achtergrondafbeelding', 'options' ); ?>);">
	<div class="container">
		<div class="col-lg-7 offset-lg-4 col-md-9 offset-md-2 ondernemer-banner-hero-container">
			<div class="ondernemer-banner-hero">
				<p class="ondernemer-type"><?= get_field( 'boven_quote', 'options' ); ?></p>
				<h3 class="ondernemer-quote"><?= get_field( 'quote', 'options' ); ?></h3>
				<p class="ondernemer-function"><?= get_field( 'functie_onder_quote', 'options' ); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container row">
	<div class="col-lg-9 col-md-12  justify-content-center">
		<div class="row ondernemers-logos-container">
			<div class="col-sm-12 ondernemers-header">
				<h1><?= __( 'Bedrijven werkzaam bij Het Werkstation', TEXT_DOMAIN ); ?></h1>
				<h4><?= __( 'Laat je inspireren door andere ondernemers', TEXT_DOMAIN ); ?></h4>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4 ondernemers-logo">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?= get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php the_post_thumbnail_url( 'medium' ); ?>"/>
						</a>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
