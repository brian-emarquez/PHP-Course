<!-- Mesclar bloques de codigo HTML Y PHP -->

<?php
$nombre = "Brian";
$apellidos = "Marquez";
$correo = "brian@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezclar</title>
</head>
<body>
    
<!-- muestra si el usuario esta logueado -->
<h2> nombre de Usuario: </h2>
<img src= "images/ACDC.jpg" alt="Avatar de nombre ususario" />
<h3> <?php echo $nombre.$apellidos; ?> </h3>

<h2> Correo: </h2>
<h3> <?php echo $correo; ?> </h3>

<hr />
<?php echo '<h2>'.$nombre.' '.$apellidos.'</h2>'; ?>



</body>
</html>