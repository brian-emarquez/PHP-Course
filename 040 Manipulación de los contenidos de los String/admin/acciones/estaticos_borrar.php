<?php 
$nombre = $_GET['archivo'];
unlink( "../../extras/textos/institucional/$nombre.txt" );
header("Location: ../index.php?cat=estaticos");
?>