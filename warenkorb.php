<!doctype html>
<hmtl>
	<head>
		<title>Online-Shop</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header><h1>Online-Shop</h1><header>
		<div class="aa">
			<hr>
		</div>
		<ul>
  			<li><a href="index.php">Waren</a></li>
  			<li><a href="warenkorb.php">Warenkorb</a></li>

		<?php
			include("auth/loginkasten.php");
			include("Warenkorb.php");
		?>
		<div id="seite">
				<div id="inhalt">
				</div>
			<footer id=fussbereich>&copy; 2015 Steffen & Persello</footer>
		</div>
	</body>
</html>
