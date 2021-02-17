<?php
add_action( 'init', 'ifx_published_date' );
function ifx_published_date ($publicationdate) {

	if ( !empty( $publicationdate ) ) {
		// try and set date format correctly
		$publicationdate = substr($publicationdate, 0, 19);
		$date = date_create_from_format("Y-m-d H:i:s",$publicationdate);
		$date_format = date_format($date,"l jS F Y");
		$published_date = $date_format;
	} else {
		$published_date = "no date found";
	}
	return $published_date;
	
}