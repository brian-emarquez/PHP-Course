<?php

$contenido = $_POST['contenido'];
$archivo = $_POST['quien'];

file_put_contents(
    "../../extras/textos/institucional/$archivo.txt",
    $contenido
    /*FILE_APPEND /*AGREGA EL NUEvo contenido al final de archvo*/
);

header("Localtion: ../index.php");

?>