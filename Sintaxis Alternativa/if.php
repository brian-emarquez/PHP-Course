<?php
$nivel = 'usuario' ; 
$nombre = 'pepe';

if( $nivel == 'administrador' ):
	echo "Hola administrador";
elseif( $nivel == 'redactor' || $nivel == 'editor' ):
	echo "Usted puede editar las publicaciones";
else:
	if( $nombre == 'jperez' ){
		//acciones
	}else{
		echo "Nivel $nivel desconocido";
	}
endif;
?>