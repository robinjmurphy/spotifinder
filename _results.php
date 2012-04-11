<?php

require('inc.php');

$artist = $_POST['artist'];
$title = $_POST['title'];

if($artist||$title) {

$data = get_API_data($artist, $title);
$info = $data->info;
$tracks = $data->tracks;

if($tracks) {

?>
<ul id="tracks">
	<?php foreach ($tracks as $i=>$track) { $artists = $track->artists;	$album = $track->album;	?>
	<li data-uri="<?php echo $track->href; ?>">
		<span class="length"><?php echo format_secs($track->length); ?></span>
		<span class="title"><?php echo $track->name; ?></span>
		<span class="artist"><?php foreach ($artists as $j=>$artist) { echo $artist->name.' '; } ?></span>
		<span class="album"><?php echo $album->name; ?></span>
		<span class="uri"><pre><?php echo $track->href; ?></pre></span>
	</li>
	<?php } ?>
</ul>
<?php

} else {
	?>
	<p>Sorry, no tracks were found for <em><?php echo $artist?></em> - <em><?php echo $title?></em></p>
<?php 
	} 
}

?>
