<?php
	//Posts werden in variaben geschrieben
	$username = $_POST['user'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	//prüft ob User Existiert
	if (isset($username)){
		if ($password == $password2){	
			//Scheibt neues Konto in users.txt
			$fp = fopen("users.txt", "a"); 
			fputs($fp,$username.":".$password."\n"); 
			fclose($fp);
			echo 'Registrierung erfolgreich...';
			header('Refresh: 3; URL=loginform.php');
		}else {
			//Passwort ist falsch
			header('Refresh: 3; URL=registrieren.php');
			echo "passwort ist nicht Identisch!...";		
		}
	}



?>
