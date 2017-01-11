<?php
// check if the flexible content field has rows of data
if ( have_rows( 'secties' ) ):

	// loop through the rows of data
	while ( have_rows( 'secties' ) ) : the_row();

		if ( get_row_layout() == 'afbeelding_tekst' ):

			echo '<div class="section full-width-container background-color-' . get_sub_field( 'achtegrondkleur' ) . '">';
			echo '<div class="container"><div class="row">';
			echo '<div class="col-md-6">';

			echo '<img src="' . get_sub_field( 'afbeelding' ) . '">';

			echo '</div>';
			echo '<div class="col-md-6">';

			echo get_sub_field( 'tekst' );

			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

		elseif ( get_row_layout() == 'tekst_afbeelding' ):

			get_sub_field( 'afbeelding' );

		endif;

	endwhile;

else :

	// no layouts found

endif;