<!-- ######################################################## -->
<!-- Array 2  -->
<!-- ######################################################## -->

<?php

$nombre = 'Brian';
$anio = 2021;
//resto del programa
$nombre = 'Juan'; //reemplazar valores

$ficha = array ( $nombre, 39, true, 'Pegasus');

$cursos = array ( 'frontend', 'javascripts', 'backend'); //esta manera existe en todas las verisones

$tecnologias = [ "php", "mysql", "htmp", "css " ]; // 

echo $ficha[0];
echo '<hr />';
echo $cursos[2];
echo '<hr />';
echo $tecnologias[3];
echo '<hr />';
echo $ficha[3];
echo '<hr />';
var_dump($cursos); // muestra tipos de dato y largo  por cada item del array
echo '<hr />';

echo '<pre>';
print_r($tecnologias); // No muestra el tipo de dato ni el largo de cada item , solo se puede usar en array
echo '</pre>';


?>