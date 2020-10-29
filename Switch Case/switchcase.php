<?php

$curso = 'php';

switch ($curso) {
    case 'php':
        echo "Lunes y Martes";
        break;

    case 'java':
        echo "miercoles";
        break;

    case 'python':
        echo "jueves";
        break;
    
    default: /*si no existe ninguna de la conciones*/
        echo "No se encuntra en la opciones";# code...
        break;
}




?>