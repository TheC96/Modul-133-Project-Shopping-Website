<!doctype html>
<hmtl>
	<head>
	<title>Online-Shop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	</head>
	<header><h1>Online-Shop</h1><header>
<body>
	
<?php
	session_start();
	if(isset($_SESSION['user'])) {	
		echo '<div class="gl">
			<label>';
		echo "Hallo, " . $_SESSION['user'] . '<br>';
		echo "<a href='?logout'>Logout</a><br>";
		echo "</label></div>";
	}else{

	echo'
	<form action="auth/login.php" method="post">
		<div class="gl">
			<label>Anmelden</label>
		</div>
		<div class="dl">
				<label for="user">Username</label>
				<input type="text" name="user" id="user" required>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
				<input type="submit" value="login">
		</div>
	</form>
	<form action="auth/registrieren.php" >	
		<div class="el">
  			<input type="submit" value="Registrieren">
		</div>
	</form>
	<form>

		<div class="aa">
			<hr>
		</div>
		<br>
	</form>';
	
	}
	if(isset($_GET['logout'])) {
		session_unset();
		header('Refresh: 1; URL=index.php');			
	}

?>
</body>
<footer></footer>
</html>
