<?php 
$cadena = "Estamos aprendiendo desarrollo de Sitios WEB con PHP y MySQL en BloomIT, creando nuevos WebDevelopers";
$er1 = "/web/i";

$rta = preg_match_all($er1, $cadena, $coincidencias);
var_dump($rta);
if( $rta ){
	echo "La expresión regular, matchea";
	var_dump($coincidencias);
}else{
	echo "La expresión regular, NO matchea";
}
var_dump($rta);
?>