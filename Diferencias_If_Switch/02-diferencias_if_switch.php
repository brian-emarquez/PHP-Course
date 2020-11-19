<?php 
$nivel = 'moderador';
$nombre = 'jperez';

var_dump($nivel);
var_dump($nombre);

echo '<h1>Con IF</h1>';
if( $nivel == 'administrador' ){
	echo "El administrador puede configurar la plataforma";
}else if( $nombre == 'jperez' ){
	echo "Este usuario es administrador temporal";
}else if( $nivel == 'redactor' || $nivel == 'editor' ){
	echo "El redactor puede publicar contenidos";
}else if( $nivel == 'usuario' ){
	echo "El usuario común solo puede comentar/likear";
}else{
	echo "El nivel $nivel no corresponde con el sistema";
}


echo '<h1>Con switch</h1>';
switch( $nivel ){
	case 'administrador':
		echo "El administrador puede configurar la plataforma";
	break;
	case 'editor': 
	case 'redactor':
		echo "El $nivel puede publicar contenidos";
	break;
	case 'usuario':
		echo "El usuario común solo puede comentar/likear";
	break;
	default:
		if( $nombre == 'jperez' ){
			echo "Admin temporal";
		}else{
			echo "El nivel $nivel no corresponde con el sistema";
		}
}

?>