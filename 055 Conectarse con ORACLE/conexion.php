<?php

//*Conectar con OCI (el que se usó en el vídeo)*
$Oracle = oci_connect("briandb", "briandb", "localhost/XE");
if($Oracle ){
    echo 'Conexion S - Oracle | Integrated Cloud Applications and Platform Services';
}else{
    echo 'Conexion Fallida';
}

?>