<?php
/**
 * Plugin Name: Video Don't Loop
 * Description: Removes the loop attribute from videos inside a core Cover block when the block has "noloop" CSS class in the Additional CSS class(es).
 * Version: 1.0.0
 * Author: Shape Your Bits
 */

add_filter( 'render_block_core/cover', function ( $block_content ) {
	if ( str_contains( $block_content, 'noloop' ) ) {
		$block_content = preg_replace(
			'/<video([^>]*)\s+loop(?:="[^"]*")?([^>]*)>/',
			'<video$1$2>',
			$block_content
		);
	}
	return $block_content;
} );
