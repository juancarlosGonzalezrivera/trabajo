<?php
	function calcula_imc(){ 
if (document.form.peso.value.length == 0){ 
alert("El peso es obligatorio"); 
return 0; 
} 
if (document.form.altura.value.length == 0){ 
alert("La altura es obligatoria"); 
return 0; 
} 
var imc_c = document.getElementById("IMC"); 
var imc = form.peso.value/Math.pow(form.altura.value,2);  
imc = Math.round(imc*100)/100; 
imc_c.innerHTML= imc; 
document.getElementById("kilo").innerHTML=form.peso.value; 
document.getElementById("talla").innerHTML=form.altura.value; 
if (imc < 18.5){ 
document.getElementById("tipo").innerHTML='Peso insuficiente'; 
} 
if (imc > 18.5 && imc < 24.9){ 
document.getElementById("tipo").innerHTML='Normopeso'; 
} 
 
if (imc > 25 && imc < 26.9){ 
document.getElementById("tipo").innerHTML='Sobrepeso grado I'; 
} 
 
if (imc > 27 && imc < 29.9){ 
document.getElementById("tipo").innerHTML='Sobrepeso grado II (preobesidad)'; 
} 
 
if (imc > 30 && imc < 34.9){ 
document.getElementById("tipo").innerHTML='Obesidad de tipo I'; 
} 
 
if (imc > 35 && imc < 39.9){ 
document.getElementById("tipo").innerHTML='Obesidad de tipo II'; 
} 
 
if (imc > 40 && imc < 49.9){ 
document.getElementById("tipo").innerHTML='Obesidad de tipo III (mórbida)'; 
} 
 
if (imc > 50){ 
document.getElementById("tipo").innerHTML='Obesidad de tipo IV (extrema)'; 
} 
 
document.getElementById("contenedor").style.display='block'; 
} 
$(document).ready(function(){ 
$('.numericonly').keydown(function(e) { 
if ((e.keyCode < 45 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) && e.keyCode != 8 && e.keyCode != 9 && e.keyCode != 190 && e.keyCode != 110) 
e.preventDefault(); 
	}); 
}); 
?>