<?php
/*
 Autor: Juan Carlos
 Fecha: 01/09/2016
 Descripción: Calculo del área de un Rectángulo
*/
?>
<html><head><title> Cálculo del área de un Rectángulo </title>
</head>
<body bgcolor="lightblue"><font size="+1">
<h2> Este es el resultado de su pregunta: </h2>
<?php
 extract($_REQUEST);
 $area=$base*$altura;
 print "El área de su cuadrado es: $area";
?>