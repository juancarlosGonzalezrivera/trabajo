<?php
/*
//condicion
//genere una salida
//controle un ciclo
//ENCONTRAR EL MULTIPLO DE LOS NUMEROS 2 Y 3 EN UN RANGO DE 10*
1
2
3 ...10 (2 0 3)
*/

$i; $nume2y3=0; $num3=0;$num2=0;
while ($i <=10) {
	if (($i % 2==0) AND ($i % 3==0)) {
		echo "$i es MULTIPLO de 2 y 3.<br>";
		$nume2y3+=1;

	}elseif ($i%2==0) {
		echo "$i es MULTIPLO de 2.<br>";
		$num2+=1;
	}elseif ($i%3==0) {
		echo "$i es MULTIPLO de 3.<br>";
		$num3+=1;
	}elseif (condition) {
		echo "$i no es multiplos de 2 ni de 3.<br>";
	}
	$i+=1;
}
echo "_________________________________________<br>";
echo "$nume2y3 son multiplo de 2 y 3.<br>"; 
echo "num3 son multiplos de 3.<br>";
echo "num2 son multiplos de 2.<br>";
echo "Los restantes ".(10-$nume2y3-$num2-$num3)."numero son multiplos de 2 ni de 3";
?>