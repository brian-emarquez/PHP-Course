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
//#############################################################################3
echo '<hr />';

$existe = in_array( $que_color, $colores);
$indice = isset($colours[$que_indice]);

if($indice == true)
{
    echo "El indice. $que_indice. existe y tiene el valor ".$colours[$que_indice];  
}else{
    echo "El indice.$que_indice. no existe en el array";
}

//#############################################################################3
echo '<hr />';
echo '<p> -> sort </p>';
echo '<ul>';
//ordenar el array de manera alfaveticxa
sort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';


//#############################################################################3
echo '<hr />';
echo '<p> -> Rsort </p>';
echo '<ul>';
//ordenar el array de manera alfaveticxa
rsort($colores);
foreach ($colores as $color) {
    # code...
    echo "<li> $color </li>";
}
echo '<ul>';

//#############################################################################3
echo '<hr />';
echo '<p> -> Ksort </p>';
echo '<ul>';

ksort($colours);
foreach ($colours as $ingles => $espaniol) {
    # code...
    echo "<li> $ingles  - $espaniol </li>";
}
echo '<ul>';

//#############################################################################3
echo '<hr />';
echo '<p> -> Krsort </p>';
echo '<ul>';

krsort($colours);
foreach ($colours as $ingles => $espaniol) {
    # code...
    echo "<li> $ingles  - $espaniol </li>";
}
echo '<ul>';

?>