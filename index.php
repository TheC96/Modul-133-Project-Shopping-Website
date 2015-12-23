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
			//Login kasten wirde geladen
			include("auth/loginkasten.php");			
		if(isset($_POST['anzahl'])) {
			//Warenkorb wird geladen wenn weren hinzugefügt wurden
			include("Warenkorb.php");			
		}
		?>
		<div id="seite">
			<div id="inhalt">
				<?php
					//Waren werden Dynamisch geladen
					include("waren.php");			
				?>
			</div>
			<footer id=fussbereich>&copy; 2015 Steffen & Persello</footer>
		</div>
	</body>
</html>
