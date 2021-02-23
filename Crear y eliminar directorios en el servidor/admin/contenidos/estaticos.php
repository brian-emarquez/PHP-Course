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

<h2> Textos del estaticos </h2>

	<table border="1">
	
	<tr>
		<th> Archivo </th>
		<th> Ruta </th>
		<th> Tamaño </th>
		<th> Fecha creacion </th>
		<th> Acciones </th>
	</tr>
	<?php
	// Admin Info
	$archivos =	glob("../extras/textos/institucional/*.txt" );
	foreach($archivos as $ruta){

		$tamanio = filesize($ruta);
		$fecha = date ("d-m-Y H:i", filemtime($ruta));
		$info = pathinfo($ruta);
		$nombre = $info ['filename'];
		$ruta_real = $info ['dirname'];

		echo "<tr>";
		echo "<td>$nombre</td>";
		echo "<td>$ruta_real</td>";
		echo "<td>$tamanio</td>";
		echo "<td>$fecha</td>";
		echo "<td>";
		echo "<a href='index.php?cat=estaticos&cual=$nombre'>editar</a>";
		echo "</tr>";
		}
	?>
	
	</table>

	<h2>Manejo de textos</h2>
	<form method="post" action="acciones/editar_texto.php">
		<input type="text" <?php echo $solo_lectura; ?> name="quien" value="<?php echo $archivo; ?>" />
		<input type="submit" value="<?php echo $boton; ?>" />
		<div>
			<textarea rows="20" cols="80" name="contenido"><?php echo $contenido; ?></textarea>
		</div>
	</form>