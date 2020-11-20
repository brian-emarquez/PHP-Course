<?php 
$nivel = 'moderador';
var_dump($nivel);

echo '<h1>Con IF</h1>';
if( $nivel == 'administrador' ){
	echo "El administrador puede configurar la plataforma";
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
		echo "El nivel $nivel no corresponde con el sistema";
}

?>