<?php 
function saludar( $usr, $correo, $mostrar_hr = false ){
	$mensaje = "Hola $usr, bienvenido al sistema, vas a acceder con tu correo $correo";
	echo $mensaje;
	
	if( $mostrar_hr == true ){
		echo '<hr />';
	}
}

$nombre = 'German';
$email = "german@email.com";
saludar( $nombre, $email, true );
saludar( 'Juan', 'juan@email.com' , true );
saludar( 'Pedro', 'pe@email.com' ); //esta función en particular, no manda el tercer argumento, por lo cual se asume false

?>