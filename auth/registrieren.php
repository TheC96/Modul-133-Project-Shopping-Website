<!doctype html>
<hmtl>
	<head>
		<title>Online-Shop</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<header><h1>Online-Shop</h1><header>
		<div class="aa">
			<hr>
		</div>
		<ul>
  			<li><a href="../index.php">Waren</a></li>
  			<li><a href="../warenkorb.php">Warenkorb</a></li>
		
		</ul>	
		<div id="seite">
			<div id="inhalt">

  			<form action="register.php" method="post">
  				<label for="user">Username</label>
				<input type="text" name="user" id="user" required>
  				<br>
			  	<label for="password">Password:</label>
 			 	<input type="password" name="password" id="password" required><br>
 			 	<label for="password2">Password Widerholen:</label>
 			 	<input type="password" name="password2" id="password2" required>
			  	<br>
 			 	<a href="loginform.php">Zur&uuml;ck zum Login</a><br>
 			 	<input type="submit" value="register">
 			</form>
			</div>
			<footer id=fussbereich>&copy; 2015 Steffen & Persello</footer>
		</div>
	</body>
</html>
