<?php 
$numero = 10;

var_dump($numero);


echo '<h1>Con IF</h1>';
if( $numero > 5 && $numero < 100 ){
	echo "El numero $numero está dentro del rango 6-99 (inclusive)";
}else{
	echo "El numero $numero está por feura del rango 6-99";
}


echo '<h1>Con switch</h1>';
switch( $numero ){
	case 6:
	case 7:
	case 8: //debemos escribir cada case hasta el 99
		echo "El numero $numero está dentro del rango 6-99 (inclusive)";
	break;
	default:
		echo "El numero $numero está por feura del rango 6-99";
}

?>