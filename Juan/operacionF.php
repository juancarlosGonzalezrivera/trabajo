<?php
$a = $_REQUEST['valor1'];
$b = $_REQUEST['valor2'];

if	($_REQUEST['operador']=="suma" {
	$r_suma = sumar($a,$b);
	echo "La suma es: $r_suma";
}
else 
	if ($_REQUEST['operador']=="resta") {
		$r_resta = resta ($a,$b);
		echo "la resta es: $r_resta";
	}

function sumar($a,$b){
	$suma = $a+$b;
	return $suma;
}
function resta($a,$b){
	$resta =$a-$b;
	return $resta;
}

?>