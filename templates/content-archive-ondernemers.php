<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php //get_template_part( 'templates/header-archive' ); ?>

<div class="full-width-banner"
     style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/banner-ondernemers.jpg'; ?>);">

	<div class="container row">
		<div class="col-md-5 offset-md-6 ondernemer-banner-hero-container">
			<div class="ondernemer-banner-hero">
				<p class="ondernemer-type">Flexwerker</p>
				<h3 class="ondernemer-quote">“Het werkstation is voor
					mij de ideale werkplek”</h3>
				<p class="ondernemer-function">Lisanna Dekkers | Dekkers meubels</p>
			</div>
		</div>
	</div>

</div>

<div class="container row">

	<div class="col-md-12 archive-container">

		<div class="row">
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
