<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="er2.php">
        <p> Registre su automovil ingresando su patente (AAA000 / AA000AA) </p>
        <input type="text" placeholder="Numero de patente" name="patente" autocomplete="off" />
    <input type="submit" value="enviar" />
    </form>
    <?php
    if(isset($_GET['patente'])){
        $p = $_GET['patente'];
        $er = "/...../";

        echo "Patente recibida: $p<br />";
        $rta = preg_match($er, $p, $xq);

        if($rta){
            echo "La patente $p coincide con la expresion regular $er<br />";
            echo "motivos: ";
            var_dump($xq);
        }else{
            echo "La patente $p NO coincide con el formato $er<br />";
        }
    }
    ?>

</body>
</html>