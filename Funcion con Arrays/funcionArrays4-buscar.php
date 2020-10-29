<!-- Funcion con Arrays 4 -->

<?php
// Funcion con Arrays 4

$amigos = array('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>', 'pedro<br>', 'camila<br>', 'brian', );


//Busca un elelento
$buscar = array_search('brian',$amigos); // apartir se elimina las pumera pociciones del array
print_r($buscar);


?>