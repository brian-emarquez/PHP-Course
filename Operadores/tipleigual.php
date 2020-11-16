<!-- TIPLE IGUAL -->

<?php

$numero = "5";
$rta3 = $numero === 5;
$rta2 = $numero == 5;
$rta1 = $numero = 5;

#echo 'con un solo ugual... guarda 5 dentro de $numero  adentro de $rta1';
var_dump($rta1);
echo "<hr />";
#echo 'Comparacion con dos igual... guarda true o false , segun sen el mismo valor o no';
var_dump($rta2); # no fierencia el tipo de dato
echo "<hr />";
#echo 'Comparacion con 3 iguales.. guarda true o false';
var_dump($rta3); # si deferencia el tipo de dato

?>