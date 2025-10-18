<?php

function washinwar_custom_excerpt_length( $length ) {
	return 16;
}

add_filter( 'excerpt_length', 'washinwar_custom_excerpt_length', 999 );

function washinwar_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'washinwar_excerpt_more' );
