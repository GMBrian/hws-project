<header class="navbar navbar-default navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?/*= __('Toggle navigation', 'sage'); */?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>-->
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri() . '/assets/images/brand-het-werkstation.png'; ?>"></a>
		</div>

		<nav class="nav-main" role="navigation">
			<?php
			if ( has_nav_menu( 'primary_navigation' ) ) :
				wp_nav_menu( [
					'theme_location' => 'primary_navigation',
					'walker'         => new wp_bootstrap_navwalker(),
					'menu_class'     => 'nav navbar-nav'
				] );
			endif;
			?>
		</nav>
	</div>
</header>