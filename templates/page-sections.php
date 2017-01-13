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

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-tint-' . get_sub_field( 'tint' ) . '" style="background-image:url(' . $background_image . ')">';
			echo '<div class="container">';
			echo '<div class="cta-container">';

			echo '<h3 class="cta-header">' . get_sub_field( 'tekst' ) . '</h3>';

			if ( get_sub_field( 'knop_toevoegen' ) ) {
				echo '<a class="btn cta-btn" href="' . get_sub_field( 'knop_bestemming' ) . '">' . get_sub_field( 'knop_tekst' ) . ' <i class="fa fa-long-arrow-right"></i></a>';
			}

			echo '</div>';
			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'flexwerkplek_opties' ):

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';

			if ( have_rows( 'opties' ) ) :

				echo '<div class="container-fluid">';
				echo '<div class="row entry-content flexwerk-container">';

				$flex_counter = 0;

				while ( have_rows( 'opties' ) ) : the_row();

					echo '<div class="' . ( $flex_counter == 0 ? 'offset-lg-1' : '' ) . ' col-lg-2 col-md-12 col-sm-12 flexwerk-optie">';
					?>
					<img class="flexwerk-icon"
					     src="<?= get_stylesheet_directory_uri() . '/assets/images/ticket-' . get_sub_field( 'icoon' ) . '.png'; ?>">
					<?= get_sub_field( 'titel' ) ? '<h4 class="ticket-title">' . get_sub_field( 'titel' ) . '</h4>' : ''; ?>
					<?= get_sub_field( 'ondertitel' ) ? '<p class="ticket-subtitle">' . get_sub_field( 'ondertitel' ) . '</p>' : ''; ?>
					<?= get_sub_field( 'prijs' ) ? '<p class="ticket-price">' . get_sub_field( 'prijs' ) . '</p>' : ''; ?>
					<?php

					echo '</div>';

					$flex_counter ++;

				endwhile;

				if ( get_sub_field( 'knop_toevoegen' ) ) {
					echo '<a class="btn flexwerk-btn" href="' . get_sub_field( 'knop_bestemming' ) . '">' . get_sub_field( 'knop_tekst' ) . ' <i class="fa fa-long-arrow-right"></i></a>';
				}

				echo '</div>';
				echo '</div>';

			endif;

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

			echo '<div class="section section-' . get_row_layout() . ' full-width-container background-color-' . get_sub_field( 'achtergrondkleur' ) . '">';

			$ondernemers = [ ];
			$selected    = 0;
			?>
			<div class="container">
				<div class="row entry-content section-ondernemers-container">
					<div class="col-sm-12 section-ondernemers-header">
						<h2><?= __( 'Worden dit jouw buren?', TEXT_DOMAIN ); ?></h2>
						<h4><?= __( 'Laat je inspireren door andere ondernemers', TEXT_DOMAIN ); ?></h4>
					</div>
					<?php if ( get_sub_field( 'Handmatige selectie' ) ) {

						$ondernemers = get_sub_field( 'ondernemers_selecteren' );

					} else {

						$args = [
							'post_type'      => 'ondernemers',
							'orderby'        => 'rand',
							'posts_per_page' => 6,
						];

						$ondernemers = get_posts( $args );

					} ?>

					<?php if ( $ondernemers && count( $ondernemers ) > 0 ) : ?>

						<?php

						$selected_array = array_rand( $ondernemers, 1 );
						$selected       = $ondernemers[ $selected_array ]->ID;

						foreach ( $ondernemers as $ondernemer ) {
							echo '<div class="col-md-2 col-sm-6 section-ondernemers-image">';
							echo '<a href="#" title="' . $ondernemer->post_title . '" class="section-ondernemers-image-list-' . $ondernemer->ID . ' ' . ( $ondernemer->ID == $selected ? 'selected' : '' ) . '">';

							echo '<img src="' . get_the_post_thumbnail_url( $ondernemer->ID, 'medium' ) . '">';

							echo '</a>';
							echo '</div>';
						}

						?>

						<div class="col-sm-12">
							<div class="section-ondernemers-text-container">
								<ul class="section-ondernemers-text-list">
									<?php foreach ( $ondernemers as $ondernemer ) {
										echo '<li class="section-ondernemers-text-list-' . $ondernemer->ID . ' ' . ( $ondernemer->ID == $selected ? 'selected' : '' ) . '">';
										echo $ondernemer->post_content;
										echo get_field( 'naam_vertegenwoordiger', $ondernemer->ID ) ? '<p class="section-ondernemers-title">' . get_field( 'naam_vertegenwoordiger', $ondernemer->ID ) . '</p>' : '';
										echo get_field( 'functie_vertegenwoordiger', $ondernemer->ID ) ? '<p class="section-ondernemers-subtitle">' . get_field( 'functie_vertegenwoordiger', $ondernemer->ID ) . '</p>' : '';
										echo '</li>';
									} ?>
								</ul>
							</div>
						</div>

					<?php endif; ?>

					<a class="btn btn-text section-ondernemers-more"
					   href="<?= get_post_type_archive_link( 'ondernemers' ); ?>"><?= __( 'Alle ondernemers bekijken', TEXT_DOMAIN ); ?>
						<i
							class="fa fa-long-arrow-right"></i></a></a>
				</div>
			</div>
			<?php
			echo '</div>';

		elseif ( get_row_layout() == '4_blokken' ):
			?>

			<div class="container">
				<div class="row entry-content teaser-container">
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<?= get_sub_field( 'blok_1_afbeelding' ) ? '<a class="" href="' . get_sub_field( 'blok_1_knop_link' ) . '"><img
								src="'  . get_sub_field( 'blok_1_afbeelding' ) . '"></a>' : ''; ?>
						<?= get_sub_field( 'blok_1_titel' ) ? '<h3>' . get_sub_field( 'blok_1_titel' ) . '</h3>' : ''; ?>
						<?= get_sub_field( 'blok_1_tekst' ) ? '<p>' . get_sub_field( 'blok_1_tekst' ) . '</p>' : ''; ?>
						<?= get_sub_field( 'blok_1_knop_titel' ) ? '<a class="btn btn-text" href="' . get_sub_field( 'blok_1_knop_link' ) . '">' . get_sub_field( 'blok_1_knop_titel' ) . ' <i
								class="fa fa-long-arrow-right"></i></a>' : ''; ?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<?= get_sub_field( 'blok_2_afbeelding' ) ? '<a class="' . get_sub_field( 'blok_2_knop_link' ) . '" href=""><img
								src="'  . get_sub_field( 'blok_2_afbeelding' ) . '"></a>' : ''; ?>
						<?= get_sub_field( 'blok_2_titel' ) ? '<h3>' . get_sub_field( 'blok_2_titel' ) . '</h3>' : ''; ?>
						<?= get_sub_field( 'blok_2_tekst' ) ? '<p>' . get_sub_field( 'blok_2_tekst' ) . '</p>' : ''; ?>
						<?= get_sub_field( 'blok_2_knop_titel' ) ? '<a class="btn btn-text" href="' . get_sub_field( 'blok_2_knop_link' ) . '">' . get_sub_field( 'blok_2_knop_titel' ) . ' <i
								class="fa fa-long-arrow-right"></i></a>' : ''; ?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<?= get_sub_field( 'blok_3_afbeelding' ) ? '<a class="' . get_sub_field( 'blok_3_knop_link' ) . '" href=""><img
								src="'  . get_sub_field( 'blok_3_afbeelding' ) . '"></a>' : ''; ?>
						<?= get_sub_field( 'blok_3_titel' ) ? '<h3>' . get_sub_field( 'blok_3_titel' ) . '</h3>' : ''; ?>
						<?= get_sub_field( 'blok_3_tekst' ) ? '<p>' . get_sub_field( 'blok_3_tekst' ) . '</p>' : ''; ?>
						<?= get_sub_field( 'blok_3_knop_titel' ) ? '<a class="btn btn-text" href="' . get_sub_field( 'blok_3_knop_link' ) . '">' . get_sub_field( 'blok_3_knop_titel' ) . ' <i
								class="fa fa-long-arrow-right"></i></a>' : ''; ?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<?= get_sub_field( 'blok_4_afbeelding' ) ? '<a class="' . get_sub_field( 'blok_4_knop_link' ) . '" href=""><img
								src="'  . get_sub_field( 'blok_4_afbeelding' ) . '"></a>' : ''; ?>
						<?= get_sub_field( 'blok_4_titel' ) ? '<h3>' . get_sub_field( 'blok_4_titel' ) . '</h3>' : ''; ?>
						<?= get_sub_field( 'blok_4_tekst' ) ? '<p>' . get_sub_field( 'blok_4_tekst' ) . '</p>' : ''; ?>
						<?= get_sub_field( 'blok_4_knop_titel' ) ? '<a class="btn btn-text" href="' . get_sub_field( 'blok_4_knop_link' ) . '">' . get_sub_field( 'blok_4_knop_titel' ) . ' <i
								class="fa fa-long-arrow-right"></i></a>' : ''; ?>
						
					</div>
				</div>
			</div>

			<?php
		endif;

	endwhile;

else :

	// no layouts found

endif;