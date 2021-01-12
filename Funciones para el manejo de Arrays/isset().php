<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - isset()-->
<!-- ############################################### -->

<?php

$colours =[
    'red' =>'rojo',
    'yelow'=>'amarillo',
    'blue'=>'azul',
    'green'=>'verde'
];

$colores =['rojo', 'amarillo', 'azul', 'verde',];
$que_color = "rojo";
$que_indice = "green";

$existe = in_array( $que_color, $colores);
$indice = isset($colours[$que_indice]);

if($indice == true)
{
    echo "El indice. $que_indice. existe y tiene el valor ".$colours[$que_indice];  
}else{
    echo "El indice.$que_indice. no existe en el array";
}

?>