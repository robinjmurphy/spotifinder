<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Spotifinder</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	
	<div id="page-wrapper">
	
		<header>
			<h1>Spotifinder</h1>
			<p>Enter an artist and title to get started.</p>
		</header>
	
		<form action="index.php" method="post">
			<fieldset>
				<label for="artist">Artist</label>
				<input id="artist" name="artist" type="text" size="20" />
				<label for="title">Title</label>
				<input id="title" name="title" type="text" size="20" />
				<input type="submit" value="Spotifind!"/>
			</fieldset>
		</form>
	
		<section id="results">
			<?php include('_results.php'); ?>
			<!-- Results loaded here on form submission -->
		</section><!-- #results -->
	
	</div><!-- #page-wrapper -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>
