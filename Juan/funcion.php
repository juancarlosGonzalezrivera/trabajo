<?php
	function sumar($a,$b){
		$sumar =$a+$b;
		return $sumar;
	}

    function multiplicar($a,$b){
    	$mult = $a * $b;
    	return $mult;
    }

    function restar($a,$b){
    	$restar=$a-$b;
    	return $restar;
    } 

	$a=5;
	$b=10;
	$res_sumar = sumar ($a,$b);
	echo $res_sumar.'<br/>';
	$res_mult = multiplicacion(10,50);
	echo "La multiplicacion es:".$res_mult";
	$res_restar = restar($a,$b);
	echo "La resta de $a - $b= ".$res_restar;


?>