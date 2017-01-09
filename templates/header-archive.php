<?php use Roots\Sage\Titles; ?>

<div class="container row">
	<div class="col-lg-9 col-md-12 archive-header">
		<h1>
			<?php if( is_archive() ) : ?>
				<?= Titles\title(); ?>
			<?php else : ?>
				<?= get_the_title( get_queried_object_id() ); ?>
			<?php endif; ?>
		</h1>
		<?php if( is_home() ) : ?>
			<p class="subtitle">
				<?= __( 'Artikelen over ondernemen anno 2017', TEXT_DOMAIN ); ?>
			</p>
		<?php endif; ?>
	</div>
	<div class="col-lg-9 col-md-0">
	</div>
</div>



