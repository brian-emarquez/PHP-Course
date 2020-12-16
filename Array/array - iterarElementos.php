<!-- ######################################################## -->
<!-- Array - Iterar Elementos  -->
<!-- ######################################################## -->

<?php

$tecnologias = [ "php", "mysql", "htmp", "css " ]; // ESTA MANERA DE CREAR UN ARRAY SOLO EXISTE EN PHP 7

$tecnologias[4] = 'linux'; // agregar un elemento.
array_push($tecnologias, 'unix', 'data', 'update', 'flow'); // agregar un elemento. en grupo

$tecnologias[] = 'javascript';
$tecnologias[] = 'bash';

//var_dump($tecnologias);
//echo $tecnologias[0].'<br />';
//echo $tecnologias[1].'<br />';
//echo $tecnologias[2].'<br />';

//Iteracion
for ($i = 0; $i<=9; $i++){
    echo $i.' ->'. $tecnologias [$i].'<br />';
}

?>
