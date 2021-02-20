<?php 
if( isset( $_GET['cual'] ) ){
	$archivo = $_GET['cual'];
	
	$contenido = file_get_contents("../extras/textos/institucional/$archivo.txt" );
	$solo_lectura = 'readonly';
	$boton = 'editar';
}else{
	$archivo = 'new';
	$contenido = '';
	$solo_lectura = '';
	$boton = 'crear';
}
?>
<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Panel de control</title>
</head>
<body>
	<h1>Panel de control</h2>
	
	<ul>
		<li><a href="index.php?cual=Terminos y condiciones">Terminos y condiciones</a></li>
		<li><a href="index.php?cual=Quienes somos">Quienes somos</a></li>
		<li><a href="index.php?cual=Hola mundo">Hola mundo</a></li>
	</ul>
	
	<h2>Manejo de textos</h2>
	<form method="post" action="acciones/editar_texto.php">
		<input type="text" <?php echo $solo_lectura; ?> name="quien" value="<?php echo $archivo; ?>" />
		<input type="submit" value="<?php echo $boton; ?>" />
		<div>
			<textarea rows="20" cols="80" name="contenido"><?php echo $contenido; ?></textarea>
		</div>

	</form>
</body>
</html>