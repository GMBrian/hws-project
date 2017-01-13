<div class="footer-social-share-container">
	<ul class="social-share">
		<li class="social-facebook"><a
				href="<?= 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode( home_url( add_query_arg( array(), $wp->request ) ) ); ?>"
				title="<?= __( 'Deel op Facebook', TEXT_DOMAIN ); ?>"><?= __( 'Deel op Facebook', TEXT_DOMAIN ); ?></a>
		</li>
		<li class="social-twitter"><a href="<?= 'https://twitter.com/home?status=' . urlencode( home_url( add_query_arg( array(), $wp->request ) ) ); ?>"
		                              title="<?= __( 'Deel op Twitter', TEXT_DOMAIN ); ?>"><?= __( 'Deel op Twitter', TEXT_DOMAIN ); ?></a>
		</li>
		<li class="social-linkedin"><a href="<?= 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode( home_url( add_query_arg( array(), $wp->request ) ) ); ?>"
		                               title="<?= __( 'Deel op LinkedIn', TEXT_DOMAIN ); ?>"><?= __( 'Deel op LinkedIn', TEXT_DOMAIN ); ?></a>
		</li>
		<?php /*
		<li class="social-instagram"><a href="<?= 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode( home_url( add_query_arg( array(), $wp->request ) ) ); ?>"
		                                title="<?= __( 'Deel op Instagram', TEXT_DOMAIN ); ?>"><?= __( 'Deel op Instagram', TEXT_DOMAIN ); ?></a>
		</li>
        */ ?>
	</ul>
</div>