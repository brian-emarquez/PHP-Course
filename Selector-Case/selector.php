<!-- selector --> 


<?php 


$nivel = "usuario";


switch($nivel){

    case 'administrador': #acciones
        echo "Hola Amidn";

    case 'redactor': #acciones 
        echo "El redactor puede publicar";

    case 'usuario': // acciones
        echo "El Usuario Comun solo puede comentar/likear";



}


?>