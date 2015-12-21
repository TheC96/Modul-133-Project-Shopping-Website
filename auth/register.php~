<?php
	/*if(isset($_POST['user'])){
		if($_POST['password'] == $_POST['password2']){
			$fp = fopen("users.txt", 'r');
			fwrite($fp , $_POST['user'] . ':' . $_POST['password'] . "\n");
			fclose($fp);
			echo 'Erfolgreich gespeichert!';	
			header('Refresh: 3; URL=loginform.php');	
		}else {
			echo 'Passworte nicht identisch';
			header('Refresh: 3; URL=registerform.php');	
		}
		
	}*/

	session_start();
	if(isset($_POST['user'])){
		$username = $_POST['user'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
	if(isset($_POST['password2'])){
		$passwordrepeat = $_POST['password2'];
	}
	if($password !== $passwordrepeat){
	}
	$accounts = file('users.txt');
	foreach($accounts as $account){
		$accdata = explode(':',$account);
		$accuser = $accdata[0];
		if($user == $accuser){
			header("Location: loginform.php");
			exit;
		}

	}
	file_put_contents('users.txt',$username . ':' . $password . "\n",FILE_APPEND);
	header("Location: loginform.php");
	exit;




?>
