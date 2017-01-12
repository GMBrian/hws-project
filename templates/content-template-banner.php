<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>

		<?php
		$background_image = get_field( 'banner_afbeelding' ) && strlen( get_field( 'banner_afbeelding' ) ) ? get_field( 'banner_afbeelding' ) : get_stylesheet_directory_uri() . '/assets/images/img-restauratie.jpg';
		?>

		<div class="full-width advanced-banner-header" style="background-image:url(<?= $background_image; ?>)">
			<div class="row">
				<div class="col-lg-10 push-lg-1">
					<header class="entry-header container">
						<h1 class="entry-title"><?= get_the_title(); ?></h1>
						<p>
							<?php
							if ( have_rows( 'eigenschappen' ) ):
								while ( have_rows( 'eigenschappen' ) ) : the_row();
									echo '<span class="advanced-banner-property"><i class="' . get_sub_field( 'icoon' ) . '"></i>' . get_sub_field( 'tekst' ) . '</span>';
								endwhile;
							endif;
							?>
						</p>
					</header>
					<div class="advanced-banner-description">
						<?= get_field( 'onderschrift' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sections">

			<?php get_template_part( 'templates/page-sections' ); ?>

		</div>
	</article>
<?php endwhile; ?>
