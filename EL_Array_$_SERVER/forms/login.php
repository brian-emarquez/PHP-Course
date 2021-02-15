<?php

// aqui procesaria la clave
// verifica si es correcto el login

var_dump ($_SERVER);

header ( "Location: ../index.php?login=error" );
?>