<!-- selector --> 


<?php 


$nivel = "redactor";


switch($nivel){

    case 'administrador': #acciones
        echo "Hola Amidn";
    echo "<hr />";

    case 'redactor': #acciones 
        echo "El redactor puede publicar";
    echo "<hr />";

    case 'usuario': // acciones
        echo "El Usuario Comun solo puede comentar/likear";
    echo "<hr />";




}


?>