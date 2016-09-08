<?php

	
//estructura estandar
	/*for ($i=1; $i <=10 ; $i++) { 
		echo "$i";
	}*/
//estructura condicion
	//declaracion de variable y contador
	echo "1. Estructura estandar";
	for ($i=1;; $i++) { 
		if ($i<10) {
			break;
		}
		echo "$i";
	}

	//estructura multiple
	//la varable contador fuera
	//contador esta dentro de la estructura
	//la condicion esta fuera de la estructura
	echo "2. la estructura por condicion";
	$i =1;
	for (;;) { 
		if ($i>10) {
			{
				break;
			}
			echo "$i";
		}
echo "<br>";
	}
?>