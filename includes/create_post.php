<?php

$market_report_title = get_field('ifx_market_report_title','option');

// If there is a market report title & the JSON text has been received
if ($market_report_title && $ifx_json_text) {

	// Create the post title to check against
	$post_title_check = $market_report_title . ' ' . ifx_published_date($ifx_json_date);
	// Check the 'post' post type & find any post with the title above
	$post_checker = get_page_by_title($post_title_check, OBJECT, 'post');

	// If a post hasn't been found, create the post!
	if (!$post_checker) {
		// Create post object
		$ifx_market_report_post = array(
			//'post_title' => 'hello',
			'post_title'    => wp_strip_all_tags( $post_title_check ),
			'post_content'  => $ifx_json_text,
			'post_status'   => 'draft',
			//'post_author'   => 2,
			//'post_category' => array( 58 ),
			'post_name'     => $post_title_check . '-draft',
		);
		// Insert the post into the database
		wp_insert_post( $ifx_market_report_post );
	} else {} 

} else {}