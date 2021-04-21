<?php
$cadena_original = " Primero de Enero     ";
echo '<h1> Cadena sin trimear </h1>';
var_dump($cadena_original);

$cadena = "<h1> Cadena pasada por TRIM() </h1>";
$cadena = trim ($cadena_original);
var_dump($cadena);

# Caracteres de la izquiera
$cadena = "<h1> Cadena pasada por LTRIM() </h1> ";
$cadena = ltrim ($cadena_original);
var_dump($cadena);

# Caracteres de la derecha
$cadena = "<h1> Cadena pasada por RTRIM() </h1> ";
$cadena = rtrim ($cadena_original);
var_dump($cadena);


?>

