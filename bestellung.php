<?php
	
	echo $_SESSION['warenkorb'][$_POST['name']][] = $_POST['name']. ": " .$_POST['anzahl']." stück". " für " .$Preis." CHF";
?>
