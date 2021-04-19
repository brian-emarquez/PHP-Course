<?php 
//aqui procesaria el usuario/clave.
//verificar si es correcto el login

//var_dump( $_SERVER );

$url_anterior = isset( $_SERVER['HTTP_REFERER'] ) ? 
					$_SERVER['HTTP_REFERER'].'&login=error':
					'../index.php&login=error';

header( "Location: $url_anterior" );
?>