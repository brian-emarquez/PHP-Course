<?php 
$carpeta = $_GET['carpeta'];
$ruta = "../../extras/textos/blog/$carpeta";
unlink( "$ruta/titulo.txt" );
unlink( "$ruta/preview.txt" );
unlink( "$ruta/contenido.txt" );
unlink( "$ruta/foto.jpg" );
rmdir( $ruta );

header("Location: ../index.php?cat=blog");
?>