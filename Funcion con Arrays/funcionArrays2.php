<!-- Funcion con Arrays 2 -->

<?php
// Funcion con Arrays

$amigos = array('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>', 'pedro<br>', 'camila<br>', 'david<br>');

//dividir el array en 2 partes
// array_chunk : diveder los array en las cantidades que tu quiieras
$funcion = array_chunk($amigos, 4);
print_r($funcion);



?>