<!-- Manejo de Fechas: Obtener diferencia entre fechas -->
<!-- EPOCH -->
<?php

$ahora = time( );
$limite = strtotime("+10 days", $ahora) ; # SE SUMAN 10 DIAS

$ahora_Spa = date("d-m-Y H:i:s", $ahora);
$limite_spa = date("d-m-Y H:i:s", $limite);

echo $ahora.' '.$ahora_Spa;
echo '<hr />';
echo $limite,' ',$limite_spa;

?>