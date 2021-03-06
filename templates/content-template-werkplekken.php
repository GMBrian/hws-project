<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="full-width section section-socket">
			<header class="entry-header container">
				<div class="row">
					<div class="col-lg-10 push-lg-1">
						<h1 class="entry-title"><?= get_the_title(); ?></h1>
						<?= get_field( 'ondertitel' ) ? '<h4 class="entry-subtitle">' . get_field( 'ondertitel' ) . '</h4>' : ''; ?>
					</div>
				</div>
			</header>

			<div class="container">
				<div class="row">
					<div class="col-lg-10 push-lg-1 werkplek-content">
						<?= get_the_content(); ?>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-1">
						<?= get_field( 'blok_1_link' ) ? '<a href="' . get_field( 'blok_1_link' ) . '">' : '<a>'; ?>
						<div
							class="werkplek-blok-container" <?= get_field( 'blok_1_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_1_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_1_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_1_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_1_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_1_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
						<?= get_field( 'blok_1_link' ) ? '</a>' : '</a>'; ?>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-2">
						<?= get_field( 'blok_2_link' ) ? '<a href="' . get_field( 'blok_2_link' ) . '">' : '<a>'; ?>
						<div
							class="werkplek-blok-container" <?= get_field( 'blok_2_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_2_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_2_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_2_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_2_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_2_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
						<?= get_field( 'blok_2_link' ) ? '</a>' : '</a>'; ?>
					</div>
					<div class="col-md-4 werkplek-blok werkplek-blok-3">
						<?= get_field( 'blok_3_link' ) ? '<a href="' . get_field( 'blok_3_link' ) . '">' : '<a>'; ?>
						<div
							class="werkplek-blok-container" <?= get_field( 'blok_2_afbeelding' ) ? 'style="background-image:url(' . get_field( 'blok_3_afbeelding' ) . ')"' : ''; ?>>
							<div class="werkplek-blok-inner-container">
								<?= get_field( 'blok_3_titel' ) ? '<h3 class="werkplek-blok-title">' . get_field( 'blok_3_titel' ) . '</h3>' : ''; ?>
								<?= get_field( 'blok_3_tekst' ) ? '<p class="werkplek-blok-text">' . get_field( 'blok_3_tekst' ) . '</p>' : ''; ?>
							</div>
						</div>
						<?= get_field( 'blok_3_link' ) ? '</a>' : '</a>'; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sections">

			<?php get_template_part( 'templates/page-sections' ); ?>
			
		</div>
	</article>
<?php endwhile; ?>
