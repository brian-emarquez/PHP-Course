<?php 
$numero = "10";

var_dump($numero);


echo '<h1>Con IF</h1>';
if( $numero === 10 ){
	echo "El numero $numero es 10, numérico";
}else{
	echo "El numero $numero no es numérico (string)";
}


echo '<h1>Con switch</h1>';
switch( $numero ){
	case 10:
		echo "El numero $numero es 10, numérico";
	break;
	default:
		echo "El numero $numero no es numérico (string)";
}

?>