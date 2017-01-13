<footer class="footer content-info">
	<div class="footer-follow">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8">
					<p class="follow-us"><?= __( 'Volg ons of deel deze pagina', TEXT_DOMAIN ); ?> <i class="fa fa-long-arrow-right"></i></p>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-4">
					<?php get_template_part('templates/footer-social-share'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container footer-info">
		<div class="row">
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		</div>
	</div>
	<div class="container footer-copyright">
		<p><?= __( '© Alle rechten voorbehouden', TEXT_DOMAIN ); ?> <span
				class="footer-divider">|</span> <?= __( 'Het Werkstation', TEXT_DOMAIN ); ?> <?= date( 'Y' ); ?>
			<span class="footer-divider">|</span> <a
				href="#"><?= __( 'Algemene Voorwaarden', TEXT_DOMAIN ); ?></a></p>
	</div>
</footer>
