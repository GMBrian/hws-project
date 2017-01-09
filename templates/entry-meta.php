<div class="entry-meta">
	<span class="entry-meta-categories"><?= get_the_category_list( ', ' ); ?></span> |
	<span
		class="entry-meta-comments"><?php printf( __( 'Reacties: %1$s', get_comments_number(), 'comments title', 'het-werkstation' ), number_format_i18n( get_comments_number() ) ); ?></span>
	|
	<?php /*<time class="updated" datetime="<?= get_post_time( 'c', true ); ?>"><?= get_the_date(); ?></time>*/ ?>
	<span class="byline author vcard"><a
			href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"
			class="fn"><?= get_the_author(); ?></a></span>

	<hr class="dotted">

</div>