<?php

		$_SESSION['waren'] = file("waren.txt");


		$i = 0;
		$file=file("pfad.txt");
		foreach($_SESSION['waren'] as $user) {
			$u = split(":", $user);
			if(trim($u[0])){
				if(trim($u[1])) {					
					/*echo $u[0];
					echo "<br>";
					echo $u[1];				
					echo "<br>";*/
					$pfad = $file[$i];
					echo "<div class='img'>
						<img src='$pfad' alt='Trolltunga Norway' width='300' height='200'>
						<form action='index.php' method='post'>
							<div class='desc'>
							<label  for='name'  value='$u[0]'>$u[0]</label><br>
							<input type='hidden' id='name' name='name' value='$u[0]'>
							<label  for='preis'  value='$u[1]'>$u[1]</label><br>
							<input type='hidden' id='preis' name='preis' value='$u[1]'>
							<label for='anzahl'>Anzahl</label>
							<input type='number' name='anzahl' min='1' max='5' value='1' required>
							<input type='submit' value='In den Warenkorb'>
							</div>
						</form>
					</div>";
					$pfad = $file[++$i];

				}else{
					echo "fehler";	
					break;	
				}				
						
			}else {
				echo "fehler";
				break;				
			}	
		}
		session_unset();	
?>


