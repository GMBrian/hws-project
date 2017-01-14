<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/header-archive' ); ?>

<div class="container row">
	<div class="col-md-9">
		<div class="search-container">

			<div class="row row-nogap">
				<div class="col-sm-12">
					<h3><?= __( '404 - Pagina niet gevonden', TEXT_DOMAIN ); ?></h3>
					<p><?= __( 'Sorry, maar de pagina die je probeerde te benaderen bestaat niet. Probeer te vinden wat je zoekt via de onderstaande zoekfunctie of gebruik het hoofdmenu.', TEXT_DOMAIN ); ?></p>
					<hr>
					<?php get_search_form(); ?>
				</div>
			</div>

		</div>

	</div>

	<aside class="sidebar col-md-3">

		<?php if ( Setup\display_sidebar() ) : ?>
			<?php include Wrapper\sidebar_path(); ?>
		<?php endif; ?>

	</aside>

</div>

