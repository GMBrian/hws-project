<footer class="footer content-info">
	<div class="footer-follow">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<p class="follow-us"><?= __( 'Volg ons op Social Media', TEXT_DOMAIN ); ?> <i class="fa fa-long-arrow-right"></i></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<?php get_template_part('templates/footer-social-share'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container footer-info">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		</div>
	</div>
	<div class="container footer-copyright">
		<p><?= __( '© Alle rechten voorbehouden', TEXT_DOMAIN ); ?> <span
				class="footer-divider">|</span> <?= __( 'Het Werkstation', TEXT_DOMAIN ); ?> <?= date( 'Y' ); ?>
			<span class="footer-divider">|</span> <a
				href="<?=  get_field( 'algemene_voorwaarden', 'options' ); ?>"><?= __( 'Algemene Voorwaarden', TEXT_DOMAIN ); ?></a></p>
	</div>
</footer>
