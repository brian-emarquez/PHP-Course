<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="03-Buscar.php">
    <div><input type="text" name="email" placeholder="Ingrese un mail" /><div>
    <input type="Submit" value="Verificar" />

    <?php
    if(isset($_GET['email'])){
        $e = $_GET['email'];
        echo "Valor Ingresado: $e<br />";
        $pos = strpos($e, 'com');

        if($pos === false){
            echo "No se encontro el arroba";
        }else{
            echo "El simbolo existe en el caracter $pos<br />";
            $valor = str_replace('@','<mark>@</mark>', $e);
            echo $valor;
        }
        

        // var_dump($pos);
    }
    ?>

</body>
</html>