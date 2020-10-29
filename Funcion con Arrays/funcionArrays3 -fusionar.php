<!-- Funcion con Arrays 3 -->

<?php
// Funcion con Arrays 3

$amigos = array('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>', 'pedro<br>', 'camila<br>', 'brian<br>', );
$compañeros = array('sergio<br>', 'hugo<br>', 'carla<br>', 'elias<br>');


//combina lo arrays
$funcion = array_merge($amigos, $compañeros); // apartir se elimina las pumera pociciones del array
print_r($funcion);



?>