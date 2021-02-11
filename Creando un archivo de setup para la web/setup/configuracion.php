<?php 
//El ini_set modifica (setea) parámetros del php.ini.
//El display_errors en 0 apaga la muestra de errores, en 1 lo habilita
//En la línea 21, tenemos un error que se muestra o no, según este valor
ini_set('display_errors', 1 );
date_default_timezone_set( 'America/Los_Angeles' );

$nombre = 'German';
$apellido = 'Rodriguez';
$email = 'german@email.com';

$logueado = false;
?>