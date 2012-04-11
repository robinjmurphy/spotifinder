<?php

function get_API_data($artist, $title) {
	$raw = file_get_contents('http://ws.spotify.com/search/1/track.json?q='.urlencode($artist).'+'.urlencode($title));
	return json_decode($raw);
}

function format_secs($seconds) {
	$formatted_string = floor($seconds/60) . ":" . $seconds % 60;
	return $formatted_string;
}