<?php 
$carpeta = $_GET['carpeta'];
$ruta = "../../extras/textos/blog/$carpeta";
unlink( "$ruta/titulo.txt" );
unlink( "$ruta/preview.txt" );
unlink( "$ruta/contenido.txt" );
rmdir( $ruta );

header("Location: ../index.php?cat=blog");
?>