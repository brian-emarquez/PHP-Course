<?php 
//var_dump($_POST);
//var_dump($_GET);
//var_dump($_FILES);

$titulo = $_POST['titulo'];
$preview = $_POST['preview'];
$contenido = $_POST['contenido'];
$carpeta = time( );

$archivo = $_FILES['foto'];
$nombre_achivo = "../../extras/textos/blog/$carpeta/foto.jpg";

$tamaño = $archivo['size'];

$maximo = 2 * 1024 * 1024; //tamaño en MB


if( $tamaño > $maximo ){
    header("Location: ../index.php?cat=blog&error=Tamaño maximo de archivo superado");
    die ( );
}


var_dump($archivo);
$info = pathinfo( $archivo['name'], PATHINFO_EXTENSION);
$partes = explode('.', $archivo['name']);
$extencion = array_pop($partes);
var_dump($extencion);
$nombre_nuevo = time( ).'.'.$extencion;


//Archivos duplicados con el mismo nombre
$nombre_nuevo2 = 'foto';
$patron = $nombre_nuevo2.'*.'.$extencion;
$coincidencias = glob($patron);
$cantidad = count($coincidencias);
$nombre_upload = $nombre_nuevo2.$cantidad.'.'.$extencion;
var_dump($nombre_upload);
move_uploaded_file( $archivo['tmp_name'] ,$nombre_upload);


/*
mkdir( "../../extras/textos/blog/$carpeta" );

file_put_contents( "../../extras/textos/blog/$carpeta/titulo.txt", $titulo );
file_put_contents( "../../extras/textos/blog/$carpeta/preview.txt", $preview );
file_put_contents( "../../extras/textos/blog/$carpeta/contenido.txt", $contenido );

if ($archivo['size' > 0]){
    move_uploaded_file( $archivo['tmp_name'] , $nombre_achivo );
}


header("Location: ../index.php?cat=blog");
*/
?>