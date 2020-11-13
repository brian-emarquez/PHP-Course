<!--  HTML.PHP -->

<?php

define ("WEBSITE", "BlogBit" );
$alumno1= "brian";
$alumno2 = "pedro";
$alumno3 = "juan";

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
    echo "<h1> Alumno del Curso WEBSITE </h1>";
    echo "<hr />";
    # Lista genrado , cortando con cadenas de texto y contatenamiento
    echo '<h1>Concatenamiemto </h1>';
    echo '<ul><li>'.$alumno1.'</li><li>'.$alumno2.'</li><li>'.$alumno3.'</li></ul>';
    
    print "<hr />";
    # Lista generada con comillas imples, sn concatenas
    echo '<h1> Lista generada con comillas imples, sin concatenas </h1>';
    echo '<ul><li>$alumno1</li><li>$alumno2</li><li>$alumno3</li></ul>';

    print "<hr />";
    # Lista generada con camillas dobles , sin concatenar
    echo '<h1> Lista generada con camillas dobles , sin concatenar </h1>';
    $Variables = "<ul><li>$alumno1</li><li>$alumno2</li><li>$alumno3</li></ul>";
    echo $Variables;

    ?>

</body>
</html>