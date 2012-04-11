<?php

function get_API_data($artist, $title) {
	$raw = file_get_contents('http://ws.spotify.com/search/1/track.json?q='.urlencode($artist).'+'.urlencode($title));
	return json_decode($raw);
}

function format_secs($seconds) {
	$mins = floor($seconds/60);
	$secs = $seconds % 60;

	return sprintf('%d:%02d', $mins, $secs);
}