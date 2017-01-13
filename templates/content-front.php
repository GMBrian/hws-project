<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;

?>

<?php get_template_part( 'templates/navbar' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="post-banner inverse" <?= Extras\get_banner_image(); ?>>
			<div class="container title-container">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content-home"><?= get_field( 'banner_tekst' ); ?></div>
				<a class="btn title-cta" href="<?= get_field( 'rondleiding', 'options' ); ?>"><?= __( 'Vrijblijvende rondleiding plannen', TEXT_DOMAIN ); ?> <i
						class="fa fa-long-arrow-right"></i></a>
			</div>
		</header>

		<div class="main-sections">

			<?php get_template_part( 'templates/page-sections' ); ?>

		</div>

		<?php /*
		
		<div class="main">
			<div class="container">
				<div class="row entry-content teaser-container">
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<a class="" href="#"><img
								src="http://localhost/hetwerkstation/wp-content/uploads/2016/12/technology-792180_1920.jpg"></a>
						<h3>Kantoor</h3>
						<p>Kantoor units op maat. Kies zelf het aantal meters en de inrichting</p>
						<a class="btn btn-text" href="#">kantoorunit boeken <i
								class="fa fa-long-arrow-right"></i></a></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<a class="" href="#"><img
								src="http://localhost/hetwerkstation/wp-content/uploads/2016/12/technology-792180_1920.jpg"></a>
						<h3>Flex werkplek</h3>
						<p>Flexibel werken met een dagkaart, dagdeel, strippenkaart of full time</p>
						<a class="btn btn-text" href="#">flexwerkplek boeken <i
								class="fa fa-long-arrow-right"></i></a></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<a class="" href="#"><img
								src="http://localhost/hetwerkstation/wp-content/uploads/2016/12/technology-792180_1920.jpg"></a>
						<h3>Vergaderen</h3>
						<p>Vergaderen in een inspirerende locatie en omgeving in Heerhugowaard</p>
						<a class="btn btn-text" href="#">vergaderlocatie boeken <i
								class="fa fa-long-arrow-right"></i></a></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 teaser-home">
						<a class="" href="#"><img
								src="http://localhost/hetwerkstation/wp-content/uploads/2016/12/technology-792180_1920.jpg"></a>
						<h3>De restaurantie</h3>
						<p>Gezellig eten en drinken samen met andere ondernemers in ons smaakvolle café</p>
						<a class="btn btn-text" href="#">restaurantie bekijken <i
								class="fa fa-long-arrow-right"></i></a></a>
					</div>
				</div>
				<hr>
			</div>
			<div class="container">
				<div class="row entry-content usp-container">
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-desk.png'; ?>">
						<h4>Flexibele werkplekken</h4>
						<p>Van een flexplek tot een kantoorunit</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-time.png'; ?>">
						<h4>Start binnen 24 uur</h4>
						<p>Huur in 2 stappen een eigen werkplek</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-rails.png'; ?>">
						<h4>Samen verder groeien</h4>
						<p>Ontmoet inspirerende ondernemer</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 usp-home">
						<img class="usp-icon"
						     src="<?= get_stylesheet_directory_uri() . '/assets/images/ic-list.png'; ?>">
						<h4>Flexibel huren</h4>
						<p>Volledig naar wens van 1 uur tot 1 jaar</p>
					</div>
				</div>
				<hr>
			</div>
			<div class="container business-container">
				<div class="row entry-content business-container">
					<div class="col-sm-12 business-header">
						<h2><?= __( 'Worden dit jouw buren?', TEXT_DOMAIN ); ?></h2>
						<h4><?= __( 'Laat je inspireren door andere ondernemers', TEXT_DOMAIN ); ?></h4>
					</div>
				</div>
			</div>
		</div>
        */ ?>
		<footer>
			<?php wp_link_pages( [
				'before' => '<nav class="page-nav"><p>' . __( 'Pagina\'s:', TEXT_DOMAIN ),
				'after'  => '</p></nav>'
			] ); ?>
		</footer>
		<?php comments_template( '/templates/comments.php' ); ?>
	</article>
<?php endwhile; ?>
