<div class="warenkorb">
<?php
	
	echo "Warenkorb". '<br>';
	
	if(isset($_POST['name'])){
		$_SESSION['produkt'] = $_POST['name'];
		$_SESSION['anzahl'] = $_POST['anzahl'];

	$_SESSION['waren'] = (isset($_SESSION['waren']))? $_SESSION['waren'] : array();
	$_SESSION['waren'][$_SESSION['produkt']] = (isset($_SESSION['waren'][$_SESSION['produkt']]))?$_SESSION['waren'][$_SESSION['produkt']]: array(); 
		$_SESSION['waren'][$_SESSION['produkt']][] = $_POST['name']. ": " .$_POST['anzahl'];
		//echo implode('<br>', $_SESSION['waren'][$_SESSION['produkt']]);
	}else if(isset($_SESSION['produkt'])) {
		//echo implode('<br>', $_SESSION['waren'][$_SESSION['produkt']]);
	}
	foreach ($_SESSION['waren'] as $key => $produkte){
		//echo implode('<br>', $_SESSION['waren'][$_SESSION['produkt']]);
		echo ($produkte);
	}
?>
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
