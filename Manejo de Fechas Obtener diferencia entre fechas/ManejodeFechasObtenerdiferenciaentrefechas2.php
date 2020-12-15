<!--###################################################################### -->
<!-- Manejo de Fechas: Obtener diferencia entre fechas 2 -->
<!-- PASCUAS -->
<!-- ##################################################################### -->

<?php
# Dia de las pascua

$anio = 2010;

$pascuas_epoch = easter_date($anio);
$pascuas_spa = date("d-m-Y", $pascuas_epoch );

$jueves_epoch = strtotime( '-3 day', $pascuas_epoch );
$viernes_epoch = strtotime( '-2 day', $pascuas_epoch ); 

$jueves_spa = date( "d-m-Y", $jueves_epoch );
$viernes_spa = date( "d-m-Y", $viernes_epoch );

//echo $pascuas_epoch;
echo "Domiengo de pascuas ($anio): $pascuas_spa";
echo '<hr />';
echo "Jueves de pascuas ($anio): $jueves_spa";
echo '<hr />';
echo "Viernes de pascuas ($anio): $viernes_spa";


?>