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
			session_start();
			if(isset($_SESSION['user'])) {	
				echo '<ul style="float:right;list-style-type:none;"><label><a class="logout">';
				echo "Hallo, " . $_SESSION['user'] .'</a>';
				echo "<a class='logout' href='?logout'>Logout</a>";
				echo "</label></ul> </ul>";
			}else{
				echo'</ul>
					<div class="login">
					<form action="auth/login.php" method="post">
						<label>Anmelden</label>
						<label for="user">Username</label>
						<input type="text" name="user" id="user" required>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" required>
						<input type="submit" value="login">
					</form>
					<form action="auth/registrieren.php" >
			  			<input type="submit" value="Registrieren">
					</form>
					</div>';
		}
		if(isset($_GET['logout'])) {
			session_unset();
			header('Refresh: 1; URL=index.php');			
		}
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
