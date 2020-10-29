<!-- Funcion con Arrays 5 -->

<?php
// Funcion con Arrays 4

$amigos = array('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>', 'pedro<br>', 'camila<br>', 'brian', );


//Busca un elelento
$buscar = array_search('brian',$amigos); // apartir se elimina las pumera pociciones del array
print_r($buscar);

$revez = array_reverse($amigos);
print_r($revez);

?>