<?php 
$num = 100;
var_dump($num);

while( $num < 15 ){ //Como el while primero evalúa la condición, si $num no es menor a 15, nunca se accede al bloque de código.
	echo "$num es menor que 15<br />";
	$num++; //para que no haga un loop infinito
}

echo '<hr />';
var_dump($num);
?>