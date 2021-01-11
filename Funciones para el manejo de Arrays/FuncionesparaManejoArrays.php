<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays -->
<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde'];

// se agregaron elelemtos al final del array
echo'<p> ARRAY PUSH </p>';
array_push($colores, "negro", "blanco");

echo'<hr />';
echo'<p> ARRAY UNSHIFT </p>';

// se agregaron elelemtos al principo del array
array_unshift($colores, 'naranja');

echo'<hr />';
echo'<p> ARRAY POP </p>';
// Eliminar un elelemto del array
array_pop($colores);
var_dump($colores);

echo'<hr />';
echo'<p> ARRAY SHIFT </p>';
// Eliminar un elelemto del array
array_shift($colores);
var_dump($colores);
?>