<?php

// Check if a JSON URL has been provided
$json_url = get_field('ifx_market_report_json_url','option');

if ($json_url) {
	$request = false;
	/*THE JSON CALL!*/
	$request = wp_remote_get( $json_url );

	if( is_wp_error( $request ) ) {
			return false; // Bail early
	}

	$body = wp_remote_retrieve_body( $request );
	$data = json_decode( $body );
	if( ! empty( $data ) ) {
			$ifx_json_date = $data->date;
			$ifx_json_text = $data->text;
			$ifx_json_text = wpautop($ifx_json_text);
	} else { }
}