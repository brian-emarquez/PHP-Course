<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - array_in_array()-->
<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde', 'negro', 'blanco', 'rosa'];
$que_color = "negro";

// se agregaron elelemtos al final del array
echo'<p> ARRAY IN_ARRAY </p>';
$existe = in_array( $que_color, $colores);
#var_dump($existe);

if($colores == true){
    echo "El color negro, existe en el array de colores";
}else{
    echo "El color negro, NO esiste en el array de colores";
}

?>