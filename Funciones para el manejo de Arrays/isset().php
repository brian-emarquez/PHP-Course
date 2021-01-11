<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - isset()-->
<!-- ############################################### -->

<?php

$colores =['rojo', 'amarillo', 'azul', 'verde', 'negro', 'blanco', 'rosa'];
$que_color = "negro";

echo'<p> ARRAY ISSET </p>';
$existe = in_array( $que_color, $colores);

if($colores == true){
    echo "El color negro, existe en el array de colores";
}else{
    echo "El color negro, NO esiste en el array de colores";
}

?>