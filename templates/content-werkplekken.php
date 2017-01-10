<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="full-width section-socket">
			<header class="entry-header">
				<h1 class="entry-title"><?= get_the_title(); ?></h1>
				<?= get_field( 'ondertitel' ) ? '<h4 class="entry-subtitle">' . get_field( 'ondertitel' ) . '</h4>' : ''; ?>
			</header>


			<div class="container">
				<div class="row">
					<div class="col-lg-10 push-lg-1 werkplek-content">
						<?= get_the_content(); ?>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-1">
						<div class="werkplek-blok-container" <?= get_field( 'blok_1_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_1_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_1_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_1_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_1_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_1_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-1">
						<div class="werkplek-blok-container" <?= get_field( 'blok_1_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_1_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_1_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_1_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_1_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_1_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-1">
						<div class="werkplek-blok-container" <?= get_field( 'blok_1_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_1_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_1_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_1_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_1_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_1_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main">
			<div class="container">
				<div class="row entry-content">
					<div class="col-md-12">
						<?php //the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</article>
<?php endwhile; ?>