<?php
	$est =1;
	$prom=0;


	while ($est<=5) {
		$nota1=rand(0,5);
		$nota2=rand(0,5);
		$nota3=rand(0,5);
		$nota4=rand(0,5);

		echo "<br>";

		echo "Estas son la notas de los estudiantes $est<br>";
		echo "La primera nota es $nota1<br>";
		echo "La segunda nota es $nota2<br>";
		echo "La tercera nota es $nota3<br>";
		echo "La cuarta nota es $nota4<br>";

		$prom = ($nota1+$nota2+$nota3+$nota4)/4;

		if ($prom == 3.5) {
			echo "Usted a ganado $prom";
		}elseif ($prom<3.5)
		 {
			echo "usted a perdido $prom";
		}
		elseif ($prom<3.5)
		 {
			echo "usted a perdido $prom";
		}
		$est++;
	}

?>