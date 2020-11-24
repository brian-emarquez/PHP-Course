<!-- Funciones 1 -->

<?php

$nombre = "Brian";
$email = "brian@mail.com";

function saludar( ){
    global $nombre; // esto sale de la funcion y busca esta variable en algun otro lado
    global $email;

    $mensaje = "Hola $nombre bienvenido al sistema,, vas acceder con tu correo $email";
    echo $mensaje;
}

saludar();
//echo $mensaje;

?>

