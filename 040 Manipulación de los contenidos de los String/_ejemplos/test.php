<?php 
$original = imagecreatefromjpeg( 'foto.jpg' );
$marca = imagecreatefrompng( 'watermark.png' );

imagecopymerge(
	$original,
	$marca,
	0,0, /*ubicación sobre el original que se superpone la marca de agua*/
	0,0, /* punto de origen para copiar la marca de agua */
	imagesx($marca), imagesy($marca), /* punto final donde se copia la marca de agua*/
	60 /* opacidad de la marca*/
);
header("Content-type: image/jpeg");
imagejpeg($original);
?>