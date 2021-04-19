<h2>Textos del blog</h2>

<table border="1">
	<tr>
		<th>Titulo</th>
		<th>Preview</th>
		<th>Carpeta</th>
		<th>Accion</th>
	</tr>
	<?php 
	$directorio = opendir( "../extras/textos/blog");
	while( $carpeta = readdir($directorio) ){
		if( $carpeta == '.' || $carpeta == '..' ) continue;
		$titulo = file_get_contents( "../extras/textos/blog/$carpeta/titulo.txt" );
		$preview = file_get_contents( "../extras/textos/blog/$carpeta/preview.txt" );
		echo '<tr>';
		echo '<td>'.$titulo.'</td>';
		echo '<td>'.$preview.'</td>';
		echo '<td>'.$carpeta.'</td>';
		echo '<td>';
		echo "<a href='acciones/blog_borrar.php?carpeta=$carpeta'>eliminar</a>";
		echo '</td>';
		echo '</tr>';
	}
	?>
</table>

<h2>Formulario</h2>

<form method="post" action="acciones/blog.php" enctype="multipart/form-data">
	<div><input type="text" name="titulo" /></div>
	<div><textarea name="preview" rows="5" cols="70"></textarea></div>
	<div><textarea name="contenido" rows="15" cols="70"></textarea></div>
	<div><input type="file" name="foto" /></div>
	<div><label><input type="checkbox" name="marca" value="1" /> Agregar marca de agua</label></div>
	<div><input type="submit" value="Enviar" /></div>
</form>







