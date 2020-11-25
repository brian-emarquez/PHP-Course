<!-- Return -->

<?php 
function mostrar( $texto ){
	echo $texto;
}
function saludar( $usr, $correo, $mostrar_hr = false ){
	$mensaje = "Hola $usr, bienvenido al sistema, vas a acceder con tu correo $correo";
	
	if( $mostrar_hr == true ){
		$mensaje .= '<hr />';
	}

	return $mensaje;
}
################################################################

$nombre = 'Brian Marquez';
$email = "brian@gmail.com";
$rta = saludar( $nombre, $email, true );
echo  $rta;

echo saludar( 'Juan', 'juan@email.com' , true );
mostrar( saludar( 'Pedro', 'pe@email.com' ) ); 

?>