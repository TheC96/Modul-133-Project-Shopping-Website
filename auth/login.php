<?php
	//Prüfte ob User existiert
	session_start();
	if(isset($_POST['user'])){
		session_unset();
		if(!isset($_SESSION['users']) ){
			$_SESSION['users'] = file("users.txt");
		}
		foreach($_SESSION['users'] as $user) {
			$u = split(":", $user);
			if($_POST['user'] == trim($u[0])){
				if($_POST['password'] == trim($u[1])) {
					$_SESSION['user'] = $u[0];				
					$message = 'Login erfolgreich...';
				}else{
					$message = 'Passwort falsch';				
				}				
				break;			
			}else {
				$message = 'Benutzer existiert nicht';			
			}	
		}	
	}
	//Funtion wen man sich Abmeldet
	if(isset($_GET['logout'])) {
		session_unset();
		echo "Sie wurden abgemeldet!<br>";
		header('Refresh: 60; URL=../index.php');			
	}
	//Funtion bei einer Erfolgreichen Anmelden
	if(isset($_SESSION['user'])) {	
		header('Refresh: 3; URL=../index.php');
		/*echo "Hallo " . $_SESSION['user'] . '<br>';
		echo "<a href='?logout'>Logout</a><br>";*/
	}
	//Nachricht wird Dargestellt
	if(isset($message)){
		echo $message;		
		header('Refresh: 3; URL=../index.php');		
	}
?>
