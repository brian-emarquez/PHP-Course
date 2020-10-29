<!-- Ejemplo con Arrays 3-->

<?php
// Ejercio con Array 3

$amigos = array('jose', 'maria', 'raul', 'sara', 'pedro', 'camila', 'david');

$amigos[5] = "brian"; 
$posicion = count($amigos) -2;
echo $amigos[$posicion];
echo "<br>";

// Ordenas lo elementos de manera alfavetico
//asort
//rsort

asort($amigos);
print_r($amigos);



?>