<?php

$cadena ="Estamos Parendiendo desarrollo de
sitios Web con PHP y MYSQL, creando 
nuevos WebDevelopters";

$er1 = "/web/i"; # i par aque no sea sentisiteve

$rta = preg_match_all($er1, $cadena, $coincidencias);
var_dump($rta);

if($rta){
    echo "La Expresion regular, matchea";
    var_dump($coincidencias);
}else{
    echo "La Expresion regular, NO matchea";
}

var_dump($rta);

?>