<?php 
/*var_dump($_POST);
var_dump($_GET);
var_dump($_FILES);*/

$titulo = $_POST['titulo'];
$preview = $_POST['preview'];
$contenido = $_POST['contenido'];
$carpeta = time( );


$archivo = $_FILES['foto'];
/*
mkdir( "../../extras/textos/blog/$carpeta" );

file_put_contents( "../../extras/textos/blog/$carpeta/titulo.txt", $titulo );
file_put_contents( "../../extras/textos/blog/$carpeta/preview.txt", $preview );
file_put_contents( "../../extras/textos/blog/$carpeta/contenido.txt", $contenido );


header("Location: ../index.php?cat=blog");*/

?>