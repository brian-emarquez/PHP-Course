<?php 
$num = 100;
var_dump($num);

do{ //El do, primero hace y luego analiza... por lo cual, aunque $num no sea menor que 15, al menos una vez accedemos al bloque de código agrupado entre las llaves
	echo "$num es menor que 15<br />";
	$num++; //para que no haga un loop infinito
}while( $num < 15 );

echo '<hr />';
var_dump($num);
?>