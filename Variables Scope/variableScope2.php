<!-- Variables SCOPE-->
<?php

$edad = 22;

//variable global
function estudiante(){
    global $edad;
    $edad = 24;
    echo $edad;
}

estudiante();


?>