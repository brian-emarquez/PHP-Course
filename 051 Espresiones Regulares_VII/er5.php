<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>New document</title>
</head>
<body>
	<form method="post" action="er5.php">
		<div>
			<textarea name="texto" rows="6" cols="80"></textarea>
		</div>
		<div>
			<input type="submit" value="Enviar" />
		</div>
	</form>
	<?php 
	if( isset($_POST['texto']) ){
		$texto = $_POST['texto'];
		$er = "/\b(mota|sexo|droga)\b/i";
		
		$rta = preg_match_all( $er, $texto, $c );
		var_dump($c);
	}
	?>
</body>
</html>