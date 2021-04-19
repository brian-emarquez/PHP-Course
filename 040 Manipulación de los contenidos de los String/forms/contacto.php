<?php 
/*
echo '<pre>';
print_r( $_POST );
echo '</pre>';


/*
echo $_POST['correo'];
*/

//$_GET['fecha'] = time( ); //ESTO NO EXISTE, NI GET NI POST SON DE ESCRITURA, SOLO PODEMOS LEERLOS

$categorias_seleccionadas = 'No seleccionó categorias';
if( isset(  $_POST['categoria']  ) ){
	$categorias_seleccionadas = implode( ', ', $_POST['categoria'] );
}
$nombre_ingresado = 'No definido';
if( ! empty($_POST['nombre']) ){
	$nombre_ingresado = $_POST['nombre'];
}

if( empty( $_POST['correo'] ) ){
	header( "Location: ../index.php?seccion=contacto&rta=error" );
	die( );
}



$mensaje = <<<HTML

<div style="background: lightyellow; width: 80%; border: 1px solid #AAA; padding: 10px; font: 12px Verdana">
	<h1>Contacto desde la web</h1>
	<p>
	Nombre: $nombre_ingresado<br />
	Email: $_POST[correo]<br />
	Motivo: $_POST[motivo]<br />
	Categorias seleccionadas: $categorias_seleccionadas<br /><br />
	Mensaje:<br />
	$_POST[mensaje]
	</p>
</div>

HTML;

//echo $mensaje;

//Esta linea debería estar descomentada para enviar el mail
//mail( 'contacto@misitio.com', 'Contacto desde la web', $mensaje );


//ob_start( );
header( "Location: ../index.php?seccion=contacto&rta=ok" );

?>