<?php 
$contenido = $_POST['contenido'];
$archivo = $_POST['quien'];

file_put_contents( 
	"../../extras/textos/institucional/$archivo.txt", 
	$contenido
	/* ,FILE_APPEND /*AGREGA EL NUEVO CONTENIDO AL FINAL DEL ARCHIVO, SINO REEMPLAZA*/
);

header( "Location: ../index.php?cat=estaticos" );
?>