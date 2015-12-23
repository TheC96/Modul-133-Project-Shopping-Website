<div class="warenkorb">
<?php
	
	echo "Warenkorb". '<br>';
	
	if(isset($_POST['name'])){
		$_SESSION['produkt'] = $_POST['name'];
		$_SESSION['anzahl'] = $_POST['anzahl'];
		$Preis = $_SESSION['anzahl'] * $_POST['preis'];

	$_SESSION['warenkorb'] = (isset($_SESSION['warenkorb']))? $_SESSION['warenkorb'] : array();
	$_SESSION['warenkorb'][$_POST['name']] = (isset($_SESSION['warenkorb'][$_POST['name']]))?$_SESSION['warenkorb'][$_POST['name']]: array(); 
		$_SESSION['warenkorb'][$_POST['name']][] = $_POST['name']. ": " .$_POST['anzahl']." stück". " für " .$Preis." CHF";
		
	}

	

	foreach ($_SESSION['warenkorb'] as $key => $produkte){	
//var_dump($key);	
			echo ('<br>'.$produkte[0]);
	}
	//[$_SESSION['produkt']]
	//
	//
	
?>
	<div class="bestellung">
		<form action="bestellung.php" method="post">
			<input type="submit" value="Bestellung abschicken">
		</form>
	</div>
</div>



















<?php
/*	
	echo "Warenkorb". '<br>';	
	if(isset($_POST['name'])){
		$_SESSION['produkt'] = $_POST['name'];
		$_SESSION['anzahl'] = $_POST['anzahl'];/*
		$_SESSION['waren'] = (isset($_SESSION['waren']))? $_SESSION['waren'] : array();
	$_SESSION['waren'][$_SESSION['produkt']] = (isset($_SESSION['waren'][$_SESSION['produkt']]))?$_SESSION['waren'][$_SESSION['produkt']]: array(); 
		$_SESSION['waren'][$_SESSION['produkt']][] = $_POST['name']. ": " .$_POST['anzahl'];
		
	}		
	if(($_POST['name']) == ('Ipad')){
		echo $_POST['name'].": ".$_POST['anzahl'];
		
}	
	if(($_POST['name']) == ('Coca Cola')){
		echo $_POST['name'].": ".$_POST['anzahl'];
	}
*/
?>
</div>
