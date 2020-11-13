<!-- HERECOC -->
<!-- SEcuecia heredoc -->
<?php

$alumno1= "brian";
$alumno2 = "pedro";
$alumno3 = "juan";

// CAPTA cadenas completas
$lista = <<<HEREDOC
    <ul>
        <li>$alumno1, el el primer alumno </li>
        <li>$alumno2, el el segundo 'mejor' alumno </li>
        <li>$alumno3, es el "ultimo alumno </li>
    </ul>

HEREDOC;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    echo $lista;
?>

</body>
</html>