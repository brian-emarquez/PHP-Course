<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - Sort()-->
<!-- Ordenas Arrays -->
<!-- ############################################### -->

<?php

$colours =[
    'red' =>'rojo',
    'yelow'=>'amarillo',
    'blue'=>'azul',
    'green'=>'verde'
];

$colores =['rojo', 'amarillo', 'azul', 'verde'];
$que_color = "rojo";
$que_indice = "purple";

var_dump( is_array( $colores ));

echo '<hr />';

$existe = in_array( $que_color, $colores);
$indice = isset($colours[$que_indice]);

if($indice == true)
{
    echo "El indice. $que_indice. existe y tiene el valor ".$colours[$que_indice];  
}else{
    echo "El indice.$que_indice. no existe en el array";
}
<!-- ############################################### -->
<!--  Funciones para el manejo de Arrays - Sort()-->
<!-- Ordenas Arrays -->
<!-- ############################################### -->

<?php

$colours =[
    'red' =>'rojo',
    'yelow'=>'amarillo',
    'blue'=>'azul',
    'green'=>'verde'
];

$colores =['rojo', 'amarillo', 'azul', 'verde'];
$que_color = "rojo";
$que_indice = "purple";

var_dump( is_array( $colores ));

echo '<hr />';

$existe = in_array( $que_color, $colores);
$indice = isset($colours[$que_indice]);

if($indice == true)
{
    echo "El indice. $que_indice. existe y tiene el valor ".$colours[$que_indice];  
}else{
    echo "El indice.$que_indice. no existe en el array";
}


echo '<hr />';

echo '<ul>';
//ordenar el array de manera alfavetica
sort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';

// ##########################################################################

echo '<hr />';

echo '<ul>';
//ordenar el array de manera alfavetica
sort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';
// ##########################################################################

echo '<hr />';

echo '<ul>';
//ordenar el array de manera alfavetica
sort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';

// ##########################################################################

echo '<hr />';

echo '<ul>';
//ordenar el array de manera alfavetica
sort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';


?>