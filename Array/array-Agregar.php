<!-- ######################################################## -->
<!-- Array - Agregar  -->
<!-- ######################################################## -->

<?php

$nombre = 'Brian';
$anio = 2021;
//resto del programa
$nombre = 'Juan'; //reemplazar valores

$ficha = array ( $nombre, 39, true, 'Pegasus');

$cursos = array ( 'frontend', 'javascripts', 'backend'); //esta manera existe en todas las verisones

$tecnologias = [ "php", "mysql", "htmp", "css " ]; // 

$tecnologias[5] = 'linux'; // agregar un elemento.
array_push($tecnologias, 'unix', 'data', 'update', 'flow'); // agregar un elemento. en grupo


var_dump($cursos);
echo '<hr />';

echo '<pre>';
print_r($tecnologias);
echo '</pre>';


?>
