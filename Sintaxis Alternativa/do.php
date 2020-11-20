<?php 
$variable = 50;

do{ //DO es la unica estructura que no acepta la sintaxis alternativa del end, porque debe finalizar con un while.
	echo "$variable es menor que 100<br />";
	$variable++;

}while( $variable < 100 );

?>