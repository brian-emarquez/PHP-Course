<?php

$contenido = $_POST['contenido'];
$archivo = $_POST['quien'];

file_put_contents("../../extras/textos/institucional/$archivo.txt", $contenido);

header("Localtion: ../index.php");

?>