<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<article <?php post_class(); ?>>
	<header class="post-banner inverse" <?= Extras\get_banner_image(); ?>>
		<div class="container title-container">
			<div class="col-lg-8 push-lg-2 col-md-12 push-md-0">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content-home"><?= get_field( 'banner_tekst' ); ?></div>
				<a class="btn title-cta"
				   href="<?= get_field( 'rondleiding', 'options' ); ?>"><?= __( 'Vrijblijvende rondleiding plannen', TEXT_DOMAIN ); ?>
					<i
						class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
	</header>

	<div class="main-sections">
		<?php get_template_part( 'templates/page-sections' ); ?>
	</div>

	<footer>
		<?php wp_link_pages( [
			'before' => '<nav class="page-nav"><p>' . __( 'Pagina\'s:', TEXT_DOMAIN ),
			'after'  => '</p></nav>'
		] ); ?>
	</footer>
</article>
