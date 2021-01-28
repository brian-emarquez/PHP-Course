<!-- forms/contacto.php -->
<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';


// el Eredoc no debe tener ningun espacio en balnco para evitar errores

$categorias_seccionadas = 'No selecciono categorias';
if(isset ($_POST['categoria'])){
    $categorias_seccionadas = implode(', ', $_POST['categoria']);
}

/*
if (isset($_POST['categoria0'])){
    $categorias_seccionadas .= " ".$_POST['categoria0'];
}

if (isset($_POST['categoria1'])){
    $categorias_seccionadas .= " ". $_POST['categoria1'];
}

if (isset($_POST['categoria2'])){
    $categorias_seccionadas .= " ".$_POST['categoria2'];
}

if (isset($_POST['categoria3'])){
    $categorias_seccionadas .= " ". $_POST['categoria3'];
}

if (isset($_POST['categoria4'])){
    $categorias_seccionadas .= " ".$_POST['categoria4'];
}
*/
$nombre_ingresado = "No Definido";
if (!empty($_POST['nombre'])){
    $nombre_ingresado = $_POST['nombre'];
}


// el Eredoc no debe tener ningun espacio en balnco para evitar errores
$mensaje = <<<HTML

<div style="background: lightyellow; width: 80%; border: 1px solid #AAA; padding: 10px; font: 12px Verdana">
    <h1>Contancto desde la web</h1>
    <p>
    Nombre: $nombre_ingresado<br />
    Email: $_POST[correo]<br />
    Motivo: $_POST[motivo]<br />
    Categorias seleccionadas:: $categorias_seccionadas  <br />
    Mensaje:<br />
    $_POST[mensaje]
    </p>
</div>

HTML;

echo $mensaje;
//mail('contacto@misistio.com'.'contacto desde la web');

//header ("location: ../gracias.php");
// negociacion entrer el client ey el servidor- HEADER

?>
