<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays II-->
<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde'];

// se agregaron elelemtos al final del array
echo'<p> ARRAY PUSH </p>';
$agregar=array_push($colores, "negro", "blanco");
var_dump($colores);
var_dump($agregar);

echo'<hr />';
echo'<p> ARRAY UNSHIFT </p>';
var_dump($colores);

// se agregaron elelemtos al principo del array
array_unshift($colores, 'naranja');

echo'<hr />';
echo'<p> ARRAY POP </p>';
// Eliminar un elelemto del array
$eliminado = array_pop($colores);
var_dump($colores);
var_dump($eliminado);

echo'<hr />';
echo'<p> ARRAY SHIFT </p>';
// Eliminar un elelemto del array
array_shift($colores);
var_dump($colores);
?>


