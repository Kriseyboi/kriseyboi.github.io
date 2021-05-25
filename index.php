	<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="skoleside.css">
	<!-- Link til hvor css filen ligger -->
<meta charset="utf-8">
<title>Kristian Sandvik skoleside</title>
	<link rel="icon" href="bilder/amalie.jpg" type="image/x-icon">
</head>

<body>
	<div class="header">
		<div class="topp">
		<div class="dropdown">
			<button class="dropbtn">Meny</button>
			<div class="dropdown-content">
				<a href="skoleside.html">Startsiden</a>
				<a href="#">Programmering</a>
				<a href="#">Medie</a>
				<a href="#">Teknologiforståelse</a>
				<a href="#">Engelsk</a>
				<a href="#">Matte</a>
				<a href="#">Naturfag</a>
				<a href="#">Reklame IM Amalie Skram</a>
				<a href="koronavlogg.html">Koronavlogg</a>
				<a href="lego_mindstorms.html">Lego Mindstorms</a>
				<a href="#">placeholder</a>
				<a href="#">placeholder</a>
				<a href="#">placeholder</a>
				<a href="#">placeholder</a>
				<a href="#">placeholder</a>
				<a href="https://www.youtube.com/channel/UCP3IXSUTwdYQe85I_r2hYsA?">Youtube kanal</a>
			</div>
		</div>
		</div>
	</div>
	<div class="midtdel"> <!-- Viser at denne delen skal være midtdellen av nettsiden -->
		<h1>Database</h1>
		<p>dette er en test for database</p>
		<p>Prøv databaseting her</p>
		<?php

//dette gjør slik at den inkluderer den spesifiserte filen.
 include 'database.php';
 ?>


<?php
 include 'Oversikt.php';
 ?>
	</div>
	<div class="bunn"> <!-- Blir basically bare brukt til copyright delen -->
		<p>©Kristian Sandvik 2021</p>
	</div>
</body>
</html>	