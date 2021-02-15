<?php

// aqui procesaria la clave
// verifica si es correcto el login

//var_dump ($_SERVER);

$url_Anterior = isset($_SERVER['HTTP_REFERER'])?
                    $_SERVER['HTTP_REFERER'].'&login=error':
                    '../index.php';

header ( "Location: $url_Anterior" );
?>