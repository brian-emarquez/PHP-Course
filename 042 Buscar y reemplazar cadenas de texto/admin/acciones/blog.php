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

$tamanio = $archivo['size'];

$maximo = 2 * 1024 * 1024; //Tamaño en MB

if( $tamanio > $maximo ){
	header("Location: ../index.php?cat=blog&error=Tamaño maximo de archivo superado");
	die( );
}

//Obtener la extensión del archivo según el PATHINFO 


mkdir( "../../extras/textos/blog/$carpeta" );

file_put_contents( "../../extras/textos/blog/$carpeta/titulo.txt", $titulo );
file_put_contents( "../../extras/textos/blog/$carpeta/preview.txt", $preview );
file_put_contents( "../../extras/textos/blog/$carpeta/contenido.txt", $contenido );


if( $archivo['size'] > 0 ){
	
	$info = pathinfo( $archivo['name'] , PATHINFO_EXTENSION);

	switch( $info ){
		case 'jpg': $original = imagecreatefromjpeg( $archivo['tmp_name'] ); break;
		case 'png': $original = imagecreatefrompng( $archivo['tmp_name'] ); break;
		case 'gif': $original = imagecreatefromgif( $archivo['tmp_name'] ); break;
	}

	$alto_o = imagesy( $original ); //alto del original 
	$ancho_o = imagesx( $original ); //ancho del original

	$ancho = 900;
	$alto = round( $ancho * $alto_o / $ancho_o ); //siempre tiene que ser proporicional a las medidas de $original
	$copia = imagecreatetruecolor( $ancho, $alto );

	imagesavealpha( $copia, true ); //que si conserve el canal alpha - transparencia
	imagealphablending( $copia, false ); //que no genere una superposicion solida - pierde transparencia
	
	imagecopyresampled( 
		$copia, /* recursos del GD library del lienzo vacío*/
		$original, /* recurso de la foto original */
		0,0, /* eje X/Y donde empezamos a pegar informacion en la copia - esquina superior-izquierda*/
		0,0, /* eje X/Y donde empezamos a copiar información del original - esquina superior-izquierda */
		$ancho, $alto, /* ancho y alto que se extiende en la copia, la información obtenida del original, partiendo desde el eje X/Y donde empezamos a pegar */
		$ancho_o, $alto_o
	);

	
	if( isset($_POST['marca'] ) ){
		$marca = imagecreatefrompng( '../recursos/watermark.png' );
		
		imagecopymerge( 
			$copia,
			$marca,
			$ancho - imagesx($marca),$alto-imagesy($marca),
			0,0,
			imagesx($marca),imagesy($marca),
			80
		);
	}


	//header( "Content-type: image/jpeg" );
	imagepng( $copia , $nombre_achivo , 9 ); //exporta la copia como PNG
	imagedestroy( $original );
	imagedestroy( $copia );
	
	//move_uploaded_file( $archivo['tmp_name'] , $nombre_achivo );

}

header("Location: ../index.php?cat=blog");

?>