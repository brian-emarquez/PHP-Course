<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - Implode()-->

<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde'];
$colores_string = implode(' / ', $colores);
echo $colores_string;

$paises = "Mexico,Brasil,Argentina,Uruguay,chile,colombia,Ecuador";
$array_paises = explode(",", $paises);
sort($array_paises);
var_dump($array_paises);


?>