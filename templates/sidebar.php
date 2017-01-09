<?php
if ( is_singular( 'post' ) || is_single('post') ) {
	dynamic_sidebar( 'sidebar-post-single' );
} else {
	dynamic_sidebar( 'sidebar-primary' );
}
