<!-- Funcion con Arrays 2 -->

<?php
// Funcion con Arrays

$amigos = array('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>', 'pedro<br>', 'camila<br>', 'brian<br>', );

//divide y eliminar el segundo array
// array_slice :  eminar la cantida de elemnos necesario en un arrayS
$funcion = array_slice($amigos, 4); // apartir se elimina las pumera pociciones del array
print_r($funcion);



?>