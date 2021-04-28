<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>New document</title>
</head>
<body>
	<form method="post" action="er6.php" enctype="multipart/form-data">
		<div>
			<input type="text" name="titulo" />
		</div>
		<div>
			<input type="file" name="imagen" />
		</div>
		<div>
			<textarea name="texto" rows="6" cols="80"></textarea>
		</div>
		<div>
			<input type="submit" value="Enviar" />
		</div>
	</form>
	<?php 
	if( isset($_POST['texto']) ){
		$titulo = $_POST['titulo'];
		$filename = preg_replace( array("/\s/", "/\W/"), array( "_", "-" ), $titulo); 
		$filename = preg_replace("/-+/","-",$filename);
		$filename = preg_replace("/-$/","",$filename);
		
		$er2 = "/\b(https?:\/\/[\w\.\/]+)\b/";
		$texto = $_POST['texto'];
		$texto = preg_replace( $er2, "<a href='$1'>$1</a>", $texto);
		echo $titulo;
		echo '<br />';
		echo $filename;
		echo '<br />';
		echo $texto;
	}
	?>
</body>
</html>