<?php 

for( $i = 1; $i < 100; $i++ ){
	echo "<h1>Estoy en el numero $i</h1>";
	$esPar = $i % 2 == 0;
	
	if( $i % 5 == 0 ){
		continue; //esto corta la vuelta actual (todas las que sean múltiplo de 5) pero si quedan vueltas pendientes, las realiza
	}
	if( $i == 21 ){
		break; //cortar la vuelta actual (numero 21) y todas las demás
	}	
	
	if( $esPar ){
		echo "$i es múltiplo de 2";
	}else{
		echo "$i NO es múltiplo de 2";
	}
	

}

?>