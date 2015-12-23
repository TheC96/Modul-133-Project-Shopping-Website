<?php
		session_start();
			//Wen man angemeldet ist
			if(isset($_SESSION['user'])) {	
				echo '<ul style="float:right;list-style-type:none;"><label><a class="logout">';
				echo "Hallo, " . $_SESSION['user'] .'</a>';
				echo "<a class='logout' href='?logout'>Logout</a>";
				echo "</label></ul> </ul>";
			}else{
				//Login formular wen man nicht angemeldet ist
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
?>
