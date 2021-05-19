<!-- Conectarse con MySQL -->

<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conexion = new mysqli($server, $user, $pass);

if($conexion->connect_errno){
    die("Coneccion Fallida");
}else{
    die("Coneccion Satisfactoria");
}

?>