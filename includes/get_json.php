<?php

// Check if a JSON URL has been provided
$json_url = get_field('ifx_market_report_json_url','option');

$request = false;
/*THE JSON CALL!*/
$request = wp_remote_get( $json_url );

if( is_wp_error( $request ) ) {
		return false; // Bail early
}

$body = wp_remote_retrieve_body( $request );
$data = json_decode( $body );
if( ! empty( $data ) ) {
		$json_date = $data->date;
		$json_text = $data->text;
		$json_text = wpautop($json_text);
} else { }