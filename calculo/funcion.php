<?php
	$conv=$_POST["conv"];

	if ($isset($_POST["monto"])) {
		define("cantidad", $_POST["monto"]);
	}else {
		
	}
	echo "Son";
	if ($conv==1) {
		echo cantidad*28.70;
		echo "Cordoba";
	}else {
		echo cantidad/28.70;
		echo "Dolar";
	}

	?>