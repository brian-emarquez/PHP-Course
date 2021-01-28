<!-- forms/contacto.php -->
<?php 

#echo '<pre>';
#print_r($_POST);
#echo '</pre>';

// el Eredoc no debe tener ningun espacio en balnco para evitar errores
$mensaje = <<<HTML

<div style="background: lightyellow; width: 80%; border: 1px solid #AAA; padding: 10px; font: 12px Verdana">
    <h1>Contancto desde la web</h1>
    <p>
    Nombre: $_POST[nombre]<br />
    Email: $_POST[correo]<br />
    Motivo: $_POST[motivo]<br />

    Mensaje:<br />
    $_POST[mensaje]
    </p>
</div>

HTML;

echo $mensaje;
//mail('contacto@misistio.com'.'contacto desde la web');

header ("location: ../gracias.php");
// negociacion entrer el client ey el servidor- HEADER
?>
