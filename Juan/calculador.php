<?php
 	$primero=$_POST["primero"];
 	$segundo=$_POST["segundo"];
 	$oper=$_POST["operador"];

 	if ($oper=='+') {
 		$resultado=($primero) + ($segundo);
 		echo "La suma es :$resultado";
 	}
 

?>