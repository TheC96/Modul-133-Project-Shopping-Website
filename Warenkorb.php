<div class="warenkorb">
<?php
	
	echo "Warenkorb". '<br>';
	
	if(isset($_POST['produkt'])){
		/*$_SESSION['produkt'] = $_POST['name'];
		$_SESSION['anzahl'] = $_POST['anzahl'];
		echo "Produkt: " . $_SESSION['produkt'] . '<br>';
		echo "Anzahl: " . $_SESSION['anzahl']. '<br>';*/


		$_SESSION['waren'] = (isset($_SESSION['waren']))? $_SESSION['waren'] : array();
	$_SESSION['waren'][$_SESSION['produkt']] = (isset($_SESSION['waren'][$_SESSION['produkt']]))?$_SESSION['waren'][$_SESSION['produkt']]:array(); 
		$_SESSION['rechnung'][$_SESSION['name']][] .= $_POST['name']. $_POST['anzahl'];
		echo implode('<br>', $_SESSION['waren'][$_SESSION['produkt']]);
	}else if(isset($_SESSION['produkt'])) {
		echo implode('<br>', $_SESSION['waren'][$_SESSION['produkt']]);
	
	}else{
		echo "Produkt: " . (isset($_SESSION['produkt'])) . '<br>';
		echo "Anzahl: " . (isset($_SESSION['anzahl'])). '<br>';
	}
?>
</div>
