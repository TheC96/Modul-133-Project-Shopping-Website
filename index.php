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
			
		if(isset($_POST['anzahl'])) {
			include("Warenkorb.php");			
		}
		?>
		<div id="seite">
			<div id="inhalt">
			<div class="img">
				<img src="src/coca.jpg" alt="Trolltunga Norway" width="300" height="200">
				<form action="index.php" method="post">
					<div class="desc">
						<label  for="name"  value="Coca Cola">Coca Cola</label><br>
						<input type="hidden" id="name" name="name" value="Coca Cola">
						<label for="anzahl">Anzahl</label>
						<input type="number" name="anzahl" min="1" max="5" value="1" required>
						<input type="submit" value="In den Warenkorb">
					</div>
				</form>
			</div>

			<div class="img">
				<img src="src/apps.jpg" alt="Trolltunga Norway" width="300" height="200">
				<form action="index.php" method="post">
					<div class="desc">
						<label  for="name"  value="Ipad">Ipad</label><br>
						<input type="hidden" id="name" name="name" value="Ipad">
						<label for="anzahl">Anzahl</label>
						<input type="number" name="anzahl" min="1" max="5" value="1" required>
						<input type="submit" value="In den Warenkorb">
					</div>
				</form>
			</div>


			</div>
			<footer id=fussbereich>&copy; 2015 Steffen & Persello</footer>
		</div>
	</body>
</html>
