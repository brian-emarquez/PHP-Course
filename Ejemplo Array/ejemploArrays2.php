<!-- Ejemplo con Arrays 2-->

<?php
// Ejercio con Array 2

$semana[0] = ('lunes<br>');
$semana[1] = ('Martes<br>');
$semana[2] = ('miercoles<br>');
$semana[3] = ('jueves');
$semana[4] = ('viernes<br>');
$semana[5] = ('sabado<br>');
$semana[6] = ('domiengo<br>');

echo 'cantidad de elemento :'.count($semana);
echo '<br>';

for ($i=0; $i<count($semana) ;$i++ ){
    //echo $semana[$i];
    if($semana[$i] == 'jueves'){
    echo "curso de php";
    }
}

?>