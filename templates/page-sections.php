<?php
// check if the flexible content field has rows of data
if ( have_rows( 'secties' ) ):

	// loop through the rows of data
	while ( have_rows( 'secties' ) ) : the_row();

		if ( get_row_layout() == 'tekst' ):

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';
			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-md-12">';

			echo get_sub_field( 'tekst' );

			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'afbeelding_tekst' ):

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';
			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-md-6">';

			echo '<img src="' . get_sub_field( 'afbeelding' ) . '">';

			echo '</div>';
			echo '<div class="col-md-6">';

			echo get_sub_field( 'tekst' );

			if ( get_sub_field( 'knop_toevoegen' ) ) {
				echo '<a class="btn" href="' . get_sub_field( 'knop_bestemming' ) . '">' . get_sub_field( 'knop_tekst' ) . ' <i class="fa fa-long-arrow-right"></i></a>';
			}

			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'tekst_afbeelding' ):

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';
			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-md-6">';

			echo get_sub_field( 'tekst' );

			if ( get_sub_field( 'knop_toevoegen' ) ) {
				echo '<a class="btn" href="' . get_sub_field( 'knop_bestemming' ) . '">' . get_sub_field( 'knop_tekst' ) . ' <i class="fa fa-long-arrow-right"></i></a>';
			}

			echo '</div>';
			echo '<div class="col-md-6">';

			echo '<img src="' . get_sub_field( 'afbeelding' ) . '">';

			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'call_to_action' ):

			$background_image = get_sub_field( 'achtergrond' ) && strlen( get_sub_field( 'achtergrond' ) ) ? get_sub_field( 'achtergrond' ) : get_stylesheet_directory_uri() . '/assets/images/call-to-action_fallback.png';

			echo '<div class="section section-' . get_row_layout() . ' full-width-container" style="background-image:url(' . $background_image . ')">';

			echo '<div class="cta-container">';

			echo '<h3 class="cta-header">' . get_sub_field( 'tekst' ) . '</h3>';

			if ( get_sub_field( 'knop_toevoegen' ) ) {
				echo '<a class="btn cta-btn" href="' . get_sub_field( 'knop_bestemming' ) . '">' . get_sub_field( 'knop_tekst' ) . ' <i class="fa fa-long-arrow-right"></i></a>';
			}

			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'usps' ):

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';
			?>
			<div class="container">
				<div class="row entry-content usp-container">
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-desk.png'; ?>">
						<h4><?= __( 'Flexibele werkplekken', TEXT_DOMAIN ); ?></h4>
						<p><?= __( 'Van een flexplek tot een kantoorunit', TEXT_DOMAIN ); ?></p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-time.png'; ?>">
						<h4><?= __( 'Start binnen 24 uur', TEXT_DOMAIN ); ?></h4>
						<p><?= __( 'Huur in 2 stappen een eigen werkplek', TEXT_DOMAIN ); ?></p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-rails.png'; ?>">
						<h4><?= __( 'Samen verder groeien', TEXT_DOMAIN ); ?></h4>
						<p><?= __( 'Ontmoet inspirerende ondernemer', TEXT_DOMAIN ); ?></p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-list.png'; ?>">
						<h4><?= __( 'Flexibel huren', TEXT_DOMAIN ); ?></h4>
						<p><?= __( 'Volledig naar wens van 1 uur tot 1 jaar', TEXT_DOMAIN ); ?></p>
					</div>
				</div>
			</div>
			<?php
			echo '</div>';

		elseif ( get_row_layout() == 'ondernemers' ):
		?>
			<div class="row entry-content business-container">
				<div class="col-sm-12 business-header">
					<h2><?= __( 'Worden dit jouw buren?', TEXT_DOMAIN ); ?></h2>
					<h4><?= __( 'Laat je inspireren door andere ondernemers', TEXT_DOMAIN ); ?></h4>
				</div>
			</div>
		<?php
		endif;

	endwhile;

else :

	// no layouts found

endif;