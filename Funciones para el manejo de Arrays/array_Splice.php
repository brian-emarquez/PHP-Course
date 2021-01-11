<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - Array Splice-->
<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde', 'negro', 'blanco', 'rosa'];

echo'<p> ARRAY SPLICE </p>';
array_splice($colores, 3, 0, 'cyan');
var_dump($colores);

?>